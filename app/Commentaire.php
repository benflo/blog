<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $table='commentaires';
    protected $fillable = [
        'commentaire'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
