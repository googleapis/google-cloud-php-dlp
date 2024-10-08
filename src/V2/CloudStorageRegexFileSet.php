<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message representing a set of files in a Cloud Storage bucket. Regular
 * expressions are used to allow fine-grained control over which files in the
 * bucket to include.
 * Included files are those that match at least one item in `include_regex` and
 * do not match any items in `exclude_regex`. Note that a file that matches
 * items from both lists will _not_ be included. For a match to occur, the
 * entire file path (i.e., everything in the url after the bucket name) must
 * match the regular expression.
 * For example, given the input `{bucket_name: "mybucket", include_regex:
 * ["directory1/.*"], exclude_regex:
 * ["directory1/excluded.*"]}`:
 * * `gs://mybucket/directory1/myfile` will be included
 * * `gs://mybucket/directory1/directory2/myfile` will be included (`.*` matches
 * across `/`)
 * * `gs://mybucket/directory0/directory1/myfile` will _not_ be included (the
 * full path doesn't match any items in `include_regex`)
 * * `gs://mybucket/directory1/excludedfile` will _not_ be included (the path
 * matches an item in `exclude_regex`)
 * If `include_regex` is left empty, it will match all files by default
 * (this is equivalent to setting `include_regex: [".*"]`).
 * Some other common use cases:
 * * `{bucket_name: "mybucket", exclude_regex: [".*\.pdf"]}` will include all
 * files in `mybucket` except for .pdf files
 * * `{bucket_name: "mybucket", include_regex: ["directory/[^/]+"]}` will
 * include all files directly under `gs://mybucket/directory/`, without matching
 * across `/`
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.CloudStorageRegexFileSet</code>
 */
class CloudStorageRegexFileSet extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of a Cloud Storage bucket. Required.
     *
     * Generated from protobuf field <code>string bucket_name = 1;</code>
     */
    protected $bucket_name = '';
    /**
     * A list of regular expressions matching file paths to include. All files in
     * the bucket that match at least one of these regular expressions will be
     * included in the set of files, except for those that also match an item in
     * `exclude_regex`. Leaving this field empty will match all files by default
     * (this is equivalent to including `.*` in the list).
     * Regular expressions use RE2
     * [syntax](https://github.com/google/re2/wiki/Syntax); a guide can be found
     * under the google/re2 repository on GitHub.
     *
     * Generated from protobuf field <code>repeated string include_regex = 2;</code>
     */
    private $include_regex;
    /**
     * A list of regular expressions matching file paths to exclude. All files in
     * the bucket that match at least one of these regular expressions will be
     * excluded from the scan.
     * Regular expressions use RE2
     * [syntax](https://github.com/google/re2/wiki/Syntax); a guide can be found
     * under the google/re2 repository on GitHub.
     *
     * Generated from protobuf field <code>repeated string exclude_regex = 3;</code>
     */
    private $exclude_regex;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bucket_name
     *           The name of a Cloud Storage bucket. Required.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $include_regex
     *           A list of regular expressions matching file paths to include. All files in
     *           the bucket that match at least one of these regular expressions will be
     *           included in the set of files, except for those that also match an item in
     *           `exclude_regex`. Leaving this field empty will match all files by default
     *           (this is equivalent to including `.*` in the list).
     *           Regular expressions use RE2
     *           [syntax](https://github.com/google/re2/wiki/Syntax); a guide can be found
     *           under the google/re2 repository on GitHub.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $exclude_regex
     *           A list of regular expressions matching file paths to exclude. All files in
     *           the bucket that match at least one of these regular expressions will be
     *           excluded from the scan.
     *           Regular expressions use RE2
     *           [syntax](https://github.com/google/re2/wiki/Syntax); a guide can be found
     *           under the google/re2 repository on GitHub.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of a Cloud Storage bucket. Required.
     *
     * Generated from protobuf field <code>string bucket_name = 1;</code>
     * @return string
     */
    public function getBucketName()
    {
        return $this->bucket_name;
    }

    /**
     * The name of a Cloud Storage bucket. Required.
     *
     * Generated from protobuf field <code>string bucket_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBucketName($var)
    {
        GPBUtil::checkString($var, True);
        $this->bucket_name = $var;

        return $this;
    }

    /**
     * A list of regular expressions matching file paths to include. All files in
     * the bucket that match at least one of these regular expressions will be
     * included in the set of files, except for those that also match an item in
     * `exclude_regex`. Leaving this field empty will match all files by default
     * (this is equivalent to including `.*` in the list).
     * Regular expressions use RE2
     * [syntax](https://github.com/google/re2/wiki/Syntax); a guide can be found
     * under the google/re2 repository on GitHub.
     *
     * Generated from protobuf field <code>repeated string include_regex = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIncludeRegex()
    {
        return $this->include_regex;
    }

    /**
     * A list of regular expressions matching file paths to include. All files in
     * the bucket that match at least one of these regular expressions will be
     * included in the set of files, except for those that also match an item in
     * `exclude_regex`. Leaving this field empty will match all files by default
     * (this is equivalent to including `.*` in the list).
     * Regular expressions use RE2
     * [syntax](https://github.com/google/re2/wiki/Syntax); a guide can be found
     * under the google/re2 repository on GitHub.
     *
     * Generated from protobuf field <code>repeated string include_regex = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIncludeRegex($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->include_regex = $arr;

        return $this;
    }

    /**
     * A list of regular expressions matching file paths to exclude. All files in
     * the bucket that match at least one of these regular expressions will be
     * excluded from the scan.
     * Regular expressions use RE2
     * [syntax](https://github.com/google/re2/wiki/Syntax); a guide can be found
     * under the google/re2 repository on GitHub.
     *
     * Generated from protobuf field <code>repeated string exclude_regex = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExcludeRegex()
    {
        return $this->exclude_regex;
    }

    /**
     * A list of regular expressions matching file paths to exclude. All files in
     * the bucket that match at least one of these regular expressions will be
     * excluded from the scan.
     * Regular expressions use RE2
     * [syntax](https://github.com/google/re2/wiki/Syntax); a guide can be found
     * under the google/re2 repository on GitHub.
     *
     * Generated from protobuf field <code>repeated string exclude_regex = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExcludeRegex($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->exclude_regex = $arr;

        return $this;
    }

}

