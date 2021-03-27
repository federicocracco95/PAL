<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class InfoCompany extends Model
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
                    $builder->where("consultant_id", $consultant->id);
                    break;
                case 'company':
                    $builder->where("id", $authUser['info_company_id']);
                    break;
            }

            return $builder;
        });
    }
}
