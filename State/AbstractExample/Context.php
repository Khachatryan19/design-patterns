<?php

namespace State\AbstractExample;
class Context
{
    private StateInterface $state;

    public function __construct(StateInterface $state)
    {
        $this->state = $state;
    }

    /**
     * @param StateInterface $state
     */
    public function setState(StateInterface $state): void
    {
        $this->state = $state;
    }

    public function operation() : string
    {
        return "Context delegating state-specific behavior to the current State object \n"
            . $this->state->operation($this);
    }

    /**
     * @return StateInterface
     */
    public function getState(): StateInterface
    {
        return $this->state;
    }
}