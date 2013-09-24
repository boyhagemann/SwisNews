<?php

/**
 * Auto-generated Search Index
 *
 * This class is auto-generated at 15-05-2013 by B. Hagemann.
 */
class NieuwsSearchIndex extends Swis_SearchIndex
{

    public function index()
    {
        require_once 'NieuwsItem.php';
        
                  $oNieuwsItem = new NieuwsItem();
                  $oNieuwsItem->setId($this->_iId);
        
                  // set title
                  $this->_oSearch->setTitle($oNieuwsItem->get('titel'));
        
                  // add contents
                  $this->_oSearch->addContent($oNieuwsItem->get('tekst'));
        
                  // voeg toe aan search index
                  $this->_oSearch->index();
    }

    public function getUrlAndTitle()
    {
        require_once 'NieuwsItem.php';
                $oNieuwsItem = new NieuwsItem();
                $oNieuwsItem->setId($this->_iId);
        
                $oStructure = Structure::getInstance();
                $iParent = $oStructure->getParentNodeIdByModule('nieuws');
        
                if($iParent == 0 || $oStructure->isOffline($iParent) === true){
                  // item is niet te herleiden tot een pagina
                  return array('url' => '', 'title' => '');
                }
        
                $oMainModule = new Swis_MainModule($iParent);
        
                $aPath = Structure::getPathToNodeWithInfo($iParent);
        
                $sTitle = '';
                foreach(array_reverse($aPath) as $aNode) {
                    if($aNode['special_page'] == 0){
                        $sTitle .= empty($sTitle) ? $aNode['title'] : ' - ' . $aNode['title'];
                    }
                }
        
                $oMainModule = new Swis_MainModule($iParent);
        
                return array('url' => $oMainModule->get('item') . $oNieuwsItem->get('link'), 'title' => $sTitle);
    }


}

