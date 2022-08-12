<?php

namespace Webjhin\Crossadmin\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The CrossadminModel class.
 *
 * @package webjhin/crossadmin
 * @author  neonterra <neonterras@gmail.com>
 */
class CrossadminModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'crossadmin';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
