 <?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use Auth;
use App\Models\User;
use App\Http\Request\LoginRequest;
use App\Http\Request\RegisterRequest;

class UserController extends Controller
{
   
    public function getLogin()
    {
        return view('page.login');
    }
    public function postLogin(LoginRequest $request)
    {
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            return redirect()->route('index');
        } 

        return redirect()->back()->with(['flag' => 'danger', 'message' => trans('msg.successlogin')]);
    }
    public function logout()
    {
        Auth::logout(); 

        return redirect()->route('index');
    }
    public function getSignup()
    {
        return view('page.signup');
    }
    public function postSignup(RegisterRequest $request)
    { 
        try
        {
            $users = new User();
            $users->name = $request->name;
            $users->password = bcrypt($request->password);        
            $users->email =$request->email;
            $users->address= $request->address;
            $users->phone =$request->phone;
            $users->save();

            return redirect()->back()->with('success', trans('msg.successaccount'));
        }
        catch (Exception $e) {
            return redirect()->back()->with('fail', trans('msg.fail'));
        }           
    }
}
