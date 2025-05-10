<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use App\Registration;
use Illuminate\Support\Facades\Auth;

class MemberregistrationController extends Controller
{
    function start(){
        return view('member_registration.index');
    }
    function member_details(){
        $user_details = Registration::get();
        return view('member_registration.member_details', compact('user_details'));
    }
    function member_registration_post(Request $request){
        $request->validate([
            'applicant_name' => 'required',
            'home_address' => 'required',
            'phone_number' => 'required',
            'gender' => 'required'
        ], [
            'applicant_name.required' => 'Applicant name should be filled in',
            'home_address.required' => 'Home Address should be filled in',
            'phone_number.required' => 'Phone number should be filled in',
            'gender.required' => 'Gender should be filled in'

        ]);
        
        $random_image_name = null;
        
        if($request->hasFile('applicant_image')){
            $temporary_image = $request->applicant_image->getClientOriginalName();
            $temporary_image_location  = $request->file('applicant_image');
            $random_image_name  = Str::random(2) . time() . "." . $request->applicant_image->getClientOriginalExtension();
            Image::make($temporary_image_location)->resize(600, 471)->save(base_path('public/images/applicant_image/') . $random_image_name);
            
        }
        

        



        Registration::insert([
            'user_id' => Auth::id(),
            'applicant_name' => $request->applicant_name,
            'home_address' => $request->home_address,
            'applicant_email' => $request->applicant_email,
            'phone_number' => $request->phone_number,
            'alternative_phone_number' => $request->alternative_phone_number,
            'gender' => $request->gender,
            'package_status' => $request->package_status,
            'current_weight' => $request->current_weight,
            'nid_number' => $request->nid_number,
            'rfid_number' => $request->rfid_number,
            'applicant_image' => $random_image_name,
            'created_at' => Carbon::now()
        ]);
        return back()->with('member_insert_status', 'Applicant name ' . $request->applicant_name . ' added successfully');
    }
}
