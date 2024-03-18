points = new Array(); // this is an empty array
        div_show = document.getElementById("div_show");
        number_input = document.getElementById("anynumber");
        function my_push(number) {
            if (number != "") {
                points.push(number);
                div_show.innerHTML = "Pushed: " + number;
            } else div_show.innerHTML = "Nothing to push";
            number_input.value = "";
        }
        function my_pop() {
            div_show.innerHTML = "Poped: " + points.pop();
        }
        function my_show() {
            if (points.length != 0) {
                div_show.innerHTML = points.toString();
            } else {
                div_show.innerHTML = "Empty";
            }
        }