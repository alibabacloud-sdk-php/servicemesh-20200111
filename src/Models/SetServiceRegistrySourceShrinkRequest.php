<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class SetServiceRegistrySourceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $serviceMeshId;

    /**
     * @var string
     */
    public $configShrink;
    protected $_name = [
        'serviceMeshId' => 'ServiceMeshId',
        'configShrink'  => 'Config',
    ];

    public function validate()
    {
        Model::validateRequired('serviceMeshId', $this->serviceMeshId, true);
        Model::validateRequired('configShrink', $this->configShrink, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->configShrink) {
            $res['Config'] = $this->configShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetServiceRegistrySourceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['Config'])) {
            $model->configShrink = $map['Config'];
        }

        return $model;
    }
}
