<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;

class UserController extends Controller
{
    use RegistersUsers;

    public function showlogin(){
        return view('home.login');
    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'password'=>'min:3|max:30'
        ],[
            
            'password.required' => 'bạn chưa nhập pass',
            'password.min' =>'pass không dc nhỏ hơn 3 ký tự',
            'password.max' =>'pass không được lớn hơn 30 ký tự'
        ]);
        $data = $request->only('email', 'password');
        if(Auth::attempt($data))
        {
            return redirect('')->with(['success'=>'đăng nhập thành công']);
        }
        else
        {
            // return redirect('admin.showlogin')->with('thongbao','đăng nhập thất bại');
            return redirect()->back()->with(['error'=>'đăng nhập thất bại']);
        }
        
    }
    public function logout()
    { 
        Auth::logout();
        return redirect('');
    }

    public function showregister(){
        return view('home.register');
    }

    public function register(Request $request)
    {
        $this->validate($request,[
            'email' =>'unique:users',
            'password'=>'min:3|max:30',
            'phone' =>'unique:users|numeric',
        ],[
            'email.unique' => 'email này đã được sử dụng',
            'password.min' =>'pass không dc nhỏ hơn 3 ký tự',
            'password.max' =>'pass không được lớn hơn 30 ký tự',
            'phone.unique' => 'phone này đã được sử dụng',
            'phone.numeric' => 'phone phải là 1 số',

        ]);
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $user=User::create($data);
        $this->guard()->login($user);//sau khi đk xog  bỏ qua bước login chỉ tới trang home
        return redirect('');
    }

}
