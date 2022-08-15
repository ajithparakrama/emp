<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\roles;
use Illuminate\Http\Request;
use App\DataTables\userDataTable;
use Illuminate\Support\Facades\Hash;
use App\DataTables\inactiveuserDataTable;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(userDataTable $dataTable)
    {
        return $dataTable->render('users.index');
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function susspend(inactiveuserDataTable $dataTable)
    {
        return $dataTable->render('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $roles =  roles::where('active','=','1')->get();
        return view('users.craete',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate(['phone' => ['required', 'string', 'max:10'],
        'name' => ['required', 'string', 'max:255'],
        'username' => ['required', 'string', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed']]);

          User::create([
            'phone' => $request->phone,
            'name' => $request->name,
            'address' => $request->address,
            'role' => $request->role,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('user.index')->with('message','New User account created.');
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
    public function edit(User $user)
    {
        $roles =  roles::where('active','=','1')->get();
        return view('users.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
        $request->validate(['phone' => ['required', 'string', 'max:10'],
        'name' => ['required', 'string', 'max:255'],
        'username' => ['required', 'string', 'max:255', 'unique:users,username,'.$user->id],
    //    'password' => ['required', 'string', 'min:8', 'confirmed']
    ]);

          $user->update([
            'phone' => $request->phone,
            'name' => $request->name,
            'address' => $request->address,
            'role' => $request->role,
          'username' => $request->username,
      //      'password' => Hash::make($request->password),
        ]);

        return redirect()->route('user.index')->with('message','user account updated.');
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

    public function inactive(User $user){
        $user->update([
            'active'=>0
        ]);
        return redirect()->route('user.index')->with('message','user account deactivated.');
    }

    public function active(User $user){
        $user->update([
            'active'=>1
        ]);
        return redirect()->route('user.susspend')->with('message','user account deactivated.');
    }

}
