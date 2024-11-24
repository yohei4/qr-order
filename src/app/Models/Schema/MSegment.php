<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Schema;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MSegment
 * 
 * @property int $code
 * @property string $segment_type_code
 * @property string|null $segment_name
 * @property string|null $sort_order
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models\Schema
 */
class MSegment extends Model
{
	protected $table = 'm_segment';
	public $incrementing = false;

	protected $casts = [
		'code' => 'int'
	];

	protected $fillable = [
		'segment_name',
		'sort_order'
	];
}
