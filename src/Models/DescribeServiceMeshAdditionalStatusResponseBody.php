<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshAdditionalStatusResponseBody\clusterStatus;
use AlibabaCloud\Tea\Model;

class DescribeServiceMeshAdditionalStatusResponseBody extends Model
{
    /**
     * @var clusterStatus
     */
    public $clusterStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterStatus' => 'ClusterStatus',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterStatus) {
            $res['ClusterStatus'] = null !== $this->clusterStatus ? $this->clusterStatus->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceMeshAdditionalStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterStatus'])) {
            $model->clusterStatus = clusterStatus::fromMap($map['ClusterStatus']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
