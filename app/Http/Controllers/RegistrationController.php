<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegistrationRequest $request)
    {
        Registration::create($request->validated());
        return redirect()->route('home')->with('success', 'Votre inscription a bien été prise en compte.');
    }

}
