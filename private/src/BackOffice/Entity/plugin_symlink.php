<?php
	
/**
 * Entity to plugin_symlink
 *
 * @category  	\Venus
 * @package   	\Venus\src\BackOffice\Entity
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2014 Judicaël Paquet (https://github.com/las93)
 * @license   	https://github.com/las93/venus2/blob/master/LICENSE.md Tout droit réservé à Judicaël Paquet
 * @version   	Release: 1.0.0
 * @filesource	https://github.com/las93/venus2
 * @link      	https://github.com/las93
 * @since     	1.0
 */
namespace Venus\src\BackOffice\Entity;

use \Attila\core\Entity as Entity;
use \Attila\Orm as Orm;

/**
 * Entity to plugin_symlink
 *
 * @category  	\Venus
 * @package   	\Venus\src\BackOffice\Entity
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2014 Judicaël Paquet (https://github.com/las93)
 * @license   	https://github.com/las93/venus2/blob/master/LICENSE.md Tout droit réservé à Judicaël Paquet
 * @version   	Release: 1.0.0
 * @filesource	https://github.com/las93/venus2
 * @link      	https://github.com/las93
 * @since     	1.0
 */
class plugin_symlink extends Entity 
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
	 * id_page
	 *
	 * @access private
	 * @var    int
	 *
	 */
    private $id_page = null;
	
	/**
	 * type
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $type = null;
	
	/**
	 * value
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $value = null;
	
	/**
	 * get id of plugin_symlink
	 *
	 * @access public
	 * @return int
	 */
	public function get_id()
	{
		return $this->id;
	}

	/**
	 * set id of plugin_symlink
	 *
	 * @access public
	 * @param  int $id id of plugin_symlink
	 * @return \Venus\src\BackOffice\Entity\plugin_symlink
	 */
	public function set_id($id) 
	{
		$this->id = $id;
		return $this;
	}
	
	/**
	 * get id_page of plugin_symlink
	 *
	 * @access public
	 * @return int
	 */
	public function get_id_page()
	{
		return $this->id_page;
	}

	/**
	 * set id_page of plugin_symlink
	 *
	 * @access public
	 * @param  int $id_page id_page of plugin_symlink
	 * @return \Venus\src\BackOffice\Entity\plugin_symlink
	 */
	public function set_id_page($id_page) 
	{
		$this->id_page = $id_page;
		return $this;
	}
	
	/**
	 * get type of plugin_symlink
	 *
	 * @access public
	 * @return string
	 */
	public function get_type()
	{
		return $this->type;
	}

	/**
	 * set type of plugin_symlink
	 *
	 * @access public
	 * @param  string $type type of plugin_symlink
	 * @return \Venus\src\BackOffice\Entity\plugin_symlink
	 */
	public function set_type($type) 
	{
		$this->type = $type;
		return $this;
	}
	
	/**
	 * get value of plugin_symlink
	 *
	 * @access public
	 * @return string
	 */
	public function get_value()
	{
		return $this->value;
	}

	/**
	 * set value of plugin_symlink
	 *
	 * @access public
	 * @param  string $value value of plugin_symlink
	 * @return \Venus\src\BackOffice\Entity\plugin_symlink
	 */
	public function set_value($value) 
	{
		$this->value = $value;
		return $this;
	}
	}