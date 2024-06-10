<?php

namespace Dacdc\Asm1\Controllers\Admin;

use Dacdc\Asm1\Commons\Controller;
use Dacdc\Asm1\Commons\Helper;

class DashboardController extends Controller
{
    public function dashboard() {        
        $this->renderViewAdmin(__FUNCTION__);
    }
}