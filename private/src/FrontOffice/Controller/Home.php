<?php

/**
 * Controller to test
 *
 * @category  	src
 * @package   	src\FrontOffice\Controller
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2014 PAQUET Judicaël FR Inc. (https://github.com/las93)
 * @license   	https://github.com/las93/venus2/blob/master/LICENSE.md Tout droit réservé à PAQUET Judicaël
 * @version   	Release: 1.0.0
 * @filesource	https://github.com/las93/venus2
 * @link      	https://github.com/las93
 * @since     	1.0
 */

namespace Venus\src\FrontOffice\Controller;

use \Venus\src\FrontOffice\common\Controller        as Controller;
use \Venus\src\FrontOffice\Model\page               as Page;
use \Venus\src\FrontOffice\Model\plugin_freehtml    as PluginFreeHtml;

/**
 * Controller to test
 *
 * @category  	src
 * @package   	src\FrontOffice\Controller
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2014 PAQUET Judicaël FR Inc. (https://github.com/las93)
 * @license   	https://github.com/las93/venus2/blob/master/LICENSE.md Tout droit réservé à PAQUET Judicaël
 * @version   	Release: 1.0.0
 * @filesource	https://github.com/las93/venus2
 * @link      	https://github.com/las93
 * @since     	1.0
 */

class Home extends Controller {

	/**
	 * Constructor
	 *
	 * @access public
	 * @return object
	 */

	public function __construct() {

		parent::__construct();
	}

	/**
	 * the main page
	 *
	 * @access public
	 * @return void
	 */

	public function show() {

	    $oPage = new Page;
	    $oActualPage = $oPage->findOneByurl($_SERVER['REQUEST_URI']);

	    $oPage = new Page;
	    $aSummaryPages = $oPage->getPageInOrder(0);
	    
	    if (isset($_POST) && isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email'])
	        && isset($_POST['message'])) {
	        
	        $this->mail
	             ->setSubject('Mail de contact de Scrum-Agile.com')
	             ->setMessage($_POST['message']."\n\nPhone: ".$_POST['phone']."\n\nNom: ".$_POST['name'])
	             ->setFrom($_POST['email'])
	             ->addRecipient('judicael.paquet@scrum-agile.com')
	             ->send();
	    }

	    if ($oActualPage->get_id_plugin() == 1) {
	        
	        $oPluginFreeHtml = new PluginFreeHtml;
	        $oContentPage = $oPluginFreeHtml->findOneByid_page($oActualPage->get_id());
	        
	        if ($oContentPage->get_type() == 'template') {
	            
	            $this->layout
	                 ->assign('model', '/src/FrontOffice/View/'.strip_tags($oContentPage->get_content()));
	        }
	        else {
	            
	            $this->layout
	                 ->assign('sContentModel', $oContentPage->get_content());
	        }
	    }
	    
	    $this->layout
	         ->assign('oPage', $oActualPage)
	         ->assign('aSummary', $aSummaryPages)
	         ->display();
	}
}