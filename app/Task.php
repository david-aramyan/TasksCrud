<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name',
        'description',
        'created_by',
        'assigned_to',
        'deadline',
        'status_id',
    ];
}
