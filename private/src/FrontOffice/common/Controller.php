<?php

/**
 * Controller Manager
 *
 * @category  	src\FrontOffice
 * @package   	src\FrontOffice\common
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2014 PAQUET Judicaël FR Inc. (https://github.com/las93)
 * @license   	https://github.com/las93/uranium/blob/master/LICENSE.md Tout droit réservé à PAQUET Judicaël
 * @version   	Release: 1.0.0
 * @filesource	https://github.com/las93/venus2
 * @link      	https://github.com/las93
 * @since     	1.0
 */

namespace Venus\src\FrontOffice\common;

use \Venus\core\Controller as CoreController;

/**
 * Controller Manager
 *
 * @category  	src\FrontOffice
 * @package   	src\FrontOffice\common
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
	}
}
