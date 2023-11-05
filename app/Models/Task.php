<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'task';
    public $timestamps = false;

    protected $fillable = [
        'task_name', 
        'task_description', 
        'task_status', 
        'task_priority', 
        'task_type', 
        'task_from_res', 
        'task_complain_no', 
        'task_assigned', 
        'duplicate_id', 
        'task_expire', 
        'is_active', 
        'created_by', 
        'created_at', 
        'updated_by', 
        'updated_at'
    ];
}
