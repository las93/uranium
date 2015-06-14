<?php

/**
 * Controller to test
 *
 * @category  	src
 * @package   	src\BackOffice\Controller
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2014 PAQUET Judicaël FR Inc. (https://github.com/las93)
 * @license   	https://github.com/las93/venus2/blob/master/LICENSE.md Tout droit réservé à PAQUET Judicaël
 * @version   	Release: 1.0.0
 * @filesource	https://github.com/las93/venus2
 * @link      	https://github.com/las93
 * @since     	1.0
 */
namespace Venus\src\BackOffice\Controller;

use \Venus\src\BackOffice\common\Controller as Controller;
use \Venus\src\BackOffice\Entity\page       as EntityPage;
use \Venus\src\BackOffice\Model\page        as ModelPage;
use \Venus\src\BackOffice\Model\plugin      as Plugin;

/**
 * Controller to test
 *
 * @category  	src
 * @package   	src\BackOffice\Controller
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2014 PAQUET Judicaël FR Inc. (https://github.com/las93)
 * @license   	https://github.com/las93/venus2/blob/master/LICENSE.md Tout droit réservé à PAQUET Judicaël
 * @version   	Release: 1.0.0
 * @filesource	https://github.com/las93/venus2
 * @link      	https://github.com/las93
 * @since     	1.0
 */
class Page extends Controller
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
	 * @return void
	 */
	public function show()
	{
        if ($_GET['delete']) {

            $oEntityPage = new EntityPage;
            $oEntityPage->set_id($_GET['delete'])
                        ->remove();
            
            $_GET['msg'] = $this->translator->_('ItsDeleted');
        }
        
	    $oPage = new ModelPage;
	    $aPages = $oPage->findAll();
	    
	    $this->layout
             ->assign('sTitle', $this->translator->_('ManagePages'))
             ->assign('sSecondTitle', $this->translator->_('ManagePages'))
             ->assign('aPages', $aPages)
	         ->display();
	}

    /**
     * the main page
     *
     * @access public
     * @return void
     */
    public function add()
    {   
        if (isset($_POST) && count($_POST) > 0 && isset($_POST['name']) && isset($_POST['id_plugin'])) {

            $oEntityUser = new EntityPage;
            $oEntityUser->set_name($_POST['name'])
                        ->set_id_plugin($_POST['id_plugin'])
                        ->save();
            
            $this->redirect($this->url->getUrl('page').'?msg='.urlencode($this->translator->_('AddedSuccessfully')));
        }
        
        $oPlugin = new Plugin;
        $aPlugins = $oPlugin->findAll();
        
        $this->layout
			 ->assign('model', '/src/BackOffice/View/PageAdd.tpl')
             ->assign('sTitle', $this->translator->_('ManagePages'))
             ->assign('sSecondTitle', $this->translator->_('ManagePages'))
             ->assign('sSecondUrl', $this->url->getUrl('page'))
             ->assign('sThirdTitle', $this->translator->_('AddPage'))
             ->assign('aPlugins', $aPlugins)
             ->display();
    }

    /**
     * the main page
     *
     * @access public
     * @param  int $id
     * @return void
     */
    public function update($id)
    {   
        $oPage = new ModelPage;
        $oOnePage = $oPage->findOneByid($id);
        
        if (isset($_POST) && count($_POST) > 0 && isset($_POST['name']) && isset($_POST['id_plugin'])) {

            
            $oOnePage->set_name($_POST['name'])
                     ->set_id_plugin($_POST['id_plugin'])
                     ->save();
            
            $this->redirect($this->url->getUrl('page').'?msg='.urlencode($this->translator->_('ModifiedSuccessfully')));
        }
        
        $oPlugin = new Plugin;
        $aPlugins = $oPlugin->findAll();

        $this->layout
			 ->assign('model', '/src/BackOffice/View/PageAdd.tpl')
             ->assign('sTitle', $this->translator->_('ManagePages'))
             ->assign('sSecondTitle', $this->translator->_('ManagePages'))
             ->assign('sSecondUrl', $this->url->getUrl('page'))
             ->assign('sThirdTitle', $this->translator->_('AddPage'))
             ->assign('oPage', $oOnePage)
             ->assign('aPlugins', $aPlugins)
             ->display();
    }
}