<?php 

namespace Dacdc\Asm\Controllers\Client;

use Dacdc\Asm\Commons\Controller;

class ProductController extends Controller
{
    public function index() {
        echo __CLASS__ . '@' . __FUNCTION__;
    }

    public function detail($id) {
        echo __CLASS__ . '@' . __FUNCTION__ . '@' . $id;
    }
}