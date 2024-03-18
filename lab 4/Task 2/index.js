function validation() {
    let fname = document.getElementById("#fname").value;
    let lname = document.getElementById("#lname").value;
    let name = /^[a-zA-Z]{8,10}$/i ;

    if (fname.match(name) === false) {
        fname.inputElement.placeholder ="The Entered name is not Valid";
        } 

}