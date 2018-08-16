<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generic half-open interval [start, end)
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.Range</code>
 */
class Range extends \Google\Protobuf\Internal\Message
{
    /**
     * Index of the first character of the range (inclusive).
     *
     * Generated from protobuf field <code>int64 start = 1;</code>
     */
    private $start = 0;
    /**
     * Index of the last character of the range (exclusive).
     *
     * Generated from protobuf field <code>int64 end = 2;</code>
     */
    private $end = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $start
     *           Index of the first character of the range (inclusive).
     *     @type int|string $end
     *           Index of the last character of the range (exclusive).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Index of the first character of the range (inclusive).
     *
     * Generated from protobuf field <code>int64 start = 1;</code>
     * @return int|string
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Index of the first character of the range (inclusive).
     *
     * Generated from protobuf field <code>int64 start = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStart($var)
    {
        GPBUtil::checkInt64($var);
        $this->start = $var;

        return $this;
    }

    /**
     * Index of the last character of the range (exclusive).
     *
     * Generated from protobuf field <code>int64 end = 2;</code>
     * @return int|string
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Index of the last character of the range (exclusive).
     *
     * Generated from protobuf field <code>int64 end = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEnd($var)
    {
        GPBUtil::checkInt64($var);
        $this->end = $var;

        return $this;
    }

}

