<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeClusterGrafanaResponseBody;

use AlibabaCloud\Tea\Model;

class dashboards extends Model
{
    /**
     * @description The title of the Grafana dashboard.
     *
     * @example test
     *
     * @var string
     */
    public $title;

    /**
     * @description The endpoint of a Grafana dashboard.
     *
     * @example test.com
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
     * @return dashboards
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
