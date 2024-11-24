<?php

namespace App\Modules\Admin\Http\Controllers;

use App\Modules\Admin\Http\Resources\UserResource;

class ApiController extends CoreController
{
    /**
     * ユーザー情報を取得します。
     */
    public function getUser()
    {
        return response()->json(new UserResource($this->user()));
    }
}
