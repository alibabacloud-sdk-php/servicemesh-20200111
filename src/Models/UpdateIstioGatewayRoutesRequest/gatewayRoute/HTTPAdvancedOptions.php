<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute\HTTPAdvancedOptions\delegate;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute\HTTPAdvancedOptions\fault;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute\HTTPAdvancedOptions\HTTPRedirect;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute\HTTPAdvancedOptions\mirror;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute\HTTPAdvancedOptions\mirrorPercentage;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute\HTTPAdvancedOptions\retries;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute\HTTPAdvancedOptions\rewrite;
use AlibabaCloud\Tea\Model;

class HTTPAdvancedOptions extends Model
{
    /**
     * @var delegate
     */
    public $delegate;

    /**
     * @var fault
     */
    public $fault;

    /**
     * @var HTTPRedirect
     */
    public $HTTPRedirect;

    /**
     * @var mirror
     */
    public $mirror;

    /**
     * @var mirrorPercentage
     */
    public $mirrorPercentage;

    /**
     * @var retries
     */
    public $retries;

    /**
     * @var rewrite
     */
    public $rewrite;

    /**
     * @var string
     */
    public $timeout;
    protected $_name = [
        'delegate'         => 'Delegate',
        'fault'            => 'Fault',
        'HTTPRedirect'     => 'HTTPRedirect',
        'mirror'           => 'Mirror',
        'mirrorPercentage' => 'MirrorPercentage',
        'retries'          => 'Retries',
        'rewrite'          => 'Rewrite',
        'timeout'          => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->delegate) {
            $res['Delegate'] = null !== $this->delegate ? $this->delegate->toMap() : null;
        }
        if (null !== $this->fault) {
            $res['Fault'] = null !== $this->fault ? $this->fault->toMap() : null;
        }
        if (null !== $this->HTTPRedirect) {
            $res['HTTPRedirect'] = null !== $this->HTTPRedirect ? $this->HTTPRedirect->toMap() : null;
        }
        if (null !== $this->mirror) {
            $res['Mirror'] = null !== $this->mirror ? $this->mirror->toMap() : null;
        }
        if (null !== $this->mirrorPercentage) {
            $res['MirrorPercentage'] = null !== $this->mirrorPercentage ? $this->mirrorPercentage->toMap() : null;
        }
        if (null !== $this->retries) {
            $res['Retries'] = null !== $this->retries ? $this->retries->toMap() : null;
        }
        if (null !== $this->rewrite) {
            $res['Rewrite'] = null !== $this->rewrite ? $this->rewrite->toMap() : null;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HTTPAdvancedOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Delegate'])) {
            $model->delegate = delegate::fromMap($map['Delegate']);
        }
        if (isset($map['Fault'])) {
            $model->fault = fault::fromMap($map['Fault']);
        }
        if (isset($map['HTTPRedirect'])) {
            $model->HTTPRedirect = HTTPRedirect::fromMap($map['HTTPRedirect']);
        }
        if (isset($map['Mirror'])) {
            $model->mirror = mirror::fromMap($map['Mirror']);
        }
        if (isset($map['MirrorPercentage'])) {
            $model->mirrorPercentage = mirrorPercentage::fromMap($map['MirrorPercentage']);
        }
        if (isset($map['Retries'])) {
            $model->retries = retries::fromMap($map['Retries']);
        }
        if (isset($map['Rewrite'])) {
            $model->rewrite = rewrite::fromMap($map['Rewrite']);
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
