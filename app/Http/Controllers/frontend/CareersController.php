<?php

namespace App\Http\Controllers\frontend;

use App\Models\Career;
use App\Mail\CareerMail;
use Barryvdh\DomPDF\Facade\PDF as PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class CareersController extends Controller
{
    public function submit(Request $request)
    {
        //dd($request);
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3|max:30',
            'phone' => 'required|string|digits:10',
            'email' => 'required|string|email:rfc,dns|min:5|max:40',
            'message' => 'required|string|min:5|max:250',
            'position' => 'required|string|min:5|max:40',
            'resume' => 'required|mimes:pdf|max:512',
        ]);

        if ($validator->fails()) {
            session()->flash('contact-from-error', true);
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $data =  (object) array();
        $data->name = $request->get('name');
        $data->email = $request->get('email');
        $data->phone = $request->get('phone');
        $data->message = $request->get('message');
        $data->position = $request->get('position');
        $data->resume = $request->file('resume');
        // dd($data);
        Mail::to(config('app.mail_to_address'))->send(new CareerMail($data));
        if (Mail::failures()) {
            return redirect()->back()->with([
                "message" => "Something went wrong. Please contact us via email or phone.",
                "alert-type" => "error"
            ]);
        } else {
            return redirect()->back()->with([
                "message" => "Message Sent Successfully",
                "alert-type" => "success"
            ]);
        }

        // $contact =  new Career;
        // $contact->name = $request->name;
        // $contact->email = $request->email;
        // $contact->phone = $request->phone;
        // $contact->message = $request->message;
        // $contact->ip_address = $_SERVER['REMOTE_ADDR'];
        // if ($contact->save()) {
        //     Mail::to(config('app.mail_to_address'))->send(new ContactMail($data));
        //     if (Mail::failures()) {
        //         return redirect()->back()->with([
        //             "message" => "Something went wrong. Please contact us via email or phone.",
        //             "alert-type" => "error"
        //         ]);
        //     } else {
        //         return redirect()->back()->with([
        //             "message" => "Message Sent Successfully",
        //             "alert-type" => "success"
        //         ]);
        //     }
        // }
    }
}
