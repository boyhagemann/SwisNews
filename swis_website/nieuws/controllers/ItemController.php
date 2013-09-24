<?php

/**
 * Auto-generated Full-List Controller
 *
 * This class is auto-generated at 15-05-2013 by B. Hagemann.
 */
class Nieuws_ItemController extends Swis_Controller_Action
{

    public function localInit()
    {
        
        // URL object
        $this->oMainModule = new Swis_MainModule($this->_getParam('parent_node'));
        $this->view->assign('oUrl', $this->oMainModule);
        
    }

    public function indexAction()
    {
		$oNieuwsItem = new NieuwsItem();
		$oNieuwsItem->setTranslatedTitelKey($this->_getParam('t'));
		$aNieuwsItem = $oNieuwsItem->getItem();

        
        if(!$oNieuwsItem->exists()){
            $this->displayErrorPage(404);   
        }

		$this->view->assign('aNieuwsItem', $aNieuwsItem);


//		Zend_Debug::dump($oNieuwsItem->getTranslations()); exit;

		$this->addExtraBreadcrumb($aNieuwsItem['titel']);
		$this->setPageTitle($aNieuwsItem['titel']);

		// renderen
        $this->render($this->_getParam('template') . '/' . $this->_getParam('block'), $this->_getParam('block'));

    }


}

