<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use App\Models\Schema\MSegmentType;

/**
 * Class ESegmentType
 * 
 * @property string $code
 * @property string|null $segment_type_name
 * @property string|null $sort_order
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class ESegmentType extends MSegmentType
{
    use HasFactory, Notifiable;
}
