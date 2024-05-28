<?php

function test_input($_POST) {
    $_POST = trim($_POST);
    $_POST = stripslashes($_POST);
    $_POST = htmlspecialchars($_POST);
    return $_POST;
}