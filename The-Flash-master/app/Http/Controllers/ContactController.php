<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(Request $request) {
        $contact = \DB::connection()->getSchemaBuilder()->getColumnListing((new Contact)->getTable());
        $data = Contact::all();
        return view('admin-pages.contact.index', [
            'title' => 'Contact',
            'records'=> $data,
            'contact' => $contact,
        ]);
    }

    public function submit(Request $request) {
        $contact = new Contact();

        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->phone = $request->input('phone');
        $contact->content = $request->input('content');
        $contact->response = 0;

        $contact->save();

        $details = [
            'title' => 'Thank you',
            'body' => 'We received your contact. Thank your for that!'
        ];
       
        \Mail::to($request->input('email'))->send(new \App\Mail\SoccerVerseMail($details));

        $request->session()->flash('contact', 'OK');

        return back();
    }
}
