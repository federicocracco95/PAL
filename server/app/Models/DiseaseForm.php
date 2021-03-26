<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class DiseaseForm extends Model
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
                    $consultant = InfoConsultant::where("id", $authUser['info_consultant_id'])->first();
                    $builder->whereIn("company_id", $consultant->companies()->pluck("id"));
                    break;
                case 'company':
                    $builder->where("company_id", $authUser['info_company_id']);
                    break;

            }

            return $builder;
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    

    public $guarded = [];
}
