<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Schema;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MTerm
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $slug
 * @property int|null $term_group_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models\Schema
 */
class MTerm extends Model
{
	protected $table = 'm_terms';

	protected $casts = [
		'term_group_id' => 'int'
	];

	protected $fillable = [
		'name',
		'slug',
		'term_group_id'
	];
}
