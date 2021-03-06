<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: onnx.proto3

namespace Onnx;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A serialized sparse-tensor value
 *
 * Generated from protobuf message <code>onnx.SparseTensorProto</code>
 */
class SparseTensorProto extends \Google\Protobuf\Internal\Message
{
    /**
     * The sequence of non-default values are encoded as a tensor of shape [NNZ].
     * The default-value is zero for numeric tensors, and empty-string for string tensors.
     * values must have a non-empty name present which serves as a name for SparseTensorProto
     * when used in sparse_initializer list.
     *
     * Generated from protobuf field <code>.onnx.TensorProto values = 1;</code>
     */
    protected $values = null;
    /**
     * The indices of the non-default values, which may be stored in one of two formats.
     * (a) Indices can be a tensor of shape [NNZ, rank] with the [i,j]-th value
     * corresponding to the j-th index of the i-th value (in the values tensor).
     * (b) Indices can be a tensor of shape [NNZ], in which case the i-th value
     * must be the linearized-index of the i-th value (in the values tensor).
     * The linearized-index can be converted into an index tuple (k_1,...,k_rank)
     * using the shape provided below.
     * The indices must appear in ascending order without duplication.
     * In the first format, the ordering is lexicographic-ordering:
     * e.g., index-value [1,4] must appear before [2,1]
     *
     * Generated from protobuf field <code>.onnx.TensorProto indices = 2;</code>
     */
    protected $indices = null;
    /**
     * The shape of the underlying dense-tensor: [dim_1, dim_2, ... dim_rank]
     *
     * Generated from protobuf field <code>repeated int64 dims = 3;</code>
     */
    private $dims;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Onnx\TensorProto $values
     *           The sequence of non-default values are encoded as a tensor of shape [NNZ].
     *           The default-value is zero for numeric tensors, and empty-string for string tensors.
     *           values must have a non-empty name present which serves as a name for SparseTensorProto
     *           when used in sparse_initializer list.
     *     @type \Onnx\TensorProto $indices
     *           The indices of the non-default values, which may be stored in one of two formats.
     *           (a) Indices can be a tensor of shape [NNZ, rank] with the [i,j]-th value
     *           corresponding to the j-th index of the i-th value (in the values tensor).
     *           (b) Indices can be a tensor of shape [NNZ], in which case the i-th value
     *           must be the linearized-index of the i-th value (in the values tensor).
     *           The linearized-index can be converted into an index tuple (k_1,...,k_rank)
     *           using the shape provided below.
     *           The indices must appear in ascending order without duplication.
     *           In the first format, the ordering is lexicographic-ordering:
     *           e.g., index-value [1,4] must appear before [2,1]
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $dims
     *           The shape of the underlying dense-tensor: [dim_1, dim_2, ... dim_rank]
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Onnx::initOnce();
        parent::__construct($data);
    }

    /**
     * The sequence of non-default values are encoded as a tensor of shape [NNZ].
     * The default-value is zero for numeric tensors, and empty-string for string tensors.
     * values must have a non-empty name present which serves as a name for SparseTensorProto
     * when used in sparse_initializer list.
     *
     * Generated from protobuf field <code>.onnx.TensorProto values = 1;</code>
     * @return \Onnx\TensorProto|null
     */
    public function getValues()
    {
        return $this->values;
    }

    public function hasValues()
    {
        return isset($this->values);
    }

    public function clearValues()
    {
        unset($this->values);
    }

    /**
     * The sequence of non-default values are encoded as a tensor of shape [NNZ].
     * The default-value is zero for numeric tensors, and empty-string for string tensors.
     * values must have a non-empty name present which serves as a name for SparseTensorProto
     * when used in sparse_initializer list.
     *
     * Generated from protobuf field <code>.onnx.TensorProto values = 1;</code>
     * @param \Onnx\TensorProto $var
     * @return $this
     */
    public function setValues($var)
    {
        GPBUtil::checkMessage($var, \Onnx\TensorProto::class);
        $this->values = $var;

        return $this;
    }

    /**
     * The indices of the non-default values, which may be stored in one of two formats.
     * (a) Indices can be a tensor of shape [NNZ, rank] with the [i,j]-th value
     * corresponding to the j-th index of the i-th value (in the values tensor).
     * (b) Indices can be a tensor of shape [NNZ], in which case the i-th value
     * must be the linearized-index of the i-th value (in the values tensor).
     * The linearized-index can be converted into an index tuple (k_1,...,k_rank)
     * using the shape provided below.
     * The indices must appear in ascending order without duplication.
     * In the first format, the ordering is lexicographic-ordering:
     * e.g., index-value [1,4] must appear before [2,1]
     *
     * Generated from protobuf field <code>.onnx.TensorProto indices = 2;</code>
     * @return \Onnx\TensorProto|null
     */
    public function getIndices()
    {
        return $this->indices;
    }

    public function hasIndices()
    {
        return isset($this->indices);
    }

    public function clearIndices()
    {
        unset($this->indices);
    }

    /**
     * The indices of the non-default values, which may be stored in one of two formats.
     * (a) Indices can be a tensor of shape [NNZ, rank] with the [i,j]-th value
     * corresponding to the j-th index of the i-th value (in the values tensor).
     * (b) Indices can be a tensor of shape [NNZ], in which case the i-th value
     * must be the linearized-index of the i-th value (in the values tensor).
     * The linearized-index can be converted into an index tuple (k_1,...,k_rank)
     * using the shape provided below.
     * The indices must appear in ascending order without duplication.
     * In the first format, the ordering is lexicographic-ordering:
     * e.g., index-value [1,4] must appear before [2,1]
     *
     * Generated from protobuf field <code>.onnx.TensorProto indices = 2;</code>
     * @param \Onnx\TensorProto $var
     * @return $this
     */
    public function setIndices($var)
    {
        GPBUtil::checkMessage($var, \Onnx\TensorProto::class);
        $this->indices = $var;

        return $this;
    }

    /**
     * The shape of the underlying dense-tensor: [dim_1, dim_2, ... dim_rank]
     *
     * Generated from protobuf field <code>repeated int64 dims = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDims()
    {
        return $this->dims;
    }

    /**
     * The shape of the underlying dense-tensor: [dim_1, dim_2, ... dim_rank]
     *
     * Generated from protobuf field <code>repeated int64 dims = 3;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDims($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->dims = $arr;

        return $this;
    }

}

