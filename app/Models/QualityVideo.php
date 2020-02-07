<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class QualityVideo extends Model
{
    protected $table = 'qualityvideo';

    public $timestamps = false;

    protected $guarded = [];

    protected $fillable = [
        'quality'
    ];
    public function users() {
        return $this->hasMany(User::class);
    }
}
