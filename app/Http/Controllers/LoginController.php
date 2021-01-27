<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Repositories\DecentralizationRepository;
use App\Services\GetSession;

class LoginController extends Controller
{
    use ThrottlesLogins, Authenticatable;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin()
    {
        if (Auth::check()) {
           
            if (Auth::user()->id_role == 1) {
                return redirect(route('companies.index'));
            }elseif (Auth::user()->id_role == 2) {
                $company_id = DecentralizationRepository::getDecentralization(Auth::user()->username);
                GetSession::putCompanyId($company_id['company_id']);
                //dd($company_id);
                return redirect('index');
            } else {
                $company_id = DecentralizationRepository::getDecentralization(Auth::user()->username);
                GetSession::putCompanyId($company_id['company_id']);
                //dd($company_id);
                return redirect('index');
            }
            
        } else {
            return view('layout_index.page.login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postLogin(LoginRequest $request)
    {
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            $seconds = $this->limiter()->availableIn($this->throttleKey($request));
            $messages = new MessageBag([
                'errorloginsecond' => trans('logins.errorloginfirst') . $seconds . trans('logins.second')
            ]);
            return back()->withErrors($messages);
        }
        $login = array(
            'username' => $request->username,
            'password' => $request->password
        );
        
        if (Auth::attempt($login, true)) {
            $company_id = DecentralizationRepository::getDecentralization(Auth::user()->username);
            GetSession::putCompanyId($company_id['company_id']);
            $this->clearLoginAttempts($request);
            /* Cookie::queue('username', Auth::user()->username , 10);
            Cookie::queue('pass', $request->password , 10); */
            //print (request()->cookie('username'));
            
            /* if (Auth::user()->admin_system == 1) {
                return redirect(route('companies.index'));
            } else { */
            
            return back()->with(['flag'=>'success','messege'=>'Đăng nhập thành công']);
            
        } else {
            return back()->with(['flag'=>'danger','messege'=>'Đăng nhập không thành công']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postLogout()
    {
        Auth::logout();
        Session::forget('select_companyid');
        return redirect('/login');
    }
    public function username()
    {
        return 'username';
    }
}
