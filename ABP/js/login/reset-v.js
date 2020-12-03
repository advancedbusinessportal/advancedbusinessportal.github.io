function resetForm(event) {
   // event.preventDefault();
    var result = true;
    var textNode;

    //
    var elements = event.currentTarget;
    var eid = elements[1].value;
    var uname = elements[2].value;
    var pswd = elements[3].value;
    var cpswd = elements[4].value;

    var regex_eid = /^[0-9]{4}$/;
    var regex_uname = /^(?=.{6,20}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$/;
    var regex_npswd = /^(?=.*\d)(?=.*[a-z])(?=.*)(?=.*[a-zA-Z]).{5,}$/;

    var msg_eid = document.getElementById("msg_eid");
    var msg_uname = document.getElementById("msg_uname");
    var msg_npswd = document.getElementById("msg_npswd");
    var msg_ncpswd = document.getElementById("msg_ncpswd");

    msg_eid.innerHTML = "";
    msg_uname.innerHTML = "";
    msg_npswd.innerHTML = "";
    msg_ncpswd.innerHTML = "";

    var sty = document.getElementById("vBeid");
    var sty1 = document.getElementById("vBuname");
    var sty2 = document.getElementById("vBnpswd");
    var sty3 = document.getElementById("vBncpswd");

    //EMPLOYEE ID
    if (eid == null || eid == "") {
        textNode = document.createTextNode("Employee ID is Empty.");
        msg_eid.appendChild(textNode);
        sty.style.border = "2px solid #eb878b";
        result = false;
    } else if (regex_eid.test(eid) == false) {
        textNode = document.createTextNode("Wrong Format(Only 4 Digits). Example: 0000");
        msg_eid.appendChild(textNode);
        sty.style.border = "2px solid #eb878b";
        result = false;
    } else {
        sty.style.border = "2px solid #00a13d";
    }

    //Username
    if (uname == null || uname == "") {
        textNode = document.createTextNode("Username is Empty.");
        msg_uname.appendChild(textNode);
        sty1.style.border = "2px solid #eb878b";
        result = false;
    } else if (regex_uname.test(uname) == false) {
        textNode = document.createTextNode("Please Enter Correct Username");
        msg_uname.appendChild(textNode);
        sty1.style.border = "2px solid #eb878b";
        result = false;
    } else {
        sty1.style.border = "2px solid #00a13d";
    }

    //password
    if (pswd == null || pswd == "") {
        textNode = document.createTextNode("Password is empty.");
        msg_npswd.appendChild(textNode);
        sty2.style.border = "2px solid #eb878b";
        result = false;
    } else if (regex_npswd.test(pswd) == false) {
        textNode = document.createTextNode("Password is invalid. Include atleast one digit and one Symbol.");
        msg_npswd.appendChild(textNode);
        sty2.style.border = "2px solid #eb878b";
        result = false;
    } else if (pswd.length < 5) {
        textNode = document.createTextNode("Password should be atleast 5 characters long");
        msg_npswd.appendChild(textNode);
        sty2.style.border = "2px solid #eb878b";
        result = false;
    } else {
        sty2.style.border = "2px solid #00a13d";
    }

    // Confirm password
    if (cpswd == null || cpswd == "") {
        textNode = document.createTextNode("Confirm Password is empty.");
        msg_ncpswd.appendChild(textNode);
        sty3.style.border = "2px solid #eb878b";
        result = false;
    } else if (cpswd != pswd) {
        textNode = document.createTextNode("Password Do Not Match");
        msg_ncpswd.appendChild(textNode);
        sty3.style.border = "2px solid #eb878b";
        result = false;
    } else {
        sty3.style.border = "2px solid #00a13d";
    }


    var sty4 = document.getElementById("reset-btn");
    if (result == false) {
        sty4.style.color = "#eb878b";
        event.preventDefault();
    } else {
        sty4.style.color = "#fff";
    }

}