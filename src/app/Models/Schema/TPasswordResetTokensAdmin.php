<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Schema;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TPasswordResetTokensAdmin
 * 
 * @property string $email
 * @property string|null $トークン
 * @property Carbon|null $created_at
 *
 * @package App\Models\Schema
 */
class TPasswordResetTokensAdmin extends Model
{
	protected $table = 't_password_reset_tokens_admin';
	protected $primaryKey = 'email';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'トークン'
	];
}
