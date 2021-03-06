<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: onnx.proto3

namespace Onnx;

use UnexpectedValueException;

/**
 * Operator/function status.
 *
 * Protobuf type <code>onnx.OperatorStatus</code>
 */
class OperatorStatus
{
    /**
     * Generated from protobuf enum <code>EXPERIMENTAL = 0;</code>
     */
    const EXPERIMENTAL = 0;
    /**
     * Generated from protobuf enum <code>STABLE = 1;</code>
     */
    const STABLE = 1;

    private static $valueToName = [
        self::EXPERIMENTAL => 'EXPERIMENTAL',
        self::STABLE => 'STABLE',
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
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

