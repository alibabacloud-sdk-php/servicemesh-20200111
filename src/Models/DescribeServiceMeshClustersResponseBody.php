<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshClustersResponseBody\clusters;
use AlibabaCloud\Tea\Model;

class DescribeServiceMeshClustersResponseBody extends Model
{
    /**
     * @description The point in time when the cluster was last modified.
     *
     * @var clusters[]
     */
    public $clusters;

    /**
     * @example 5
     *
     * @var int
     */
    public $numberOfClusters;

    /**
     * @description The point in time when the cluster was created.
     *
     * @example 31d3a0f0-07ed-4f6e-9004-1804498c****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusters'         => 'Clusters',
        'numberOfClusters' => 'NumberOfClusters',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusters) {
            $res['Clusters'] = [];
            if (null !== $this->clusters && \is_array($this->clusters)) {
                $n = 0;
                foreach ($this->clusters as $item) {
                    $res['Clusters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->numberOfClusters) {
            $res['NumberOfClusters'] = $this->numberOfClusters;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceMeshClustersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Clusters'])) {
            if (!empty($map['Clusters'])) {
                $model->clusters = [];
                $n               = 0;
                foreach ($map['Clusters'] as $item) {
                    $model->clusters[$n++] = null !== $item ? clusters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NumberOfClusters'])) {
            $model->numberOfClusters = $map['NumberOfClusters'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
