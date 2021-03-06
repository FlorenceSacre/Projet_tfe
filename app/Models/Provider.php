<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = 'provider';

    public $timestamps = false;

    protected $guarded = [];

    protected $fillable = [
        'lastname', 'firstname'
    ];
    public function CategoryVideo() {
        return $this->hasMany(CategoryVideo::class);
    }
    public function Subscription() {
        return $this->hasMany(Subscriptions::class);
    }
}
