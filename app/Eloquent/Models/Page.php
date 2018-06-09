<?php

namespace App\Eloquent\Models;

use App\Eloquent\Models\Page\Attributes;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';

    protected $fillable = [
        'name',
    ];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }

    public function attributes()
    {
        return $this->hasMany(Attributes::class);
    }
}