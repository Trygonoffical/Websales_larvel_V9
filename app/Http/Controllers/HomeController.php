<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


use Illuminate\Http\Request;

class HomeController extends Controller
{

        public function __construct(){
            $this->middleware('auth');

        }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (Auth::user()->role == 'admin'){
        return view('sales.create');
        }else{
            return redirect('/');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createuser(Request $request)
    {
        //
        if (auth::user()->role == 'admin'){
        $usr = new User();
        $usr->name = $request->input('name');
        $usr->email = $request->input('email');
        $usr->role = 'salesman';
        // $p1 = $request->input('password_confirmation');
        $usr->password = Hash::make( $request->input('password'));
        
        $usr->save();
        return redirect('/info');
    }
    return redirect('/');
    

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
        $user = User::find($id);



        return view('sales.update', compact('user'));
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
        $user =  User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make( $request->input('password'));
        $user->save();

      return redirect('info');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usr =  User::find($id);
        $usr->delete();
        return redirect('/info');

    }
}
