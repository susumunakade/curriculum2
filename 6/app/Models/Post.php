<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static $rules = [
        'body' => 'required',
    ];

    // Postモデルに関連付けを行う
    public function users()
    {
      return $this->hasMany('App\Models\User');
    }
}
