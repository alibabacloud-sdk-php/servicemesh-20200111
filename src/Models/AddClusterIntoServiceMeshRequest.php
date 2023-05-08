<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class AddClusterIntoServiceMeshRequest extends Model
{
    /**
     * @example ce3c25e247da24f3aab9b7edfae83****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 添加集群时不检查目标集群是否存在istio-system namespace，一般用于自建istio 迁移ASM 场景
     *
     * @example false
     *
     * @var bool
     */
    public $ignoreNamespaceCheck;

    /**
     * @example cb8963379255149cb98c8686f274x****
     *
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'clusterId'            => 'ClusterId',
        'ignoreNamespaceCheck' => 'IgnoreNamespaceCheck',
        'serviceMeshId'        => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->ignoreNamespaceCheck) {
            $res['IgnoreNamespaceCheck'] = $this->ignoreNamespaceCheck;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddClusterIntoServiceMeshRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['IgnoreNamespaceCheck'])) {
            $model->ignoreNamespaceCheck = $map['IgnoreNamespaceCheck'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
