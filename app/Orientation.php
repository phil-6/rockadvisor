<?php
/**
 * Created by PhpStorm.
 * User: philr
 * Date: 19/03/2017
 * Time: 14:06
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orientation extends Model
{
    protected $table = 'orientations';

    protected $fillable = [];

    /**
     * Get the crags that have the orientation.
     */
    public function crags()
    {
        return $this->hasMany('App\Crag', 'orientation_id', 'id')->orderBy('name');
    }
}