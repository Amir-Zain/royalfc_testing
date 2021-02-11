<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('frontend.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function store()
    // {
    //     $data = request()->validate([
    //         'email' => ['required|email'],
    //         'name' => 'required',
    //         'subject' => 'required',
    //         'message' => 'required'
    //     ]);
    //     // Mail::raw(request('message'), function ($message) {
    //     //     $message->to('amir@gmai.com')
    //     //         ->subject(request('subject'))
    //     //         ->from(request('email'));
    //     // });
    //     Mail::send('mail', $data, function ($message) {
    //         $message->to('tpamir71@gmail.com', 'Amir')->subject(request('subject'))->from(request('email'));
    //     });
    // }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Contact::create($data);
        //  Store data in database

        //  Send mail to admin
        Mail::send('email.contact', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        ), function ($message) use ($request) {
            $message->from($request->email);
            $message->to('tpamir71@gmail.com', 'Admin')->subject($request->get('subject'));
        });

        return back()->with('success', 'We have received your message and thank you for writing to us.');
    }
}
