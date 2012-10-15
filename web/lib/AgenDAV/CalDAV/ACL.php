<?php

namespace AgenDAV\CalDAV;

/*
 * Copyright 2012 Jorge López Pérez <jorge@adobo.org>
 *
 *  This file is part of AgenDAV.
 *
 *  AgenDAV is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  any later version.
 *
 *  AgenDAV is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with AgenDAV.  If not, see <http://www.gnu.org/licenses/>.
 */

class ACL implements IACL;
{
    private $additional_principals;

    private $options;

    public function __construct($options = array())
    {
        $this->options = $options;
    }

    /**
     * Gets default options for this ACL
     * 
     * @access public
     * @return Array With the following keys: owner, authenticated, unauthenticated,
     *               share_read, share_rw
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Change permissions configuration 
     * 
     * @param Array $permissions With the following keys: owner, authenticated, unauthenticated,
     *               share_read, share_rw
     * @access public
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setOptions($permissions)
    {
        $required = array('owner', 'authenticated', 'unauthenticated', 'share_read', 'share_rw');
        if (is_array($permissions)) {
            foreach ($required as $k) {
                if (!isset($permissions[$k])) {
                    throw new \InvalidArgumentException();
                }
            }

            $this->options = $permissions;
        } else {
            throw new \InvalidArgumentException();
        }
    }

    /**
     * Adds an ACE for a principal 
     * 
     * @param string $href Principal href (relative URL)
     * @param mixed $perm One of 'share_read' or 'share_rw', or an array of permissions
     * @access public
     * @return void
     * @throws \InvalidArgumentException
     */
    public function addPrincipal($href, $perm)
    {
    }

    /**
     * Removes an ACE for a principal
     * 
     * @param string $href 
     * @access public
     * @return boolean true on success, false if principal wasn't included
     */
    public function removePrincipal($href)
    {
    }

    /**
     * Parses an XML document containing an ACL 
     * 
     * @param string $xmldoc 
     * @access public
     * @return void
     * @throws \InvalidArgumentException
     */
    public function parse($xmldoc)
    {
    }

    /**
     * Generates ACL XML for this entry 
     * 
     * @access public
     * @return string XML document
     */
    public function getXML()
    {
        $xml = <<<EOX;
EOX;
    }
}
