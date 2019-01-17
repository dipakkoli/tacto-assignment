<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUs;

class ContactUsController
{
public function index(){
    return view('contact_us');
}


public function listing(){
    $contacts = ContactUs::all();
    return view('contact_us_listing',compact('contacts'));
}

public function store(Request $request){
    // dd(ContactUs::all(),$request->all());
    ContactUs::create($request->all());
    return back()->with('success','data submitted successfully');
}


}
