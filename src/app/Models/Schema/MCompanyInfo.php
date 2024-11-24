<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Schema;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MCompanyInfo
 * 
 * @property string $code
 * @property string|null $company_name
 * @property int|null $industry
 * @property Carbon|null $establishment_date
 * @property string|null $postal_code
 * @property int|null $prefecture
 * @property string|null $city
 * @property string|null $street_address
 * @property string|null $building_name
 * @property string|null $tel
 * @property string|null $fax
 * @property int|null $employee_count
 * @property string|null $web_site_url
 * @property string|null $logo
 * @property string|null $remarks
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models\Schema
 */
class MCompanyInfo extends Model
{
	protected $table = 'm_company_info';
	protected $primaryKey = 'code';
	public $incrementing = false;

	protected $casts = [
		'industry' => 'int',
		'establishment_date' => 'datetime',
		'prefecture' => 'int',
		'employee_count' => 'int'
	];

	protected $fillable = [
		'company_name',
		'industry',
		'establishment_date',
		'postal_code',
		'prefecture',
		'city',
		'street_address',
		'building_name',
		'tel',
		'fax',
		'employee_count',
		'web_site_url',
		'logo',
		'remarks'
	];
}
