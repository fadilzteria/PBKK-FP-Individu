<?php
declare(strict_types=1);

class KamarController extends ControllerBase
{

    public function indexAction()
    {
        $kamar = Kamars::find();
        $this->view->kamars = $kamar;
    }

}

