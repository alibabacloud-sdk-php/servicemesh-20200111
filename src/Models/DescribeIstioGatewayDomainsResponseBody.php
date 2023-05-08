<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeIstioGatewayDomainsResponseBody\gatewaySecretDetails;
use AlibabaCloud\Tea\Model;

class DescribeIstioGatewayDomainsResponseBody extends Model
{
    /**
     * @description The domain names that are exposed by the ASM gateway.
     *
     * @var gatewaySecretDetails[]
     */
    public $gatewaySecretDetails;

    /**
     * @description The ID of the request.
     *
     * @example 31d3a0f0-07ed-4f6e-9004-1804498c****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'gatewaySecretDetails' => 'GatewaySecretDetails',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewaySecretDetails) {
            $res['GatewaySecretDetails'] = [];
            if (null !== $this->gatewaySecretDetails && \is_array($this->gatewaySecretDetails)) {
                $n = 0;
                foreach ($this->gatewaySecretDetails as $item) {
                    $res['GatewaySecretDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIstioGatewayDomainsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewaySecretDetails'])) {
            if (!empty($map['GatewaySecretDetails'])) {
                $model->gatewaySecretDetails = [];
                $n                           = 0;
                foreach ($map['GatewaySecretDetails'] as $item) {
                    $model->gatewaySecretDetails[$n++] = null !== $item ? gatewaySecretDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
