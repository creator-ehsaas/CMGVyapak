    <?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $database = "cmgvyapak";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn){
        // die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{
        // echo "Connection was successful";
    }

    ?>
