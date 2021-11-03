<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration to suppress records whose suppression conditions evaluate to
 * true.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.RecordSuppression</code>
 */
class RecordSuppression extends \Google\Protobuf\Internal\Message
{
    /**
     * A condition that when it evaluates to true will result in the record being
     * evaluated to be suppressed from the transformed content.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.RecordCondition condition = 1;</code>
     */
    private $condition = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\RecordCondition $condition
     *           A condition that when it evaluates to true will result in the record being
     *           evaluated to be suppressed from the transformed content.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * A condition that when it evaluates to true will result in the record being
     * evaluated to be suppressed from the transformed content.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.RecordCondition condition = 1;</code>
     * @return \Google\Cloud\Dlp\V2\RecordCondition|null
     */
    public function getCondition()
    {
        return $this->condition;
    }

    public function hasCondition()
    {
        return isset($this->condition);
    }

    public function clearCondition()
    {
        unset($this->condition);
    }

    /**
     * A condition that when it evaluates to true will result in the record being
     * evaluated to be suppressed from the transformed content.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.RecordCondition condition = 1;</code>
     * @param \Google\Cloud\Dlp\V2\RecordCondition $var
     * @return $this
     */
    public function setCondition($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\RecordCondition::class);
        $this->condition = $var;

        return $this;
    }

}

