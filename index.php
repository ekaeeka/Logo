<?php
function createMySql(): mysqli
{
    $mysqli = new mysqli("localhost", "root", "", "user12");
    if ($mysqli->connect_errno) {
        throw new Exception("Filed to connect to MySql(" . $mysqli->connect_errno . ")" . $mysqli->connect_errno);
    }
    return $mysqli;

    function createUser(string $log, string $nam, string $dat, string $inf)
    {
        $mysqli = createMySql();
        $query = "INSERT INTO 'user12'('logo', 'name', 'date', 'info') VALUES (NULL . 'log','nam','dat', 'inf')";
        return $mysqli->query($query);
    }

    if (isset($_POST['butt'])) ;
    {
        $log = $_POST['logo'];
    }
    if (isset($_POST['butt'])) ;
    {
        $nam = $_POST['name'];
    }
    if (isset($_POST['butt'])) ;
    {
        $dat = $_POST['date'];
    }
    if (isset($_POST['butt'])) ;
    {
        $inf = $_POST['info'];
    }


}
