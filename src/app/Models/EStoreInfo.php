<?php

namespace App\Models;

use App\Models\Schema\MStoreInfo;
use Carbon\Carbon;

/**
 * Class EStoreInfo
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
 * @package App\Models
 */
class EStoreInfo extends MStoreInfo
{
}
