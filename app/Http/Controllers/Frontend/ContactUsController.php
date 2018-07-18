<?php

namespace App\Http\Controllers\Frontend;

use Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
// use App\Custom\Helper\Common;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendContactUsMail(Request $request)
    {
        $contact_details = array();
        $contact_details['first_name'] = $request->first_name;
        $contact_details['last_name'] = $request->last_name;
        $contact_details['email_address'] = $request->email_address;
        $contact_details['phone_number'] = $request->phone_number;
        $contact_details['city'] = $request->city;
        $contact_details['state'] = $request->state;
        $contact_details['zip'] = $request->zip;

        $subject = 'Message from ' . $contact_details['first_name'];
        $email_templates = 'emails.contact';
        $email_from = $contact_details['email_address'];
        $recipient = config('config-variables.email_recipients.contact_us');

        // Mail::to($recipient)
        //   ->send(new SendMail($contact_details, $subject, $email_templates, $email_from));
		
		Mail::send('emails.contact', $contact_details, function($message) use ($recipient, $subject){
                $message->to($recipient)
                		->subject($subject);
		});

        // Common::sendMail($contact_details, $recipient, 'Mehta | Support', 'emails.contact');
        
        return response()->json([
            'status' => 'suceess',
            'message' => 'Thank you for your message. We will aim to get back to you within the next 24 hours.'
        ]);
    }
}
