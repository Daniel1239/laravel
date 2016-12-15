<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    public function category()
    {
        return $this->belongsTo(Categorias::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
