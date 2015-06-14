<?php
	
/**
 * Entity to page
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
 * Entity to page
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
class page extends Entity 
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
	 * name
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $name = null;
	
	/**
	 * id_plugin
	 *
	 * @access private
	 * @var    int
	 *
	 */
    private $id_plugin = null;
	
	/**
	 * plugin Entity
	 *
	 * @access private
	 * @var    plugin
	 * @join
	 *
	 */
    private $plugin = null;
	
	
	
	/**
	 * get id of page
	 *
	 * @access public
	 * @return int
	 */
	public function get_id()
	{
		return $this->id;
	}

	/**
	 * set id of page
	 *
	 * @access public
	 * @param  int $id id of page
	 * @return \Venus\src\BackOffice\Entity\page
	 */
	public function set_id($id) 
	{
		$this->id = $id;
		return $this;
	}
	
	/**
	 * get name of page
	 *
	 * @access public
	 * @return string
	 */
	public function get_name()
	{
		return $this->name;
	}

	/**
	 * set name of page
	 *
	 * @access public
	 * @param  string $name name of page
	 * @return \Venus\src\BackOffice\Entity\page
	 */
	public function set_name($name) 
	{
		$this->name = $name;
		return $this;
	}
	
	/**
	 * get id_plugin of page
	 *
	 * @access public
	 * @return int
	 */
	public function get_id_plugin()
	{
		return $this->id_plugin;
	}

	/**
	 * set id_plugin of page
	 *
	 * @access public
	 * @param  int $id_plugin id_plugin of page
	 * @return \Venus\src\BackOffice\Entity\page
	 */
	public function set_id_plugin($id_plugin) 
	{
		$this->id_plugin = $id_plugin;
		return $this;
	}
	
	/**
	 * get plugin entity join by id_plugin of page
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return \Venus\src\BackOffice\Entity\page
	 */
	public function get_plugin($aWhere = array())
	{
		if ($this->plugin === null) {

			$oOrm = new Orm;

			$oOrm->select(array('*'))
				 ->from('plugin');
												   
	        $aWhere['id'] = $this->get_id_plugin();
											
													  
            $aResult = $oOrm->where($aWhere)
						           ->load(false, '\Venus\src\BackOffice\Entity\\');

          if (count($aResult) > 0) { $this->plugin = $aResult[0]; }
          else { $this->plugin = array(); }
        }

		return $this->plugin;
	}
	
	/**
	 * set plugin entity join by id_plugin of page
	 *
	 * @access public
	 * @param  \Venus\src\BackOffice\Entity\plugin  $plugin plugin entity
	 * @join
	 * @return \Venus\src\BackOffice\Entity\page
	 */
	public function set_plugin(\Venus\src\BackOffice\Entity\plugin $plugin)
	{
		$this->plugin = $plugin;
		return $this;
	}
}