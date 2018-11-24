<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noticia extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id', 'titulo', 'descricao', 'texto'
    ];

    public function user()
    {
        // hasOne(RelatedModel, foreignKeyOnRelatedModel = user_id, localKey = id)
        return $this->belongsTo(User::class, 'usuario', 'id');
    }
}
