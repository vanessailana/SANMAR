<?php
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
class EmailController extends Controller {
    public function send(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');
        $attach = $request->file('file');
        Mail::send('emails.email', ['title' => $title, 'content' => $content], function ($message) use ($attach)
        {
            $message->from('klotzmanv@gmail.com', 'Christian Nwamba');
            $message->to('klotzmanv@gmail.com');
            $message->attach($attach);
            $message->subject("Hello from Scotch");
        });
        return response()->json(['message' => 'Request completed']);
    }
  
}