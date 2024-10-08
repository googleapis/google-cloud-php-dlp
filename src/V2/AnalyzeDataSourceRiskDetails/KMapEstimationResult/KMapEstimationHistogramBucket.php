<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\KMapEstimationResult;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A KMapEstimationHistogramBucket message with the following values:
 *   min_anonymity: 3
 *   max_anonymity: 5
 *   frequency: 42
 * means that there are 42 records whose quasi-identifier values correspond
 * to 3, 4 or 5 people in the overlying population. An important particular
 * case is when min_anonymity = max_anonymity = 1: the frequency field then
 * corresponds to the number of uniquely identifiable records.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.KMapEstimationResult.KMapEstimationHistogramBucket</code>
 */
class KMapEstimationHistogramBucket extends \Google\Protobuf\Internal\Message
{
    /**
     * Always positive.
     *
     * Generated from protobuf field <code>int64 min_anonymity = 1;</code>
     */
    protected $min_anonymity = 0;
    /**
     * Always greater than or equal to min_anonymity.
     *
     * Generated from protobuf field <code>int64 max_anonymity = 2;</code>
     */
    protected $max_anonymity = 0;
    /**
     * Number of records within these anonymity bounds.
     *
     * Generated from protobuf field <code>int64 bucket_size = 5;</code>
     */
    protected $bucket_size = 0;
    /**
     * Sample of quasi-identifier tuple values in this bucket. The total
     * number of classes returned per bucket is capped at 20.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.KMapEstimationResult.KMapEstimationQuasiIdValues bucket_values = 6;</code>
     */
    private $bucket_values;
    /**
     * Total number of distinct quasi-identifier tuple values in this bucket.
     *
     * Generated from protobuf field <code>int64 bucket_value_count = 7;</code>
     */
    protected $bucket_value_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $min_anonymity
     *           Always positive.
     *     @type int|string $max_anonymity
     *           Always greater than or equal to min_anonymity.
     *     @type int|string $bucket_size
     *           Number of records within these anonymity bounds.
     *     @type array<\Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\KMapEstimationResult\KMapEstimationQuasiIdValues>|\Google\Protobuf\Internal\RepeatedField $bucket_values
     *           Sample of quasi-identifier tuple values in this bucket. The total
     *           number of classes returned per bucket is capped at 20.
     *     @type int|string $bucket_value_count
     *           Total number of distinct quasi-identifier tuple values in this bucket.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Always positive.
     *
     * Generated from protobuf field <code>int64 min_anonymity = 1;</code>
     * @return int|string
     */
    public function getMinAnonymity()
    {
        return $this->min_anonymity;
    }

    /**
     * Always positive.
     *
     * Generated from protobuf field <code>int64 min_anonymity = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMinAnonymity($var)
    {
        GPBUtil::checkInt64($var);
        $this->min_anonymity = $var;

        return $this;
    }

    /**
     * Always greater than or equal to min_anonymity.
     *
     * Generated from protobuf field <code>int64 max_anonymity = 2;</code>
     * @return int|string
     */
    public function getMaxAnonymity()
    {
        return $this->max_anonymity;
    }

    /**
     * Always greater than or equal to min_anonymity.
     *
     * Generated from protobuf field <code>int64 max_anonymity = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxAnonymity($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_anonymity = $var;

        return $this;
    }

    /**
     * Number of records within these anonymity bounds.
     *
     * Generated from protobuf field <code>int64 bucket_size = 5;</code>
     * @return int|string
     */
    public function getBucketSize()
    {
        return $this->bucket_size;
    }

    /**
     * Number of records within these anonymity bounds.
     *
     * Generated from protobuf field <code>int64 bucket_size = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBucketSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->bucket_size = $var;

        return $this;
    }

    /**
     * Sample of quasi-identifier tuple values in this bucket. The total
     * number of classes returned per bucket is capped at 20.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.KMapEstimationResult.KMapEstimationQuasiIdValues bucket_values = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBucketValues()
    {
        return $this->bucket_values;
    }

    /**
     * Sample of quasi-identifier tuple values in this bucket. The total
     * number of classes returned per bucket is capped at 20.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.KMapEstimationResult.KMapEstimationQuasiIdValues bucket_values = 6;</code>
     * @param array<\Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\KMapEstimationResult\KMapEstimationQuasiIdValues>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBucketValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\KMapEstimationResult\KMapEstimationQuasiIdValues::class);
        $this->bucket_values = $arr;

        return $this;
    }

    /**
     * Total number of distinct quasi-identifier tuple values in this bucket.
     *
     * Generated from protobuf field <code>int64 bucket_value_count = 7;</code>
     * @return int|string
     */
    public function getBucketValueCount()
    {
        return $this->bucket_value_count;
    }

    /**
     * Total number of distinct quasi-identifier tuple values in this bucket.
     *
     * Generated from protobuf field <code>int64 bucket_value_count = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBucketValueCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->bucket_value_count = $var;

        return $this;
    }

}


