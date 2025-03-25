<?php

use App\Models\Registration;
use App\Mail\ConfirmRegistration;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('send-confirmation-mail', function () {
    $registrations = Registration::where('confirmed', false)->get();
    foreach ($registrations as $registration) {
        Mail::to($registration->email)->send(new ConfirmRegistration($registration));
        $registration->confirmed = true;
        $registration->save();
    }
    $this->comment('Confirmation emails sent to unconfirmed registrations');
})->purpose('Send confirmation email to unconfirmed registrations');