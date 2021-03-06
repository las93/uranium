<?php

/**
 * Controller of the plugin Symlink
 *
 * @category  	Venus\src
 * @package   	Venus\src\plugins\Symlink\Controller
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2015 PAQUET Judicaël FR Inc. (https://github.com/las93)
 * @license   	https://github.com/las93/uranium/blob/master/LICENSE.md Tout droit réservé à PAQUET Judicaël
 * @version   	Release: 1.0.0
 * @filesource	https://github.com/las93/uranium
 * @link      	https://github.com/las93
 * @since     	1.0
 */
namespace Venus\src\plugins\Symlink\Controller;

use \Venus\src\BackOffice\Entity\plugin_symlink     as EntityPluginSymlink;
use \Venus\src\BackOffice\Model\plugin_symlink      as PluginSymlink;
use \Venus\src\plugins\common\Controller            as Controller;

/**
 * Controller to test
 *
 * @category    Venus\src
 * @package     Venus\src\plugins\Symlink\Controller
 * @author      Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright   Copyright (c) 2013-2015 PAQUET Judicaël FR Inc. (https://github.com/las93)
 * @license     https://github.com/las93/uranium/blob/master/LICENSE.md Tout droit réservé à PAQUET Judicaël
 * @version     Release: 1.0.0
 * @filesource  https://github.com/las93/uranium
 * @link        https://github.com/las93
 * @since       1.0
 */
class Symlink extends Controller
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
        $oPluginSymlink = new PluginSymlink;
        $oOnePluginSymlink = $oPluginSymlink->findOneByid_page($iId);

        if (isset($_POST) && count($_POST) > 0 && isset($_POST['type']) && isset($_POST['value'])) {

            if ($oOnePluginSymlink) {

                $oOnePluginSymlink->set_type($_POST['type'])
                                  ->set_value($_POST['value'])
                                  ->save();
                
                $this->redirect($this->url->getUrl('page').'?msg='.urlencode($this->translator->_('ModifiedSuccessfully')));
            }
            else {

                $oOnePluginSymlink = new EntityPluginSymlink;
                $oOnePluginSymlink->set_type($_POST['type'])
                                  ->set_value($_POST['value'])
                                  ->set_id_page($iId)
                                  ->save();
                
                $this->redirect($this->url->getUrl('page').'?msg='.urlencode($this->translator->_('ModifiedSuccessfully')));
            }
        }
        
        $oThis->layout
              ->assign('model', '/src/plugins/Symlink/View/Update.tpl')
              ->assign('sTitle', $this->translator->_('ModifyPage'))
              ->assign('sSecondUrl', $this->url->getUrl('page'))
              ->assign('sThirdTitle', $this->translator->_('ModifyPage'))
              ->assign('oPluginSymlink', $oOnePluginSymlink);
    }

    /**
     * install method
     *
     * @access public
     * @param  string $sPortal
     * @return void
     */
    public function install($sPortal)
    {
        $this->installDb;
    }
}