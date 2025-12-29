<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Email;


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

          $user = Email::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'number'  => $request->number,
            'subject' => $request->subject,
            'message' => $request->message,
          ]);
          
        $details = [
            'name'    => $request->name,
            'email'   => $request->email,
            'number'  => $request->number,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        try {
           $mail = Mail::send('mail.send_mail', ['data' => $details], function ($message) use ($details) {
            $message->to('pritam1234078@gmail.com')
                ->replyTo($details['email'], $details['name'])
                ->subject($details['subject']);
            });
            // dd($mail);
            return redirect()->back()->with('success', 'Message sent successfully!');
        }catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }
    
}
