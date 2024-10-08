<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The results of a [Deidentify][google.privacy.dlp.v2.Action.Deidentify] action
 * from an inspect job.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DeidentifyDataSourceDetails</code>
 */
class DeidentifyDataSourceDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * De-identification config used for the request.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DeidentifyDataSourceDetails.RequestedDeidentifyOptions requested_options = 1;</code>
     */
    protected $requested_options = null;
    /**
     * Stats about the de-identification operation.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DeidentifyDataSourceStats deidentify_stats = 2;</code>
     */
    protected $deidentify_stats = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\DeidentifyDataSourceDetails\RequestedDeidentifyOptions $requested_options
     *           De-identification config used for the request.
     *     @type \Google\Cloud\Dlp\V2\DeidentifyDataSourceStats $deidentify_stats
     *           Stats about the de-identification operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * De-identification config used for the request.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DeidentifyDataSourceDetails.RequestedDeidentifyOptions requested_options = 1;</code>
     * @return \Google\Cloud\Dlp\V2\DeidentifyDataSourceDetails\RequestedDeidentifyOptions|null
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
     * De-identification config used for the request.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DeidentifyDataSourceDetails.RequestedDeidentifyOptions requested_options = 1;</code>
     * @param \Google\Cloud\Dlp\V2\DeidentifyDataSourceDetails\RequestedDeidentifyOptions $var
     * @return $this
     */
    public function setRequestedOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DeidentifyDataSourceDetails\RequestedDeidentifyOptions::class);
        $this->requested_options = $var;

        return $this;
    }

    /**
     * Stats about the de-identification operation.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DeidentifyDataSourceStats deidentify_stats = 2;</code>
     * @return \Google\Cloud\Dlp\V2\DeidentifyDataSourceStats|null
     */
    public function getDeidentifyStats()
    {
        return $this->deidentify_stats;
    }

    public function hasDeidentifyStats()
    {
        return isset($this->deidentify_stats);
    }

    public function clearDeidentifyStats()
    {
        unset($this->deidentify_stats);
    }

    /**
     * Stats about the de-identification operation.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DeidentifyDataSourceStats deidentify_stats = 2;</code>
     * @param \Google\Cloud\Dlp\V2\DeidentifyDataSourceStats $var
     * @return $this
     */
    public function setDeidentifyStats($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DeidentifyDataSourceStats::class);
        $this->deidentify_stats = $var;

        return $this;
    }

}

