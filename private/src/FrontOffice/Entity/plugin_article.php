<?php
	
/**
 * Entity to plugin_article
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
 * Entity to plugin_article
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
class plugin_article extends Entity 
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
	 * title
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $title = null;
	
	/**
	 * content
	 *
	 * @access private
	 * @var    string
	 *
	 */
    private $content = null;
	
	/**
	 * get id of plugin_article
	 *
	 * @access public
	 * @return int
	 */
	public function get_id()
	{
		return $this->id;
	}

	/**
	 * set id of plugin_article
	 *
	 * @access public
	 * @param  int $id id of plugin_article
	 * @return \Venus\src\FrontOffice\Entity\plugin_article
	 */
	public function set_id($id) 
	{
		$this->id = $id;
		return $this;
	}
	
	/**
	 * get id_page of plugin_article
	 *
	 * @access public
	 * @return int
	 */
	public function get_id_page()
	{
		return $this->id_page;
	}

	/**
	 * set id_page of plugin_article
	 *
	 * @access public
	 * @param  int $id_page id_page of plugin_article
	 * @return \Venus\src\FrontOffice\Entity\plugin_article
	 */
	public function set_id_page($id_page) 
	{
		$this->id_page = $id_page;
		return $this;
	}
	
	/**
	 * get title of plugin_article
	 *
	 * @access public
	 * @return string
	 */
	public function get_title()
	{
		return $this->title;
	}

	/**
	 * set title of plugin_article
	 *
	 * @access public
	 * @param  string $title title of plugin_article
	 * @return \Venus\src\FrontOffice\Entity\plugin_article
	 */
	public function set_title($title) 
	{
		$this->title = $title;
		return $this;
	}
	
	/**
	 * get content of plugin_article
	 *
	 * @access public
	 * @return string
	 */
	public function get_content()
	{
		return $this->content;
	}

	/**
	 * set content of plugin_article
	 *
	 * @access public
	 * @param  string $content content of plugin_article
	 * @return \Venus\src\FrontOffice\Entity\plugin_article
	 */
	public function set_content($content) 
	{
		$this->content = $content;
		return $this;
	}
	}