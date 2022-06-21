<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
// we write these two labs 
use App\Issue;
use App\Mail\IssueRequsetSubmited;
//
use App\User;
use Auth;
class IssuesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except (['test']);
    }

    public function test(){

        return "this is a test";
    }

    public function store(Request $request){
  
        $issue= new Issue();
        $issue->user_id=Auth::user()->id;
        //or $issue->id=$request->id;
        $issue->name=$request->name;
        $issue->email=$request->email;
        $issue->phone=$request->phone;
        $issue->msg=$request->message;
        $issue->attechement=null;
        $issue->building_number=$request->building_number;
        $issue->apartment_number=$request->apartment_number;
        $issue->save();

        //to send mail to user after finish saving data
        Mail::to($issue->email)->send(new IssueRequsetSubmited($issue));
        
        return "Record saved Succufully";
    }

    //function to show list of issues
    public function list(){
        $data['users']=user::all();
        return view('issues.list',$data);
    }

    public function search(){
        $data['issues']=user::where();
        return view('issues.search',$data);
    }
}
