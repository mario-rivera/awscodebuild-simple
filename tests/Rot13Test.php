<?php
use PHPUnit\Framework\TestCase;

function Rot13( $input ){
    return str_rot13 ( $input );
}

final class Rot13Test extends TestCase
{
    public function testStringToRot13()
    {
        $this->assertEquals(
            Rot13('Hello World'),
            'Uryyb Jbeyqs'
        );
    }
}
