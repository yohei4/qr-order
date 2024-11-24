<?php

namespace App\Models;

use App\Models\Schema\MTermRelationship;
use Carbon\Carbon;

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
class ETermRelationship extends MTermRelationship
{
}
