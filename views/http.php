<?php
/**
 * Created by PhpStorm.
 * User: ardip
 * Date: 02.02.2018
 * Time: 08:46
 */
function get($name){
    if(isset($this->vars[$name])){
        return $this->vars[$name];
    } else {
        return false;
    }
}