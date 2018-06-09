<?php

namespace App\Eloquent\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $table = 'sites';

    protected $fillable = [
        'name',
    ];

    public function pages()
    {
        return $this->hasMany(Page::class);
    }
}