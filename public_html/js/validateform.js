/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function validateName(field){
    return (field == "")? "Name needed" : "";
}

function validateSubject(field){
    return (field == "")? "Subject needed" : "";
}

function validateEmail(field){
    if(field == ""){
        return "Email needed";
    }else if(!((field.indexOf(".")>0)&&
            (field.indexOf("@")>0)) ||
            /[^a-zA-z0-9.@_-]/.test(field)){
        return "The email address is invalid.";
    }else{
        return "";
    }
}
