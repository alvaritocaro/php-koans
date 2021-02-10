<?php


namespace koans;


class Variable
{

    /**
     * Variable constructor.
     */
    public function __construct()
    {
    }
    public function declareAnInt(){
        $intVariable = 1;

        return $intVariable;
    }

    public function DeclareABool()
    {
        $boolVariable= true;

        return $boolVariable;
    }

    public function DeclareAFloat()
    {
        $floatVariable = 6.9;

        return $floatVariable;
    }

    public function DeclareAnArray()
    {
        $arrayVariable = [6,9];

        return $arrayVariable;
    }

    public function CastStringToBool()
    {
        $boolVariable = (bool)"true";

        return $boolVariable;
    }

}