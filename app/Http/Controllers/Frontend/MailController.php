<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Throwable;

class MailController extends Controller
{
    public function contact()
    {
        return view('frontend.system.contact');
    }

    public function sendMail(Request $request)
    {
        //---------- Check Validate Data ----------//
        $validated = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:255',
            'message' => 'required'
        ]);
        if ($validated->fails()) {
            return response()->json([
                'msg' => $validated->errors()->first()
            ]);
        }
        //----------//
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];
        try {
            Mail::to('swanvn.jsc@gmail.com')->send(new ContactMail($details));

            return response()->json([
                'status' => 'success',
                'msg' => 'Mail Has Been Sent Successfully!'
            ]);
        } catch (Throwable $e) {

            return response()->json([
                'status' => 'danger',
                'msg' => 'Mail Has Been Sent Fail!'
            ]);
        }
    }
}
