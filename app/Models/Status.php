<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Status
 *
 * @property int $id
 * @property string $content
 * @property int $user_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Status whereUserId($value)
 * @mixin \Eloquent
 */
class Status extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
