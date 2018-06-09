<?php

namespace App\Eloquent\Models\Page;

use App\Eloquent\Models\Page;
use Illuminate\Database\Eloquent\Model;

class Attributes extends Model
{
    protected $table = 'page_attributes';

    protected $fillable = [
        'name',
        'value',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}