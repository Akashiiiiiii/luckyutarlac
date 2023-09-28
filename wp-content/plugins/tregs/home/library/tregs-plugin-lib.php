<?php

$getParam = isset($_REQUEST['param']) ?$_REQUEST['param'] :'';

if(!empty($getParam)){
    if($getParam=="get_message"){
        echo json_encode(array(
            "name"=>"Tregs Plugin",
            "author"=>"Ejhay Bautista"
        ));
        die;
    }

    if($getParam=="post_form_data"){
        echo json_encode($_REQUEST);
        die;
    }
}

