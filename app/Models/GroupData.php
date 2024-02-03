<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupData extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_id', 'fullname', 'email', 'whatsapp', 'line_id', 'github', 'birthplace', 'birthdate', 'cv_file', 'flazz_file', 'idcard_file', 'regist_date'
    ];

    public function group_data(){
        return $this->belongsTo(Group::class, 'group_id');
    }
}
