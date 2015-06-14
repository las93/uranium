<?php
	
/**
 * Entity to plugin
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
 * Entity to plugin
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
class plugin extends Entity 
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
	 * page Entity
	 *
	 * @access private
	 * @var    page
	 * @join
	 *
	 */
    private $page = null;
	
	
	
	/**
	 * name
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $name = null;
	
	/**
	 * code
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $code = null;
	
	/**
	 * get id of plugin
	 *
	 * @access public
	 * @return int
	 */
	public function get_id()
	{
		return $this->id;
	}

	/**
	 * set id of plugin
	 *
	 * @access public
	 * @param  int $id id of plugin
	 * @return \Venus\src\BackOffice\Entity\plugin
	 */
	public function set_id($id) 
	{
		$this->id = $id;
		return $this;
	}
	
	/**
	 * get page entity join by id of plugin
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return array
	 */
	public function get_page($aWhere = array())
	{
		if ($this->page === null) {

			$oOrm = new Orm;

			$oOrm->select(array('*'))
				 ->from('page');
												   
	        $aWhere['id_plugin'] = $this->get_id();
											
													  
            $this->page = $oOrm->where($aWhere)
						           ->load(false, '\Venus\src\BackOffice\Entity\\');
        }

		return $this->page;
	}
	
	/**
	 * set page entity join by id of plugin
	 *
	 * @access public
	 * @param  \Venus\src\BackOffice\Entity\page  $page page entity
	 * @join
	 * @return array
	 */
	public function set_page(array $page)
	{
		$this->page = $page;
		return $this;
	}

	/**
	 * get name of plugin
	 *
	 * @access public
	 * @return string
	 */
	public function get_name()
	{
		return $this->name;
	}

	/**
	 * set name of plugin
	 *
	 * @access public
	 * @param  string $name name of plugin
	 * @return \Venus\src\BackOffice\Entity\plugin
	 */
	public function set_name($name) 
	{
		$this->name = $name;
		return $this;
	}
	
	/**
	 * get code of plugin
	 *
	 * @access public
	 * @return string
	 */
	public function get_code()
	{
		return $this->code;
	}

	/**
	 * set code of plugin
	 *
	 * @access public
	 * @param  string $code code of plugin
	 * @return \Venus\src\BackOffice\Entity\plugin
	 */
	public function set_code($code) 
	{
		$this->code = $code;
		return $this;
	}
	}