<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    protected $table="images";
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'link', 'priority'
    ];
    
}
