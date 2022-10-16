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

class SuggestionAccept extends RpcRequest
{
    protected $url = '/2/tools/diagnosis/suggestion/accept/';
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
     * 希望获取建议的场景，允许值：CLEAN清理计划场景，POTENTIAL获取潜力计划场景，PROBLEM 问题场景
     * @var array $scenes
     */
    protected $scenes;


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
