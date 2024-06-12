<?php echo '<!doctype html>'; ?>
<html>
<head>
    <?php
    echo '<script>
        function myfunction(a,b){
            document.getElementById("result").innerHTML="a * b";
            return a*b;
        }
        document.getElementById("result").innerHTML= myfunction(1,1);
        </script>
        ';

    ?>

</head>
<body onload='document.getElementById("result").innerHTML= myfunction(2,2);'>
<?php
echo '<p>Hello world! <br>What is the result?</p>';
for ($i=0; $i<4; $i++) {
    echo '<button onclick="myfunction('.$i.', '.($i +1) .')">Click me '.$i.'</button>';
}
echo '<p>The result is: <span id="result"></span></p>';
?>
</body>
</html>
