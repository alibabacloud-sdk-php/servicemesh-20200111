<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DeleteGatewaySecretRequest extends Model
{
    /**
     * @var string
     */
    public $istioGatewayName;

    /**
     * @var string
     */
    public $secretName;

    /**
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'istioGatewayName' => 'IstioGatewayName',
        'secretName'       => 'SecretName',
        'serviceMeshId'    => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->istioGatewayName) {
            $res['IstioGatewayName'] = $this->istioGatewayName;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteGatewaySecretRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IstioGatewayName'])) {
            $model->istioGatewayName = $map['IstioGatewayName'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
