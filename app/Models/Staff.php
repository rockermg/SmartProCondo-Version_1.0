<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staff';
    public $timestamps = false;

    protected $fillable = [
        'staff_id','name','contact_no','email','department_id','department','joined_date','job_title','user_id','is_active','created_by','created_at','updated_by','updated_at'
    ];
}
