<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $messages = Contact::all();
        return view('backend.messages.message', compact('messages'));
    }

    public function destroy($id)
    {
        Contact::find($id)->delete();
        session()->flash('deleted', 'This Message Succesfully Delted');
        return redirect()->route('message.index');
    }
}
