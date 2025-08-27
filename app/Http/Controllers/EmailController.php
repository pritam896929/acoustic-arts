<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendTestEmail(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'number'  => 'required|digits_between:10,15',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $details = [
            'name'    => $request->name,
            'email'   => $request->email,
            'number'  => $request->number,
            'subject' => $request->subject,
            'message' => $request->message,
        ];
        
        //   $assembaly_detailsData = view('frontend.contact', ['detailData' => $details]);
        $send = Mail::send('mail.send_mail', ['data' => $details], function ($message) use ($details) {
            $message->to('pritam1234078@gmail.com')
                ->replyTo($details['email'], $details['name'])
                ->subject($details['name']);
        });
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
    
}
