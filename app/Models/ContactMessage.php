<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $table = 'contact_messages';
    
    protected $fillable = [
        'firstName', 'lastName', 'email', 'phone', 'subject', 'message'
    ];
}
