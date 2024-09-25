<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeadersModel extends Model
{
    use HasFactory;

    protected $table = 'headers';

    protected $fillable = [
        'slug',
        'title',
        'description',
        'page_ids'
    ];
}
