<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class InfoConsultant extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('roleBaseScope', function (Builder $builder) {
            $authUser = Auth::user();

            if (!$authUser) {
                return $builder;
            }

            switch ($authUser['role']) {
                case 'consultant':
                    $builder->where("id", $authUser['info_consultant_id']);
                    break;
                case 'company':
                    $company = InfoCompany::where("id", $authUser['info_company_id'])->first();
                    $builder->where("id", $company->consultant_id);
                    break;
            }

            return $builder;
        });
    }

    public function companies() {
        return $this->hasMany(InfoCompany::class, "consultant_id");
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
