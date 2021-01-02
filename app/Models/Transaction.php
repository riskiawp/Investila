<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lot;
use App\Models\User;



class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_lot',
        'jumlah',
        'keuntungan',
        'status'
    ];

    public function lot(){
        return $this->hasOne(Lot::class, 'id', 'id_lot');
    }

    public function user(){
        return $this->hasOne(User::class, 'id', 'id_user');
    }

    
}
