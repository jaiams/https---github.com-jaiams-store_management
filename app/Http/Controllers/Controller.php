<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\StoreStorenameController;
use App\Http\Controllers\StoreEmployeesController;

class Controller extends BaseController
{

    public function index(){
    return view('store.index');
    }
    public function emp_index(){
        return view('emp.index');
        }
}
