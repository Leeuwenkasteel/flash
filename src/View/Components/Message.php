<?php

namespace Leeuwenkasteel\Flash\View\Components;

use Illuminate\View\Component;

class Message extends Component{
 
    public function __construct(){
        
    }
    public function render(){
        return view('auth::components.message');
    }
}