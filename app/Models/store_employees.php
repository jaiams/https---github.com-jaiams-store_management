<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store_employees extends Model
{
    use HasFactory;
    protected $table = 'store_employees';
    protected $primarykey = 'id';
    protected $fillable = ['emp_name','emp_position','emp_store','emp_address','emp_contact','emp_email'];
}
