<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VisitController extends Controller
{
    public function add_address(Request $request){
        $data = $request->all();
        $data['user_id'] = Auth()->user()->id;
        $address = Address::create($data);
        $data['id'] = $address->id;
        if($address){
            return response([
                'status' =>true ,
                'message' =>trans('Address added successfully')  ,
                'data' =>$data
            ]); 
        }else{
            return response([
                'status' =>false ,
                'message' =>trans('There is a problem you must try again')  ,
                'data' =>[]
            ]); 
        }
    }

    public function user_addresses(Request $request)
    {
        $addresses = Address::where('user_id',Auth()->user()->id)->get();
        if(count($addresses)>0){
            $data = [];
            foreach($addresses as $address){
                $arr['id'] = $address->id;
                $arr['latitude'] = $address->latitude;
                $arr['longitude'] = $address->longitude;
                $arr['city'] = $address->city;
                $arr['street'] = $address->street;
                $arr['building_number'] = $address->building_number;
                $arr['floor_number'] = $address->floor_number;
                $data[] = $arr;
            }
            return response([
                'status' =>true ,
                'message' =>trans('User addresses')  ,
                'data' =>$data
            ]); 
        }else{
            return response([
                'status' =>false ,
                'message' =>trans('User has no addresses')  ,
                'data' =>[]
            ]); 
        }
    }
}
