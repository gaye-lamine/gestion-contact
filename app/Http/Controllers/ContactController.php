<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.list', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'name' => "required|max:255",
            'email' => "required|max:255|email"
        ]);

        Contact::create($request->all());
        return redirect()->route('contacts.list')->with('success','Contact créé avec succés');
    }

    public function edit(Contact $contact)
    {
        return view('contacts.edit',compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate(
            [
                "name" => "required|max:255",
                "email" => "required|max:255|email"
            ]
            );

            $contact->update($request->all());
            return redirect()->route('contacts.list')->with('success',"Contact mis à jour avec succés");
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.list')->with('success',"Contact supprimé avec succés");
    }


}
