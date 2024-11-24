<?php

namespace App\Models;

use App\Models\Schema\MCompanyInfo;
use Carbon\Carbon;

/**
 * Class ECompanyInfo
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
 * @package App\Models
 */
class ECompanyInfo extends MCompanyInfo
{
}
