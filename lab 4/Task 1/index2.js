
    // Declare an empty object named 'points'
    var points = {};

    // Get reference to HTML elements
    var div_show = document.getElementById("div_show");
    var number_input = document.getElementById("anynumber");

    // Function to push a number into the object
    function my_push(number) {
        if (number !== "") {
            // Generate unique key for each pushed number
            var key = Object.keys(points).length + 1;
            points[key] = number;
            div_show.innerHTML = "Pushed: " + number;
        } else {
            div_show.innerHTML = "Nothing to push";
        }
        number_input.value = "";
    }

    // Function to pop a number from the object
    function my_pop() {
        var keys = Object.keys(points);
        if (keys.length !== 0) {
            var lastKey = keys[keys.length - 1];
            var popped = points[lastKey];
            delete points[lastKey];
            div_show.innerHTML = "Popped: " + popped;
        } else {
            div_show.innerHTML = "Object is empty";
        }
    }

    // Function to display the object's key-value pairs
    function my_show() {
        var keys = Object.keys(points);
        if (keys.length !== 0) {
            var result = "";
            keys.forEach(function(key) {
                result += key + ": " + points[key] + ", ";
            });
            div_show.innerHTML = result.slice(0, -2); // Remove trailing comma and space
        } else {
            div_show.innerHTML = "Empty object";
        }
    }

