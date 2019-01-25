<?php
session_start();
session_destroy();
header('location:AdminRights.php?logged_out=You have logged out');