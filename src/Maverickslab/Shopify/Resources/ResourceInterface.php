<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 3/16/15
 * Time: 10:56 PM
 */

namespace Maverickslab\Shopify\Resources;


interface ResourceInterface {

    public function get( $id = null );
    public function create( $post_data );
    public function modify( $id, $modify_data);
    public function remove( $id );
} 