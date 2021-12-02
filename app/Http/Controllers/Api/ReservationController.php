<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rate;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function home_reservation(Request $request){
        $data = $request->all();
        if($request->hasFile('photo'))
        {
            $fileName = upload_image($request->file('photo'), 'photo');
        }
        $data['photo'] = $fileName;
        $data['type']  = 'home';
        $data['user_id'] = Auth()->user()->id;
        $visit = Visit::create($data);
        return response([
            'status' =>true ,
            'message' =>trans('Home reservation sent successfully')  ,
            'data' =>[]
        ]); 
    }

    public function rate(Request $request)
    {
        $user_id = Auth()->user()->id;
        $rate = Rate::where('user_id',$user_id)
        ->where('visit_id',$request->visit_id)->first();
        if($rate){
            return response([
                'status' =>false ,
                'message' =>trans('This visit rated before')  ,
                'data' =>[]
            ]); 
        }else{
            $data = $request->all();
            $data['user_id'] = $user_id;
            $rate = Rate::create($data);
            return response([
                'status' =>true ,
                'message' =>trans('Visit Rated successfully')  ,
                'data' =>[]
            ]); 
        }
    }

    public function UserHomeReservation(Request $request){
        $user_id = Auth()->user()->id;
        $visits = Visit::where('user_id',$user_id)->where('type','home')->orderBy('id','DESC')->get();
        if($visits){
            $data = [];
            foreach($visits as $visit){
                $arr['id'] = $visit->id;
                $arr['time'] = $visit->time;
                $arr['date'] = $visit->date;
                $arr['type'] = $visit->type;
                $arr['status'] = $visit->status ? $visit->status : 'Away';
                $arr['test'] = $visit->test->translate('en')->name;
                $data[] = $arr;
            }
            return response([
                'status' =>true ,
                'message' =>trans('user reservations')  ,
                'data' =>$data
            ]); 
        }else{
            return response([
                'status' =>false ,
                'message' =>trans('user has no reservations')  ,
                'data' =>[]
            ]); 
        }
    }
    
    public function DeleteReservation(Request $request){
        $reservation_id = $request->reservation_id;
        $visit = Visit::find($reservation_id);
        if($visit){
            $visit->delete();
            return response([
                'status' =>true ,
                'message' =>trans('Reservation deleted successfully')  ,
                'data' =>[]
            ]); 
        }else{
            return response([
                'status' =>false ,
                'message' =>trans('Reservation not valid')  ,
                'data' =>[]
            ]); 
        }
    }

    public function CancelReservation(Request $request){
        $reservation_id = $request->reservation_id;
        $visit = Visit::find($reservation_id);
        if($visit){
            $visit->status = 'cancel';
            $visit->save();
            return response([
                'status' =>true ,
                'message' =>trans('Reservation Canceled successfully')  ,
                'data' =>[]
            ]); 
        }else{
            return response([
                'status' =>false ,
                'message' =>trans('Reservation not valid')  ,
                'data' =>[]
            ]); 
        }
    }
}
