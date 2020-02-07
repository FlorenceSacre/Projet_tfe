<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $table = 'subscription';

    public $timestamps = false;

    protected $fillable = [
        'description', 'start_date', 'end_date',
    ];

    public function users() {
        return $this->hasMany(User::class);
    }
}
