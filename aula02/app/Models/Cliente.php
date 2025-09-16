<?php

namespace App\Models;
use Illuminate\Database\Eloquent\factories\HasFactory;
use Illuminate\Database\Eloquent\MOdel;

class Cliente extends Model

{
    use HasFactory;

    protected $table = 'cliente'; //Nome da tabela

    public $fillable = ['id', 'primeiroNome','sobrenome'];

    public $timestamps = false;

}
//nao funcionou 
