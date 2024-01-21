<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
class Group extends Model implements Authenticatable

{
    use HasFactory;
    public $table = "group";
    use AuthenticatableTrait;
    
    protected $fillable = [
        'name', 'password', 'is_binusian', 'is_admin'
    ];

    public function group(){
        return $this->hasOne(GroupData::class);
    }

    // public function isAdmin(){
    //     return $this->is_admin;
    // }
}
