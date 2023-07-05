<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('index');
    }

    public function confirm(ContactRequest $request) {
        $contact = $request->only(['full_name','last_name', 'first_name', 'gender','email', 'postcode', 'address', 'building_name', 'opinion']);
        $str = 'postcode';
        $str = mb_convert_kana($str, "a");
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request) {
        $contact = $request->only(['full_name', 'last_name', 'first_name', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);
        Contact::create($contact);
        if($request->input('back') == 'back'){
            return redirect('index')->withInput();
        }
        return view('thanks');
    }

    public function admin(Request $request) {
        $contacts = Contact::Paginate(10);
        $keyword = $request->input('keyword');
        $query = Contact::query();
        if(!empty($keyword)) {
            $query->where('last_name', 'LIKE', "%{$keyword}%")
            ->orWhere('first_name', 'LIKE', "%{$keyword}%");
        }

        return view('admin', compact('contacts', 'keyword'));
    }

    public function destroy(Request $request){
        Contact::find($request->id)->delete();
        return redirect('/admin')->with('message', '削除しました');
    }

    public function search(Request $request)
    {
        $contacts = Contact::with('full_name')->CategorySearch($request->contact_id)->KeywordSearch($request->keyword)->get();
        $contacts = Contact::all();

        return view('admin', compact('contacts'));
    }
}
