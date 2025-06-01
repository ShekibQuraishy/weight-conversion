<?php

namespace asq\WeightConversion;

class WeightConversionClass
{
    public static function kilograms(float $kilograms): WeightConversionClass
    {
        return new self($kilograms);
    }

    public function __construct(protected float $kilograms)
    {
    }

   public function toPounds(): float
   {
       return $this->kilograms * 2.20462;
   }

   public function toGrams(): int
   {
       return $this->kilograms * 1000;
   }

}
