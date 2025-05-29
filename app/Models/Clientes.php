<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = [
        'id_cliente',
    ];

    protected $table = 'clientes';

    public function clientes()
    {
        return $this->belongsTo(clientes::class);
    }

    public function CreateClientes()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}

