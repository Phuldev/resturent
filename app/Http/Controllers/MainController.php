<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function login(){

        return view('Auth.login');
    }
    public function register(){

        return view('Auth.register');
    }
    public function save(Request $request)
    {
        // return $request->input();
        //Validation request
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:5|max:12',

        ]);

        //Insert Data into DB
        $admin = new Admin;

        $admin-> name = $request->name;
        $admin-> email = $request->email;
        // $admin-> password =$request->password;
        $admin-> password = Hash::make($request->password);

        $save = $admin->save();

        if($save){
            return back()->with('success','New User hs been successfuly added to database');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }

    public function check(Request $request){

        // return $request->input();
        // Validate request
        $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:5|max:12'
        ]);

        $userInfo = Admin::where('email','=',$request->email)->first();
        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }else{
            //check password
            if(Hash::check($request->password,$userInfo->password)){
                $request->session()->put('LoggedUser',$userInfo->id);
                return redirect('admin/dashboard');

            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }

    public function dashborad(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('Admin.layout.home',$data );
    }
        public function index(){
        return view('frontend.index');
    }
}
