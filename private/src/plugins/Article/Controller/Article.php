<?php

/**
 * Controller of the plugin Article
 *
 * @category  	Venus\src
 * @package   	Venus\src\plugins\Article\Controller
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2015 PAQUET Judicaël FR Inc. (https://github.com/las93)
 * @license   	https://github.com/las93/uranium/blob/master/LICENSE.md Tout droit réservé à PAQUET Judicaël
 * @version   	Release: 1.0.0
 * @filesource	https://github.com/las93/uranium
 * @link      	https://github.com/las93
 * @since     	1.0
 */
namespace Venus\src\plugins\Article\Controller;

use \Venus\src\plugins\common\Controller        as Controller;
use \Venus\src\BackOffice\Entity\plugin_article as EntityPluginArticle;
use \Venus\src\BackOffice\Model\plugin_article  as PluginArticle;

/**
 * Controller to test
 *
 * @category    Venus\src
 * @package     Venus\src\plugins\Article\Controller
 * @author      Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright   Copyright (c) 2013-2015 PAQUET Judicaël FR Inc. (https://github.com/las93)
 * @license     https://github.com/las93/uranium/blob/master/LICENSE.md Tout droit réservé à PAQUET Judicaël
 * @version     Release: 1.0.0
 * @filesource  https://github.com/las93/uranium
 * @link        https://github.com/las93
 * @since       1.0
 */
class Article extends Controller
{
    /**
     * Constructor
     *
     * @access public
     * @return object
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * the main page
     *
     * @access public
     * @param  object $oThis
     * @param  int $iId
     * @return void
     */
    public function update($oThis, $iId)
    {
        $oPluginArticle = new PluginArticle;
        $oOnePluginArticle = $oPluginArticle->findOneByid_page($iId);
        
        if (isset($_POST) && count($_POST) > 0 && isset($_POST['content']) && isset($_POST['title'])) {

            if ($oOnePluginArticle) {

                $oOnePluginArticle->set_content($_POST['content'])
                                  ->set_title($_POST['title'])
                                  ->save();
                
                $this->redirect($this->url->getUrl('page').'?msg='.urlencode($this->translator->_('ModifiedSuccessfully')));
            }
            else {

                $oOnePluginArticle = new EntityPluginArticle;
                $oOnePluginArticle->set_content($_POST['content'])
                                  ->set_title($_POST['title'])
                                  ->set_id_page($iId)
                                  ->save();
                
                $this->redirect($this->url->getUrl('page').'?msg='.urlencode($this->translator->_('ModifiedSuccessfully')));
            }
        }
        
        $oThis->layout
              ->assign('model', '/src/plugins/Article/View/Update.tpl')
              ->assign('sTitle', $this->translator->_('ModifyPage'))
              ->assign('sSecondUrl', $this->url->getUrl('page'))
              ->assign('sThirdTitle', $this->translator->_('ModifyPage'))
              ->assign('oPluginArticle', $oOnePluginArticle);
    }

    /**
     * the main page
     *
     * @access public
     * @return void
     */
    public function install()
    {
        $this->installDb;
    }
}