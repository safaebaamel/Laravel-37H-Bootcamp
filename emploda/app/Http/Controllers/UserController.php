<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::all();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users|string',
            'address' => 'required',
            'mobile_number' => 'required',
            'password' => 'required|min:8',
            'department_id' => 'required',
            'role_id' => 'required',
            'start_from' => 'required',
            'designation' => 'required',
        ]);


        $data = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->image->hashName();
            $request->image->move(public_path('profile',$image));
        } else {
            $image = 'avatar2.png';
        }
        $data['image'] = $image;
        $data['password'] = bcrypt($request->password);
        User::create($data);
        return redirect()->back()->with('status', 'User Created Successfully!');
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
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
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
        $user = User::find($id);
        $data = $request->all();
        $user->update($data);
        return redirect()->route('users.index')->with('status', 'Record updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return redirect()->route('users.index')->with('status', 'User Deleted Successfully!');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}
