<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\spec\loadBalancer;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\spec\meshConfig;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\spec\network;
use AlibabaCloud\Tea\Model;

class spec extends Model
{
    /**
     * @description The information about load balancing.
     *
     * @var loadBalancer
     */
    public $loadBalancer;

    /**
     * @description The configurations of the ASM instance.
     *
     * @var meshConfig
     */
    public $meshConfig;

    /**
     * @description The network configurations of the ASM instance.
     *
     * @var network
     */
    public $network;
    protected $_name = [
        'loadBalancer' => 'LoadBalancer',
        'meshConfig'   => 'MeshConfig',
        'network'      => 'Network',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loadBalancer) {
            $res['LoadBalancer'] = null !== $this->loadBalancer ? $this->loadBalancer->toMap() : null;
        }
        if (null !== $this->meshConfig) {
            $res['MeshConfig'] = null !== $this->meshConfig ? $this->meshConfig->toMap() : null;
        }
        if (null !== $this->network) {
            $res['Network'] = null !== $this->network ? $this->network->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadBalancer'])) {
            $model->loadBalancer = loadBalancer::fromMap($map['LoadBalancer']);
        }
        if (isset($map['MeshConfig'])) {
            $model->meshConfig = meshConfig::fromMap($map['MeshConfig']);
        }
        if (isset($map['Network'])) {
            $model->network = network::fromMap($map['Network']);
        }

        return $model;
    }
}
