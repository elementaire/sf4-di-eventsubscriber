<?php

namespace App\Services;

use Doctrine\Common\EventSubscriber;
use Doctrine\DBAL\Connection;
use Doctrine\ORM\Events;

class Foo implements EventSubscriber
{
    public function __construct(Connection $connection)
    {
    }

    public function getSubscribedEvents()
    {
        return [Events::preUpdate];
    }
}
