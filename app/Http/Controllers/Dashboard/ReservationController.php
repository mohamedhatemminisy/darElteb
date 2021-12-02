<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Visit;
use Illuminate\Http\Request;
use App\Http\Requests\Dashboard\ResultRequest;
use App\Models\Result;

class ReservationController extends Controller
{
    public function reservations(){
        $visits = Visit::orderBy('id','DESC')->paginate(20);
        return view('dashboard.visits.index', compact('visits'));
    }

    public function reservationDetails($id){
        $visit = Visit::find($id);
        return view('dashboard.visits.details', compact('visit'));
    }

    public function reservationConfirm($id){
        return view('dashboard.visits.confirm',compact('id'));
    }

    public function reservationResult($id){
        return view('dashboard.visits.result',compact('id'));
    }

    public function resultStore(ResultRequest $request){
        $data = $request->all();
        if($request->hasFile('file'))
        {
            $data['file'] = upload_image($request->file('file'), 'file');
        }
        $data['seen'] = '0';
        Result::create($data);
        return redirect()->back()
        ->with(['success' => trans('Result send successfully')]);
    }

    public function showResult ($id){
        $result = Result::where('visit_id',$id)->first();
        return view('dashboard.visits.result_show',compact('result'));
    }
}
