<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function editProfile(){
       auth('admin')->user();
       $admin = Admin::find(auth('admin')->user()->id);
       return view('dashboard.profile.edit',compact('admin'));
    }
    public function updateProfile(ProfileRequest $request){

        try {

            $admin = Admin::find(auth('admin')->user()->id);
            // filled meeans request is valid and hass value
            if ($request->filled('password')) {
                $request->merge(['password' => bcrypt($request->password)]);
            }
            // unset remove element from request
            unset($request['id']);
            unset($request['password_confirmation']);

            $admin->update($request->all());

            return redirect()->back()->with(['success' => 'تم التحديث بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاولة فيما بعد']);

        }


    }

}
