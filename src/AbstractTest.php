<?php
/*
 * Author: Dominik Piekarski <code@dompie.de>
 * Created at: 2020/09/18
 */
declare(strict_types=1);

namespace App;

use Psr\Log\LoggerInterface;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

abstract class AbstractTest
{
    protected LoggerInterface $logger;
    protected EventDispatcherInterface $dispatcher;

    public function setLogger($logger)
    {
        $this->logger = $logger;
    }

    public function setDispatcher($dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }
}
