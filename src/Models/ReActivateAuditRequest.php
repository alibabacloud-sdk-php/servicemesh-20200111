<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class ReActivateAuditRequest extends Model
{
    /**
     * @description Specifies whether to recreate a project that is used to store audit logs. Valid values:
     *
     *   true: recreates a project.
     *   false: does not recreate a project.
     *
     * @example true
     *
     * @var bool
     */
    public $enableAudit;

    /**
     * @description The ID of the Alibaba Cloud Service Mesh (ASM) instance.
     *
     * @example c5bf9eb05c4424b89985d6536a809****
     *
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'enableAudit'   => 'EnableAudit',
        'serviceMeshId' => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableAudit) {
            $res['EnableAudit'] = $this->enableAudit;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReActivateAuditRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableAudit'])) {
            $model->enableAudit = $map['EnableAudit'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
