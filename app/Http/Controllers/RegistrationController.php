<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Mail\ConfirmRegistration;
use Illuminate\Support\Facades\Mail;
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
        $registration = Registration::create($request->validated());
        Mail::to($registration->email)->send(new ConfirmRegistration($registration));
        $registration->confirmed = true;
        $registration->save();
        return redirect()->route('home')->with('success', 'Votre inscription a bien été prise en compte. Vous allez recevoir un email de confirmation.');
    }

}
