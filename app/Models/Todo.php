<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;


    // https://docs.rularavel.com/docs/8.x/eloquent#timestamps
    // public $timestamps = false;
    protected $fillable = [
        'title',
        'desc',
        'status'
    ];

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }
}
