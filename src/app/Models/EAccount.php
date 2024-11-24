<?php

namespace App\Models;

use App\Models\Schema\MAccount;
use Carbon\Carbon;

/**
 * Class EAccount
 * 
 * @property int $id
 * @property string|null $email
 * @property string|null $password
 * @property string|null $company_code
 * @property string|null $store_code
 * @property string|null $parent_company_code
 * @property string|null $parent_store_code
 * @property string|null $remember_token
 * @property Carbon|null $email_verified_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class EAccount extends MAccount
{
}
