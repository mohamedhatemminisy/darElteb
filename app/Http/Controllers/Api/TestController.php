<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class TestController extends Controller
{
    public function test(Request $request){
        $lang = $request->lang;
        $tests = Test::get();
        if($tests){
            foreach($tests as $test){
                $arr['id']=  $test->id;
                $arr['name']=  $test->translate($lang)->name;
                $arr['description']=  strip_tags($test->translate($lang)->description);
                $arr['type']=  strip_tags($test->translate($lang)->type);
                $arr['duration']=  $test->duration;
                $arr['price']=  $test->price;
                $arr['image']=  url('/').'/'.$test->image;
                $data[] = $arr;
            }
            $page = $request->get('page', 1);
            $perPage = 2;
            $offset = ($page * $perPage) - $perPage;
    
            $count = count($arr);
            return new LengthAwarePaginator($data, $count, $perPage, $offset);
        }else{
            return response([
                'status' =>false ,
                'message' =>trans('there is no tests')  ,
                'data' =>[]
            ]);
        }
    }
}
