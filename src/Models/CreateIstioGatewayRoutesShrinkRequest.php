<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class CreateIstioGatewayRoutesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gatewayRouteShrink;

    /**
     * @var string
     */
    public $istioGatewayName;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $serviceMeshId;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'description'        => 'Description',
        'gatewayRouteShrink' => 'GatewayRoute',
        'istioGatewayName'   => 'IstioGatewayName',
        'priority'           => 'Priority',
        'serviceMeshId'      => 'ServiceMeshId',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gatewayRouteShrink) {
            $res['GatewayRoute'] = $this->gatewayRouteShrink;
        }
        if (null !== $this->istioGatewayName) {
            $res['IstioGatewayName'] = $this->istioGatewayName;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIstioGatewayRoutesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GatewayRoute'])) {
            $model->gatewayRouteShrink = $map['GatewayRoute'];
        }
        if (isset($map['IstioGatewayName'])) {
            $model->istioGatewayName = $map['IstioGatewayName'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
