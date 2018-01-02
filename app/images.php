<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    protected $table='images';
    protected $fillable = [
        'Nom','images','article_id', 'user_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
