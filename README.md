# Ireland vat format validator

![Code Coverage Badge](./badge.svg)

This component provides Ireland vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/ie-vat-format-validator
```

## Usage example

Valid Ireland vat number:

```php
$validator = new IEVatFormatValidator();
$validator->isValid('IE1234567A');
$validator->isValid('IE1A34567A');
$validator->isValid('IE1234567AA');
$validator->isValid('1234567A');
$validator->isValid('1A34567A');
$validator->isValid('1234567AA');
```

Returns:

```shell
true
true
true
true
true
true
```

Invalid Ireland vat number:

```php
$validator = new IEVatFormatValidator();
$validator->isValid('IE1234567AAA');
$validator->isValid('IE1A34567AA');
$validator->isValid('123456789');
$validator->isValid('DE1A34567A');
$validator->isValid('DE1234567AA');
```

```shell
false
false
false
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
