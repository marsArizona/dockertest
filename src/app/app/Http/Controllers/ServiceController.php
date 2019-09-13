<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Example;

class ServiceController extends Controller
{

    public function index(){

        return Example::all();

    }
}
