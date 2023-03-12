<?php

namespace rocketfellows\IEVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;
use rocketfellows\IEVatFormatValidator\IEVatFormatValidator;

class IEVatFormatValidatorTest extends TestCase
{
    /**
     * @var IEVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new IEVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber' => 'IE1234567A',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'IE0000000A',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'IE9999999A',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'IE1111111A',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'IE1A34567A',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'IE9A99999A',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'IE1A11111A',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'IE0A00000A',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'IE1234567AA',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'IE9999999AA',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'IE1111111AA',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'IE0000000AA',
                'isValid' => true,
            ],
            [
                'vatNumber' => '1234567A',
                'isValid' => true,
            ],
            [
                'vatNumber' => '9999999A',
                'isValid' => true,
            ],
            [
                'vatNumber' => '1111111A',
                'isValid' => true,
            ],
            [
                'vatNumber' => '0000000A',
                'isValid' => true,
            ],
            [
                'vatNumber' => '1A34567A',
                'isValid' => true,
            ],
            [
                'vatNumber' => '9A99999A',
                'isValid' => true,
            ],
            [
                'vatNumber' => '1A11111A',
                'isValid' => true,
            ],
            [
                'vatNumber' => '0A00000A',
                'isValid' => true,
            ],
            [
                'vatNumber' => '1234567AA',
                'isValid' => true,
            ],
            [
                'vatNumber' => '1111111AA',
                'isValid' => true,
            ],
            [
                'vatNumber' => '0000000AA',
                'isValid' => true,
            ],
            [
                'vatNumber' => '9999999AA',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'IE1234567AAA',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'IE1A34567AA',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'IE123A567AA',
                'isValid' => false,
            ],
            [
                'vatNumber' => '123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DE1234567A',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DE1A34567A',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DE1234567AA',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1',
                'isValid' => false,
            ],
            [
                'vatNumber' => '0',
                'isValid' => false,
            ],
            [
                'vatNumber' => '',
                'isValid' => false,
            ],
        ];
    }
}
