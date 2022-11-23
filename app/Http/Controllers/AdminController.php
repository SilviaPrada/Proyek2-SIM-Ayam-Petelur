<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
 
class AdminController extends Controller
{
    
    public function index(){
        $admin = Admin::all();
        return view('admins.index', compact(['admin']));
    }

    public function create(){
        return view('admins.create');
    }

    public function store(Request $request){
        Admin::create($request->all());
        return redirect()->route('admins.index')->with('success', 'Admin Created Successfully!!');
    }

    public function edit($id){
        $admin = Admin::find($id);
        return view('admins.edit', compact(['admin']));
    }

    public function update(Request $request,$id){
        $admin = Admin::find($id);
        $admin->update($request->all());
        return redirect()->route('admins.index')->with('success', 'Admin Edited Successfully!!');
    }

    public function destroy($id){
        $admin = Admin::find($id);
        $admin->delete();
        return redirect()->route('admins.index')->with('success', 'Admin Deleted Successfully!!');
    }
}

