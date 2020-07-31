<?php


if ( !function_exists(  'is_iterable' ) )
{
    
    function is_iterable( $obj )
    {
        return is_array( $obj ) || ( is_object( $obj ) && ( $obj instanceof \Traversable ) );
    }
    
}
