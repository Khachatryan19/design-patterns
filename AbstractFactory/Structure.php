<?php

interface GUIFactory
{
    public function createButton(): Button;

    public function createCheckbox(): CheckboxInterface;
}

class WinFactory implements GUIFactory
{
    public function createButton(): Button
    {
        return new WinButton();
    }

    public function createCheckbox(): CheckboxInterface
    {
        return new WinCheckboxInterface();
    }
}

class MacFactory implements GUIFactory
{
    public function createButton(): Button
    {
        return new MacButton();
    }

    public function createCheckbox(): CheckboxInterface
    {
        return new MacCheckboxInterface();
    }
}

interface Button
{
    public function paint(): string;
}

class WinButton implements Button
{
    public function paint(): string
    {
        return 'Windows Button';
    }
}

class MacButton implements Button
{
    public function paint(): string
    {
        return 'Mac Button';
    }
}

interface Checkbox
{
    public function paint(): string;
}

class WinCheckboxInterface implements CheckboxInterface
{
    public function paint(): string
    {
        return 'Windows Checkbox';
    }
}

class MacCheckboxInterface implements CheckboxInterface
{
    public function paint(): string
    {
        return 'Mac Checkbox';
    }
}


//add linux

class LinuxFactory implements GUIFactory
{
    public function createButton(): Button
    {
        return new LinuxButton();
    }

    public function createCheckbox(): CheckboxInterface
    {
        return new LinuxCheckboxInterface();
    }
}

class LinuxButton implements Button
{
    public function paint(): string
    {
        return 'Linux Button';
    }
}

class LinuxCheckboxInterface implements CheckboxInterface
{
    public function paint(): string
    {
        return 'Linux Checkbox';
    }
}