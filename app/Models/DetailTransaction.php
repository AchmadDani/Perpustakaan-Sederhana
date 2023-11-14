<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaction extends Model
{
    use HasFactory;
    protected $table = 'detail_transactions';

    protected $fillable = [
        'transaction_id',
        'collection_id',                // ACHMAD DANI SAPUTRA | 6706223131
        'tanggal_kembali',                  
        'status',                  
    ];
}
