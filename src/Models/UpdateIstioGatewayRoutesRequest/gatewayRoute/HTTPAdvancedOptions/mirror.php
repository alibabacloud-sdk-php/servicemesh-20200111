<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute\HTTPAdvancedOptions;

use AlibabaCloud\Tea\Model;

class mirror extends Model
{
    /**
     * @description The name of the service defined in the service registry.
     *
     * @example reviews.default.svc.cluster.local
     *
     * @var string
     */
    public $host;

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
        if (null !== $this->subset) {
            $res['Subset'] = $this->subset;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mirror
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Subset'])) {
            $model->subset = $map['Subset'];
        }

        return $model;
    }
}
