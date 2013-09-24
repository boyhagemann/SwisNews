<?php

/**
 * Auto-generated Short-List Controller
 *
 * This class is auto-generated at 15-05-2013 by B. Hagemann.
 */
class Nieuws_ShortListController extends Swis_Controller_Action
{

    public function localInit()
    {
        
        // URL object
        $this->oMainModule = new Swis_MainModule($this->_getParam('parent_node'));
        $this->view->assign('oUrl', $this->oMainModule);
        
    }

    public function indexAction()
    {
        $oNieuwsOverzicht = new NieuwsOverzicht();
        $oNieuwsOverzicht->useTranslate();
        $oNieuwsOverzicht->setMaxNumberOfItems(2);
        
        
        
        
        $this->view->assign('aNieuws',           $oNieuwsOverzicht->getItems());
        
        // renderen
        $this->render($this->_getParam('template') . '/' . $this->_getParam('block'), $this->_getParam('block'));
    }


}

