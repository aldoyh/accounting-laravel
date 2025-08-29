<?php

use Illuminate\View\ComponentResolver;

/*
|
| Component Resolver
|
*/

$resolver = new ComponentResolver();

$resolver->registerBaseComponent('auth.reset-password', function () use ($resolver) {
    return view('auth.reset-password');
});

?>
