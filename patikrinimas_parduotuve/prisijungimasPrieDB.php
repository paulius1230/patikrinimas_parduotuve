<?php

$link = mysqli_connect("localhost", "root", "", "db");
    
if (mysqli_errno($link)) {
echo mysqli_error($link);
exit;
}
