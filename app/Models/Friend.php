<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','name', 'title','message','image','status', 'deleted'];

    public function poster()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
