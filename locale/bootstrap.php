<?php

$locale = (isset($_GET['lang']) && !empty($_GET['lang']))
    ? $_GET['lang'] : "fr_FR";

if (defined('LC_MESSAGES')) {
    setlocale(LC_MESSAGES, $locale); // Linux
    bindtextdomain("messages", "./locale");
} else {
    putenv("LC_ALL={$locale}"); // windows
    bindtextdomain("messages", ".\locale");
}

textdomain("messages");
