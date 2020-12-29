<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class post extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $directory = '/images/';

    protected $date = ['deleted_at'];
    protected $fillable = ['title','content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function photos()
    {
       return $this->morphMany(Photo::class , 'image');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class,'taggable');
    }

    public function getTitleAttribute($value)
    {
        return strtoupper($value);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtoupper($value);
    }

    public function getPathAttribute($value)
    {
        return $this->directory . $value;
    }

}
