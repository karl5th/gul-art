<?php

require "db/connect.php";


$users = r::findOne('users','email = ?', ['gandon@pohy.pohy']);

echo $users->id;


?>