<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BiodataController extends Controller
{
    /**
     * Display the biodata page.
     */
    public function index(): View
    {
        return view('about');
    }
}
