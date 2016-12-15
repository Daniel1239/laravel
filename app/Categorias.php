<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    public function productos()
    {
        return $this->hasMany(Productos::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
