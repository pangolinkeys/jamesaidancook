<?php

namespace App\Http\Controllers;

use App\Eloquent\Models\Page;
use App\Eloquent\Models\Site;

class CMSController extends Controller
{
    /**
     * @var Site
     */
    private $site;

    /**
     * @var Page
     */
    private $page;

    public function __construct(Site $site, Page $page)
    {
        $this->site = $site;
        $this->page = $page;
    }

    public function page($site, $page)
    {
        return response()->json(
            $this->site->where(['name' => $site])->first()->pages()->where(['name' => $page])->first()->attributes
    );
    }
}