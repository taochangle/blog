<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
    public function header(){
    	
        $this->display();
    }
    public function footer(){
    	$this->display();
    }
}