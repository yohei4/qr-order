<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Schema;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MAccount
 * 
 * @property int $id
 * @property string|null $email
 * @property string|null $password
 * @property string|null $company_code
 * @property string|null $store_code
 * @property string|null $parent_company_code
 * @property string|null $parent_store_code
 * @property string|null $remember_token
 * @property Carbon|null $email_verified_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models\Schema
 */
class MAccount extends Model
{
	protected $table = 'm_accounts';

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
		'company_code',
		'store_code',
		'parent_company_code',
		'parent_store_code',
		'remember_token',
		'email_verified_at'
	];
}
