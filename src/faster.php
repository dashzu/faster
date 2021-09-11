<?php

namespace Dashzu\Faster;

class F{
    public static function chainCall(object $obj,...$props){
        if (!is_array($props)) return null;
        $tmp = $obj;
        foreach ($props as $prop){
            if (!is_string($prop) || !property_exists($tmp,$prop)) return null;
            $tmp = $tmp->{$prop};
        }
        return $tmp;
    }
}