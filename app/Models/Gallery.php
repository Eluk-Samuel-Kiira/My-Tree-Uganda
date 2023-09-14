<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'galleries';
    protected $fillable = ['user_id','title','description','image','status', 'deleted',];

    public function poster()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
