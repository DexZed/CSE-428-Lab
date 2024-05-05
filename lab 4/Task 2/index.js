

function valid() {
    var name = document.getElementById("#name").value;
    var uname = document.getElementById("#uname").value;
    var password = document.getElementById("password").value;
    var gender = document.getElementById("#gender").value;
    var contact = document.getElementById("#contact").value;
    let my_notif = document.getElementById("notif");


    if (name == "") {
        document.getElementById("#item1").innerHTML = "Name Cannot be empty";
    }
    
    let vUname = /^[\w\d!@#$%^&*()-+=~`\[\]{}|;:'",.<>?\\/]{8,}$/.exec(uname);

    if (vUname == null || vUname == "") {
        document.getElementById("#item2").innerHTML = "Userame is not valid";
    }
    let mobile = /^\+?(88)?0?1[3456789][0-9]{8}\b/i;
    let valid_mobile = contact.match(mobile);
    if (valid_mobile) {
        my_notif.innerHTML = "Not a Valid Contact";
    }
}