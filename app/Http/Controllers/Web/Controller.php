<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller as BaseController;

class Controller extends BaseController
{
    public function __construct()
    {
        $this->setViewsRoot('web');
    }
}
