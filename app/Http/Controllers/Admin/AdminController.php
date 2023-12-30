<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Admin\StoreAdminRequest;
use App\Http\Requests\Admin\Admin\UpdateAdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::paginate(10);
        return view('Admin::admins.list-admins', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin::admins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdminRequest $request)
    {
        $admin = Admin::create($request->validated());
Alert::success('Congrats!' , 'Saved successfully');
        return redirect()->route('admins.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admin = Admin::findOrFail($id);

        return view('Admin.admins.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminRequest $request, string $id)
    {

        $admin = Admin::findOrFail($id);

        $admin->update($request->except('_token', 'password', 'password_confirmation'));
        if ($request->filled('password') && $request->filled('password_confirmation')) {
            if ($request->password == $request->password_confirmation) {

                $admin->update(['password' => $request->password]);
            } else {
                Alert::error(_('Oops!'), __('Wrong pass!'));
                return back();
            }
        }

        Alert::success('Congrats!', 'Updated successfully');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();
        Alert::success('Congrats!' , 'Deleted successfully');

        return redirect()->route('admins.index');
    }
}
