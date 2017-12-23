<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $table='image';
    protected $fillable = [
        'Nom','image','article_id', 'user_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
