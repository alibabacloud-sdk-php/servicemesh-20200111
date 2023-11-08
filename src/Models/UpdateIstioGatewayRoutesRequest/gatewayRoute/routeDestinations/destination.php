<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute\routeDestinations;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute\routeDestinations\destination\port;
use AlibabaCloud\Tea\Model;

class destination extends Model
{
    /**
     * @description The name of the service defined in the service registry.
     *
     * @example reviews
     *
     * @var string
     */
    public $host;

    /**
     * @description The port of the destination service.
     *
     * >  If the destination service of the route has only one port, this field can be left empty. If the destination service has multiple ports, you must specify the port number.
     * @var port
     */
    public $port;

    /**
     * @description The name of the service subset.
     *
     * @example v1
     *
     * @var string
     */
    public $subset;
    protected $_name = [
        'host'   => 'Host',
        'port'   => 'Port',
        'subset' => 'Subset',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->port) {
            $res['Port'] = null !== $this->port ? $this->port->toMap() : null;
        }
        if (null !== $this->subset) {
            $res['Subset'] = $this->subset;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return destination
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Port'])) {
            $model->port = port::fromMap($map['Port']);
        }
        if (isset($map['Subset'])) {
            $model->subset = $map['Subset'];
        }

        return $model;
    }
}
