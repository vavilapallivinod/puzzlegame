<html>

<body>
    <?php
    $email = $_POST["ta3"];
    $pwd = $_POST["ta4"];
    $host = 'localhost';
    $uname = 'root';
    $password = "";
    $dbname = "vinodphp";
    $connection = mysqli_connect($host, $uname, $password, $dbname);
    if (isset($connection)) {
        echo "Database connected successfully" . "<br>";
        if ($_POST['ba1']) {
            $query = "insert into users(id,password)
                values('$email','$pwd')";
            if (mysqli_query($connection, $query)) {
                echo "<script>alert('new person registered')</script>";
            }
        }
    }
    ?>
        <?php
        header("Location: signin.html");
        ?>
    </table>
</body>

</html>
