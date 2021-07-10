<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    protected $table = 'ticket';
    protected $fillable = ['user_id', 'movie_room_id', 'price'];
}
