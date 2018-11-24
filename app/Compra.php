<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    public function material() {
        return $this->belongsTo(Material::class);
    }

    public function proveedor() {
        return $this->belongsTo(Proveedor::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
