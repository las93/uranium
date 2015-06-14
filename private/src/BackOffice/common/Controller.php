<?php

/**
 * Controller Manager
 *
 * @category  	src\BackOffice
 * @package   	src\BackOffice\common
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2014 PAQUET Judicaël FR Inc. (https://github.com/las93)
 * @license   	https://github.com/las93/uranium/blob/master/LICENSE.md Tout droit réservé à PAQUET Judicaël
 * @version   	Release: 1.0.0
 * @filesource	https://github.com/las93/venus2
 * @link      	https://github.com/las93
 * @since     	1.0
 */

namespace Venus\src\BackOffice\common;

use \Venus\core\Controller              as CoreController;
use \Venus\src\BackOffice\Model\user    as User;

/**
 * Controller Manager
 *
 * @category  	src\BackOffice
 * @package   	src\BackOffice\common
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2014 PAQUET Judicaël FR Inc. (https://github.com/las93)
 * @license   	https://github.com/las93/uranium/blob/master/LICENSE.md Tout droit réservé à PAQUET Judicaël
 * @version   	Release: 1.0.0
 * @filesource	https://github.com/las93/venus2
 * @link      	https://github.com/las93
 * @since     	1.0
 */

abstract class Controller extends CoreController {

	/**
	 * Constructor
	 *
	 * @access public
	 * @return object
	 */

	public function __construct() {

		parent::__construct();

		if ($this->session->get('id_user')) {

            $oUser = new User;
            $oOneUser = $oUser->findOneByid($this->session->get('id_user'));
            
            if (count($oOneUser) > 0) {
    		
                $this->layout
    		         ->assign('aUser', $oOneUser);
            }
            elseif (get_called_class() !== 'Venus\src\BackOffice\Controller\Login') {
                
                $this->session->set('id_user', false);
                $this->redirect($this->url->getUrl('login'));
            }
		}
		elseif (get_called_class() !== 'Venus\src\BackOffice\Controller\Login') {
		    
		    $this->redirect($this->url->getUrl('login'));
		}
		
		if (isset($_GET['language'])) {
		    
		    $this->session
		         ->set('language', $_GET['language']);
		}
	
		if ($this->session->get('language')) {
		    
		    $this->translator
		         ->setLanguage($this->session->get('language'));
		}
		
		$aLanguage = [
            ['flag' => '/img/flag/us.png', 'i18n' => 'en_US', 'title' => $this->translator->_('English')],
            ['flag' => '/img/flag/fr.png', 'i18n' => 'fr_FR', 'title' => $this->translator->_('French')],
            ['flag' => '/img/flag/vn.png', 'i18n' => 'vn_VN', 'title' => $this->translator->_('Vietnameese')]	
		];
		
		$this->layout
		     ->assign('aLanguage', $aLanguage);
	}
	
	/**
	 * Constructor
	 *
	 * @access public
	 * @return object
	 */
	protected function _checkSession()
	{
		if (!$this->session->get('id_user')) {
		    
		    $this->redirect($this->url->getUrl('login'));
		}

		if ($this->session->get('lockscreen') == 1) {
		    
		    $this->redirect($this->url->getUrl('lockscreen'));
		}
	}
}
