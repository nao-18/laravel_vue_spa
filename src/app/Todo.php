<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Todo
 *
 * @property int $id
 * @property string $todo
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo whereTodo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Todo whereUserId($value)
 * @method static find(int $id)
 * @mixin \Eloquent
 */
class Todo extends Model
{
    //
}
