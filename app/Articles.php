<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $table='articles';
    protected $fillable = ['titre','contenu','publier','user_id'];

    //public function scopePublished($query){
      //  return $query->where('publier',true);
    //}
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
