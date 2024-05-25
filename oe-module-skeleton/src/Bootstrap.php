<?php

/*
 * package   OpenEMR
 * link      http://www.open-emr.org
 * author    Sherwin Gaddis <sherwingaddis@gmail.com>
 * Copyright (c) 2023.
 * All rights reserved
 */

namespace Skeleton\Module;

use OpenEMR\Core\Kernel;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class Bootstrap
{
    /**
     * @var EventDispatcherInterface The object responsible for sending and subscribing to events through the OpenEMR system
     */
    private $eventDispatcher;
    private $twig;

    public function __construct(EventDispatcher $dispatcher)
    {
        $this->eventDispatcher = $dispatcher;
    }

    /**
     * @return \Twig\Environment
     */
    public function getTwig(): Environment
    {
        return $this->twig;
    }

    public function subscribeToEvents()
    {
    }

}
