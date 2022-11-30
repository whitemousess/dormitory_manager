<?php
function connect()
{
    $conn = new mysqli('localhost', 'root', '', 'ql_kytuc');
    return $conn;
}
