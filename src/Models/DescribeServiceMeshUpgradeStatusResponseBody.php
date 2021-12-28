<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshUpgradeStatusResponseBody\upgradeDetail;
use AlibabaCloud\Tea\Model;

class DescribeServiceMeshUpgradeStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var upgradeDetail
     */
    public $upgradeDetail;
    protected $_name = [
        'requestId'     => 'RequestId',
        'upgradeDetail' => 'UpgradeDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->upgradeDetail) {
            $res['UpgradeDetail'] = null !== $this->upgradeDetail ? $this->upgradeDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceMeshUpgradeStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UpgradeDetail'])) {
            $model->upgradeDetail = upgradeDetail::fromMap($map['UpgradeDetail']);
        }

        return $model;
    }
}