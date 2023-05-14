<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TriageController extends Controller
{
    public function index(){
        return view('triage.index');
    }
}
