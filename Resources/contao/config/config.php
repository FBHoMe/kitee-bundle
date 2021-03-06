<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 13.12.2017
 * Time: 14:50
 */

use Home\KiteeBundle\Resources\contao\hooks\GetContentElementListener;

if (TL_MODE == 'BE') {
    $GLOBALS['TL_CSS'][] = 'bundles/homekitee/css/backend.css|static';
}

#-- hooks --------------------------------------------------------------------------------------------------------------
$GLOBALS['TL_HOOKS']['getContentElement'][] = array('Home\KiteeBundle\Resources\contao\hooks\GetContentElement', 'setLayoutClasses');
$GLOBALS['TL_HOOKS']['getContentElement'][] = [GetContentElementListener::class, '__invoke'];

#-- content elements -----------------------------------------------------------------------------------------------
array_insert($GLOBALS['TL_CTE'], 2, array
(
    'hm_kitee' => array(
        'hm_content_container_start'    => 'Home\KiteeBundle\Resources\contao\elements\ContainerContentStartElement',
        'hm_content_container_end'      => 'Home\KiteeBundle\Resources\contao\elements\ContainerEndElement',
        'hm_piteli_box'                 => 'Home\KiteeBundle\Resources\contao\elements\PiTeLiBoxElement',
        'hm_icteli_box'                 => 'Home\KiteeBundle\Resources\contao\elements\IcTeLiBoxElement',
        'hm_hero_container_start'       => 'Home\KiteeBundle\Resources\contao\elements\ContainerHeroStartElement',
        'hm_hero_container_end'         => 'Home\KiteeBundle\Resources\contao\elements\ContainerEndElement',
        'hm_hr'                         => 'Home\KiteeBundle\Resources\contao\elements\HrElement',
        'hm_anchor'                     => 'Home\KiteeBundle\Resources\contao\elements\AnchorElement',
        'hm_news_select'                => 'Home\KiteeBundle\Resources\contao\elements\NewsSelectElement',
        'hm_layout_container_start'     => 'Home\KiteeBundle\Resources\contao\elements\LayoutStartElement',
        'hm_layout_container_end'       => 'Home\KiteeBundle\Resources\contao\elements\LayoutEndElement',
        'hm_grid_container_start'       => 'Home\KiteeBundle\Resources\contao\elements\GridStartElement',
        'hm_grid_container_column'      => 'Home\KiteeBundle\Resources\contao\elements\GridColumnElement',
        'hm_grid_container_end'         => 'Home\KiteeBundle\Resources\contao\elements\GridEndElement',
        'hm_slider'                     => 'Home\KiteeBundle\Resources\contao\elements\SliderElement',
        'hm_background_attachment'      => 'Home\KiteeBundle\Resources\contao\elements\BackgroundAttachmentElement',
        'hm_gallery'                    => 'Home\KiteeBundle\Resources\contao\elements\GalleryElement',
        'hm_spacer'                     => 'Home\KiteeBundle\Resources\contao\elements\SpacerElement',
    )
));

$GLOBALS['TL_WRAPPERS']['start'][]  = 'hm_hero_container_start';
$GLOBALS['TL_WRAPPERS']['stop'][]   = 'hm_hero_container_end';
$GLOBALS['TL_WRAPPERS']['start'][]  = 'hm_content_container_start';
$GLOBALS['TL_WRAPPERS']['stop'][]   = 'hm_content_container_end';
$GLOBALS['TL_WRAPPERS']['start'][]  = 'hm_layout_container_start';
$GLOBALS['TL_WRAPPERS']['stop'][]   = 'hm_layout_container_end';
$GLOBALS['TL_WRAPPERS']['start'][]  = 'hm_grid_container_start';
$GLOBALS['TL_WRAPPERS']['stop'][]   = 'hm_grid_container_end';
