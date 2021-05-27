<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registrations;

class RegistrationsController extends Controller
{
  public function requestsform(Request $request) {

    $registrations = new Registrations();
     return view('/requests-form ', compact('registrations'));
    
 }
 public function register(Request $request ) {

  $registrations = new Registrations();
  $registrations->fullname = $request-> fullname;
  $registrations->email = $request->email;
  $registrations->contactnumber = $request->contactnumber;
  $registrations->birthdate = $request->birthdate;
  $registrations->religion = $request->religion;
  $registrations->bsdate = $request->bsdate;
  $registrations->bstime = $request->bstime;
  $registrations->address = $request->address;

  if ($registrations->save()) {
      return redirect('/thank-you');
  }
  return redirect('/thank-you');
}



public function requests(Request $request) {
        
  $registrations = Registrations::all();
  return view('/requests', compact('registrations'));

}

public function thankyou(Request $request) {

  return view('/thank-you');
}

}


