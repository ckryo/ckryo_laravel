<?php

namespace App\Controllers;

use Illuminate\Http\Request;
use Ckryo\Laravel\App\Http\Controllers\Controller as BaseController;

class Controller extends BaseController
{


    function index () {
        dd('这是演示首页');
    }


}
