<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function user()
    {
      return $this->belongsTo(User::class);
    }
    public function ratings()
    {
      return $this->belongsTo(Rating::class);
    }

    protected $fillable = ['user_id', 'titre', 'description'];
}
