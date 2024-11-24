<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Schema;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MStoreInfo
 * 
 * @property string $code
 * @property string|null $store_name
 * @property Carbon|null $establishment_date
 * @property string|null $postal_code
 * @property int|null $prefecture
 * @property string|null $city
 * @property string|null $street_address
 * @property string|null $building_name
 * @property string|null $tel
 * @property string|null $fax
 * @property string|null $web_site_url
 * @property string|null $logo
 * @property string|null $remarks
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models\Schema
 */
class MStoreInfo extends Model
{
	protected $table = 'm_store_info';
	protected $primaryKey = 'code';
	public $incrementing = false;

	protected $casts = [
		'establishment_date' => 'datetime',
		'prefecture' => 'int'
	];

	protected $fillable = [
		'store_name',
		'establishment_date',
		'postal_code',
		'prefecture',
		'city',
		'street_address',
		'building_name',
		'tel',
		'fax',
		'web_site_url',
		'logo',
		'remarks'
	];
}
