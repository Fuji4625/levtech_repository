<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    protected $fillable =  [
        'title',
        'body',
    ];
    
    //public function getPaginateByLimit(int $limit_count = 10)
    public function getPaginate()
        {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate(5);
        }
        
        
    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}

