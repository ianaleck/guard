<?php

/**
 * VGuard example. Field aliases.
 * 
 * Shows using field aliases to rename fields without having
 * to define custom rule or field messages, making it a
 * cleaner solution if this will suffice.
 */

require '../vendor/autoload.php';

use VGuard\VGuard;

$v = new VGuard;

$v->validate([
    'username|Username'  => ['', 'required'],
    'password|Password'  => ['', 'required']
]);

if ($v->passes()) {
    // Passed
} else {
    var_dump($v->errors()->all());
}
