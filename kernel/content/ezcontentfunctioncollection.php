<?php
//
// Definition of eZContentFunctionCollection class
//
// Created on: <06-Oct-2002 16:19:31 amos>
//
// Copyright (C) 1999-2002 eZ systems as. All rights reserved.
//
// This source file is part of the eZ publish (tm) Open Source Content
// Management System.
//
// This file may be distributed and/or modified under the terms of the
// "GNU General Public License" version 2 as published by the Free
// Software Foundation and appearing in the file LICENSE.GPL included in
// the packaging of this file.
//
// Licencees holding valid "eZ publish professional licences" may use this
// file in accordance with the "eZ publish professional licence" Agreement
// provided with the Software.
//
// This file is provided AS IS with NO WARRANTY OF ANY KIND, INCLUDING
// THE WARRANTY OF DESIGN, MERCHANTABILITY AND FITNESS FOR A PARTICULAR
// PURPOSE.
//
// The "eZ publish professional licence" is available at
// http://ez.no/home/licences/professional/. For pricing of this licence
// please contact us via e-mail to licence@ez.no. Further contact
// information is available at http://ez.no/home/contact/.
//
// The "GNU General Public License" (GPL) is available at
// http://www.gnu.org/copyleft/gpl.html.
//
// Contact licence@ez.no if any conditions of this licencing isn't clear to
// you.
//

/*! \file ezcontentfunctioncollection.php
*/

/*!
  \class eZContentFunctionCollection ezcontentfunctioncollection.php
  \brief The class eZContentFunctionCollection does

*/

include_once( 'kernel/error/errors.php' );

class eZContentFunctionCollection
{
    /*!
     Constructor
    */
    function eZContentFunctionCollection()
    {
    }

    function &fetchObject( $objectID )
    {
        include_once( 'kernel/classes/ezcontentobject.php' );
        $object =& eZContentObject::fetch( $objectID );
        if ( $object === null )
            return array( 'error' => array( 'error_type' => 'kernel',
                                            'error_code' => EZ_ERROR_KERNEL_NOT_FOUND ) );
        return array( 'result' => &$object );
    }

    function &fetchObjectList( $parentNodeID, $offset, $limit )
    {
        include_once( 'kernel/classes/ezcontentobjecttreenode.php' );
        $children =& eZContentObjectTreeNode::subTree( array( 'Depth' => 1,
                                                              'Offset' => $offset,
                                                              'Limit' => $limit,
                                                              'Limitation' => null ),
                                                       $parentNodeID );
        if ( $children === null )
            return array( 'error' => array( 'error_type' => 'kernel',
                                            'error_code' => EZ_ERROR_KERNEL_NOT_FOUND ) );
        return array( 'result' => &$children );
    }

    function &fetchObjectListCount( $parentNodeID )
    {
        include_once( 'kernel/classes/ezcontentobjecttreenode.php' );
        $node =& eZContentObjectTreeNode::fetch( $parentNodeID );
        $childrenCount =& $node->subTreeCount( array( 'Depth' => 1,
                                                      'Limitation' => null ) );
        if ( $childrenCount === null )
            return array( 'error' => array( 'error_type' => 'kernel',
                                            'error_code' => EZ_ERROR_KERNEL_NOT_FOUND ) );
        return array( 'result' => &$childrenCount );
    }

    function &fetchObjectTree( $parentNodeID, $offset, $limit, $publishSorting, $classID  )
    {
        include_once( 'kernel/classes/ezcontentobjecttreenode.php' );
        $children =& eZContentObjectTreeNode::subTree( array( 'Offset' => $offset,
                                                              'Limit' => $limit,
                                                              'Limitation' => null,
                                                              'publish_sorting' => $publishSorting,
                                                              'class_id' => $classID ),
                                                       $parentNodeID );
        if ( $children === null )
            return array( 'error' => array( 'error_type' => 'kernel',
                                            'error_code' => EZ_ERROR_KERNEL_NOT_FOUND ) );
        return array( 'result' => &$children );
    }

    function &fetchObjectTreeCount( $parentNodeID )
    {
        include_once( 'kernel/classes/ezcontentobjecttreenode.php' );
        $node =& eZContentObjectTreeNode::fetch( $parentNodeID );
        $childrenCount =& $node->subTreeCount( array( 'Limitation' => null ) );
        if ( $childrenCount === null )
            return array( 'error' => array( 'error_type' => 'kernel',
                                            'error_code' => EZ_ERROR_KERNEL_NOT_FOUND ) );
        return array( 'result' => &$childrenCount );
    }
}

?>
