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

class Location extends BaseResource{


    public function __construct( ApiRequestor $requester){
        $this->requester = $requester;
        $this->requester->resource = '/admin/locations';
    }

    public function getInventoryLevels($locationId)
    {
        $this->requester->resource = '/admin/locations/'.$locationId.'/inventory_levels';
    }
}