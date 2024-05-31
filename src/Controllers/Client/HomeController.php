<?php 

namespace Dacdc\Asm\Controllers\Client;

use Dacdc\Asm\Commons\Controller;

class HomeController extends Controller{
    public function index(){
        $name = 'DacDC123';
        
        $this-renderViewClient('home', [
            'name' => $name
        ]);
    }
}