<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'name' => 'Nico',
            'job_title' => 'Full-stack Software Developer',
            'location' => 'Surabaya, Indonesia',
        ]);
    }
}
