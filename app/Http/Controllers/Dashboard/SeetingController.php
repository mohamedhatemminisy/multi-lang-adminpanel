<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Http\Requests\ShippingRequest;
use DB;

class SeetingController extends Controller
{
    public function editShippingMethods($type){
    	if($type === 'free')
    		$shipping_method =  Setting::where('key','free_shipping_label')->first();
    	elseif($type === 'inner')
    		$shipping_method =  Setting::where('key','local_shipping_label')->first();    	
    	elseif($type === 'outer')
    		$shipping_method =  Setting::where('key','outer_shipping_label')->first();    	
    	else
    		$shipping_method =  Setting::where('key','free_shipping_label')->first();
    	return view('dashboard.settings.shipping.edit',compact('shipping_method'));
    }

    public function updateShippingMethods(ShippingRequest $request,$id){
        try {
            $shipping_method = Setting::find($id);

            DB::beginTransaction();
            $shipping_method->update(['plain_value' => $request->plain_value]);
            //save translations
            $shipping_method->value = $request->value;
            $shipping_method->save();

            DB::commit();
            return redirect()->back()->with(['success' => 'تم التحديث بنجاح']);
        } catch (\Exception $ex) {
            return redirect()->back()->with(['error' => 'هناك خطا ما يرجي المحاولة فيما بعد']);
            DB::rollback();
        }
    }
}
