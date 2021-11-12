<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Api\RegisterRequest;
use App\Http\Requests\Api\EditProfileRequest;
use App\Models\User;
use App\Models\Country;
use App\Models\UserPhoneVerify;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function countries(Request $request){
         $lang = $request->lang;
         $countries = Country::get();
         if(count($countries)>0){
            
            foreach($countries as $country){
                $arr['id']=  $country->id;
                $arr['name']=  $country->translate($lang)->name;
                $data[] = $arr;
            }
           return response([
            'status' =>true ,
            'message' =>trans('countries')  ,
            'data' =>$data
        ]);         
        }else{
            return response([
                'status' =>false ,
                'message' =>trans('You don have any countries')  ,
                'data' =>[]
            ]); 
        }
    }

    public function register(RegisterRequest $request)
    {
        if($request->hasFile('ID_image'))
        {
            $fileName = upload_image($request->file('ID_image'), 'ID_image');
        }
        $data1 = $request->all();
        $data1['ID_image'] = $fileName;
        $data1['password'] = bcrypt($request->password);
        $user = User::create($data1);
        $random_number = random4DigitNumberGenerator();
         UserPhoneVerify::create([
            'phone_number' =>  $user->phone,
            'code' => $random_number,
            'status' => 'active'
        ]);
        return response([
            'status' =>true ,
            'message' =>trans('api.code_sent')  ,
            'code' =>$random_number
        ]); 
    }
    
    public function code_check(Request $request){
        $UserPhoneVerify = UserPhoneVerify::where('phone_number' ,$request->phone)
        ->where('code',$request->code)->first();
        if($UserPhoneVerify){
           if($UserPhoneVerify->status == 'active'){
                $UserPhoneVerify->status = 'not_active';
                $UserPhoneVerify->save();
                $user = User::where('phone',$request->phone)->first();
                $token = $user->createToken('LaravelAuthApp')->accessToken;
                $data['id'] = $user->id;
                $data['id_number'] = $user->id_number;
                $data['name'] = $user->name;
                $data['phone'] = $user->phone;
                $data['nationality'] = $user->nationality;
                $data['birthrate'] = $user->birthrate;
                $data['age'] = $user->age;
                $data['gender'] = $user->gender;
                $data['email'] = $user->email;
                $data['device_token'] = $user->device_token;
                $data['ID_image'] = url('/').$user->ID_image;
                $data['token'] = $token;
                return response([
                    'status' =>true ,
                    'message' =>trans('api.registered')  ,
                    'code' =>$data
                ]); 
           }else{
                return response([
                    'status' =>false ,
                    'message' =>trans('your code is not active')  ,
                    'data' =>[]
                ]);  
           }
        }else{
            return response([
                'status' =>false ,
                'message' =>trans('your code is not correct')  ,
                'data' =>[]
            ]);    
        }
    }

     /**
     * Login
     */
    public function login(Request $request)
    {
        $user = [
            'phone'    => $request->phone,
            'password' => $request->password
        ];
        if (auth()->attempt($user)) {
            $user =User::where('phone',$user['phone'])->first();

            $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
            $data['id'] = $user->id;
            $data['id_number'] = $user->id_number;
            $data['name'] = $user->name;
            $data['phone'] = $user->phone;
            $data['nationality'] = $user->nationality;
            $data['birthrate'] = $user->birthrate;
            $data['age'] = $user->age;
            $data['gender'] = $user->gender;
            $data['email'] = $user->email;
            $data['ID_image'] = url('/').$user->ID_image;
            $data['token'] = $token;

            return response([
                'status' =>true ,
                'message' =>trans('api.logined')  ,
                'data' =>$data
            ]); 
        } else {
            return response()->json(['status' =>false ,'error' => trans('api.data_not_mach'),'data' =>[]], 401);
        }
    }  
    
    public function change_password(Request $request){
        $user = User::find(Auth()->user()->id);
       if(Hash::check($request->oldPassword,$user->password)){
        $user->password = bcrypt($request->newPassword);
        $user->save();
        return response([
                'status' =>true ,
                'message' =>trans('Password updated successfully')  ,
                'data' =>[]
            ]);               
       }else{
        return response([
                'status' =>false ,
                'message' =>trans('old password not correct')  ,
                'data' =>[]
            ]);    
       }
 
        
    }
    
    public function getProfileData(Request $request)
    {
        $user = auth()->user();
        if ($user){
            $data['id'] = $user->id;
            $data['id_number'] = $user->id_number;
            $data['name'] = $user->name;
            $data['phone'] = $user->phone;
            $data['nationality'] = $user->nationality;
            $data['birthrate'] = $user->birthrate;
            $data['age'] = $user->age;
            $data['gender'] = $user->gender;
            $data['email'] = $user->email;
            $data['device_token'] = $user->device_token;
            $data['ID_image'] = url('/').$user->ID_image;
            $data['token'] = "";
            return response([
                'status' =>true ,
                'message' =>trans('api.user_profile')  ,
                'data' =>$data
            ]); 
         }
        else{
            return response([
                'status' =>false ,
                'message' =>trans('api.user_not_found')  ,
                'data' =>[]
            ]); 
        }
    }

    public function updateProfile(EditProfileRequest $request){
        $user = auth()->user();
        $data1 = $request->all();
        if($request->hasFile('ID_image'))
        {
            $data1['ID_image'] = upload_image($request->file('ID_image'), 'ID_image');
        }
        if($request->hasFile('image'))
        {
            $data1['image'] = upload_image($request->file('image'), 'image');
        }
        $user->fill($data1)->save();
        $data['id'] = $user->id;
        $data['id_number'] = $user->id_number;
        $data['name'] = $user->name;
        $data['phone'] = $user->phone;
        $data['nationality'] = $user->nationality;
        $data['birthrate'] = $user->birthrate;
        $data['age'] = $user->age;
        $data['gender'] = $user->gender;
        $data['email'] = $user->email;
        $data['device_token'] = $user->device_token;
        $data['ID_image'] = url('/').$user->ID_image;
        $data['image'] = url('/').$user->image;
        $data['token'] = "";
        return response([
            'status' =>true ,
            'message' =>trans('success.user_updated')  ,
            'data' =>$data
        ]);   
    }
    public function update_device_token(Request $request){
        $user_id = Auth()->user()->id;
        $user = User::find($user_id);
        $user->device_token = $request->device_token;
        $user->save();
        return response([
            'status' =>true ,
            'message' =>trans('Device token updated')  ,
            'data' =>[]
        ]); 
    }
}
 