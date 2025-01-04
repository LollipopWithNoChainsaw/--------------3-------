<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\contactRequest;
use App\contact;

class contactController extends Controller
{
    public function submit(contactRequest $req){
        $contact = new contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->theme = $req->input('theme');
        $contact->message = $req->input('message');

        $contact->save();
        return redirect()->route('contact')->with('success', 'Обращение было отправлено!');
    }

    public function showUserMessages(){
        $contact = new contact();
        return view('userMessages', ['data' => $contact->all()]);
    }

    public function showOneMessage($id){
        $contact = new contact();
        return view('oneMessage', ['data' => $contact->find($id)]);
    }

    public function showUpdateForm($id){
        $contact = new contact();
        return view('updateForm', ['data' => $contact->find($id)]);
    }

    public function update(contactRequest $req, $id){
        $contact = contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->theme = $req->input('theme');
        $contact->message = $req->input('message');

        $contact->save();
        return redirect()->route('contact-usermessages', $id)->with('success', 'Изменения были сохранены!');
    }

    public function delete($id) {
        contact::find($id)->delete();
        return redirect()->route('contact-onemessage', $id)->with('success', 'Обращение было удалено!');
    }
}
