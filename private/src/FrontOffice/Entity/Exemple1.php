<?php
	
/**
 * Entity to Exemple1
 *
 * @category  	\Venus
 * @package   	\Venus\src\FrontOffice\Entity
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2014 Judicaël Paquet (https://github.com/las93)
 * @license   	https://github.com/las93/venus2/blob/master/LICENSE.md Tout droit réservé à Judicaël Paquet
 * @version   	Release: 1.0.0
 * @filesource	https://github.com/las93/venus2
 * @link      	https://github.com/las93
 * @since     	1.0
 */
namespace Venus\src\FrontOffice\Entity;

use \Attila\core\Entity as Entity;
use \Attila\Orm as Orm;

/**
 * Entity to Exemple1
 *
 * @category  	\Venus
 * @package   	\Venus\src\FrontOffice\Entity
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2014 Judicaël Paquet (https://github.com/las93)
 * @license   	https://github.com/las93/venus2/blob/master/LICENSE.md Tout droit réservé à Judicaël Paquet
 * @version   	Release: 1.0.0
 * @filesource	https://github.com/las93/venus2
 * @link      	https://github.com/las93
 * @since     	1.0
 */
class Exemple1 extends Entity 
{
	/**
	 * id
	 *
	 * @access private
	 * @var    int
	 *
	 * @primary_key
	 */
    private $id = null;
	
	/**
	 * title
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $title = null;
	
	/**
	 * get id of Exemple1
	 *
	 * @access public
	 * @return int
	 */
	public function get_id()
	{
		return $this->id;
	}

	/**
	 * set id of Exemple1
	 *
	 * @access public
	 * @param  int $id id of Exemple1
	 * @return \Venus\src\FrontOffice\Entity\Exemple1
	 */
	public function set_id($id) 
	{
		$this->id = $id;
		return $this;
	}
	
	/**
	 * get title of Exemple1
	 *
	 * @access public
	 * @return string
	 */
	public function get_title()
	{
		return $this->title;
	}

	/**
	 * set title of Exemple1
	 *
	 * @access public
	 * @param  string $title title of Exemple1
	 * @return \Venus\src\FrontOffice\Entity\Exemple1
	 */
	public function set_title($title) 
	{
		$this->title = $title;
		return $this;
	}
	}