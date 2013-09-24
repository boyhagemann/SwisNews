<?php

/**
 * Auto-generated Item model
 *
 * This class is auto-generated at 06-05-2013 by B. Hagemann.
 */
class NieuwsItem extends Mb_Data_TranslateItem
{
    /**
     * @desc     init
     * 
     * @param mixed id of key van het nieuwsitem
     *
     */
    public function __construct($mIdKey = null)
    {
        parent::__construct();

        $this->oSelect  ->from(array('n' => 'nieuws'))
                        ->columns(array('link' => "CONCAT('/t/', n.titel_key)"))
						->joinLeft(array('t' => 'nieuws_translations'), 't.nieuws_id = n.id', array('blaat' => 'titel'))
                      	->where('n.online = ?', 1)
                        ->where('n.datum <= ?', new Zend_Db_Expr('NOW()'));

        if(is_string($mIdKey) && !is_numeric($mIdKey)) {
            $this->setTitelKey($mIdKey);
        } elseif (is_numeric($mIdKey)) {
            $this->setId($mIdKey);
        }

    }

    /**
     * @desc     set id
     * @param    integer id
     *
     */
    public function setId($iId)
    {

        if(intval($iId) > 0) {

            $this->iId = $iId;
            $this->oSelect->where('n.id = ?', $iId);

        }
        //

    }

    /**
     * @desc     set key
     * @param    string key
     *
     */
    public function setTitelKey($sTitelKey)
    {

        if($sTitelKey !== false) {

            $this->sTitelKey = $sTitelKey;
            $this->oSelect->where('n.titel_key = ?', $sTitelKey);

        }
        //

    }


}

