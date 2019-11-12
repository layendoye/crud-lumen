<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// class Article extends Model
// {

//     protected $fillable = [
//         'title', 'description','status'
//     ];

// }
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Article extends Eloquent {
    protected $collection = 'articles';
    protected $connection='mongodb';
        protected $fillable = [
        'title', 'description','status'
    ];
}
