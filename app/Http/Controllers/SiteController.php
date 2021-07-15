<?php

namespace App\Http\Controllers;

use App\Model\SiteConfig;
use Illuminate\Http\Request;


class SiteController extends Controller
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
    

        $SiteConfig = SiteConfig::find($id);
        $logo_name = $SiteConfig->logo;
        $f_icon_name = $SiteConfig->ficon_logo;


        if($request->has('logo'))
        {
          $file = $request->file('logo');
          $extention = $file->getClientOriginalExtension();
          $logo_name  = time().'.'.$extention;
          $file->move('uploads/siteConfig/', $logo_name);
        }
       
        $contact = SiteConfig::findOrFail($id);
        $contact->name = $request->input('name');
        if($request->has('ficon_logo'))
        {
          $file = $request->file('ficon_logo');
          $extention = $file->getClientOriginalExtension();
          $f_icon_name = time().'.'.$extention;
          $file->move('uploads/siteConfig/', $f_icon_name);
        }
 
        $SiteConfig->update([

            'name'          =>  $request->name,
            'title'         => $request->title,
            'email'         => $request->email,
            'mobile'        => $request->mobile,
            'address'       => $request->address,
            'logo'          => $logo_name,
            'ficon_logo'    => $f_icon_name,
        ]);
    



       /*  return $SiteConfig->refresh(); */

        return redirect('/site-config')->with('success', 'Site Configuration updated!');
    }


}
