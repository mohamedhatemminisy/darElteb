<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class ContactController extends Controller
{
    public function contact(Request $request){
        $data=$request->all();

        if($request->hasFile('image'))
        {
            $data['image'] = upload_image($request->file('image'), 'image');
        }
        $data['user_id'] = Auth()->user()->id;
        Contact::create($data);
        return response([
            'status' =>true ,
            'message' =>trans('Message sent successfully')  ,
            'data' =>[]
        ]); 
    }
}
