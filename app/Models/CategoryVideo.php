<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class CategoryVideo extends Model
{
    protected $table = 'categoryvideo';

    public $timestamps = false;

    protected $guarded = [];

    protected $fillable = [
        'category'
    ];
    public function users() {
        return $this->hasMany(User::class);
    }
}
