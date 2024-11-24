<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Schema;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MMenu
 * 
 * @property int $id
 * @property string|null $company_code
 * @property string|null $brand_code
 * @property string|null $store_code
 * @property string|null $menu_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models\Schema
 */
class MMenu extends Model
{
	protected $table = 'm_menus';

	protected $fillable = [
		'company_code',
		'brand_code',
		'store_code',
		'menu_name'
	];
}
