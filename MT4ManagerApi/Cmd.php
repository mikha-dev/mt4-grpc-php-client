<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace MT4ManagerApi;

use UnexpectedValueException;

/**
 * Protobuf type <code>api_pb.Cmd</code>
 */
class Cmd
{
    /**
     * Generated from protobuf enum <code>CMD_BUY = 0;</code>
     */
    const CMD_BUY = 0;
    /**
     * Generated from protobuf enum <code>CMD_SELL = 1;</code>
     */
    const CMD_SELL = 1;

    private static $valueToName = [
        self::CMD_BUY => 'CMD_BUY',
        self::CMD_SELL => 'CMD_SELL',
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

