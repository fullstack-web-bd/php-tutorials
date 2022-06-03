<?php
echo "User Name:";

echo isset($_COOKIE['user_name']) ? $_COOKIE['user_name'] : 'Not Found.';