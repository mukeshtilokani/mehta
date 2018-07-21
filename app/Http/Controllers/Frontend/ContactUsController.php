<?php

namespace App\Http\Controllers\Frontend;

use Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    /**
     * Send contact us email
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
        $contact_details['message_content'] = $request->message;

        $subject = 'Message from ' . $contact_details['first_name'];
        $email_templates = 'emails.contact';
        $email_from = $contact_details['email_address'];
        $recipient = config('config-variables.email_recipients.contact_us');
		
		Mail::send('emails.contact', $contact_details, function($message) use ($recipient, $subject){
                $message->to($recipient)
                		->subject($subject);
		});
        
        return response()->json([
            'status' => 'suceess',
            'message' => 'Thank you for your message. We will aim to get back to you within the next 24 hours.'
        ]);
    }
}
