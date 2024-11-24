<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Schema;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MMenuDetail
 * 
 * @property int $id
 * @property int $menu_id
 * @property string|null $start_date
 * @property string|null $end_date
 * @property string|null $description
 * @property string|null $remarks
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models\Schema
 */
class MMenuDetail extends Model
{
	protected $table = 'm_menu_detail';

	protected $casts = [
		'menu_id' => 'int'
	];

	protected $fillable = [
		'menu_id',
		'start_date',
		'end_date',
		'description',
		'remarks'
	];
}
