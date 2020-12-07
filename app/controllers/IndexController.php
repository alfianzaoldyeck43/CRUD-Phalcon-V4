<?php

declare(strict_types=1);

class IndexController extends ControllerBase
{
    public function indexAction()
    {
    }
    public function helloWorldAction()
    {
        $this->view->disable();
        echo "Hello World";
    }
}
