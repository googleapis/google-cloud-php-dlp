<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to re-identify an item.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.ReidentifyContentRequest</code>
 */
class ReidentifyContentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Parent resource name.
     * The format of this value varies depending on whether you have [specified a
     * processing
     * location](https://cloud.google.com/sensitive-data-protection/docs/specifying-location):
     * + Projects scope, location specified:
     *   `projects/`<var>PROJECT_ID</var>`/locations/`<var>LOCATION_ID</var>
     * + Projects scope, no location specified (defaults to global):
     *   `projects/`<var>PROJECT_ID</var>
     * The following example `parent` string specifies a parent project with the
     * identifier `example-project`, and specifies the `europe-west3` location
     * for processing data:
     *     parent=projects/example-project/locations/europe-west3
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Configuration for the re-identification of the content item.
     * This field shares the same proto message type that is used for
     * de-identification, however its usage here is for the reversal of the
     * previous de-identification. Re-identification is performed by examining
     * the transformations used to de-identify the items and executing the
     * reverse. This requires that only reversible transformations
     * be provided here. The reversible transformations are:
     *  - `CryptoDeterministicConfig`
     *  - `CryptoReplaceFfxFpeConfig`
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DeidentifyConfig reidentify_config = 2;</code>
     */
    protected $reidentify_config = null;
    /**
     * Configuration for the inspector.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectConfig inspect_config = 3;</code>
     */
    protected $inspect_config = null;
    /**
     * The item to re-identify. Will be treated as text.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ContentItem item = 4;</code>
     */
    protected $item = null;
    /**
     * Template to use. Any configuration directly specified in
     * `inspect_config` will override those set in the template. Singular fields
     * that are set in this request will replace their corresponding fields in the
     * template. Repeated fields are appended. Singular sub-messages and groups
     * are recursively merged.
     *
     * Generated from protobuf field <code>string inspect_template_name = 5;</code>
     */
    protected $inspect_template_name = '';
    /**
     * Template to use. References an instance of `DeidentifyTemplate`.
     * Any configuration directly specified in `reidentify_config` or
     * `inspect_config` will override those set in the template. The
     * `DeidentifyTemplate` used must include only reversible transformations.
     * Singular fields that are set in this request will replace their
     * corresponding fields in the template. Repeated fields are appended.
     * Singular sub-messages and groups are recursively merged.
     *
     * Generated from protobuf field <code>string reidentify_template_name = 6;</code>
     */
    protected $reidentify_template_name = '';
    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>string location_id = 7;</code>
     */
    protected $location_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Parent resource name.
     *           The format of this value varies depending on whether you have [specified a
     *           processing
     *           location](https://cloud.google.com/sensitive-data-protection/docs/specifying-location):
     *           + Projects scope, location specified:
     *             `projects/`<var>PROJECT_ID</var>`/locations/`<var>LOCATION_ID</var>
     *           + Projects scope, no location specified (defaults to global):
     *             `projects/`<var>PROJECT_ID</var>
     *           The following example `parent` string specifies a parent project with the
     *           identifier `example-project`, and specifies the `europe-west3` location
     *           for processing data:
     *               parent=projects/example-project/locations/europe-west3
     *     @type \Google\Cloud\Dlp\V2\DeidentifyConfig $reidentify_config
     *           Configuration for the re-identification of the content item.
     *           This field shares the same proto message type that is used for
     *           de-identification, however its usage here is for the reversal of the
     *           previous de-identification. Re-identification is performed by examining
     *           the transformations used to de-identify the items and executing the
     *           reverse. This requires that only reversible transformations
     *           be provided here. The reversible transformations are:
     *            - `CryptoDeterministicConfig`
     *            - `CryptoReplaceFfxFpeConfig`
     *     @type \Google\Cloud\Dlp\V2\InspectConfig $inspect_config
     *           Configuration for the inspector.
     *     @type \Google\Cloud\Dlp\V2\ContentItem $item
     *           The item to re-identify. Will be treated as text.
     *     @type string $inspect_template_name
     *           Template to use. Any configuration directly specified in
     *           `inspect_config` will override those set in the template. Singular fields
     *           that are set in this request will replace their corresponding fields in the
     *           template. Repeated fields are appended. Singular sub-messages and groups
     *           are recursively merged.
     *     @type string $reidentify_template_name
     *           Template to use. References an instance of `DeidentifyTemplate`.
     *           Any configuration directly specified in `reidentify_config` or
     *           `inspect_config` will override those set in the template. The
     *           `DeidentifyTemplate` used must include only reversible transformations.
     *           Singular fields that are set in this request will replace their
     *           corresponding fields in the template. Repeated fields are appended.
     *           Singular sub-messages and groups are recursively merged.
     *     @type string $location_id
     *           Deprecated. This field has no effect.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Parent resource name.
     * The format of this value varies depending on whether you have [specified a
     * processing
     * location](https://cloud.google.com/sensitive-data-protection/docs/specifying-location):
     * + Projects scope, location specified:
     *   `projects/`<var>PROJECT_ID</var>`/locations/`<var>LOCATION_ID</var>
     * + Projects scope, no location specified (defaults to global):
     *   `projects/`<var>PROJECT_ID</var>
     * The following example `parent` string specifies a parent project with the
     * identifier `example-project`, and specifies the `europe-west3` location
     * for processing data:
     *     parent=projects/example-project/locations/europe-west3
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Parent resource name.
     * The format of this value varies depending on whether you have [specified a
     * processing
     * location](https://cloud.google.com/sensitive-data-protection/docs/specifying-location):
     * + Projects scope, location specified:
     *   `projects/`<var>PROJECT_ID</var>`/locations/`<var>LOCATION_ID</var>
     * + Projects scope, no location specified (defaults to global):
     *   `projects/`<var>PROJECT_ID</var>
     * The following example `parent` string specifies a parent project with the
     * identifier `example-project`, and specifies the `europe-west3` location
     * for processing data:
     *     parent=projects/example-project/locations/europe-west3
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Configuration for the re-identification of the content item.
     * This field shares the same proto message type that is used for
     * de-identification, however its usage here is for the reversal of the
     * previous de-identification. Re-identification is performed by examining
     * the transformations used to de-identify the items and executing the
     * reverse. This requires that only reversible transformations
     * be provided here. The reversible transformations are:
     *  - `CryptoDeterministicConfig`
     *  - `CryptoReplaceFfxFpeConfig`
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DeidentifyConfig reidentify_config = 2;</code>
     * @return \Google\Cloud\Dlp\V2\DeidentifyConfig|null
     */
    public function getReidentifyConfig()
    {
        return $this->reidentify_config;
    }

    public function hasReidentifyConfig()
    {
        return isset($this->reidentify_config);
    }

    public function clearReidentifyConfig()
    {
        unset($this->reidentify_config);
    }

    /**
     * Configuration for the re-identification of the content item.
     * This field shares the same proto message type that is used for
     * de-identification, however its usage here is for the reversal of the
     * previous de-identification. Re-identification is performed by examining
     * the transformations used to de-identify the items and executing the
     * reverse. This requires that only reversible transformations
     * be provided here. The reversible transformations are:
     *  - `CryptoDeterministicConfig`
     *  - `CryptoReplaceFfxFpeConfig`
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DeidentifyConfig reidentify_config = 2;</code>
     * @param \Google\Cloud\Dlp\V2\DeidentifyConfig $var
     * @return $this
     */
    public function setReidentifyConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DeidentifyConfig::class);
        $this->reidentify_config = $var;

        return $this;
    }

    /**
     * Configuration for the inspector.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectConfig inspect_config = 3;</code>
     * @return \Google\Cloud\Dlp\V2\InspectConfig|null
     */
    public function getInspectConfig()
    {
        return $this->inspect_config;
    }

    public function hasInspectConfig()
    {
        return isset($this->inspect_config);
    }

    public function clearInspectConfig()
    {
        unset($this->inspect_config);
    }

    /**
     * Configuration for the inspector.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectConfig inspect_config = 3;</code>
     * @param \Google\Cloud\Dlp\V2\InspectConfig $var
     * @return $this
     */
    public function setInspectConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\InspectConfig::class);
        $this->inspect_config = $var;

        return $this;
    }

    /**
     * The item to re-identify. Will be treated as text.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ContentItem item = 4;</code>
     * @return \Google\Cloud\Dlp\V2\ContentItem|null
     */
    public function getItem()
    {
        return $this->item;
    }

    public function hasItem()
    {
        return isset($this->item);
    }

    public function clearItem()
    {
        unset($this->item);
    }

    /**
     * The item to re-identify. Will be treated as text.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ContentItem item = 4;</code>
     * @param \Google\Cloud\Dlp\V2\ContentItem $var
     * @return $this
     */
    public function setItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\ContentItem::class);
        $this->item = $var;

        return $this;
    }

    /**
     * Template to use. Any configuration directly specified in
     * `inspect_config` will override those set in the template. Singular fields
     * that are set in this request will replace their corresponding fields in the
     * template. Repeated fields are appended. Singular sub-messages and groups
     * are recursively merged.
     *
     * Generated from protobuf field <code>string inspect_template_name = 5;</code>
     * @return string
     */
    public function getInspectTemplateName()
    {
        return $this->inspect_template_name;
    }

    /**
     * Template to use. Any configuration directly specified in
     * `inspect_config` will override those set in the template. Singular fields
     * that are set in this request will replace their corresponding fields in the
     * template. Repeated fields are appended. Singular sub-messages and groups
     * are recursively merged.
     *
     * Generated from protobuf field <code>string inspect_template_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setInspectTemplateName($var)
    {
        GPBUtil::checkString($var, True);
        $this->inspect_template_name = $var;

        return $this;
    }

    /**
     * Template to use. References an instance of `DeidentifyTemplate`.
     * Any configuration directly specified in `reidentify_config` or
     * `inspect_config` will override those set in the template. The
     * `DeidentifyTemplate` used must include only reversible transformations.
     * Singular fields that are set in this request will replace their
     * corresponding fields in the template. Repeated fields are appended.
     * Singular sub-messages and groups are recursively merged.
     *
     * Generated from protobuf field <code>string reidentify_template_name = 6;</code>
     * @return string
     */
    public function getReidentifyTemplateName()
    {
        return $this->reidentify_template_name;
    }

    /**
     * Template to use. References an instance of `DeidentifyTemplate`.
     * Any configuration directly specified in `reidentify_config` or
     * `inspect_config` will override those set in the template. The
     * `DeidentifyTemplate` used must include only reversible transformations.
     * Singular fields that are set in this request will replace their
     * corresponding fields in the template. Repeated fields are appended.
     * Singular sub-messages and groups are recursively merged.
     *
     * Generated from protobuf field <code>string reidentify_template_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setReidentifyTemplateName($var)
    {
        GPBUtil::checkString($var, True);
        $this->reidentify_template_name = $var;

        return $this;
    }

    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>string location_id = 7;</code>
     * @return string
     */
    public function getLocationId()
    {
        return $this->location_id;
    }

    /**
     * Deprecated. This field has no effect.
     *
     * Generated from protobuf field <code>string location_id = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setLocationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->location_id = $var;

        return $this;
    }

}

