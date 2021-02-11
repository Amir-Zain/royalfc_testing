<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = ['image'];
    private $directory = '/images/';
    public function getImage($value)
    {
        return $this->directory . $value;
    }
}
