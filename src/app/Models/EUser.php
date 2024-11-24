<?php

namespace App\Models;

use App\Models\Schema\TUser;
use Carbon\Carbon;

/**
 * Class EUser
 * 
 * @property int $id
 * @property string|null $email
 * @property string|null $password
 * @property string|null $last_name
 * @property string|null $first_name
 * @property string|null $user_name
 * @property string|null $remember_token
 * @property Carbon|null $email_verified_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class EUser extends TUser
{
    /**
     * 
     */
    public function getNameAttribute(): string
    {
        return "{ $this->last_name } { $this->first_name }";
    }
}
