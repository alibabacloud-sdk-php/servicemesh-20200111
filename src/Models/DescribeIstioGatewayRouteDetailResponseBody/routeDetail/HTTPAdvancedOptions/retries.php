<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\HTTPAdvancedOptions;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayRouteDetailResponseBody\routeDetail\HTTPAdvancedOptions\retries\retryRemoteLocalities;
use AlibabaCloud\Tea\Model;

class retries extends Model
{
    /**
     * @description The number of retries that are allowed for a request.
     *
     * @example 3
     *
     * @var int
     */
    public $attempts;

    /**
     * @description The timeout period for each retry.
     *
     * @example 2s
     *
     * @var string
     */
    public $perTryTimeout;

    /**
     * @description The condition for retries. Example: `connect-failure,refused-stream,503`.
     *
     * @example connect-failure,refused-stream,503
     *
     * @var string
     */
    public $retryOn;

    /**
     * @description Specifies whether to allow retries to other localities.
     *
     * @var retryRemoteLocalities
     */
    public $retryRemoteLocalities;
    protected $_name = [
        'attempts'              => 'Attempts',
        'perTryTimeout'         => 'PerTryTimeout',
        'retryOn'               => 'RetryOn',
        'retryRemoteLocalities' => 'RetryRemoteLocalities',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attempts) {
            $res['Attempts'] = $this->attempts;
        }
        if (null !== $this->perTryTimeout) {
            $res['PerTryTimeout'] = $this->perTryTimeout;
        }
        if (null !== $this->retryOn) {
            $res['RetryOn'] = $this->retryOn;
        }
        if (null !== $this->retryRemoteLocalities) {
            $res['RetryRemoteLocalities'] = null !== $this->retryRemoteLocalities ? $this->retryRemoteLocalities->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return retries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attempts'])) {
            $model->attempts = $map['Attempts'];
        }
        if (isset($map['PerTryTimeout'])) {
            $model->perTryTimeout = $map['PerTryTimeout'];
        }
        if (isset($map['RetryOn'])) {
            $model->retryOn = $map['RetryOn'];
        }
        if (isset($map['RetryRemoteLocalities'])) {
            $model->retryRemoteLocalities = retryRemoteLocalities::fromMap($map['RetryRemoteLocalities']);
        }

        return $model;
    }
}
