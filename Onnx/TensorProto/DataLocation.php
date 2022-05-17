<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: onnx.proto3

namespace Onnx\TensorProto;

use UnexpectedValueException;

/**
 * Location of the data for this tensor. MUST be one of:
 * - DEFAULT - data stored inside the protobuf message. Data is stored in raw_data (if set) otherwise in type-specified field.
 * - EXTERNAL - data stored in an external location as described by external_data field.
 *
 * Protobuf type <code>onnx.TensorProto.DataLocation</code>
 */
class DataLocation
{
    /**
     * Generated from protobuf enum <code>DEFAULT = 0;</code>
     */
    const PBDEFAULT = 0;
    /**
     * Generated from protobuf enum <code>EXTERNAL = 1;</code>
     */
    const EXTERNAL = 1;

    private static $valueToName = [
        self::PBDEFAULT => 'DEFAULT',
        self::EXTERNAL => 'EXTERNAL',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            $pbconst =  __CLASS__. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', __CLASS__, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DataLocation::class, \Onnx\TensorProto_DataLocation::class);

