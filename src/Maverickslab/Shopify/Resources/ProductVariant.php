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

class ProductVariant extends BaseResource{


    public function __construct( ApiRequestor $requester){
        $this->requester = $requester;
        $this->requester->resource = '/admin/products';
    }

    public function remove ( $id, $product_id = null )
    {
        if(is_null($product_id))
            throw new ShopifyException('Product Id not provided');

        if(is_null($id))
            throw new ShopifyException('Product variant Id not provided');

        $this->requester->resource = $this->requester->resource.'/'.$product_id.'/variants';

        return $this->requester->delete( $id );
    }
}