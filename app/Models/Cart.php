<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';

    public $timestamps = false;

    protected $guarded = [];

    protected $fillable = [
        'date','status'
    ];
    public function users() {
        return $this->belongsTo(User::class);
    }
}
