<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index()
    {
        // Eager load the 'brand' relationship to avoid N+1 issues
        $phones = Phone::with('brand')->latest()->paginate(10);

        return response()->json($phones);
    }
}
