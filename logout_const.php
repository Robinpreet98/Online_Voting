<?php
session_start();
session_destroy();
header("location:constituency_login.php");