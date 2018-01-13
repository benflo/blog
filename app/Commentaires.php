<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaires extends Model
{
    protected $table='commentaires';
    protected $fillable = ['commentaire', 'article_id', 'user_id'];

    public function article()
    {
        return $this->belongsTo('App\Articles');
    }
}
