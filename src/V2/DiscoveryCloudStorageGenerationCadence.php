<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * How often existing buckets should have their profiles refreshed.
 * New buckets are scanned as quickly as possible depending on system
 * capacity.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DiscoveryCloudStorageGenerationCadence</code>
 */
class DiscoveryCloudStorageGenerationCadence extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Data changes in Cloud Storage can't trigger reprofiling. If you
     * set this field, profiles are refreshed at this frequency regardless of
     * whether the underlying buckets have changed. Defaults to never.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileUpdateFrequency refresh_frequency = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $refresh_frequency = 0;
    /**
     * Optional. Governs when to update data profiles when the inspection rules
     * defined by the `InspectTemplate` change.
     * If not set, changing the template will not cause a data profile to update.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DiscoveryInspectTemplateModifiedCadence inspect_template_modified_cadence = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $inspect_template_modified_cadence = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $refresh_frequency
     *           Optional. Data changes in Cloud Storage can't trigger reprofiling. If you
     *           set this field, profiles are refreshed at this frequency regardless of
     *           whether the underlying buckets have changed. Defaults to never.
     *     @type \Google\Cloud\Dlp\V2\DiscoveryInspectTemplateModifiedCadence $inspect_template_modified_cadence
     *           Optional. Governs when to update data profiles when the inspection rules
     *           defined by the `InspectTemplate` change.
     *           If not set, changing the template will not cause a data profile to update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Data changes in Cloud Storage can't trigger reprofiling. If you
     * set this field, profiles are refreshed at this frequency regardless of
     * whether the underlying buckets have changed. Defaults to never.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileUpdateFrequency refresh_frequency = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getRefreshFrequency()
    {
        return $this->refresh_frequency;
    }

    /**
     * Optional. Data changes in Cloud Storage can't trigger reprofiling. If you
     * set this field, profiles are refreshed at this frequency regardless of
     * whether the underlying buckets have changed. Defaults to never.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileUpdateFrequency refresh_frequency = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setRefreshFrequency($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\DataProfileUpdateFrequency::class);
        $this->refresh_frequency = $var;

        return $this;
    }

    /**
     * Optional. Governs when to update data profiles when the inspection rules
     * defined by the `InspectTemplate` change.
     * If not set, changing the template will not cause a data profile to update.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DiscoveryInspectTemplateModifiedCadence inspect_template_modified_cadence = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dlp\V2\DiscoveryInspectTemplateModifiedCadence|null
     */
    public function getInspectTemplateModifiedCadence()
    {
        return $this->inspect_template_modified_cadence;
    }

    public function hasInspectTemplateModifiedCadence()
    {
        return isset($this->inspect_template_modified_cadence);
    }

    public function clearInspectTemplateModifiedCadence()
    {
        unset($this->inspect_template_modified_cadence);
    }

    /**
     * Optional. Governs when to update data profiles when the inspection rules
     * defined by the `InspectTemplate` change.
     * If not set, changing the template will not cause a data profile to update.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DiscoveryInspectTemplateModifiedCadence inspect_template_modified_cadence = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dlp\V2\DiscoveryInspectTemplateModifiedCadence $var
     * @return $this
     */
    public function setInspectTemplateModifiedCadence($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DiscoveryInspectTemplateModifiedCadence::class);
        $this->inspect_template_modified_cadence = $var;

        return $this;
    }

}

