<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 4/5/15
 * Time: 5:04 AM
 */

namespace Maverickslab\Shopify\Resources;


use Maverickslab\Shopify\ApiRequestor;

class Shop extends BaseResource{
    protected  $requester;

    public function __construct(ApiRequestor $requester){

        $this->requester = $requester;
        $this->requester->resource = '/admin/shop';
    }
} 