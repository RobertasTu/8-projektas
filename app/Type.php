<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;


class Type extends Model
{
    public function typeCompany() {
        return $this->belongsTo(Company::class, 'company_id', 'id' );
    }
}
