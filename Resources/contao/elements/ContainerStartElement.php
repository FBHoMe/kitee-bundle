<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 18.09.2017
 * Time: 15:22
 */

namespace Home\CustomizeeBundle\Resources\contao\elements;

class ContainerStartElement extends \ContentElement
{
    /**
     * @var string
     */
    protected $strTemplate = 'cte_container_start';

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
        $this->Template->contentClasses = "";

        if ($this->hm_layout) {
            $this->Template->contentClasses .= " " . $this->hm_layout;
        }
        if ($this->hm_design) {
            $this->objModel->classes = array_merge($this->objModel->classes, array($this->hm_design));
        }
        if ($this->hm_step_inner && strpos($this->hm_step_inner, '-no') === false) {
            $this->objModel->classes = array_merge($this->objModel->classes, array($this->hm_step_inner));
        }
        if ($this->hm_gap_inner && strpos($this->hm_gap_inner, '-no') === false) {
            $this->objModel->classes = array_merge($this->objModel->classes, array($this->hm_gap_inner));
        }
        if ($this->hm_step_outer && strpos($this->hm_step_outer, '-no') === false) {
            $this->objModel->classes = array_merge($this->objModel->classes, array($this->hm_step_outer));
        }
    }

}