<?php
/**
 * 查询应用信息
 * User: L
 * Date: 2022/10/16
 * Email:
 */

namespace Tool\Diagnosis;

use core\Helper\RequestCheckUtil;
use core\Profile\RpcRequest;

class AdGetV2 extends RpcRequest
{
    protected $url = '/2/tools/diagnosis/ad/get_v2/';
    protected $method = 'GET';
    protected $content_type = 'application/json';

    /**
     * 操作的广告主id
     * @var int $advertiser_id
     */
    protected $advertiser_id;

    /**
     * 广告计划ID数组，最多50个
     * @var array $ad_ids
     */
    protected $ad_ids;


    /**
     * @param mixed $args
     * @return $this
     */
    public function setArgs($args)
    {
        foreach ($args as $key => $value) {
            $this->params[$key] = $this->{$key} = $value;
        }
        return $this;
    }

    /**
     * @throws \core\Exception\InvalidParamException
     */
    public function check()
    {

    }
}
