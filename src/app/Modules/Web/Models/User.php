<?php

namespace App\Modules\Web\Models;

use App\Models\EUser;
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
 * @package App\Modules\Web\Models
 */
class User extends EUser
{
}
