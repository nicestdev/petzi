<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Attendance> $attendances
 * @property-read int|null $attendances_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttendanceType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttendanceType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttendanceType query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttendanceType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttendanceType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttendanceType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttendanceType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttendanceType whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
class AttendanceType extends Model
{
    protected $guarded = [];

    public function attendances(): HasMany
    {
        return $this->hasMany(Attendance::class);
    }
}
