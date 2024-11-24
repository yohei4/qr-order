<?php

namespace App\Models;

use App\Models\Schema\MTermTaxonomy;
use Carbon\Carbon;

/**
 * Class ETermTaxonomy
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
class ETermTaxonomy extends MTermTaxonomy
{
}
