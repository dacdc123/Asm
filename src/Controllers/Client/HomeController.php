<?php 

namespace Dacdc\Asm1\Controllers\Client;

use Dacdc\Asm1\Commons\Controller;
use Dacdc\Asm1\Commons\Helper;
use Dacdc\Asm1\Models\Product;

class HomeController extends Controller{
    public function index(){
        $name = 'DacDC123';
        
        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}