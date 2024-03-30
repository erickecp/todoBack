<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarea extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'cat_id',
        'estatus',
    ];
    public function categories(){
        return $this->belongsTo(categoria::class);
    }


}
