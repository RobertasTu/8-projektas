<?php

namespace App;
use App\Contact;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function companyContact() {
        return $this->belongsTo(Contact::class, 'contact_id', 'id' );
}
}
