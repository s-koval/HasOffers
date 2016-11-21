# Grasp - HasOffers Client

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```bash
$ composer require grasp/hasoffers
```

## Usage

```php
$client = new Grasp\HasOffers\Client();
$client->setConfig([
    'apiKey' => 'YOUR_API_KEY',
    'networkId' => 'NETWORK_ID',
]);

$response = $client->api('Affiliate\Offer')->findAll(['limit' => 5]);

dump($response);
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.de. All security vulnerabilities will be promptly addressed.

## License

The [The MIT License (MIT)](LICENSE). Please check the [LICENSE](LICENSE) file for more details.
