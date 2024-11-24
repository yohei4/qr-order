<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use App\Models\Schema\MSegment;

/**
 * Class MSegment
 * 
 * @property int $code
 * @property string $segment_type_code
 * @property string|null $segment_name
 * @property string|null $sort_order
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class ESegment extends MSegment
{
    use HasFactory, Notifiable;
}
