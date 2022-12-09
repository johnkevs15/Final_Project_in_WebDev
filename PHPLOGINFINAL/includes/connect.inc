<?php

$conn = mysqli_connect("localhost", "sample_user","sample") or die("Cannot connect to mysql server");

mysqli_select_db($conn,sample_system) or die("Cannot connect to database");

