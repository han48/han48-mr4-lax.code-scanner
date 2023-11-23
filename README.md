Code scanner editor extension for laravel-admin
======

This is a `laravel` component that integrates [Scan BarCode and QRCode].
Feature:
- Load all camera device.
- Support single scan
- Support continue
- Support BarCode, QRCode

## Screenshot
<img width="1601" alt="Screenshot 2023-11-23 at 18 00 11" src="https://github.com/han48/han48-mr4-lax.code-scanner/assets/27817127/32d44107-63c6-4cba-a68d-121d8a7d601d">

## Installation
```bash
composer require mr4-lc/code-scanner
php artisan vendor:publish --tag=mr4-lc-code-scanner --force
```

## Configuration

## Usage

```php
$form->codescanner('name')->setMode('continue');
```
Hidden input: code_img (image capture base64 data)
<img width="1059" alt="Screenshot 2023-11-23 at 17 55 31" src="https://github.com/han48/han48-mr4-lax.code-scanner/assets/27817127/394fb10a-e3a4-4ae2-b01b-a4c0776ce0c9">


```php
$form->codescanner('email');
```
![Screenshot 2023-11-23 at 17 56 19](https://github.com/han48/han48-mr4-lax.code-scanner/assets/27817127/15a4a110-ea77-4a1c-98ed-22e332d866ad)

## License
Licensed under The [MIT License (MIT)](https://github.com/han48/mr4-lc.code-scanner/blob/main/LICENSE).
