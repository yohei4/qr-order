<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Schema;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cache
 * 
 * @property string $key
 * @property string $value
 * @property int $expiration
 *
 * @package App\Models\Schema
 */
class Cache extends Model
{
	protected $table = 'cache';
	protected $primaryKey = 'key';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'expiration' => 'int'
	];

	protected $fillable = [
		'value',
		'expiration'
	];
}
