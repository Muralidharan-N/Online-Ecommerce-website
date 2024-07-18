function login() {


    var name = document.getElementById("name").value;
    var pwd = document.getElementById("pwd").value;

    var alertError = document.getElementById("alert-error");
    var alertSuccess = document.getElementById("alert-success");





    //console.log("name "+ name);

    //console.log("pwd "+ pwd);



    if (name == "mohamed" && pwd == "admin") {


        alertError.style.backgroundColor = "";
        alertSuccess.style.backgroundColor = "#04AA6D";

        alertSuccess.innerHTML = "<strong>Success!</strong> Login Successful !";

        window.setTimeout(function () {


            window.location.href = "admin/index.php";

        }, 1000);


        //window.location.href = "../index.html";
    }

    else {



        alertError.style.backgroundColor = "#f44336";



        if (name.length < 5) {

            //console.log("name length"+ name.length);

            alertError.innerHTML = "   <strong>Error!</strong> Verifier votre Saisie (name short length < 5) !";
        }



        else if (pwd.length < 5) {

            //console.log("pwd length"+ pwd.length);

            alertError.innerHTML = "   <strong>Error!</strong> Verifier votre Saisie (Password short length < 5) !";
        }

        else {
            alertError.innerHTML = "   <strong>Error!</strong> Name and password incorrecte !";

        }






    }


}