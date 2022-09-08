<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newbook;

class NewBooks extends Controller
{
    public function index()
    {
     return view('frontend.new_books');
    }
    public function store(Request $request){
        
        $newbook=new Newbook;
        $newbook->subjectname = $request['subjectname'];
        $newbook->writersname = $request['writersname'];
        $newbook->bookname = $request['bookname'];
        $newbook->semester = $request['semester'];
        $book=$newbook->save(); 
        return redirect('/new_books/view');
    }
    public function view(){
        $newbook= Newbook::all();
        $data= compact('newbook');
        return view('frontend.new_books-view')->with($data);
    }
    public function delete($id)
{
    $newbook= Newbook::find($id)->delete();
    return redirect()->back();
    
}
public function approve($id)
{
    $newbook= Newbook::find($id);
   $newbook->status='approve';
   $newbook->save();
    return redirect()->back();

}
    }