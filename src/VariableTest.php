<?php

namespace koans;

use PHPUnit\Framework\TestCase;

class VariableTest extends TestCase
{
    /**
     * @test
    **/
    public function declaresAnInt()
    {
        $variable = new Variable();
        $integerValue = $variable -> DeclareAnInt();

        $this->assertIsInt($integerValue);
    }

    /**
     * @test
     **/
    public function declaresABool()
    {
        $variable = new Variable();
        $boolValue = $variable -> DeclareABool();

        $this->assertIsBool($boolValue);
    }
    /**
     * @test
     **/

    public function declaresAFloat()
    {

        $variable = new Variable();
        $floatValue = $variable -> DeclareAFloat();

        $this->assertIsFloat($floatValue);
    }

    /**
     * @test
     **/
    public function declaresAnArray()
    {
        $variable = new Variable();
        $arrayValue = $variable -> DeclareAnArray();

        $this->assertIsArray($arrayValue);
    }

    /**
     * @test
     **/

     public function CambiarValor(a)
    {
        $variable = new Variable();
        $variable = a;
        $value = $variable -> CambioValor();

        $this->assertFileNotEquals($variable,$value);
    }
    /**
     * @test
     **/

    public function CastsStringToBool()
    {
        $variable = new Variable();
        $boolValue = $variable -> CastStringToBool();

        $this->assertIsBool($boolValue);
    }


}
