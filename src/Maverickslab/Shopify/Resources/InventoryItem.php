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

class InventoryItem extends BaseResource{


    public function __construct( ApiRequestor $requester){
        $this->requester = $requester;
        $this->requester->resource = '/admin/inventory_items';
    }

}