<?php

namespace App\Http\Controllers;

use App\Apartner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Validator;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Auth;

class CtvController extends Controller
{
    /**
     * View register
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register(){
        //dd(request()->route()->getName());
        return view('CTV.register');
    }

    /**
     * Login view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login(){
        return view('CTV.login');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function order(){
        return view('CTV.order');
    }

    /**
     * Login view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function info(){
        $id = Auth::guard("apartners")->user()->id;
        $apartner = Apartner::where('id', $id)->first();
        return view('CTV.info', compact('apartner'));
    }

    /**
     * Login view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function registerTime(){
        return view('CTV.register_time');
    }

    /**
     * Login view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function forgotPassword(){
        return view('CTV.forgot_password');
    }

    /**
     * Login view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function changePassword(){
        return view('CTV.change_password');
    }

    /**
     * Login view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home(){
        return view('welcome');
    }

    /**
     * Store apartner
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeRegister(Request $request){
        $params = $request->all();
;       try {
            $validator = Validator::make($params, [
                'username' => 'required|unique:apartners||max:255',
                'email' => 'required|email|unique:apartners||max:255',
                'password' => 'required|min:6|confirmed',
                'password_confirmation' => 'required|min:6',
                'phone' => 'required|min:11|numeric',
                'city' => 'required',
                'experience' => 'required|numeric',
                'specialized' => 'required',
                'description' => 'required',
                'avatar' => 'required',
                'sex' => 'required',
                'avatar' => 'mimes:jpeg,jpg,png,gif|required|max:1000',
                'name' => 'required|max:255'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator->messages());
            }
            if ($request->hasFile('avatar')) {
                $img = $request->file('avatar')->getClientOriginalName();

                $request->avatar->move('img/avatar', $img);
                $params['avatar'] = $img;
            }
            $params['type_work'] = implode(",", $params['type_work']);
            $params['password'] = bcrypt($params['password']);
            $params['active'] = Apartner::UNAVTICE_STATUS;
            Apartner::create($params);
            return redirect()->back()->with("message_sucess", "Bạn đã đăng kí thành công chờ quản trị viên duyệt");
        }
        catch (\Exception $ex) {
            Log::error('[Apartner] ' . $ex->getMessage());
            return redirect()->back()->withInput()->with('messages', 'Something wrong');
        }

    }

    /**
     * Process login
     *
     * @param LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function loginPost(Request $request)
    {
        $params = $request->all();
        $validator = Validator::make($params, [
            'username' => 'required',
            'password' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }
        if (Auth::guard('apartners')->attempt(['username' => $request->username, 'password' => $request->password],$request->remember_me)) {
            return redirect(route('ctv.info.view'));
        } else {
            return redirect()->back()->withInput()->with('login_error','Tài khoản hoặc mật khẩu không hợp lệ!' );
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePassword(Request $request){
        $params = $request->all();
        $validator = Validator::make($params, [
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
            'old_password' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator->messages());
        }
        $username = Auth::guard('apartners')->user()->username;
        if(Auth::guard('apartners')->attempt(['username' => $username, 'password' => $request->old_password],$request->remember_me)){
            $apartner = Apartner::where('id', Auth::guard('apartners')->user()->id)->first();
            $apartner->password = bcrypt($params['password']);
            $apartner->save();
            return redirect()->back()->with("message_sucess", "Thay đổi mật khẩu thành công");
        } else{
            return redirect()->back()->withInput()->with('login_error','Mật khẩu của bạn chưa chính xác vui lòng nhập lại mật khẩu' );
        }
    }
}
