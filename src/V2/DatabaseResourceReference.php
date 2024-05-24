<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Identifies a single database resource, like a table within a database.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DatabaseResourceReference</code>
 */
class DatabaseResourceReference extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. If within a project-level config, then this must match the
     * config's project ID.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project_id = '';
    /**
     * Required. The instance where this resource is located. For example: Cloud
     * SQL instance ID.
     *
     * Generated from protobuf field <code>string instance = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $instance = '';
    /**
     * Required. Name of a database within the instance.
     *
     * Generated from protobuf field <code>string database = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $database = '';
    /**
     * Required. Name of a database resource, for example, a table within the
     * database.
     *
     * Generated from protobuf field <code>string database_resource = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $database_resource = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Required. If within a project-level config, then this must match the
     *           config's project ID.
     *     @type string $instance
     *           Required. The instance where this resource is located. For example: Cloud
     *           SQL instance ID.
     *     @type string $database
     *           Required. Name of a database within the instance.
     *     @type string $database_resource
     *           Required. Name of a database resource, for example, a table within the
     *           database.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. If within a project-level config, then this must match the
     * config's project ID.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Required. If within a project-level config, then this must match the
     * config's project ID.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Required. The instance where this resource is located. For example: Cloud
     * SQL instance ID.
     *
     * Generated from protobuf field <code>string instance = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Required. The instance where this resource is located. For example: Cloud
     * SQL instance ID.
     *
     * Generated from protobuf field <code>string instance = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance = $var;

        return $this;
    }

    /**
     * Required. Name of a database within the instance.
     *
     * Generated from protobuf field <code>string database = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Required. Name of a database within the instance.
     *
     * Generated from protobuf field <code>string database = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDatabase($var)
    {
        GPBUtil::checkString($var, True);
        $this->database = $var;

        return $this;
    }

    /**
     * Required. Name of a database resource, for example, a table within the
     * database.
     *
     * Generated from protobuf field <code>string database_resource = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDatabaseResource()
    {
        return $this->database_resource;
    }

    /**
     * Required. Name of a database resource, for example, a table within the
     * database.
     *
     * Generated from protobuf field <code>string database_resource = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDatabaseResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->database_resource = $var;

        return $this;
    }

}

