<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateIstioGatewayRoutesRequest;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateIstioGatewayRoutesRequest\gatewayRoute\HTTPAdvancedOptions;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateIstioGatewayRoutesRequest\gatewayRoute\matchRequest;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\CreateIstioGatewayRoutesRequest\gatewayRoute\routeDestinations;
use AlibabaCloud\Tea\Model;

class gatewayRoute extends Model
{
    /**
     * @var string[]
     */
    public $domains;

    /**
     * @var HTTPAdvancedOptions
     */
    public $HTTPAdvancedOptions;

    /**
     * @var matchRequest
     */
    public $matchRequest;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var routeDestinations[]
     */
    public $routeDestinations;

    /**
     * @var string
     */
    public $routeName;

    /**
     * @var string
     */
    public $routeType;
    protected $_name = [
        'domains'             => 'Domains',
        'HTTPAdvancedOptions' => 'HTTPAdvancedOptions',
        'matchRequest'        => 'MatchRequest',
        'namespace'           => 'Namespace',
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
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
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
     * @return gatewayRoute
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
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
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
