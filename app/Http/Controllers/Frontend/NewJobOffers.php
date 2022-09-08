<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newjob;

class NewJobOffers extends Controller
{
    public function index()
    {
     return view('frontend.new_job_offers');
    }
    public function store(Request $request){
        
        $newjob=new Newjob;
        $newjob->companyname = $request['companyname'];
        $newjob->position = $request['position'];
        $newjob->requirments = $request['requirments'];
        $newjob->responsibilities = $request['responsibilities'];
        $newjob->experienceneeded = $request['experienceneeded'];
        $newjob->salaryrange = $request['salaryrange'];
        $newjob->career = $request['career'];
        $newjob->dropyourcv = $request['dropyourcv'];
        $job=$newjob->save(); 
        return redirect('/new_job_offers/view');
    }
    public function view(){
        $newjob= Newjob::all();
        $data= compact('newjob');
        return view('frontend.new_job-view')->with($data);
}
public function delete($id)
{
    $newjob= Newjob::find($id)->delete();
    return redirect()->back();
    
}
public function approve($id)
{
    $newjob= Newjob::find($id);
    $newjob->status='approve';
    $newjob->save();
    return redirect()->back();

}
}

