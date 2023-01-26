<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $guarded = ['id'];

    // // public $fillable = 'barang';
    //     protected $table = 'produk';

    // protected $fillable = [
    //     'name_produk',
    //     'slug',
    //     'harga',
    //     'image',
    //     'short_description',
    //     'description',
    //     'stok',
    //     'weight',
    // ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
