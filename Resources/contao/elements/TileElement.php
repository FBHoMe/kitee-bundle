<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 18.09.2017
 * Time: 15:22
 */

namespace Home\KiteeBundle\Resources\contao\elements;

use Home\PearlsBundle\Resources\contao\Helper\DataHelper;

class TileElement extends \ContentElement
{
    /**
     * @var string
     */
    protected $strTemplate = 'cte_tile';

    /**
     * @return string
     */
    public function generate()
    {
        return parent::generate();
    }

    /**
     * generate module
     */
    protected function compile()
    {
        if (TL_MODE == 'BE') {
            $this->strTemplate          = 'be_wildcard';
            $this->Template             = new \BackendTemplate($this->strTemplate);
            $this->Template->title      = $this->headline;
        } else {
            $this->generateFrontend();
        }
    }

    /**
     * generate frontend for module
     */
    private function generateFrontend()
    {
        if ($this->multiSRC) {
            $this->Template->multiImages = DataHelper::getMultiImgObjs($this->multiSRC, array(null, null, ''));
        }
    }

}