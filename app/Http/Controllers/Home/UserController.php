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
            'email' =>'required',
            'password'=>'required|min:3|max:30'
        ],[
            'email.required' => 'bạn chưa nhập email',
            'password.required' => 'bạn chưa nhập pass',
            'password.min' =>'pass không dc nhỏ hơn 3 ký tự',
            'password.max' =>'pass không được lớn hơn 30 ký tự'
        ]);
        $data = $request->only('email', 'password');
        if(Auth::attempt($data))
        {
            return redirect('');
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
            'name' => 'required',
            'email' =>'required|unique:users',
            'password'=>'required|min:3|max:30',
            'phone' =>'required|unique:users|numeric',
            'address' =>'required'
        ],[
            'name.required' => 'bạn chưa nhập name',
            'email.required' => 'bạn chưa nhập email',
            'email.unique' => 'email này đã được sử dụng',
            'password.required' => 'bạn chưa nhập pass',
            'password.min' =>'pass không dc nhỏ hơn 3 ký tự',
            'password.max' =>'pass không được lớn hơn 30 ký tự',
            'phone.required' => 'bạn chưa nhập phone',
            'phone.unique' => 'phone này đã được sử dụng',
            'phone.numeric' => 'phone phải là 1 số',
            'address.required' => 'bạn chưa nhập address',

        ]);
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $user=User::create($data);
        $this->guard()->login($user);//sau khi đk xog  bỏ qua bước login chỉ tới trang home
        return redirect('');
    }

}
