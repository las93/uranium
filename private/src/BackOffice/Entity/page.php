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
	 * url
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $url = null;
	
	/**
	 * title
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $title = null;
	
	/**
	 * description
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $description = null;
	
	/**
	 * id_parent
	 *
	 * @access private
	 * @var    int
	 *
	 */
    private $id_parent = null;
	
	/**
	 * parent_page Entity
	 *
	 * @access private
	 * @var    page
	 * @join
	 *
	 */
    private $parent_page = null;
	
	
	
	/**
	 * order
	 *
	 * @access private
	 * @var    int
	 *
	 */
    private $order = null;
	
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
	 * get page entity join by id of page
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
												   
	        $aWhere['id_parent'] = $this->get_id();
											
													  
            $this->page = $oOrm->where($aWhere)
						           ->load(false, '\Venus\src\BackOffice\Entity\\');
        }

		return $this->page;
	}
	
	/**
	 * set page entity join by id of page
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

	/**
	 * get url of page
	 *
	 * @access public
	 * @return string
	 */
	public function get_url()
	{
		return $this->url;
	}

	/**
	 * set url of page
	 *
	 * @access public
	 * @param  string $url url of page
	 * @return \Venus\src\BackOffice\Entity\page
	 */
	public function set_url($url) 
	{
		$this->url = $url;
		return $this;
	}
	
	/**
	 * get title of page
	 *
	 * @access public
	 * @return string
	 */
	public function get_title()
	{
		return $this->title;
	}

	/**
	 * set title of page
	 *
	 * @access public
	 * @param  string $title title of page
	 * @return \Venus\src\BackOffice\Entity\page
	 */
	public function set_title($title) 
	{
		$this->title = $title;
		return $this;
	}
	
	/**
	 * get description of page
	 *
	 * @access public
	 * @return string
	 */
	public function get_description()
	{
		return $this->description;
	}

	/**
	 * set description of page
	 *
	 * @access public
	 * @param  string $description description of page
	 * @return \Venus\src\BackOffice\Entity\page
	 */
	public function set_description($description) 
	{
		$this->description = $description;
		return $this;
	}
	
	/**
	 * get id_parent of page
	 *
	 * @access public
	 * @return int
	 */
	public function get_id_parent()
	{
		return $this->id_parent;
	}

	/**
	 * set id_parent of page
	 *
	 * @access public
	 * @param  int $id_parent id_parent of page
	 * @return \Venus\src\BackOffice\Entity\page
	 */
	public function set_id_parent($id_parent) 
	{
		$this->id_parent = $id_parent;
		return $this;
	}
	
	/**
	 * get parent_page entity join by id_parent of page
	 *
	 * @access public
	 * @param  array $aWhere
	 * @join
	 * @return \Venus\src\BackOffice\Entity\page
	 */
	public function get_parent_page($aWhere = array())
	{
		if ($this->parent_page === null) {

			$oOrm = new Orm;

			$oOrm->select(array('*'))
				 ->from('page');
												   
	        $aWhere['id'] = $this->get_id_parent();
											
													  
            $aResult = $oOrm->where($aWhere)
						           ->load(false, '\Venus\src\BackOffice\Entity\\');

          if (count($aResult) > 0) { $this->parent_page = $aResult[0]; }
          else { $this->parent_page = array(); }
        }

		return $this->parent_page;
	}
	
	/**
	 * set parent_page entity join by id_parent of page
	 *
	 * @access public
	 * @param  \Venus\src\BackOffice\Entity\page  $parent_page page entity
	 * @join
	 * @return \Venus\src\BackOffice\Entity\page
	 */
	public function set_parent_page(\Venus\src\BackOffice\Entity\page $parent_page)
	{
		$this->parent_page = $parent_page;
		return $this;
	}

	/**
	 * get order of page
	 *
	 * @access public
	 * @return int
	 */
	public function get_order()
	{
		return $this->order;
	}

	/**
	 * set order of page
	 *
	 * @access public
	 * @param  int $order order of page
	 * @return \Venus\src\BackOffice\Entity\page
	 */
	public function set_order($order) 
	{
		$this->order = $order;
		return $this;
	}
	}