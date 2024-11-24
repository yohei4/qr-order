<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Schema;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MTermTaxonomy
 * 
 * @property int $id
 * @property int|null $term_id
 * @property int|null $taxonomy_type
 * @property string|null $description
 * @property int|null $parent_taxonomy_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models\Schema
 */
class MTermTaxonomy extends Model
{
	protected $table = 'm_term_taxonomy';

	protected $casts = [
		'term_id' => 'int',
		'taxonomy_type' => 'int',
		'parent_taxonomy_id' => 'int'
	];

	protected $fillable = [
		'term_id',
		'taxonomy_type',
		'description',
		'parent_taxonomy_id'
	];
}
