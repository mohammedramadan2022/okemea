<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Devices\StoreDeviceRequest;
use App\Http\Requests\Admin\Devices\UpdateDeviceRequest;
use App\Models\Device;
use App\Models\DeviceUser;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $devices = Device::paginate(10);

        return view('Admin::devices.list-devices', compact('devices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin::devices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDeviceRequest $request)
    {
        $device = Device::create($request->validated());

        return redirect()->route('devices.index');
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
        $device = Device::findORFail($id);

        return view('Admin::devices.edit', compact('device'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDeviceRequest $request, string $id)
    {
        $device = Device::findOrFail($id);

        $device->update($request->validated());

        return redirect()->route('devices.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function deviceActiveToggle($deviceId)
    {
        $device = Device::find($deviceId);
        if ($device) {
            $device->update(['status' => $device->status == 'active' ? 'inactive' : 'active']);
        }
        return back();
    }

    public function waitingDevices()
    {

        $devices = DeviceUser::whereHas('user')->where('status', 0)->paginate(10);

        return view('Admin::devices.waiting-devices', compact('devices'));
    }

    public function deviceAccept($deviceId)
    {
        $device = DeviceUser::findOrFail($deviceId);
        $device->update(['status' => 1]);
        Alert::success('Congtars!', 'saved successfully');
        return back();

    }
    public function deviceRefuse($deviceId)
    {
        $device = DeviceUser::findOrFail($deviceId);


        $device->delete();
        Alert::success('Congtars!', 'saved successfully');
        return back();

    }
}
