<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model

{
    use HasFactory;
    public $table = "group";
    
    protected $fillable = [
        'name', 'password', 'is_binusian', 'is_admin'
    ];

    public function group(){
        return $this->hasOne(GroupData::class);
    }
}
