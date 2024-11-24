<?php

namespace App\Models;

use App\Models\Schema\MMenu;
use Carbon\Carbon;

/**
 * Class EMenu
 * 
 * @property int $id
 * @property string|null $company_code
 * @property string|null $brand_code
 * @property string|null $store_code
 * @property string|null $menu_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class EMenu extends MMenu
{
}
