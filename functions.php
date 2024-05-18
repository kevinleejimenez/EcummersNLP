<!--Dito ko lagay lahat ng php funtion bois |yoshi|-->

<?php


session_start();

// require MySQL Connection
require ('database/DBController.php');

// require Product Class
require ('database/Product.php');

// require Cart Class
require ('database/Cart.php');

include('config.php');

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle = $product->getData();

// Cart object
$Cart = new Cart($db );

function displayMessage()
{
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}

function redirect($location)
{
    header("Location: $location");
}



function query($sql)
{
    // bringing the same connection from config
    global $connection;
    return mysqli_query($connection, $sql);
}



function confirm($result)
{
    global $connection;
    if (!$result) {
        die("There is a problem with the query -> " . mysqli_error($connection));
    }
}



function escape_string($string)
{
    global $connection;
    // this is to prevent any sql injections
    return mysqli_real_escape_string($connection, $string);
}

function escapeString($conn, $string) {
    return mysqli_real_escape_string($conn, $string);
}




function fetch_array($result)
{
    return mysqli_fetch_array($result);
}


function loginUser()
{
    if (isset($_POST['submit'])) {
        $username = escape_string($_POST['username']);
        $password = escape_string($_POST['password']);

        $query = query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'");
        confirm($query);

        if (mysqli_num_rows($query) == 0) {
            setMessage("Login Failed!!! Please Check Password or Username");
            redirect("login.php");
        } else {
            while ($row = mysqli_fetch_assoc($query)) {
                if ($row['accountType'] == "admin") {
                    $_SESSION['username'] = $username;
                    redirect("admin");
                } else {
                    $_SESSION['username'] = $username;
                    redirect("index.php");
                }
            }
        }
    }
}
?>