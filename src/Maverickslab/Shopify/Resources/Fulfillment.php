<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/11/15
 * Time: 4:19 PM
 */

namespace Maverickslab\Shopify\Resources;


use Maverickslab\Shopify\ApiRequestor;
use Maverickslab\Shopify\Exceptions\ShopifyException;

class Fulfillment {

    private $requester;

    public function __construct( ApiRequestor $requester){
        $this->requester = $requester;
        $this->requester->resource = '/admin/orders';
    }

    public function create ( $order_id, $post_data )
    {
        $this->requester->resource = $this->requester->resource.'/'.$order_id.'/fulfillments';
        if(sizeof($post_data) < 0)
            throw new ShopifyException('Fulfillment Data is empty');

        return $this->requester->post( $post_data );
    }

} 