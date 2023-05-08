<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeClustersInServiceMeshResponseBody\clusters;

use AlibabaCloud\Tea\Model;

class accessLogDashboards extends Model
{
    /**
     * @description The name of the dashboard for access logs.
     *
     * @example mesh-access-log_details_cn
     *
     * @var string
     */
    public $title;

    /**
     * @description The URL of the dashboard for access logs.
     *
     * @example https://sls.console.aliyun.com/next/project/****\/dashboard/mesh-access-log_details_cn
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'title' => 'Title',
        'url'   => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessLogDashboards
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
