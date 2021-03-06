<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index',['users'=>User::withTrashed()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'email' => 'required|email',
            'contact' => 'required',
            'gender' => 'required',
            'role' => 'required'
        ]);
       
        $data = $request->except(['_token']);
        $data['password'] = Hash::make('password');
        $data['username'] = $data['firstname'][0].'.'.$data['lastname'];
        $user = User::create($data);  
        return redirect()->route('users.index')->with(['success' => 'User added']);

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
        
        return view('admin.users.edit',['user'=>User::findOrFail($id)]);

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
        $request->validate([
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'email' => 'required|email',
            'contact' => 'required',
            'gender' => 'required',
            'role' => 'required'
        ]);
        
      $user = user::findOrFail($id);
      $user->firstname = $request->input('firstname');
      $user->lastname = $request->input('lastname');
      $user->email = $request->input('email');
      $user->contact = $request->input('contact');
      $user->gender = $request->input('gender');
      $user->role = $request->input('role');
      $user->username = $request->input('lastname')[0].'.'.$request->input('firstname');
      $user->save();

        return redirect()->route('users.index')->with(['success' => 'User Updated']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = (int)$request->input('deleteUserid');
        $user= User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with(['success' => 'User deleted']);
    }


    public function restore($id) {
        $user = User::onlyTrashed()->where('id', $id)->first();
        $user->restore();
        return redirect()->back();
    }
}
