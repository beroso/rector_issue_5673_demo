<?php

namespace App;

final class ThingHelper
{
    public static function generateThing(string $name): string
    {
        $thingMaker = fn ($name) => $name . ' thing';

        return $thingMaker($name);
    }
}
