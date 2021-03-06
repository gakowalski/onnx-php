<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: onnx.proto3

namespace Onnx;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>onnx.FunctionProto</code>
 */
class FunctionProto extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the function, similar usage of op_type in OperatorProto.
     * Combined with FunctionProto.domain, this forms the unique identity of
     * the FunctionProto.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The inputs and outputs of the function.
     *
     * Generated from protobuf field <code>repeated string input = 4;</code>
     */
    private $input;
    /**
     * Generated from protobuf field <code>repeated string output = 5;</code>
     */
    private $output;
    /**
     * The attributes of the function.
     *
     * Generated from protobuf field <code>repeated string attribute = 6;</code>
     */
    private $attribute;
    /**
     * The nodes in the function.
     *
     * Generated from protobuf field <code>repeated .onnx.NodeProto node = 7;</code>
     */
    private $node;
    /**
     * A human-readable documentation for this function. Markdown is allowed.
     *
     * Generated from protobuf field <code>string doc_string = 8;</code>
     */
    protected $doc_string = '';
    /**
     * Generated from protobuf field <code>repeated .onnx.OperatorSetIdProto opset_import = 9;</code>
     */
    private $opset_import;
    /**
     * The domain which this function belongs to. Combined with FunctionProto.name, this forms the unique identity of
     * the FunctionProto.
     *
     * Generated from protobuf field <code>string domain = 10;</code>
     */
    protected $domain = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the function, similar usage of op_type in OperatorProto.
     *           Combined with FunctionProto.domain, this forms the unique identity of
     *           the FunctionProto.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $input
     *           The inputs and outputs of the function.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $output
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $attribute
     *           The attributes of the function.
     *     @type array<\Onnx\NodeProto>|\Google\Protobuf\Internal\RepeatedField $node
     *           The nodes in the function.
     *     @type string $doc_string
     *           A human-readable documentation for this function. Markdown is allowed.
     *     @type array<\Onnx\OperatorSetIdProto>|\Google\Protobuf\Internal\RepeatedField $opset_import
     *     @type string $domain
     *           The domain which this function belongs to. Combined with FunctionProto.name, this forms the unique identity of
     *           the FunctionProto.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Onnx::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the function, similar usage of op_type in OperatorProto.
     * Combined with FunctionProto.domain, this forms the unique identity of
     * the FunctionProto.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the function, similar usage of op_type in OperatorProto.
     * Combined with FunctionProto.domain, this forms the unique identity of
     * the FunctionProto.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * The inputs and outputs of the function.
     *
     * Generated from protobuf field <code>repeated string input = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * The inputs and outputs of the function.
     *
     * Generated from protobuf field <code>repeated string input = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInput($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->input = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string output = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * Generated from protobuf field <code>repeated string output = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOutput($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->output = $arr;

        return $this;
    }

    /**
     * The attributes of the function.
     *
     * Generated from protobuf field <code>repeated string attribute = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * The attributes of the function.
     *
     * Generated from protobuf field <code>repeated string attribute = 6;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttribute($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->attribute = $arr;

        return $this;
    }

    /**
     * The nodes in the function.
     *
     * Generated from protobuf field <code>repeated .onnx.NodeProto node = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * The nodes in the function.
     *
     * Generated from protobuf field <code>repeated .onnx.NodeProto node = 7;</code>
     * @param array<\Onnx\NodeProto>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNode($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Onnx\NodeProto::class);
        $this->node = $arr;

        return $this;
    }

    /**
     * A human-readable documentation for this function. Markdown is allowed.
     *
     * Generated from protobuf field <code>string doc_string = 8;</code>
     * @return string
     */
    public function getDocString()
    {
        return $this->doc_string;
    }

    /**
     * A human-readable documentation for this function. Markdown is allowed.
     *
     * Generated from protobuf field <code>string doc_string = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setDocString($var)
    {
        GPBUtil::checkString($var, True);
        $this->doc_string = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .onnx.OperatorSetIdProto opset_import = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOpsetImport()
    {
        return $this->opset_import;
    }

    /**
     * Generated from protobuf field <code>repeated .onnx.OperatorSetIdProto opset_import = 9;</code>
     * @param array<\Onnx\OperatorSetIdProto>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOpsetImport($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Onnx\OperatorSetIdProto::class);
        $this->opset_import = $arr;

        return $this;
    }

    /**
     * The domain which this function belongs to. Combined with FunctionProto.name, this forms the unique identity of
     * the FunctionProto.
     *
     * Generated from protobuf field <code>string domain = 10;</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * The domain which this function belongs to. Combined with FunctionProto.name, this forms the unique identity of
     * the FunctionProto.
     *
     * Generated from protobuf field <code>string domain = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->domain = $var;

        return $this;
    }

}

