<?php namespace App\Http\Controllers;

use App\AddressBook;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Request;

class AddressBookController extends Controller {

	public function store()
        {
            AddressBook::create(Request::all());
            return redirect('/');
        }
        public function edit($id)
        {
            $record = AddressBook::find($id);
            return view('edit', compact('record'));
        }
        public function update_person($id)
        {
            
            $input = Request::all();
            $record = AddressBook::findOrFail($id);
            $input2 = [
                'name' => $input['name'],
                'address' => $input['address'],
                'mail' => $input['mail'],
                'appointment' => $input['appointment'],
                'phone' => $input['phone'],
                
            ];
            $record->update($request->all());
            
            return redirect('/');
        }
        
        public function del($id)
        {
            AddressBook::destroy($id);
            return redirect('/');
        }
}
