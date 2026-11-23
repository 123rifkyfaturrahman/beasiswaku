<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactReport extends Model
{
   class ContactReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_name',
        'sender_email',
        'subject',
        'message',
        'is_resolved',
    ];
} //
}
