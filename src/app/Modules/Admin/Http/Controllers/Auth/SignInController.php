<?php

namespace App\Http\Modules\Admin\Controllers\Auth;

use App\Http\Requests\SignInRequest;
use App\Modules\Admin\Http\Controllers\CoreController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class SignInController extends CoreController
{
    /*
    |--------------------------------------------------------------------------
    | SignIn Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(SignInRequest $request)
    {
        // ログイン試行制限
        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        // 認証処理
        if ($this->attemptLogin($request)) {
            if ($request->hasSession()) {
                $request->session()->put('auth.password_confirmed_at', time());
            }

            // 認証成功用のレスポンスを返却
            return $this->sendLoginResponse($request);
        }

        // ログイン回数を+1
        $this->incrementLoginAttempts($request);

        // 認証失敗用のレスポンスを返却
        return $this->sendFailedLoginResponse($request);
    }
}
