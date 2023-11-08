<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class SecretDeleteRecordValue extends Model
{
    /**
     * @description The result of deleting the secret. Valid values:
     *
     *   `success`: The secret was deleted.
     *   `fail`: The secret failed to be deleted.
     *
     * @example success
     *
     * @var string
     */
    public $state;

    /**
     * @description The ID of the cluster.
     *
     * @example BD65C0AD-D3C6-48D3-8D93-38D2015C****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The error message returned when exceptions occur. Otherwise, an empty value is returned.
     *
     * @example timeout
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'state'     => 'State',
        'clusterId' => 'ClusterId',
        'message'   => 'Message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SecretDeleteRecordValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
