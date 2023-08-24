<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store_storename extends Model
{
    use HasFactory;

    protected $table = 'store_storenames';
    protected $primarykey = 'id';
    protected $fillable = ['stores_name','stores_address','stores_contact','stores_email'];
}
