<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class novosItensController extends Controller
{
    public function index()
    {
       return view("welcome");
    }
}
