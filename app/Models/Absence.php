<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $absence_type_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon $day
 * @property int $duration_minutes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\AbsenceType $absenceType
 * @property-read \App\Models\User $user
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence whereAbsenceTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence whereDurationMinutes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence withTrashed(bool $withTrashed = true)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Absence withoutTrashed()
 *
 * @mixin \Eloquent
 */
class Absence extends Model
{
    use SoftDeletes;

    protected $casts = [
        'day' => 'date',
    ];

    protected $guarded = [];

    public function absenceType(): BelongsTo
    {
        return $this->belongsTo(AbsenceType::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
