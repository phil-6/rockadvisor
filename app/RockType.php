<?php
/**
 * Created by PhpStorm.
 * User: philr
 * Date: 19/03/2017
 * Time: 14:08
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class rockType extends Model
{
    protected $table = 'rockTypes';

    protected $fillable = [];

    /**
     * Get the crags that have the rock type.
     */
    public function crags()
    {
        return $this->hasMany('App\Crag', 'rockType_id', 'id')->orderBy('name');
    }
}