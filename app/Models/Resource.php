<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Resource extends Model
{
    use HasFactory;
    protected $fillable = ['filename', 'user_id', 'status', 'deleted','file_descript'];

    public function authors()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
