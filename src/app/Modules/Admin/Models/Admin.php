<?php

namespace App\Modules\Admin\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use App\Models\EAdmin;

/**
 * Class Admin
 * 
 * @property int $id
 * @property string|null $email
 * @property string|null $password
 * @property string|null $last_name
 * @property string|null $first_name
 * @property Carbon|null $birth_date
 * @property string|null $tel
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Modules\Admin\Models
 */
class Admin extends EAdmin implements
AuthenticatableContract,
AuthorizableContract,
CanResetPasswordContract
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use Authenticatable, Authorizable, CanResetPassword, MustVerifyEmail, HasFactory, Notifiable;
}
