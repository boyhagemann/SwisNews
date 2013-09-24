<?php

/**
 * Auto-generated Index Controller
 *
 * This class is auto-generated at 15-05-2013 by B. Hagemann.
 */
class Nieuws_IndexController extends Swis_Controller_Action
{

    public function localInit()
    {
    }

    public function indexAction()
    {

        // forward naar juiste controller
        if($this->_hasParam('view_script')) {
            $this->_forward('index', $this->_getParam('view_script'));
        }

        // anders niets renderen
        else {
            $this->_helper->viewRenderer->setNoRender();
        }
        //

    }


}

