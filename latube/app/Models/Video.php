<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Video extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function author()
    {

      return $this->hasOne(User::class, 'id', 'author_id');

    }

}
