<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle\postStart;

use AlibabaCloud\Tea\Model;

class exec extends Model
{
    /**
     * @var string[]
     */
    public $command;
    protected $_name = [
        'command' => 'Command',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return exec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Command'])) {
            if (!empty($map['Command'])) {
                $model->command = $map['Command'];
            }
        }

        return $model;
    }
}
