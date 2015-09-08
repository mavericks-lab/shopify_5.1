<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 4/5/15
 * Time: 5:05 AM
 */

namespace Maverickslab\Shopify\Resources;


use Maverickslab\Shopify\Exceptions\ShopifyException;


class BaseResource implements ResourceInterface{

    protected $requester;

    public function get ( $id = null, $options = [] )
    {
        return $this->requester->get($id, $options);
    }

    public function create ( $post_data )
    {
        if(sizeof($post_data) < 0)
            throw new ShopifyException('Create Data is empty');

        return $this->requester->post( $post_data );
    }

    public function modify ( $id, $modify_data )
    {
        if(is_null($id))
            throw new ShopifyException('Resource Id not provided');

        if(sizeof($modify_data) < 0)
            throw new ShopifyException('Modify Data is empty');

        return $this->requester->put($id, $modify_data);
    }

    public function remove ( $id )
    {
        if(is_null($id))
            throw new ShopifyException('Product Id not provided');

        return $this->requester->delete( $id );
    }

    public function count(){
        return $this->requester->count();
    }
} 