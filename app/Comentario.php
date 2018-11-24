<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    
	public $timestamps = false;

	protected $fillable = [
        'id', 'text', 'usuario', 'noticia'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'usuario', 'id');
    }

    public function noticia()
    {
        return $this->belongsTo(noticia::class, 'usuario', 'id');
    }

}
