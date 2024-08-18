<?php

namespace App\Http\Controllers;

use App;
use c;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        c::manager()->theme()->setTheme('cl-web');
        $app = \c::app();
        $app->addDiv()->add("Hello");
        $app->addDiv()->addA()->setHref(c::url('https://google.com'))->add('Google');
        $selectSearch = $app->addSelectSearchControl();

        return $app;
    }
}
