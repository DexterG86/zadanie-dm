<html>
<body>
GET 
<form method="GET">
<input type = "text" name="Li_ś">

<input type = "text" name="Li_r">
</form>





<?php


for ($i = 1; $i <= 10; $i++) {
    echo $i;
}


if(array_key_exists('button1', $_POST)) {
    button1();
}

function button1() {
    echo "".$i;
}



?>

                <form method="post">
                <input type="submit" name="button1"
                class="button" value="Rzuć" />

</body>
</html>
