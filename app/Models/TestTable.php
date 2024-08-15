<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestTable extends Model
{
    use HasFactory;

    protected $table = 'test_table';

    protected $fillable = [
        'name',
        'phone_whatsapp',
        'phone_contact',
        'cpf',
        'cep',
        'know_company',
        'created_at'
    ];
}
