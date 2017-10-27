<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $tabel = 'posts';

    public $primaryKey = 'id';

    public $timestamps = true;
}
