<?php

function formatar_data($data){
    $res = implode('/', array_reverse(explode('-', $data)));;
    return $res;
}