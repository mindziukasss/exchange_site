<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $table = 'items';

    protected $fillable =['user_id','title', 'description', 'exchange_to'];
}
