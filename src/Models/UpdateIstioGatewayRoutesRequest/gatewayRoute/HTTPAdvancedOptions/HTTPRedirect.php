<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute\HTTPAdvancedOptions;

use AlibabaCloud\Tea\Model;

class HTTPRedirect extends Model
{
    /**
     * @description The value to be used to overwrite the value of the Authority or Host header during redirection.
     *
     * @example newratings.default.svc.cluster.local
     *
     * @var string
     */
    public $authority;

    /**
     * @description The HTTP status code to be used to indicate URL redirection. Default value: 301.
     *
     * @example 301
     *
     * @var int
     */
    public $redirectCode;

    /**
     * @description The value to be used to overwrite the URL path during redirection.
     *
     * @example /v1/getProductRatings
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'authority'    => 'Authority',
        'redirectCode' => 'RedirectCode',
        'uri'          => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authority) {
            $res['Authority'] = $this->authority;
        }
        if (null !== $this->redirectCode) {
            $res['RedirectCode'] = $this->redirectCode;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HTTPRedirect
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Authority'])) {
            $model->authority = $map['Authority'];
        }
        if (isset($map['RedirectCode'])) {
            $model->redirectCode = $map['RedirectCode'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
