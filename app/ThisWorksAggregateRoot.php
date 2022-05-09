<?php

namespace App;

use Spatie\EventSourcing\AggregateRoots\AggregateRoot;

class ThisWorksAggregateRoot extends AggregateRoot
{
    public function doSomething(string $something): self
    {
        // Record some events
        $this->recordThat(new TestEvent());

        // For debugging
        dump('Called doSomething');
        logger('Called doSomething');

        return $this;
    }

    public function otherMethodThatIsNotCalled(string $other): self
    {
        // Record some events
        $this->recordThat(new TestEvent());

        // For debugging
        dump('This dump should not be here!');
        logger('This dump should not be here!');

        return $this;
    }
}
