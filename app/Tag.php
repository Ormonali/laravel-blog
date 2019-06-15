<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  protected $table = 'tags';
  public $primaryKey = 'id';
  public $timestamps = true;

    public function post()
    {
      return $this->belongsToMany('App\Post','post_tags');
    }

    public function getRouteKeyName()
    {
      return 'name';
    }

}
