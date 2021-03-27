<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Employee extends Model
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
                    $consultant = InfoConsultant::where('id', $authUser['info_consultant_id'])->first();
                    $company = InfoCompany::where('consultant_id', $consultant->id)->pluck("id");
                    $builder->whereIn('company_id', $company);
                    break;
                case 'company':
                    $company = InfoCompany::where('id', $authUser['info_company_id'])->first();
                    $builder->where("company_id", $company->id);
                    break;
            }

            return $builder;
        });
    }

    public $appends = [
        "full_name",
    ];

    public function getFullNameAttribute() {
        return $this->name . " " . $this->surname;
    }

    public function diaseaseform() {
        return $this->hasOne(DiseaseForm::class,'id');
    }
}
