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
use \Venus\src\BackOffice\Model\page        as ModelPage;

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
class Plugin extends Controller
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
     * @param  int $id
     * @return void
     */
    public function update($id)
    {   
        $oPage = new ModelPage;
        $oOnePage = $oPage->findOneByid($id);
        
        $sClassName = 'Venus\src\plugins\\'.$oOnePage->get_plugin()->get_code().'\Controller\\'.$oOnePage->get_plugin()->get_code();
        $oClass = new $sClassName;
        $oClass->update($this, $id);

        $this->layout
             ->assign('sSecondTitle', $this->translator->_('ManagePages'))
             ->display();
    }
}