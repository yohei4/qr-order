<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Schema;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MTermRelationship
 * 
 * @property int|null $menu_id
 * @property int|null $taxonomy_id
 * @property int|null $sort_order
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models\Schema
 */
class MTermRelationship extends Model
{
	protected $table = 'm_term_relationships';
	public $incrementing = false;

	protected $casts = [
		'menu_id' => 'int',
		'taxonomy_id' => 'int',
		'sort_order' => 'int'
	];

	protected $fillable = [
		'menu_id',
		'taxonomy_id',
		'sort_order'
	];
}
