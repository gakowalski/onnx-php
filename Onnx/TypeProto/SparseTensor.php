<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: onnx.proto3

namespace Onnx\TypeProto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>onnx.TypeProto.SparseTensor</code>
 */
class SparseTensor extends \Google\Protobuf\Internal\Message
{
    /**
     * This field MUST NOT have the value of UNDEFINED
     * This field MUST have a valid TensorProto.DataType value
     * This field MUST be present for this version of the IR.
     *
     * Generated from protobuf field <code>int32 elem_type = 1;</code>
     */
    protected $elem_type = 0;
    /**
     * Generated from protobuf field <code>.onnx.TensorShapeProto shape = 2;</code>
     */
    protected $shape = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $elem_type
     *           This field MUST NOT have the value of UNDEFINED
     *           This field MUST have a valid TensorProto.DataType value
     *           This field MUST be present for this version of the IR.
     *     @type \Onnx\TensorShapeProto $shape
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Onnx::initOnce();
        parent::__construct($data);
    }

    /**
     * This field MUST NOT have the value of UNDEFINED
     * This field MUST have a valid TensorProto.DataType value
     * This field MUST be present for this version of the IR.
     *
     * Generated from protobuf field <code>int32 elem_type = 1;</code>
     * @return int
     */
    public function getElemType()
    {
        return $this->elem_type;
    }

    /**
     * This field MUST NOT have the value of UNDEFINED
     * This field MUST have a valid TensorProto.DataType value
     * This field MUST be present for this version of the IR.
     *
     * Generated from protobuf field <code>int32 elem_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setElemType($var)
    {
        GPBUtil::checkInt32($var);
        $this->elem_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.onnx.TensorShapeProto shape = 2;</code>
     * @return \Onnx\TensorShapeProto|null
     */
    public function getShape()
    {
        return $this->shape;
    }

    public function hasShape()
    {
        return isset($this->shape);
    }

    public function clearShape()
    {
        unset($this->shape);
    }

    /**
     * Generated from protobuf field <code>.onnx.TensorShapeProto shape = 2;</code>
     * @param \Onnx\TensorShapeProto $var
     * @return $this
     */
    public function setShape($var)
    {
        GPBUtil::checkMessage($var, \Onnx\TensorShapeProto::class);
        $this->shape = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SparseTensor::class, \Onnx\TypeProto_SparseTensor::class);

