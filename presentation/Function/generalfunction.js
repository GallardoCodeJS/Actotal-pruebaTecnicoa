//Funcion que borra los input
function Reset() {
    $('[name="name"]').val('');
    $('[name="email"]').val('');
    $('[name="phone"]').val('');
}

//Oculta msj de success and error  
function Hiddemsj() {
    setTimeout(function () {
        $("#success").fadeOut();
        $("#emptyfield").fadeOut();
        $("#dberror").fadeOut();
        $("#butsave").removeAttr("disabled");
    }, 4500);
}

//Muestra referencias En ayuda
function mostrar() {
    divRef = document.getElementById('Ref');
    divRef.style.display = '';
}
//Cierra el div
function cerrar() {
    divRef = document.getElementById('Ref');
    divRef.style.display = 'none';
}

//Carga la tabla de usuarios
function LoadTable() {
    $.ajax({
        url: "./Function/showuser.php",
        type: "POST",
        cache: false,
        success: function (data) {
            $('#table').html(data);
        }
    });
}
LoadTable(); //Ejecuta la funcion


//Validacion de form
$(document).ready(function () {
    $("form").on("submit", function (event) {
        if (!validate()) {
            event.preventDefault();
        }
    });

    //Validacion de campos
    var validate = function () {
        //var error = false;
        var $name = $('#name').val(),
            $email = $('#email').val(),
            $phone = $('#phone').val();

        //Expresiones regulares
        //Name
        var expregname = new RegExp("^[A-Za-z]{2,15}\\s{1}[A-Za-z]{2,15}$");
        //Email
        var expregemail = new RegExp("^[\\w]+@{1}[\\w]+\\.[a-z]{2,3}$");
        //Telefono
        var exprphone = new RegExp("^[0-9]{8,14}$");

        if ($name === '' || $email === '' || $phone === '') {
            //console.log("entre");
            $('#emptyfield').fadeIn();
            $("#butsave").attr("disabled", "disabled");
            $('#emptyfield').html('!! No deje campos vacios !!');
            Hiddemsj();
            return false;

        } else if ($name.length < 4 || $email.length < 0 || $phone.length < 7) {
            $('#emptyfield').fadeIn();
            $("#butsave").attr("disabled", "disabled");
            $('#emptyfield').html('Existen campos que no cumplen con su longitud correspondiente');
            Hiddemsj();
            return false;

        } else if (expregname.test($name) && expregemail.test($email) && exprphone.test($phone)) {
            //Ejecuta el insert
            $.ajax({
                url: "./Function/saveuser.php",
                type: "POST",
                data: {
                    name: $name,
                    email: $email,
                    phone: $phone
                },
                cache: false,
                success: function (dataResult) {
                    var dataResult = JSON.parse(dataResult);

                    if (dataResult.statusCode == 200) {
                        $("#success").fadeIn();
                        $("#butsave").attr("disabled", "disabled");
                        $("#success").html('Exito, datos ingresados correctamente');
                        //Recarga la tabla automaticamente
                        LoadTable();
                        //Borra los input
                        Reset();
                        //Oculta ls msj de error
                        Hiddemsj();
                    } else if (dataResult.statusCode == 201) {
                        $('#dberror').fadeIn();
                        $("#butsave").attr("disabled", "disabled");
                        $('#dberror').html('Error DataBase, Campo "Nombre" ya existe!!');
                        //Oculta ls msj de error
                        Hiddemsj();
                    }
                }
            });

        } else {
            $('#emptyfield').fadeIn();
            $("#butsave").attr("disabled", "disabled");
            $('#emptyfield').html('Existen campos que no cumplen con los formatos correspondientes');
            Hiddemsj();
            return false;
        }

    };
});