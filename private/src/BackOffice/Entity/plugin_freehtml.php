<?php
	
/**
 * Entity to plugin_freehtml
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
 * Entity to plugin_freehtml
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
class plugin_freehtml extends Entity 
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
	 * content
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $content = null;
	
	/**
	 * get id of plugin_freehtml
	 *
	 * @access public
	 * @return int
	 */
	public function get_id()
	{
		return $this->id;
	}

	/**
	 * set id of plugin_freehtml
	 *
	 * @access public
	 * @param  int $id id of plugin_freehtml
	 * @return \Venus\src\BackOffice\Entity\plugin_freehtml
	 */
	public function set_id($id) 
	{
		$this->id = $id;
		return $this;
	}
	
	/**
	 * get id_page of plugin_freehtml
	 *
	 * @access public
	 * @return int
	 */
	public function get_id_page()
	{
		return $this->id_page;
	}

	/**
	 * set id_page of plugin_freehtml
	 *
	 * @access public
	 * @param  int $id_page id_page of plugin_freehtml
	 * @return \Venus\src\BackOffice\Entity\plugin_freehtml
	 */
	public function set_id_page($id_page) 
	{
		$this->id_page = $id_page;
		return $this;
	}
	
	/**
	 * get type of plugin_freehtml
	 *
	 * @access public
	 * @return string
	 */
	public function get_type()
	{
		return $this->type;
	}

	/**
	 * set type of plugin_freehtml
	 *
	 * @access public
	 * @param  string $type type of plugin_freehtml
	 * @return \Venus\src\BackOffice\Entity\plugin_freehtml
	 */
	public function set_type($type) 
	{
		$this->type = $type;
		return $this;
	}
	
	/**
	 * get content of plugin_freehtml
	 *
	 * @access public
	 * @return string
	 */
	public function get_content()
	{
		return $this->content;
	}

	/**
	 * set content of plugin_freehtml
	 *
	 * @access public
	 * @param  string $content content of plugin_freehtml
	 * @return \Venus\src\BackOffice\Entity\plugin_freehtml
	 */
	public function set_content($content) 
	{
		$this->content = $content;
		return $this;
	}
	}