<?php

/*
 * package   OpenEMR
 * link      http://www.open-emr.org
 * author    Sherwin Gaddis <sherwingaddis@gmail.com>
 * Copyright (c) 2023.
 * All rights reserved
 */

namespace Skeleton\Module;
//you can create a router in your module to handle requests
//These are just ideas to make your module more dynamic
$router = new Router();
$router->add('GET', '/', function() {
    echo 'Hello, world!';
});


// Run the router
$router->run();
