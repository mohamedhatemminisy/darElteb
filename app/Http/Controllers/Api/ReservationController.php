<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rate;
use App\Models\Result;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function home_reservation(Request $request){
        $data = $request->all();
        if($request->type == 'test'){
            $data['choice'] = 'test';
            $data['test_id'] = $request->type_id;
        }else{
            $data['choice'] = 'offer';
            $data['offer_id'] = $request->type_id;
        }
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
        $visit = Visit::find($request->visit_id);
        if($visit){
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
        }else{
            return response([
                'status' =>false ,
                'message' =>trans('Visit Id not available')  ,
                'data' =>[]
            ]); 
        }

    }

    public function UserReservation(Request $request){
        $user_id = Auth()->user()->id;
        $visits = Visit::where('user_id',$user_id)->where('choice',$request->type)
        ->orderBy('id','DESC')->get();
        if($visits){
            $data = [];
            foreach($visits as $visit){
                $arr['id'] = $visit->id;
                $arr['time'] = $visit->time ? $visit->time : "";
                $arr['date'] = $visit->date ? $visit->date : "";
                $arr['appointment_id'] = $visit->appointment_id ? $visit->appointment_id : "";
                $arr['type'] = $visit->type;
                $arr['status'] = $visit->status ? $visit->status : 'Away';
                if($request->type == 'test'){
                    $arr['test'] = $visit->test->translate('en')->name;
                }else{
                    $arr['offer'] = $visit->offer->translate('en')->name;
                }
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

    public function UserReservationResult(Request $request){
        $user_id = Auth()->user()->id;
        $results = Result::where('user_id',$user_id)->get();
        if($results){
            $data = [];
            foreach($results as $result){
                $arr['id'] = $result->id;
                $arr['time'] = $result->time;
                $arr['date'] = $result->date;
                $arr['file'] = url('/').'/'.$result->file;
                $arr['seen'] = $result->seen ? '1':'0';
                $arr['test'] = $result->visit->test->translate('en')->name;
                $data[] = $arr;
            }
            return response([
                'status' =>true ,
                'message' =>trans('User results')  ,
                'data' => $data
            ]);  
        }else{
            return response([
                'status' =>false ,
                'message' =>trans('User has no results')  ,
                'data' =>[]
            ]);  
        }
    }

    public function ResultDetails(Request $request){
        $result = Result::find($request->result_id);
        if( $result){
            $result->seen = '1';
            $result->save();
            $data['id'] = $result->id;
            $data['time'] = $result->time;
            $data['date'] = $result->date;
            $data['file'] = url('/').'/'.$result->file;
            $data['seen'] = $result->seen;
            $data['test'] = $result->visit->test->translate('en')->name;
            return response([
                'status' =>false ,
                'message' =>trans('Result Derails')  ,
                'data' => $data
            ]);
        }else{
            return response([
                'status' =>false ,
                'message' =>trans('Result not valid')  ,
                'data' =>[]
            ]);  
        }
    }

    public function ReservationResult(Request $request){
        $result = Result::where('visit_id',$request->reservation_id)->first();
        if($result){
            $result->seen = '1';
            $result->save();
            $data['id'] = $result->id;
            $data['time'] = $result->time;
            $data['date'] = $result->date;
            $data['file'] = url('/').'/'.$result->file;
            $data['seen'] = $result->seen;
            $data['test'] = $result->visit->test->translate('en')->name;
            return response([
                'status' => false ,
                'message' =>trans('Result Derails')  ,
                'data' => $data
            ]);
        }else{
            return response([
                'status' => false ,
                'message' =>trans('Result not valid')  ,
                'data' =>[]
            ]);  
        }
    }

    public function lab_reservation(Request $request)
    {
        $data = $request->all();
        if($request->type == 'test'){
            $data['choice'] = 'test';
            $data['test_id'] = $request->type_id;
        }else{
            $data['choice'] = 'offer';
            $data['offer_id'] = $request->type_id;
        }
        if($request->hasFile('photo'))
        {
            $fileName = upload_image($request->file('photo'), 'photo');
        }
        $data['photo'] = $fileName;
        $data['type']  = 'lab';
        $data['user_id'] = Auth()->user()->id;
        $visit = Visit::create($data);
        return response([
            'status' => true ,
            'message' => trans('lab reservation request sent successfully')  ,
            'data' =>[]
        ]); 
    }
}
