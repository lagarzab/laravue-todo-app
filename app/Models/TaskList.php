<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskList extends Model
{
    use HasFactory;
    
    protected $gaurded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'finished', 'style', 'archived', 'user_id'
    ];

    public function user() {
        return $this->belongsToMany(User::class);
    }
}
