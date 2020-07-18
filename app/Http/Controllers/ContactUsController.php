<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
class ContactUSController extends Controller
{
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactUS()
   {
       return view('contact-US');
   }
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */

     public function contactUSPost(Request $request) {
    $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'message' => 'required' ]);
    ContactUS::create($request->all()); 
   
    Mail::send('email',
       array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'user_message' => $request->get('message')
       ), function($message)
   {
       $message->from('posg.itc@gmail.com');
       $message->to('aup84@hotmail.com', 'Admin')->subject('Cloudways Feedback');
   });
    return back()->with('success', 'Thanks for contacting us!'); 
   }


   public function contactSaveData(Request $request)
   {
       $this->validate($request, [
        'name' => 'required',
        'subject' => 'required',
        'email' => 'required|email',
        'message' => 'required'
        ]);
      ContactUS::create($request->all()); 

      Mail::send('emails.contactus',
       array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'subject' => $request->get('subject'),
           'user_message' => $request->get('message')
       ), function($message) use ($request) {
      $message->from('aup840@gmail.com');
      $message->to('aup84@hotmail.com', 'Admin')->subject($request->get('subject'));
   });
    return back()->with('success', 'Thanks for contacting us!'); 
   }
}