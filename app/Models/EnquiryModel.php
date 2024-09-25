<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnquiryModel extends Model
{
    use HasFactory;

    protected $table = 'reports_enquiries';

    protected $fillable = [
        'name',
        'email',
        'message',
        'phone',
        'company',
    ];
}
