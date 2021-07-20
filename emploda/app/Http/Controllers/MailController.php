<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;
use App\Mail\SendMail;


class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'mimes:docs,doc,pdf,jpg,jpge,png',
            'body'=> 'required',

        ]);
        $image = $request->file('file');
        $details = [
            'body' => $request->body,
            'file' => $image
        ];
        if ($request->department) {
            $users = User::where('department_id', $request->department)->get();
            foreach($users as $user) {
                \Mail::to($user->email)->send(new SendMail($details));
            }
        } elseif ($request->user) {
            $user = User::where('id', $request->person)->first();
            $userEmail = $user->email;
            \Mail::to($user->email)->send(new SendMail($details));

        } else {
            $user = User::get();
            foreach($users as $user) {
                \Mail::to($user->email)->send(new SendMail($details));
            }
        }
        return redirect()->back()->with('status', 'Email Sent!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
