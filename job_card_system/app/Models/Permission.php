<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $table = 'permissions';

    protected $fillable = [
        'id',
        'user_id',
        'module_id',
        'granted',
        'created_at'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id', 'id');
    }

    public  function module(){
        return $this->belongsTo(Module::class,'module_id','id');
    }
}
