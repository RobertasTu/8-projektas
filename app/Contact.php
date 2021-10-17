<?php

namespace App;
use App\Company;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function contactCompany() {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }
}
