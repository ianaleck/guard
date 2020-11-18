<?php

/**
 * VGuard example. Basic validation.
 * 
 * This shows basic validation, passing in an array to the
 * validate method and checking if the validation passes
 * with the passes method. Then dumps errors if failed.
 */

require '../vendor/autoload.php';

use VGuard\VGuard;

$v = new VGuard;

$v->validate([
    'username'  => ['dale', 'required|alpha|min(3)|max(20)'],
    'email'     => ['dale@ianaleckm.com', 'required|email'],
    'password'  => ['ilovemcu', 'required'],
    'password_confirm' => ['ilovemcu', 'required|matches(password)']
]);

if ($v->passes()) {
    // Passed
} else {
    var_dump($v->errors()->all());
}
