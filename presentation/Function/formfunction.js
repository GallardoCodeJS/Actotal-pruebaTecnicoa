//Desactiva el historial en los inputs
$(function () {
    $("input").attr("autocomplete", "off");
});

//Pinta los inputs sino cumple
function nameValueChange(){
    //Formato de name
    var expregname = new RegExp("^[A-Za-z]{2,15}\\s{1}[A-Za-z]{2,15}$");
    //Toma solo el atributo
    var $nameatr = document.getElementById("name");
    //variable que guarda el valor
    var $name = document.getElementById("name").value;
    //console.log($name);

    if(expregname.test($name) && $name.length > 2 && $name.length < 31){
        $nameatr.style.backgroundColor = "green";
    }else{
        $nameatr.style.backgroundColor = "red";
    }
    
}

function emailValueChange(){
    //Formato de email
    var expregemail = new RegExp("^[\\w]+@{1}[\\w]+\\.[a-z]{2,3}$");
    //Toma solo el atributo
    var $emailatr = document.getElementById("email");
    //variable que guarda el valor
    var $email = document.getElementById("email").value;

    if(expregemail.test($email) && $email.length < 41){
        $emailatr.style.backgroundColor = "green";
    }else{
        $emailatr.style.backgroundColor = "red";
    }
}

function phoneValueChange(){
    //Formato de email
    var exprphone = new RegExp("^[0-9]{8,14}$");
    //Toma solo el atributo
    var $phoneatr = document.getElementById("phone");
    //variable que guarda el valor
    var $phone = document.getElementById("phone").value;

    if(exprphone.test($phone) && $phone.length > 7 && $phone.length < 15){
        $phoneatr.style.backgroundColor = "green";
    }else{
        $phoneatr.style.backgroundColor = "red";
    }
}

//