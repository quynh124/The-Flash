<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function index(Request $request) {
        $feedbacks = \DB::connection()->getSchemaBuilder()->getColumnListing((new Feedback)->getTable());
        $data = Feedback::all();
        return view('admin-pages.feedback.index', [
            'title' => 'Feedbacks',
            'records'=> $data,
            'feedbacks' => $feedbacks,
        ]);
    }

    public function submit(Request $request) {
        $feedback = new Feedback();

        $feedback->email = $request->input('email');
        $feedback->subject = $request->input('subject');
        $feedback->content = $request->input('content');
        $feedback->response = 0;

        $feedback->save();

        $details = [
            'title' => 'Thank you',
            'body' => 'We received your feedback. Thank your for that!'
        ];
       
        \Mail::to($request->input('email'))->send(new \App\Mail\SoccerVerseMail($details));

        $request->session()->flash('feedback', 'OK');

        return back();
    }
}
