<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Schema;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MSegmentType
 * 
 * @property string $code
 * @property string|null $segment_type_name
 * @property string|null $sort_order
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models\Schema
 */
class MSegmentType extends Model
{
	protected $table = 'm_segment_type';
	protected $primaryKey = 'code';
	public $incrementing = false;

	protected $fillable = [
		'segment_type_name',
		'sort_order'
	];
}
