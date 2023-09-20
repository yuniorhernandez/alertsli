# Alerst.li

Access the Alerts.LI API, create short and friendly URLs for your text messages and emails.

See this: https://www.tu-pagina-web.com/invlice/19503850/view

to this: www.alerts.li/LS3071

## Installation

Use the package manager [composer](https://getcomposer.org/download/) to install Alerst.li.

```bash
composer require yuniorhernandez/alertsli
```

## Usage

```php
<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Yuniorhernandez\Alertsli\Facades\Alertsli;

class InvoiceController extends Controller
{
    public function send_message(Invoice $invlice){
        // Link to include in the message
        $link = Alertsli::createLink([
            'title' => 'Link to Invoice',
            'url' => "https://www.your-web-page.com/invoice/" . $invlice . "/view",
            'description' => 'Link to invoice view.',
            'is_disabled' => false,
        ]);

        // Message
```
```php
// Create a new link.
$link = Alertsli::createLink([
     'title' => 'Link title',
     'url' => "Destination URL, visitors will be directed to this address.",
     'description' => 'Link description, optional',
     'is_disabled' => false, //If it is true, the link will be deactivated.
 ]);
// return array
{
    "title": "Link to Invoice",
    "access_link": "http://alerts.li/L110034",
    "code": "L110034",
    "url": "https://www.your-web-page.com/invoice/AH7420HL004-20230917/view",
    "description": "Link to invoice view.",
    "is_disabled": 0,
    "created_at": "2023-09-16T16:26:39.000000Z",
    "updated_at": "2023-09-16T16:26:39.000000Z"
}
```
```php
$options = [
    "per_page" => 25 // optional, intege between 1 / 100
    "order" => "asc" // optional, {'asc'. 'desc'} default:desc
    "page" => 2 // optional, navigate between pages if available
]
$links = Alertsli::getAll($options); // return array
```
```php
$code = 'AL6399'; // Link code
$link = Alertsli::getLink($code); // return array
```
```php
$code = 'AL6399'; // Link code
$data = [
    'title' => 'Link to Invoice',
    'url' => "https://www.your-web-page.com/invoice/" . $invlice . "/view",
    'description' => 'Link to invoice view.',
    'is_disabled' => false,
];
$link = Alertsli::updateLink($code, $data) // return array
```
```php
$code = 'AL6399'; // Link code
$response = Alertsli::deleteLink($code) // return a message Acepted/Not found
```
```php
$code = 'AL6399'; // Link code
$options = [
    "per_page" => 25 // optional, intege between 1 / 100
    "order" => "asc" // optional, {'asc'. 'desc'} default:desc
    "page" => 2 // optional, navigate between pages if available
]
$all_clicks = Alertsli::allClicks($code, $options) // return array
```

## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[MIT](https://choosealicense.com/licenses/mit/)
