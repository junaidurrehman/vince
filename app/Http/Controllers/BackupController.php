<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class BackupController extends Controller {

    function index() {

        Artisan::call("db:backup");
        
        return view('success');
    }

}
