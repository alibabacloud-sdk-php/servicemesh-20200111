<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class UpdateMeshFeatureRequest extends Model
{
    /**
     * @var string
     */
    public $serviceMeshId;

    /**
     * @var bool
     */
    public $tracing;

    /**
     * @var float
     */
    public $traceSampling;

    /**
     * @var bool
     */
    public $localityLoadBalancing;

    /**
     * @var bool
     */
    public $telemetry;

    /**
     * @var bool
     */
    public $openAgentPolicy;

    /**
     * @var string
     */
    public $OPALogLevel;

    /**
     * @var string
     */
    public $OPARequestCPU;

    /**
     * @var string
     */
    public $OPARequestMemory;

    /**
     * @var string
     */
    public $OPALimitCPU;

    /**
     * @var string
     */
    public $OPALimitMemory;

    /**
     * @var bool
     */
    public $enableAudit;

    /**
     * @var string
     */
    public $auditProject;

    /**
     * @var string
     */
    public $clusterDomain;

    /**
     * @var bool
     */
    public $customizedZipkin;

    /**
     * @var string
     */
    public $outboundTrafficPolicy;

    /**
     * @var string
     */
    public $proxyRequestCPU;

    /**
     * @var string
     */
    public $proxyRequestMemory;

    /**
     * @var string
     */
    public $proxyLimitCPU;

    /**
     * @var string
     */
    public $proxyLimitMemory;

    /**
     * @var string
     */
    public $includeIPRanges;

    /**
     * @var string
     */
    public $excludeIPRanges;

    /**
     * @var string
     */
    public $excludeOutboundPorts;

    /**
     * @var string
     */
    public $excludeInboundPorts;

    /**
     * @var bool
     */
    public $enableNamespacesByDefault;

    /**
     * @var bool
     */
    public $autoInjectionPolicyEnabled;

    /**
     * @var string
     */
    public $sidecarInjectorRequestCPU;

    /**
     * @var string
     */
    public $sidecarInjectorRequestMemory;

    /**
     * @var string
     */
    public $sidecarInjectorLimitCPU;

    /**
     * @var string
     */
    public $sidecarInjectorLimitMemory;

    /**
     * @var string
     */
    public $sidecarInjectorWebhookAsYaml;

    /**
     * @var bool
     */
    public $cniEnabled;

    /**
     * @var string
     */
    public $cniExcludeNamespaces;

    /**
     * @var bool
     */
    public $opaEnabled;

    /**
     * @var bool
     */
    public $http10Enabled;

    /**
     * @var bool
     */
    public $kialiEnabled;

    /**
     * @var bool
     */
    public $customizedPrometheus;

    /**
     * @var string
     */
    public $prometheusUrl;

    /**
     * @var bool
     */
    public $accessLogEnabled;

    /**
     * @var bool
     */
    public $MSEEnabled;

    /**
     * @var bool
     */
    public $redisFilterEnabled;

    /**
     * @var bool
     */
    public $mysqlFilterEnabled;

    /**
     * @var bool
     */
    public $thriftFilterEnabled;

    /**
     * @var bool
     */
    public $webAssemblyFilterEnabled;

    /**
     * @var bool
     */
    public $DNSProxyingEnabled;

    /**
     * @var bool
     */
    public $dubboFilterEnabled;

    /**
     * @var bool
     */
    public $filterGatewayClusterConfig;

    /**
     * @var bool
     */
    public $enableSDSServer;

    /**
     * @var bool
     */
    public $accessLogServiceEnabled;

    /**
     * @var string
     */
    public $accessLogServiceHost;

    /**
     * @var int
     */
    public $accessLogServicePort;

    /**
     * @var bool
     */
    public $gatewayAPIEnabled;

    /**
     * @var bool
     */
    public $configSourceEnabled;

    /**
     * @var string
     */
    public $configSourceNacosID;
    protected $_name = [
        'serviceMeshId'                => 'ServiceMeshId',
        'tracing'                      => 'Tracing',
        'traceSampling'                => 'TraceSampling',
        'localityLoadBalancing'        => 'LocalityLoadBalancing',
        'telemetry'                    => 'Telemetry',
        'openAgentPolicy'              => 'OpenAgentPolicy',
        'OPALogLevel'                  => 'OPALogLevel',
        'OPARequestCPU'                => 'OPARequestCPU',
        'OPARequestMemory'             => 'OPARequestMemory',
        'OPALimitCPU'                  => 'OPALimitCPU',
        'OPALimitMemory'               => 'OPALimitMemory',
        'enableAudit'                  => 'EnableAudit',
        'auditProject'                 => 'AuditProject',
        'clusterDomain'                => 'ClusterDomain',
        'customizedZipkin'             => 'CustomizedZipkin',
        'outboundTrafficPolicy'        => 'OutboundTrafficPolicy',
        'proxyRequestCPU'              => 'ProxyRequestCPU',
        'proxyRequestMemory'           => 'ProxyRequestMemory',
        'proxyLimitCPU'                => 'ProxyLimitCPU',
        'proxyLimitMemory'             => 'ProxyLimitMemory',
        'includeIPRanges'              => 'IncludeIPRanges',
        'excludeIPRanges'              => 'ExcludeIPRanges',
        'excludeOutboundPorts'         => 'ExcludeOutboundPorts',
        'excludeInboundPorts'          => 'ExcludeInboundPorts',
        'enableNamespacesByDefault'    => 'EnableNamespacesByDefault',
        'autoInjectionPolicyEnabled'   => 'AutoInjectionPolicyEnabled',
        'sidecarInjectorRequestCPU'    => 'SidecarInjectorRequestCPU',
        'sidecarInjectorRequestMemory' => 'SidecarInjectorRequestMemory',
        'sidecarInjectorLimitCPU'      => 'SidecarInjectorLimitCPU',
        'sidecarInjectorLimitMemory'   => 'SidecarInjectorLimitMemory',
        'sidecarInjectorWebhookAsYaml' => 'SidecarInjectorWebhookAsYaml',
        'cniEnabled'                   => 'CniEnabled',
        'cniExcludeNamespaces'         => 'CniExcludeNamespaces',
        'opaEnabled'                   => 'OpaEnabled',
        'http10Enabled'                => 'Http10Enabled',
        'kialiEnabled'                 => 'KialiEnabled',
        'customizedPrometheus'         => 'CustomizedPrometheus',
        'prometheusUrl'                => 'PrometheusUrl',
        'accessLogEnabled'             => 'AccessLogEnabled',
        'MSEEnabled'                   => 'MSEEnabled',
        'redisFilterEnabled'           => 'RedisFilterEnabled',
        'mysqlFilterEnabled'           => 'MysqlFilterEnabled',
        'thriftFilterEnabled'          => 'ThriftFilterEnabled',
        'webAssemblyFilterEnabled'     => 'WebAssemblyFilterEnabled',
        'DNSProxyingEnabled'           => 'DNSProxyingEnabled',
        'dubboFilterEnabled'           => 'DubboFilterEnabled',
        'filterGatewayClusterConfig'   => 'FilterGatewayClusterConfig',
        'enableSDSServer'              => 'EnableSDSServer',
        'accessLogServiceEnabled'      => 'AccessLogServiceEnabled',
        'accessLogServiceHost'         => 'AccessLogServiceHost',
        'accessLogServicePort'         => 'AccessLogServicePort',
        'gatewayAPIEnabled'            => 'GatewayAPIEnabled',
        'configSourceEnabled'          => 'ConfigSourceEnabled',
        'configSourceNacosID'          => 'ConfigSourceNacosID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->tracing) {
            $res['Tracing'] = $this->tracing;
        }
        if (null !== $this->traceSampling) {
            $res['TraceSampling'] = $this->traceSampling;
        }
        if (null !== $this->localityLoadBalancing) {
            $res['LocalityLoadBalancing'] = $this->localityLoadBalancing;
        }
        if (null !== $this->telemetry) {
            $res['Telemetry'] = $this->telemetry;
        }
        if (null !== $this->openAgentPolicy) {
            $res['OpenAgentPolicy'] = $this->openAgentPolicy;
        }
        if (null !== $this->OPALogLevel) {
            $res['OPALogLevel'] = $this->OPALogLevel;
        }
        if (null !== $this->OPARequestCPU) {
            $res['OPARequestCPU'] = $this->OPARequestCPU;
        }
        if (null !== $this->OPARequestMemory) {
            $res['OPARequestMemory'] = $this->OPARequestMemory;
        }
        if (null !== $this->OPALimitCPU) {
            $res['OPALimitCPU'] = $this->OPALimitCPU;
        }
        if (null !== $this->OPALimitMemory) {
            $res['OPALimitMemory'] = $this->OPALimitMemory;
        }
        if (null !== $this->enableAudit) {
            $res['EnableAudit'] = $this->enableAudit;
        }
        if (null !== $this->auditProject) {
            $res['AuditProject'] = $this->auditProject;
        }
        if (null !== $this->clusterDomain) {
            $res['ClusterDomain'] = $this->clusterDomain;
        }
        if (null !== $this->customizedZipkin) {
            $res['CustomizedZipkin'] = $this->customizedZipkin;
        }
        if (null !== $this->outboundTrafficPolicy) {
            $res['OutboundTrafficPolicy'] = $this->outboundTrafficPolicy;
        }
        if (null !== $this->proxyRequestCPU) {
            $res['ProxyRequestCPU'] = $this->proxyRequestCPU;
        }
        if (null !== $this->proxyRequestMemory) {
            $res['ProxyRequestMemory'] = $this->proxyRequestMemory;
        }
        if (null !== $this->proxyLimitCPU) {
            $res['ProxyLimitCPU'] = $this->proxyLimitCPU;
        }
        if (null !== $this->proxyLimitMemory) {
            $res['ProxyLimitMemory'] = $this->proxyLimitMemory;
        }
        if (null !== $this->includeIPRanges) {
            $res['IncludeIPRanges'] = $this->includeIPRanges;
        }
        if (null !== $this->excludeIPRanges) {
            $res['ExcludeIPRanges'] = $this->excludeIPRanges;
        }
        if (null !== $this->excludeOutboundPorts) {
            $res['ExcludeOutboundPorts'] = $this->excludeOutboundPorts;
        }
        if (null !== $this->excludeInboundPorts) {
            $res['ExcludeInboundPorts'] = $this->excludeInboundPorts;
        }
        if (null !== $this->enableNamespacesByDefault) {
            $res['EnableNamespacesByDefault'] = $this->enableNamespacesByDefault;
        }
        if (null !== $this->autoInjectionPolicyEnabled) {
            $res['AutoInjectionPolicyEnabled'] = $this->autoInjectionPolicyEnabled;
        }
        if (null !== $this->sidecarInjectorRequestCPU) {
            $res['SidecarInjectorRequestCPU'] = $this->sidecarInjectorRequestCPU;
        }
        if (null !== $this->sidecarInjectorRequestMemory) {
            $res['SidecarInjectorRequestMemory'] = $this->sidecarInjectorRequestMemory;
        }
        if (null !== $this->sidecarInjectorLimitCPU) {
            $res['SidecarInjectorLimitCPU'] = $this->sidecarInjectorLimitCPU;
        }
        if (null !== $this->sidecarInjectorLimitMemory) {
            $res['SidecarInjectorLimitMemory'] = $this->sidecarInjectorLimitMemory;
        }
        if (null !== $this->sidecarInjectorWebhookAsYaml) {
            $res['SidecarInjectorWebhookAsYaml'] = $this->sidecarInjectorWebhookAsYaml;
        }
        if (null !== $this->cniEnabled) {
            $res['CniEnabled'] = $this->cniEnabled;
        }
        if (null !== $this->cniExcludeNamespaces) {
            $res['CniExcludeNamespaces'] = $this->cniExcludeNamespaces;
        }
        if (null !== $this->opaEnabled) {
            $res['OpaEnabled'] = $this->opaEnabled;
        }
        if (null !== $this->http10Enabled) {
            $res['Http10Enabled'] = $this->http10Enabled;
        }
        if (null !== $this->kialiEnabled) {
            $res['KialiEnabled'] = $this->kialiEnabled;
        }
        if (null !== $this->customizedPrometheus) {
            $res['CustomizedPrometheus'] = $this->customizedPrometheus;
        }
        if (null !== $this->prometheusUrl) {
            $res['PrometheusUrl'] = $this->prometheusUrl;
        }
        if (null !== $this->accessLogEnabled) {
            $res['AccessLogEnabled'] = $this->accessLogEnabled;
        }
        if (null !== $this->MSEEnabled) {
            $res['MSEEnabled'] = $this->MSEEnabled;
        }
        if (null !== $this->redisFilterEnabled) {
            $res['RedisFilterEnabled'] = $this->redisFilterEnabled;
        }
        if (null !== $this->mysqlFilterEnabled) {
            $res['MysqlFilterEnabled'] = $this->mysqlFilterEnabled;
        }
        if (null !== $this->thriftFilterEnabled) {
            $res['ThriftFilterEnabled'] = $this->thriftFilterEnabled;
        }
        if (null !== $this->webAssemblyFilterEnabled) {
            $res['WebAssemblyFilterEnabled'] = $this->webAssemblyFilterEnabled;
        }
        if (null !== $this->DNSProxyingEnabled) {
            $res['DNSProxyingEnabled'] = $this->DNSProxyingEnabled;
        }
        if (null !== $this->dubboFilterEnabled) {
            $res['DubboFilterEnabled'] = $this->dubboFilterEnabled;
        }
        if (null !== $this->filterGatewayClusterConfig) {
            $res['FilterGatewayClusterConfig'] = $this->filterGatewayClusterConfig;
        }
        if (null !== $this->enableSDSServer) {
            $res['EnableSDSServer'] = $this->enableSDSServer;
        }
        if (null !== $this->accessLogServiceEnabled) {
            $res['AccessLogServiceEnabled'] = $this->accessLogServiceEnabled;
        }
        if (null !== $this->accessLogServiceHost) {
            $res['AccessLogServiceHost'] = $this->accessLogServiceHost;
        }
        if (null !== $this->accessLogServicePort) {
            $res['AccessLogServicePort'] = $this->accessLogServicePort;
        }
        if (null !== $this->gatewayAPIEnabled) {
            $res['GatewayAPIEnabled'] = $this->gatewayAPIEnabled;
        }
        if (null !== $this->configSourceEnabled) {
            $res['ConfigSourceEnabled'] = $this->configSourceEnabled;
        }
        if (null !== $this->configSourceNacosID) {
            $res['ConfigSourceNacosID'] = $this->configSourceNacosID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMeshFeatureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['Tracing'])) {
            $model->tracing = $map['Tracing'];
        }
        if (isset($map['TraceSampling'])) {
            $model->traceSampling = $map['TraceSampling'];
        }
        if (isset($map['LocalityLoadBalancing'])) {
            $model->localityLoadBalancing = $map['LocalityLoadBalancing'];
        }
        if (isset($map['Telemetry'])) {
            $model->telemetry = $map['Telemetry'];
        }
        if (isset($map['OpenAgentPolicy'])) {
            $model->openAgentPolicy = $map['OpenAgentPolicy'];
        }
        if (isset($map['OPALogLevel'])) {
            $model->OPALogLevel = $map['OPALogLevel'];
        }
        if (isset($map['OPARequestCPU'])) {
            $model->OPARequestCPU = $map['OPARequestCPU'];
        }
        if (isset($map['OPARequestMemory'])) {
            $model->OPARequestMemory = $map['OPARequestMemory'];
        }
        if (isset($map['OPALimitCPU'])) {
            $model->OPALimitCPU = $map['OPALimitCPU'];
        }
        if (isset($map['OPALimitMemory'])) {
            $model->OPALimitMemory = $map['OPALimitMemory'];
        }
        if (isset($map['EnableAudit'])) {
            $model->enableAudit = $map['EnableAudit'];
        }
        if (isset($map['AuditProject'])) {
            $model->auditProject = $map['AuditProject'];
        }
        if (isset($map['ClusterDomain'])) {
            $model->clusterDomain = $map['ClusterDomain'];
        }
        if (isset($map['CustomizedZipkin'])) {
            $model->customizedZipkin = $map['CustomizedZipkin'];
        }
        if (isset($map['OutboundTrafficPolicy'])) {
            $model->outboundTrafficPolicy = $map['OutboundTrafficPolicy'];
        }
        if (isset($map['ProxyRequestCPU'])) {
            $model->proxyRequestCPU = $map['ProxyRequestCPU'];
        }
        if (isset($map['ProxyRequestMemory'])) {
            $model->proxyRequestMemory = $map['ProxyRequestMemory'];
        }
        if (isset($map['ProxyLimitCPU'])) {
            $model->proxyLimitCPU = $map['ProxyLimitCPU'];
        }
        if (isset($map['ProxyLimitMemory'])) {
            $model->proxyLimitMemory = $map['ProxyLimitMemory'];
        }
        if (isset($map['IncludeIPRanges'])) {
            $model->includeIPRanges = $map['IncludeIPRanges'];
        }
        if (isset($map['ExcludeIPRanges'])) {
            $model->excludeIPRanges = $map['ExcludeIPRanges'];
        }
        if (isset($map['ExcludeOutboundPorts'])) {
            $model->excludeOutboundPorts = $map['ExcludeOutboundPorts'];
        }
        if (isset($map['ExcludeInboundPorts'])) {
            $model->excludeInboundPorts = $map['ExcludeInboundPorts'];
        }
        if (isset($map['EnableNamespacesByDefault'])) {
            $model->enableNamespacesByDefault = $map['EnableNamespacesByDefault'];
        }
        if (isset($map['AutoInjectionPolicyEnabled'])) {
            $model->autoInjectionPolicyEnabled = $map['AutoInjectionPolicyEnabled'];
        }
        if (isset($map['SidecarInjectorRequestCPU'])) {
            $model->sidecarInjectorRequestCPU = $map['SidecarInjectorRequestCPU'];
        }
        if (isset($map['SidecarInjectorRequestMemory'])) {
            $model->sidecarInjectorRequestMemory = $map['SidecarInjectorRequestMemory'];
        }
        if (isset($map['SidecarInjectorLimitCPU'])) {
            $model->sidecarInjectorLimitCPU = $map['SidecarInjectorLimitCPU'];
        }
        if (isset($map['SidecarInjectorLimitMemory'])) {
            $model->sidecarInjectorLimitMemory = $map['SidecarInjectorLimitMemory'];
        }
        if (isset($map['SidecarInjectorWebhookAsYaml'])) {
            $model->sidecarInjectorWebhookAsYaml = $map['SidecarInjectorWebhookAsYaml'];
        }
        if (isset($map['CniEnabled'])) {
            $model->cniEnabled = $map['CniEnabled'];
        }
        if (isset($map['CniExcludeNamespaces'])) {
            $model->cniExcludeNamespaces = $map['CniExcludeNamespaces'];
        }
        if (isset($map['OpaEnabled'])) {
            $model->opaEnabled = $map['OpaEnabled'];
        }
        if (isset($map['Http10Enabled'])) {
            $model->http10Enabled = $map['Http10Enabled'];
        }
        if (isset($map['KialiEnabled'])) {
            $model->kialiEnabled = $map['KialiEnabled'];
        }
        if (isset($map['CustomizedPrometheus'])) {
            $model->customizedPrometheus = $map['CustomizedPrometheus'];
        }
        if (isset($map['PrometheusUrl'])) {
            $model->prometheusUrl = $map['PrometheusUrl'];
        }
        if (isset($map['AccessLogEnabled'])) {
            $model->accessLogEnabled = $map['AccessLogEnabled'];
        }
        if (isset($map['MSEEnabled'])) {
            $model->MSEEnabled = $map['MSEEnabled'];
        }
        if (isset($map['RedisFilterEnabled'])) {
            $model->redisFilterEnabled = $map['RedisFilterEnabled'];
        }
        if (isset($map['MysqlFilterEnabled'])) {
            $model->mysqlFilterEnabled = $map['MysqlFilterEnabled'];
        }
        if (isset($map['ThriftFilterEnabled'])) {
            $model->thriftFilterEnabled = $map['ThriftFilterEnabled'];
        }
        if (isset($map['WebAssemblyFilterEnabled'])) {
            $model->webAssemblyFilterEnabled = $map['WebAssemblyFilterEnabled'];
        }
        if (isset($map['DNSProxyingEnabled'])) {
            $model->DNSProxyingEnabled = $map['DNSProxyingEnabled'];
        }
        if (isset($map['DubboFilterEnabled'])) {
            $model->dubboFilterEnabled = $map['DubboFilterEnabled'];
        }
        if (isset($map['FilterGatewayClusterConfig'])) {
            $model->filterGatewayClusterConfig = $map['FilterGatewayClusterConfig'];
        }
        if (isset($map['EnableSDSServer'])) {
            $model->enableSDSServer = $map['EnableSDSServer'];
        }
        if (isset($map['AccessLogServiceEnabled'])) {
            $model->accessLogServiceEnabled = $map['AccessLogServiceEnabled'];
        }
        if (isset($map['AccessLogServiceHost'])) {
            $model->accessLogServiceHost = $map['AccessLogServiceHost'];
        }
        if (isset($map['AccessLogServicePort'])) {
            $model->accessLogServicePort = $map['AccessLogServicePort'];
        }
        if (isset($map['GatewayAPIEnabled'])) {
            $model->gatewayAPIEnabled = $map['GatewayAPIEnabled'];
        }
        if (isset($map['ConfigSourceEnabled'])) {
            $model->configSourceEnabled = $map['ConfigSourceEnabled'];
        }
        if (isset($map['ConfigSourceNacosID'])) {
            $model->configSourceNacosID = $map['ConfigSourceNacosID'];
        }

        return $model;
    }
}
