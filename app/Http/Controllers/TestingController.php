<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function show() {
        return ['Testing testing'];
    }

    public function another() {
        return ['another route'];
    }
}
