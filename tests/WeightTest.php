<?php

use asq\WeightConversion\WeightConversionClass;

it('can convert kilograms to pounds', function () {
    $pounds = WeightConversionClass::kilograms(1)->toPounds();
    expect($pounds)->toBe(2.20462);
});


it('can convert kilograms to grams', function () {
    $grams = WeightConversionClass::kilograms(1)->toGrams();
    expect($grams)->toBe(1000);
});
