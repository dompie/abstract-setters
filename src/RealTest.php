<?php
/*
 * Author: Dominik Piekarski <code@dompie.de>
 * Created at: 2020/09/18
 */
declare(strict_types=1);

namespace App;

use Symfony\Contracts\EventDispatcher\Event;
use Symfony\Contracts\Translation\TranslatorInterface;

class RealTest extends AbstractTest
{
    protected TranslatorInterface $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    public function example()
    {
        $this->translator->trans('test'); //setter injection works on regular and abstract classes
        $this->logger->info('Logger does not exist');//Typed property App\AbstractTest::$logger must not be accessed before initialization
        $this->dispatcher->dispatch((new Event('Dispatcher is not set'))); //Typed property App\AbstractTest::$dispatcher must not be accessed before initialization

        return 'It worked!';
    }

    public function setLogger($logger)
    {
        $this->logger = $logger;
    }
}
