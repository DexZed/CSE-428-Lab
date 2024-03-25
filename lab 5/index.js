function validirty() {
    var name = /^[^\s]+$/;
    var password = /^[\w\d!@$%^&*()_\-+=\[\]{}\\|;:'/?<>,."`~]{8,32}$/i;
    let mobile = /^\+?(88)?0?1[3456789][0-9]{8}\b/i;
    let email = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/i;

    if ($("#name").val() == "" ) {
        alert("Name Cannot be empty");
    }
    
    if ($("#uname").val().match(name) ) {
        $("#uname").css("backgroundColor","lightgreen");
    } else {
        $("#uname").css("backgroundColor","red");
    }

    if ($("#password").val().match(password)) {
        $("#password").css("backgroundColor","lightgreen");
    } else {
        $("#password").css("backgroundColor","red");
    }

    if ($("#rpassword").val() !== $("#password").val()) {
        alert("Passwords do not match" );
    } else {
        $("#rpassword").css("backgroundColor","lightgreen");
    }

    if ($("#contact").val().match(mobile)) {
        $("#contact").css("backgroundColor","lightgreen");
    } else {
        $("#contact").css("backgroundColor","red");
    }

    if ($("#email").val().match(email)) {
        $("#email").css("backgroundColor","lightgreen");
    } else {
        $("#email").css("backgroundColor","red");
    }


}


// $("").val()