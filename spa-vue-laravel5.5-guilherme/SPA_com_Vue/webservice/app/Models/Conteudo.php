<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'texto', 'image', 'link', 'data'
    ];

    public function comentarios() {
        return $this->hasMany('App\Models\Comentario');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
    public function curtidas() {
        return $this->belongsToMany('App\Models\User', 'curtidas', 'conteudo_id', 'user_id');
    }
}
