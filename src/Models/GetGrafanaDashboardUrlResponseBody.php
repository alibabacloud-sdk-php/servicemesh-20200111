<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetGrafanaDashboardUrlResponseBody\dashboards;
use AlibabaCloud\Tea\Model;

class GetGrafanaDashboardUrlResponseBody extends Model
{
    /**
     * @description The information about the dashboard.
     *
     * @var dashboards[]
     */
    public $dashboards;

    /**
     * @description The request ID.
     *
     * @example 76DBB8A0-5AA6-5A56-9A8A-****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dashboards' => 'Dashboards',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dashboards) {
            $res['Dashboards'] = [];
            if (null !== $this->dashboards && \is_array($this->dashboards)) {
                $n = 0;
                foreach ($this->dashboards as $item) {
                    $res['Dashboards'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return GetGrafanaDashboardUrlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dashboards'])) {
            if (!empty($map['Dashboards'])) {
                $model->dashboards = [];
                $n                 = 0;
                foreach ($map['Dashboards'] as $item) {
                    $model->dashboards[$n++] = null !== $item ? dashboards::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
