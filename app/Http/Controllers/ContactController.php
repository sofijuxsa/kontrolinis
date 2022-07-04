<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data['categories'] = Categories::all();
        return view('contactform', $data);
    }

    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->post('name');
        $contact->surname = $request->post('surname');
        $contact->phone_number = $request->post('phone_number');
        $contact->email = $request->post('email');
        $contact->subject = $request->post('subject');
        $contact->message = $request->post('message');
        $contact->category_id = $request->post('category_id');
        $contact->save();

        return view('welcome');
    }

    public function allContacts(Contact $contact)
    {
        $data['contacts'] = Contact::all();
        return view('admin.contacts', $data);
    }

    public function delete(Request $request, Contact $contact)
    {
        $ids = $request->input('checkbox',[]);

        Contact::query()->whereIn('id', $ids)->delete();

        return view('welcome');
    }
}
