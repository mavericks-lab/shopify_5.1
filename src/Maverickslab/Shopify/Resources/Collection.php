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

class Collection extends BaseResource{


    public function __construct( ApiRequestor $requestor){
        $this->requestor = $requestor;
        $this->requestor->resource = '/admin/custom_collections';
    }
}