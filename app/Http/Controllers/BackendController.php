<?php

namespace App\Http\Controllers;

use App\Model\SiteConfig;
use Illuminate\Http\Request;


class BackendController extends Controller
{
    public function index()
    {   

        return view('site-config', ['contact' => SiteConfig::first()]);
    }

    public function edit($id)
    {

        $contact = SiteConfig::find($id);
        
        return view('edit', compact('contact'));       
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'title'=>'required',
            'email'=>'required',
            'mobile'=>'required',
            'address'=>'required',
            'email'=>'required'
        ]);

        $contact = SiteConfig::find($id);
        $contact->name =  $request->get('name');
        $contact->title = $request->get('title');
        $contact->email = $request->get('email');
        $contact->mobile = $request->get('mobile');
        $contact->address = $request->get('address');
        $contact->save();

        return redirect('/site-config')->with('success', 'Site Configuration updated!');
    }


}
