<?php

/**
 * Auto-generated Overzicht model
 *
 * This class is auto-generated at 15-05-2013 by B. Hagemann.
 */
class NieuwsOverzicht extends Mb_Data_TranslateOverview{
    /**
     * @desc public constructor
     *
     */
    public function __construct()
    {

        parent::__construct();

        $this->oSelect  ->from(array('n' => 'nieuws'))
                        ->columns(array('link' => "CONCAT('/t/', n.titel_key)"))
                        ->where('n.online = 1')
                        ->where('n.datum <= ?', new Zend_Db_Expr('NOW()'))
                        ->order('n.datum DESC');

		$this->addUserMethodAfterFetch('fetchTranslations');
		$this->addUserMethodAfterFetch('onFetch');
    }

	public function setFilter($aFilter){

		if(!is_array($aFilter)) return;
		$this->oSelect->distinct(true);
		$this->oSelect->joinLeft(array('nm'=>'nieuws_modaliteit'), 'nm.id = n.id', '');
		$this->oSelect->joinLeft(array('m'=>'modaliteit'), 'nm.modaliteit_id = m.id', '');
		$this->oSelect->where('m.titel_key IN (?)', $aFilter);

	}

	public function onFetch()
	{
		foreach($this->aItems as &$aItem) {
			$aItem['url'] = Structure::getInstance()->getPathByView('nieuws', 'item') . '/t/' . $aItem['titel_key'];
		}
	}


}

