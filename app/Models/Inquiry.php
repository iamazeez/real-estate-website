<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'descreption',
        'bedrooms',
        'asking_price',
        'bathroom',
        'garage',
        'squarefeet',
        'lot_size',
        'image'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
