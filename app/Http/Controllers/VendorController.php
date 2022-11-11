<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vender;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendor =  Vender::all();
        return view('Vendors.viewVendor',compact('vendor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        // $user =  User::find($id);
        // $users = $user->id;
        return view('Vendors.createVendor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vendor = new Vender();
        $vendor->User_id = Auth::user()->id;
        $vendor->Campany_Name = $request->input('Campany_Name');
        $vendor->Address = $request->input('Address');
        $vendor->GST_NO = $request->input('GST_NO');
        $vendor->Mobile = $request->input('Mobile');


        $vendor->save();
        return redirect('vendor');
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
        $vendor = Vender::find($id);
        return view('Vendors.editVender',compact('vendor'));
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
        $vendor =  Vender::find($id);
        // $products->Name = $request->input('Name');
        $vendor->Campany_Name = $request->input('Campany_Name');
        $vendor->Address = $request->input('Address');
        $vendor->GST_NO = $request->input('GST_NO');
        $vendor->Mobile = $request->input('Mobile');
        
        $vendor->save();
        return redirect('vendor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendor =  Vender::find($id);
        $vendor->delete();
        return redirect('vendor');
    }
}
