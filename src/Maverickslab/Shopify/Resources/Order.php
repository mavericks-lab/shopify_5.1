<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 3/17/15
 * Time: 12:31 AM
 */

namespace Maverickslab\Shopify\Resources;


use Maverickslab\Shopify\ApiRequestor;
use Maverickslab\Shopify\Exceptions\ShopifyException;

class Order extends BaseResource{


    public function __construct( ApiRequestor $requester){
        $this->requester = $requester;
        $this->requester->resource = '/admin/orders';
    }

    

    public function markAsPaid($order_id, $post_data){
        $this->requester->resource = $this->requester->resource.'/'.$order_id.'/transactions';
        if(sizeof($post_data) < 0)
            throw new ShopifyException('Transaction Data is empty');

        return $this->requester->post( $post_data );
    }
}