<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The results of an inspect DataSource job.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.InspectDataSourceDetails</code>
 */
class InspectDataSourceDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * The configuration used for this job.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectDataSourceDetails.RequestedOptions requested_options = 2;</code>
     */
    private $requested_options = null;
    /**
     * A summary of the outcome of this inspect job.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectDataSourceDetails.Result result = 3;</code>
     */
    private $result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\InspectDataSourceDetails\RequestedOptions $requested_options
     *           The configuration used for this job.
     *     @type \Google\Cloud\Dlp\V2\InspectDataSourceDetails\Result $result
     *           A summary of the outcome of this inspect job.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * The configuration used for this job.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectDataSourceDetails.RequestedOptions requested_options = 2;</code>
     * @return \Google\Cloud\Dlp\V2\InspectDataSourceDetails\RequestedOptions|null
     */
    public function getRequestedOptions()
    {
        return $this->requested_options;
    }

    public function hasRequestedOptions()
    {
        return isset($this->requested_options);
    }

    public function clearRequestedOptions()
    {
        unset($this->requested_options);
    }

    /**
     * The configuration used for this job.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectDataSourceDetails.RequestedOptions requested_options = 2;</code>
     * @param \Google\Cloud\Dlp\V2\InspectDataSourceDetails\RequestedOptions $var
     * @return $this
     */
    public function setRequestedOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\InspectDataSourceDetails\RequestedOptions::class);
        $this->requested_options = $var;

        return $this;
    }

    /**
     * A summary of the outcome of this inspect job.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectDataSourceDetails.Result result = 3;</code>
     * @return \Google\Cloud\Dlp\V2\InspectDataSourceDetails\Result|null
     */
    public function getResult()
    {
        return $this->result;
    }

    public function hasResult()
    {
        return isset($this->result);
    }

    public function clearResult()
    {
        unset($this->result);
    }

    /**
     * A summary of the outcome of this inspect job.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectDataSourceDetails.Result result = 3;</code>
     * @param \Google\Cloud\Dlp\V2\InspectDataSourceDetails\Result $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\InspectDataSourceDetails\Result::class);
        $this->result = $var;

        return $this;
    }

}

