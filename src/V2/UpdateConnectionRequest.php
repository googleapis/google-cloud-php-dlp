<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for UpdateConnection.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.UpdateConnectionRequest</code>
 */
class UpdateConnectionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name in the format:
     * `projects/{project}/locations/{location}/connections/{connection}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. The connection with new values for the relevant fields.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Connection connection = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $connection = null;
    /**
     * Optional. Mask to control which fields get updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $update_mask = null;

    /**
     * @param string $name Required. Resource name in the format:
     *                     `projects/{project}/locations/{location}/connections/{connection}`. Please see
     *                     {@see DlpServiceClient::connectionName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dlp\V2\UpdateConnectionRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Resource name in the format:
     *           `projects/{project}/locations/{location}/connections/{connection}`.
     *     @type \Google\Cloud\Dlp\V2\Connection $connection
     *           Required. The connection with new values for the relevant fields.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. Mask to control which fields get updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name in the format:
     * `projects/{project}/locations/{location}/connections/{connection}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Resource name in the format:
     * `projects/{project}/locations/{location}/connections/{connection}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The connection with new values for the relevant fields.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Connection connection = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dlp\V2\Connection|null
     */
    public function getConnection()
    {
        return $this->connection;
    }

    public function hasConnection()
    {
        return isset($this->connection);
    }

    public function clearConnection()
    {
        unset($this->connection);
    }

    /**
     * Required. The connection with new values for the relevant fields.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Connection connection = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dlp\V2\Connection $var
     * @return $this
     */
    public function setConnection($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\Connection::class);
        $this->connection = $var;

        return $this;
    }

    /**
     * Optional. Mask to control which fields get updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Optional. Mask to control which fields get updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

