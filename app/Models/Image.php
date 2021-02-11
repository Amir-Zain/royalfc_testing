<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'image'];

    private $directory = '/images/';
    public function getImageAttribute($value)
    {
        return $this->directory . $value;
    }
}
