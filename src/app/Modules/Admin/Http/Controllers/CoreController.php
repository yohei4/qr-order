<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class CoreController extends Controller
{
    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('admin');
    }

    /**
     * Get the user.
     *
     * @return \App\Modules\Admin\Models\Admin|null
     */
    protected function user()
    {
        return $this->guard()->user();
    }
}
