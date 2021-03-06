<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function index()
    {
        return Contact::orderBy('created_at', 'DESC')->get();
    }


    //Create and Store New Contacts into the Database
    public function store(ContactRequest $request)
    {
        $contact = Contact::create($request->validated());

        return response()->json(['message' => 'Contact Added Successfully']);
    }

    //Search for contacts
    public function search(Request $request)
    {
        $contacts = Contact::where('first_name',$request->keywords)->orWhere('email', $request->keywords)->get();
        return response()->json($contacts);
    }
}
