<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

// class User extends Model
class User extends Authenticatable
{
    use HasFactory;

    protected $guarded = ['id'];

    public function products()
    {
        return $this->hasMany(Product::class, 'produk_user', 'id');
    }

    public function rents()
    {
        return $this->hasMany(Rent::class, 'sewa_user', 'id');
    }

    // public function getAuthPassword()
    // {
    //     return $this->user_password;
    // }
}
