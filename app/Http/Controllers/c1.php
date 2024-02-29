<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class c1 extends Controller
{
    public function getContact(){
        $contacts = DB::select('SELECT * FROM contacts');
        return view('readContact',[
            'contacts'=> $contacts
        ]);
        
    }

    public function insertContact(Request $request){
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'city' => 'required',
            'country' => 'required',
            'jobtitle' => 'required'
        ]);
    
        // Retrieve the input data from the request
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $city = $request->input('city');
        $country = $request->input('country');
        $jobtitle = $request->input('jobtitle');
    
        try {
            // Insert the data into the 'Module' table using parameter binding
            DB::insert('INSERT INTO contacts (firstname, lastname, email, city, country, jobtitle) VALUES (?, ?, ?, ?, ?, ?)', [$firstname, $lastname, $email, $city, $country, $jobtitle]);
            
            // Redirect the user to a different page upon successful insertion
            return redirect('/readContact');
        } catch (\Exception $e) {
            // Handle any database exceptions
            return back()->with('error', 'An error occurred while inserting data.');}
    }

    public function modifyContact($firstname){
        $contact = DB::select('SELECT * FROM contacts WHERE firstname = ?',[$firstname]);
        return view('modifierContact',[
            'contact' => $contact
        ]);
    }

    public function saveData(Request $request){
        // Validate the incoming request data
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'city' => 'required',
            'country' => 'required',
            'jobtitle' => 'required'
        ]);
    
        // Retrieve the input data from the request
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $city = $request->input('city');
        $country = $request->input('country');
        $jobtitle = $request->input('jobtitle');
    
        // Perform the update operation
        $m = DB::update('UPDATE contacts SET firstname=?,lastname=?,email=?,city=?,country=?,jobtitle=? WHERE firstname=?', [$firstname, $lastname, $email, $city,$country,$jobtitle,$firstname]);
        // Redirect to '/testDb'
        return redirect('/readContact');
    }

    public function deleteContact($firstname){
        $m = DB::delete('DELETE FROM contacts WHERE firstname=?',[$firstname]);
        return redirect('/readContact');
    }

    
}
