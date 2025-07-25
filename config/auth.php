<?php
session_start();

function isLoggedIn()
{
    return isset($_SESSION['admin']);
}

function requireLogin()
{
    if (!isLoggedIn()) {
        header('Location: /login');
        exit;
    }
}