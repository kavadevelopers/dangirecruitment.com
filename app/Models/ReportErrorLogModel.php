<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportErrorLogModel extends Model
{
    use HasFactory;

    protected $table = 'report_error_logs';

    protected $fillable = [
        'type',
        'subtype',
        'description',
        'notes'
    ];
}
