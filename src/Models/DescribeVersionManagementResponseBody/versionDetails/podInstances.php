<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVersionManagementResponseBody\versionDetails;

use AlibabaCloud\Tea\Model;

class podInstances extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $nodeIp;

    /**
     * @var string
     */
    public $podIP;

    /**
     * @var string
     */
    public $podName;
    protected $_name = [
        'createTime' => 'CreateTime',
        'namespace'  => 'Namespace',
        'nodeIp'     => 'NodeIp',
        'podIP'      => 'PodIP',
        'podName'    => 'PodName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->nodeIp) {
            $res['NodeIp'] = $this->nodeIp;
        }
        if (null !== $this->podIP) {
            $res['PodIP'] = $this->podIP;
        }
        if (null !== $this->podName) {
            $res['PodName'] = $this->podName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return podInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NodeIp'])) {
            $model->nodeIp = $map['NodeIp'];
        }
        if (isset($map['PodIP'])) {
            $model->podIP = $map['PodIP'];
        }
        if (isset($map['PodName'])) {
            $model->podName = $map['PodName'];
        }

        return $model;
    }
}
