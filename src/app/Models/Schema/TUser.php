<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Schema;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TUser
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
 * @package App\Models\Schema
 */
class TUser extends Model
{
	protected $table = 't_users';

	protected $casts = [
		'email_verified_at' => 'datetime'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'email',
		'password',
		'last_name',
		'first_name',
		'user_name',
		'remember_token',
		'email_verified_at'
	];
}
