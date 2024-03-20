<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = "clients";
    protected $fillable = [
        'nome', 'telefones', 'cpf', 'data_aniversario', 'endereco', 'emails'
    ];
    use HasFactory;
}
