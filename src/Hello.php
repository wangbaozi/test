<?php
namespace Wb\Demo;

class Hello
{
    private $name;

    public function __construct($name = 'World')
    {
        $this->name = $name;
    }

    public function hello()
    {
        echo "11111";
        return 'Hello ' . $this->name;
    }

}
