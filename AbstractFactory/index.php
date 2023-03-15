<?php

require 'Structure.php';

class Application{
    private GUIFactory $factory;
    private Button $button;
    private CheckboxInterface $checkbox;

    public function __construct(GUIFactory $factory)
    {
        $this->factory = $factory;
    }

    public function createUI(): void
    {
        $this->button = $this->factory->createButton();
        $this->checkbox = $this->factory->createCheckbox();
    }

    public function paint(): void
    {
        $this->button->paint();
        $this->checkbox->paint();
    }

    public function getUI(): array
    {
        return [
            $this->button,
            $this->checkbox,
        ];
    }
}

//Factory Type should be written in config file
$app = new Application(new MacFactory());

$app->createUI();
$app->paint();
print_r($app->getUI());