<?php
/**
 * Created by PhpStorm.
 * User: philr
 * Date: 04/04/2017
 * Time: 14:23
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Topo extends Model
{
    protected $table = 'topos';
    protected $fillable = [];

    public function climbs()
    {
        return $this->hasMany('App\Climb', 'crag_id', 'id')->orderBy('id');
    }

    public function filePath()
    {
        return Storage::url('topos/' . $this->id);
    }
}