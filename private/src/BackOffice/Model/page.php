<?php
	
/**
 * Model to page
 *
 * @category  	\Venus
 * @package   	\Venus\src\BackOffice\Model
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2014 Judicaël Paquet (https://github.com/las93)
 * @license   	https://github.com/las93/venus2/blob/master/LICENSE.md Tout droit réservé à Judicaël Paquet
 * @version   	Release: 1.0.0
 * @filesource	https://github.com/las93/venus2
 * @link      	https://github.com/las93
 * @since     	1.0
 */
namespace Venus\src\BackOffice\Model;

use \Venus\core\Model as Model;
	
/**
 * Model to page
 *
 * @category  	\Venus
 * @package   	\Venus\src\BackOffice\Model
 * @author    	Judicaël Paquet <judicael.paquet@gmail.com>
 * @copyright 	Copyright (c) 2013-2014 Judicaël Paquet (https://github.com/las93)
 * @license   	https://github.com/las93/venus2/blob/master/LICENSE.md Tout droit réservé à Judicaël Paquet
 * @version   	Release: 1.0.0
 * @filesource	https://github.com/las93/venus2
 * @link      	https://github.com/las93
 * @since     	1.0
 */
class page extends Model 
{
    /**
     * get page in order
     * 
     * @access public
     * @param  int $iIdParent
     * @return array[\Venus\src\BackOffice\Entity\page]
     */
    public function getPageInOrder($iIdParent)
    {
        $aResult = $this->orm
                        ->select(['*'])
                        ->from($this->_sTableName, 'p')
                        ->where($this->where->whereEqual('p.id_parent', $iIdParent))
                        ->orderBy(['p.order'])
                        ->load();
        	
        return $aResult;
    }
}
