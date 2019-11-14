<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Comment extends Eloquent {
    protected $collection = 'commentaire';
    protected $connection='mongodb';
        protected $fillable = [
        'content'
    ];
}
