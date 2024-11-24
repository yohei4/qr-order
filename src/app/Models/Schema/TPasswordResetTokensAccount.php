<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Schema;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TPasswordResetTokensAccount
 * 
 * @property string $email
 * @property string|null $トークン
 * @property Carbon|null $created_at
 *
 * @package App\Models\Schema
 */
class TPasswordResetTokensAccount extends Model
{
	protected $table = 't_password_reset_tokens_account';
	protected $primaryKey = 'email';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'トークン'
	];
}
