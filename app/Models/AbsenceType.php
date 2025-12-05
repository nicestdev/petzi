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
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Absence> $absences
 * @property-read int|null $absences_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceType query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AbsenceType whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
class AbsenceType extends Model
{
    protected $guarded = [];

    public function absences(): HasMany
    {
        return $this->hasMany(Absence::class);
    }
}
