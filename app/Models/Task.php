<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * 複数代入不可能な属性
     */
    protected $guarded = ['id'];
    
     public function images()
    {
        return $this->hasMany('App\Image');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
     protected $fillable = [
    'name',
    'path',
    'image',
    
  ];
   public function task()
  {
  $fnamebase = \Config::get('fpath.image').$this->id."/"."image.";
  }
}
