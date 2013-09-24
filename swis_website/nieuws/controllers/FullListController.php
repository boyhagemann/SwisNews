<?php

/**
 * Auto-generated Full-List Controller
 *
 * This class is auto-generated at 15-05-2013 by B. Hagemann.
 */
class Nieuws_FullListController extends Swis_Controller_Action
{

	public function indexAction(){


		// Render template
		$this->render($this->_getParam('template') . '/' . $this->_getParam('block'), $this->_getParam('block'));
	}


}

