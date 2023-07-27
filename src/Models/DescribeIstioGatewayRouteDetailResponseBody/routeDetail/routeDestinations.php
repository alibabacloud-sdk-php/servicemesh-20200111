<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\routeDestinations\destination;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\routeDestinations\headers;
use AlibabaCloud\Tea\Model;

class routeDestinations extends Model
{
    /**
     * @description The unique endpoint of the destination service to which the specified requests are sent.
     *
     * @var destination
     */
    public $destination;

    /**
     * @description The request headers to be matched.
     *
     * @var headers
     */
    public $headers;

    /**
     * @description The traffic weight. Valid values: 1 to 100.
     *
     * @example 80
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'destination' => 'Destination',
        'headers'     => 'Headers',
        'weight'      => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destination) {
            $res['Destination'] = null !== $this->destination ? $this->destination->toMap() : null;
        }
        if (null !== $this->headers) {
            $res['Headers'] = null !== $this->headers ? $this->headers->toMap() : null;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeDestinations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Destination'])) {
            $model->destination = destination::fromMap($map['Destination']);
        }
        if (isset($map['Headers'])) {
            $model->headers = headers::fromMap($map['Headers']);
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
