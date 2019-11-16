<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Article extends Eloquent {
    protected $collection = 'articles';
    protected $connection='mongodb';
        protected $fillable = [
        'title', 'description','status'
    ];
}
