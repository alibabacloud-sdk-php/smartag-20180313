<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeBindableSmartAccessGatewaysResponseBody\smartAccessGateways;
use AlibabaCloud\Tea\Model;

class DescribeBindableSmartAccessGatewaysResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var smartAccessGateways
     */
    public $smartAccessGateways;
    protected $_name = [
        'totalCount'          => 'TotalCount',
        'pageSize'            => 'PageSize',
        'requestId'           => 'RequestId',
        'pageNumber'          => 'PageNumber',
        'smartAccessGateways' => 'SmartAccessGateways',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->smartAccessGateways) {
            $res['SmartAccessGateways'] = null !== $this->smartAccessGateways ? $this->smartAccessGateways->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBindableSmartAccessGatewaysResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['SmartAccessGateways'])) {
            $model->smartAccessGateways = smartAccessGateways::fromMap($map['SmartAccessGateways']);
        }

        return $model;
    }
}
