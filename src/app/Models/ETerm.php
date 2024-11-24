<?php

namespace App\Models;

use App\Models\Schema\MTerm;
use Carbon\Carbon;

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
 * @package App\Models
 */
class ETerm extends MTerm
{
}
