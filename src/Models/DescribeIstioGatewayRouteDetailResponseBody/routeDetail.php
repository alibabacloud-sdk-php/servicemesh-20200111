<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\HTTPAdvancedOptions;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\matchRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\routeDestinations;
use AlibabaCloud\Tea\Model;

class routeDetail extends Model
{
    /**
     * @var string[]
     */
    public $domains;

    /**
     * @description The ports of the specified hosts from which the traffic is routed.
     *
     * @var HTTPAdvancedOptions
     */
    public $HTTPAdvancedOptions;

    /**
     * @description The specified HTTP error code.
     *
     * @var matchRequest
     */
    public $matchRequest;

    /**
     * @var routeDestinations[]
     */
    public $routeDestinations;

    /**
     * @description The percentage of requests that are aborted with specified error codes, expressed as a decimal.
     *
     * @example demo-route
     *
     * @var string
     */
    public $routeName;

    /**
     * @description The configurations for aborting requests with specified error codes.
     *
     * @example HTTP
     *
     * @var string
     */
    public $routeType;
    protected $_name = [
        'domains'             => 'Domains',
        'HTTPAdvancedOptions' => 'HTTPAdvancedOptions',
        'matchRequest'        => 'MatchRequest',
        'routeDestinations'   => 'RouteDestinations',
        'routeName'           => 'RouteName',
        'routeType'           => 'RouteType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domains) {
            $res['Domains'] = $this->domains;
        }
        if (null !== $this->HTTPAdvancedOptions) {
            $res['HTTPAdvancedOptions'] = null !== $this->HTTPAdvancedOptions ? $this->HTTPAdvancedOptions->toMap() : null;
        }
        if (null !== $this->matchRequest) {
            $res['MatchRequest'] = null !== $this->matchRequest ? $this->matchRequest->toMap() : null;
        }
        if (null !== $this->routeDestinations) {
            $res['RouteDestinations'] = [];
            if (null !== $this->routeDestinations && \is_array($this->routeDestinations)) {
                $n = 0;
                foreach ($this->routeDestinations as $item) {
                    $res['RouteDestinations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->routeName) {
            $res['RouteName'] = $this->routeName;
        }
        if (null !== $this->routeType) {
            $res['RouteType'] = $this->routeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = $map['Domains'];
            }
        }
        if (isset($map['HTTPAdvancedOptions'])) {
            $model->HTTPAdvancedOptions = HTTPAdvancedOptions::fromMap($map['HTTPAdvancedOptions']);
        }
        if (isset($map['MatchRequest'])) {
            $model->matchRequest = matchRequest::fromMap($map['MatchRequest']);
        }
        if (isset($map['RouteDestinations'])) {
            if (!empty($map['RouteDestinations'])) {
                $model->routeDestinations = [];
                $n                        = 0;
                foreach ($map['RouteDestinations'] as $item) {
                    $model->routeDestinations[$n++] = null !== $item ? routeDestinations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RouteName'])) {
            $model->routeName = $map['RouteName'];
        }
        if (isset($map['RouteType'])) {
            $model->routeType = $map['RouteType'];
        }

        return $model;
    }
}
