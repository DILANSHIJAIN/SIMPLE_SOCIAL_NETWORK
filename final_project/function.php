<?php
function EmailValidation($email){
    return filter_var($email,Filter_VALIDATE_EMAIL)!==false;
}
function BrowserAgent(){
    return $_SERVER['HTTP_USER_AGENT'];
}

function UserIP(){
    return $_SERVER['REMOTE_ADDR'];
}
?>