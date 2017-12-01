<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class LoginController extends Controller
{
    public function loginCustomer()
    {
        return view('layout.login');
    }

    public function postLoginCustomer(Request $request)
    {
        $validator = Validator::make($request->all(),[
                'email'=>'required|email',
                'password'=>'required|min:2|max:20',
            ]
            ,[
                'email.required'=>'Vui lòng nhập Email',
                'email.email'=>'Không đúng định dạng Email',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu không được dưới 6 ký tự',
                'password.max'=>'Mật khẩu không được lớn hơn 20 ký tự',
            ]);
        $arr_info = array('email'=>$request->email,'password'=>$request-> password);
        if(Auth::attempt($arr_info)){
            $authority = Auth::user()->authority;
            if($authority == 1){  // is customer
                return redirect()->route('index');
            }
            else if($authority == 10){ // is admin
            }
        }
        else{
            return redirect()->back()->with('login-failed', 'Đăng nhập thất bại. Vui lòng thử lại')
                ->withErrors($validator,'loginErrors');
        }
    }

    public function signupCustomer(Request $request)
    {
        $validator = Validator::make($request->all(),[
                'namesignup'=>'required|min:6|max:12',
                'emailsignup'=>'required|email|unique:users,email',
                'passsignup'=>'required|min:3|max:20',
                'repasssignup'=>'required|same:passsignup'
            ]
            ,[
                'namesignup.required'=>'Vui lòng nhập tên tài khoản',
                'namesignup.min'=>'Mật khẩu không được dưới 6 ký tự',
                'namesignup.max'=>'Mật khẩu không được lớn hơn 12 ký tự',
                'emailsignup.required'=>'Vui lòng nhập Email',
                'emailsignup.email'=>'Không đúng định dạng Email',
                'emailsignup.unique'=>'Email đã có người sử dụng',
                'passsignup.required'=>'Vui lòng nhập mật khẩu',
                'passsignup.min'=>'Mật khẩu không được dưới 3 ký tự',
                'passsignup.max'=>'Mật khẩu không được lớn hơn 20 ký tự',
                'repasssignup.required'=>'Vui lòng nhập lại mật khẩu',
                'repasssignup.same'=>'Mật khẩu không giống nhau'
            ]);


        try{
            $user = new User;
            $user->name = $request->namesignup;
            $user->email = $request->emailsignup;
            $user->password = Hash::make($request->passsignup);
            $user->authority = 1;
            $user->save();
            return redirect()->route('trang-chu')->with('user',$user);
        }catch(QueryException $ex){
            return redirect()->back()->withErrors($validator,'signupErrors');
        }
//
    }
}

