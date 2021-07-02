<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Admin;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::select('id', 'name', 'email')->paginate(10);
        return view('backend.admin.index', compact('admins'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = Str::lower(trim($request->email));
        $admin->password = bcrypt($request->password);
        $admin->save();

        $notification = array(
            'message' => 'Admin Create Successfully',
            'alert-type' => 'success',
        );

        return Redirect()->back()->with($notification);
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
        $admin = Admin::find($id);
        return view('backend.admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        // dd($request->password);
        $admin->name = $request->name;
        $admin->email = Str::lower(trim($request->email));
        if ($request->password) {
            $admin->password = bcrypt($request->password);
        }
        $admin->update();

        $notification = array(
            'message' => 'Admin Update Successfully',
            'alert-type' => 'success',
        );

        return Redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();

        $notification = array(
            'message' => 'Admin Delete Successfully',
            'alert-type' => 'success',
        );

        return Redirect()->back()->with($notification);
    }
}
