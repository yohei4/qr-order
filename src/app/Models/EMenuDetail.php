<?php

namespace App\Models;

use App\Models\Schema\MMenuDetail;
use Carbon\Carbon;

/**
 * Class EMenuDetail
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
 * @package App\Models
 */
class EMenuDetail extends MMenuDetail
{
}
