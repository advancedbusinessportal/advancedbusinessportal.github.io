// Prerak JAVA SCRIPT



function checkuname(event) {
    var myname = event.currentTarget;

    var b = myname[1].value;

    document.getElementById("msg_usname").innerHTML = "";

    var result = true;

    var screen_v = /[a-zA-Z0-9]\S*$/;
    var sty = document.getElementById("vBemail");

    if (b == null || b == "" || screen_v.test(b) == false) {

        // document.getElementById("msg_usname").innerHTML = " Please don't use any spaces or other non-word characters";
        document.getElementById("msg_usname").innerHTML = " Incorrect Username (No Special Characters)";

        sty.style.border = "2px solid #eb878b";

        result = false;
    }
    if (result == false) {
        event.preventDefault();
    } else {
        sty.style.border = "2px solid #00a13d";
    }

}



function checkpassword(event) {
    var mypassword = event.currentTarget;

    var y = mypassword[2].value;
    document.getElementById("msg_pswd").innerHTML = "";

    var result = true;

    var pswd_v = /^(?=.*\d)(?=.*[a-z])(?=.*)(?=.*[a-zA-Z]).{5,}$/;
    var sty1 = document.getElementById("vBpswd");


    if (y == null || y == "" || pswd_v.test(y) == false) {
        document.getElementById("msg_pswd").innerHTML = "Password is invalid. Include letters, atleast one digit and atleast one Symbol.";
        sty1.style.border = "2px solid #eb878b";
        result = false;
    }
    if (result == false) {
        event.preventDefault();
    } else {
        sty1.style.border = "2px solid #00a13d";
    }


}