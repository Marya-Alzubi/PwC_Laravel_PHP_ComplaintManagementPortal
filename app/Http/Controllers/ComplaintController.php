<?php

namespace App\Http\Controllers;

use App\Complaint;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    // user and admin auth middlewares
    public function __construct(){
        $this->middleware('auth')->only('index','create', 'store' );
        $this->middleware('auth:admin')->only('readAllComplaints','edit', 'update' , 'delete');
    }
    // fetch all complaints to read in admin dashboard
    public function readAllComplaints()
    {
        $complaints = Complaint::orderByDesc('id')->get();
        return view("admin.read_all_complaints", compact('complaints'));
    }
    // show the complaint form to user with a status_store session which works with sweet alert 
    public function index()
    {
        return view("client.create_complaint")->with('status_store', 'Your complaint request has been sent successfully ');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    // the redirection after storing a new record into data base with a status_store session which works with sweet alert 
    public function create()
    {
//        $complaints = Complaint::all();
        return redirect(route('home'))->with('status_store', 'check your email to view your complaint request ');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    // store a new record into database  & sending an email to the user with his data 
    public function store(Request $request)
    {
        //request validation
        $request->validate([
            'generation' => 'Required',
            'serial_number' => 'Required|min:4',
            'problem_date' => 'Required',
            'errors' => 'Required',
            'device_type' => 'Required',
            'problem_cause' => 'Required',
        ]);
        // for multi select list 
        $input = $request->all();
        $input[ 'errors' ] = json_encode( $input[ 'errors' ] );
        // set the is_urgent field value
        if($request->is_urgent == null){
            $is_urgent = 'off';
             } else {
            $is_urgent = 'on';
             }
        // storing intodatabase
        Complaint::create([
            "user_id" =>auth()->id() ,
            "device_type" =>$request->device_type ,
            "generation" =>$request->generation ,
            "serial_number" =>$request->serial_number ,
            "problem_date" =>$request->problem_date ,
            "errors" => $input[ 'errors' ],
            "problem_cause" =>$request->problem_cause ,
            "is_urgent" => $is_urgent ,
        ]);
        // sending an email using Gmail (the configration in .env file)
        $user = User::where('id', Auth::user()->id)->first();
        $to_name = $user->name ;
        $to_email = $user->email ;
        $data = array('name'=>'PwC-Marya Alzubi', 'body' => " hello $to_name ,your complaint request has been sent to admin and he will take an action within 1 week.    your complaint request has the following information( device type: $request->device_type  , generation: $request->generation  , serial number:  $request->serial_number)  ");
        Mail::send('emails.email', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject('PwC ');
            $message->from('marya.testing@gmail.com','PwC Mail');
        });
        return redirect("complaints/create" );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Complaint  $complaint
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    // fetch the spacified complaint from database into a spacified page
    public function edit(Complaint $complaint)
    {
        return view('admin.update_complaint' , compact('complaint'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Complaint  $complaint
     * @return \Illuminate\Http\RedirectResponse
     */
    // update the specified complaint in the data base the send an email to the user with his new updates
    public function update(Request $request,  $id)
    {
        // updating the record
        db::table('complaints')->where('id', $id)->update([
            'status' => $request->status
        ]);
        // sending an email using Gmail (the configration in .env file)
        $user = User::where('id', Auth::user()->id)->first();
        $to_name = $user->name ;
        $to_email = $user->email ;
        $data = array('name'=>'PwC-Marya Alzubi', 'body' => " hello $to_name ,your complaint request has been updated to $request->status , thank you for choosing PwC Complaint Management Portal. ");
        Mail::send('emails.email', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject('PwC ');
            $message->from('marya.testing@gmail.com','PwC Updated Status Mail');
        });
        // return to the spacified redirect with a status_store session which works with sweet alert 
        return redirect(route('admin.all.complaints'))->with('status_store', 'tht updated status has been sent to user by email');
    }
}
