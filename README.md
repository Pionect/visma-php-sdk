# Visma PHP SDK

A Laravel package for the Visma API, built with [Saloon](https://docs.saloon.dev/) and automatically generated from OpenAPI specifications.

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
    - [Using Dependency Injection](#using-dependency-injection)
    - [Testing](#testing)
    - [Pagination](#pagination)
    - [Custom Response Methods](#custom-response-methods)
- [HTTP Methods](#http-methods)
- [Available Resources](#available-resources)
- [JSON:API Support](#jsonapi-support)
    - [Model Features](#model-features)
    - [Working with Relationships](#working-with-relationships)
- [Regenerating the SDK](#regenerating-the-sdk)
- [Development](#development)
- [License](#license)
- [Credits](#credits)

## Requirements

- PHP 8.2 or higher
- Laravel 10.x or higher

## Installation

```bash
composer require pionect/visma-sdk
```

## Configuration

The package automatically registers itself via Laravel auto-discovery.

Publish the config file:

```bash
php artisan vendor:publish --tag=visma-config
```

Add your API credentials to `.env`:

```env
VISMA_APPLICATION_ID=your-application-id
VISMA_APPLICATION_SECRET=your-application-secret
VISMA_TENANT_ID=your-tenant-id
VISMA_BASE_URL=https://integration.visma.net/API
```

## Usage

### Using Dependency Injection

The SDK connector is automatically registered in Laravel's service container, making it easy to inject into your controllers, commands, and other classes:

```php
use Pionect\VismaSdk\Requests\Customer\CustomerGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetBycustomerCdRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerPostRequest;
use Pionect\VismaSdk\Dto\CustomerDto;
use Pionect\VismaSdk\VismaConnector;

class CustomerController extends Controller
{
    public function __construct(
        protected VismaConnector $visma
    ) {}

    public function index()
    {
        // Fetch a single customer by customer number
        $defaultCustomer = $this->visma->send(
            new CustomerGetBycustomerCdRequest(customerCd: 'CUST001')
        )->dtoOrFail();

        // Fetch all customers using pagination
        $customers = $this->visma->paginate(new CustomerGetAllCollectionRequest())
            ->dtoCollection();

        return view('customers.index', compact('customers', 'defaultCustomer'));
    }

    public function store(Request $request)
    {
        $customer = new CustomerDto([
            'number' => $request->input('number'),
            'name' => $request->input('name'),
            'status' => 'Active',
            'creditLimit' => $request->input('credit_limit'),
            'currencyId' => 'NOK',
        ]);

        $created = $this->visma
            ->send(new CustomerPostRequest($customer))
            ->dtoOrFail();

        return redirect()->route('customers.show', $created->number);
    }
}
```

**In Console Commands:**

```php
use Pionect\VismaSdk\Requests\Customer\CustomerGetAllCollectionRequest;
use Pionect\VismaSdk\VismaConnector;

class SyncCustomersCommand extends Command
{
    public function handle(VismaConnector $visma): int
    {
        $customers = $visma->paginate(
            new CustomerGetAllCollectionRequest()
        )->dtoCollection();

        foreach ($customers as $customer) {
            // Process customers
            $this->info("Syncing customer: {$customer->name}");
        }

        return Command::SUCCESS;
    }
}
```

### Testing

When testing code that uses the Visma SDK, you can mock the connector and its responses using factories. The SDK includes factory classes for all DTOs that make it easy to generate test data.

Here's an example of testing the `CustomerController` from the example above:

```php
use Pionect\VismaSdk\VismaConnector;
use Pionect\VismaSdk\Dto\CustomerDto;
use Pionect\VismaSdk\Dto\CustomerInvoiceDto;
use Pionect\VismaSdk\Requests\Customer\CustomerGetAllCollectionRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetBycustomerCdRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerPostRequest;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

test('it displays customers', function () {
    // Generate test data using factories
    $customer = CustomerDto::factory()->state([
        'number' => 'CUST001',
        'name' => 'Acme Corporation',
        'status' => 'Active',
    ])->make();

    // Create mock responses using factory-generated data
    $mockClient = MockClient::global([
        CustomerGetAllCollectionRequest::class => MockResponse::make([
            'data' => [$customer->toArray()],
        ], 200),
        CustomerGetBycustomerCdRequest::class => MockResponse::make([
            'data' => $customer->toArray(),
        ], 200),
    ]);

    // Make request
    $response = $this->get(route('customers.index'));

    // Assert
    $response->assertOk();
    $response->assertViewHas('customers');
    $response->assertViewHas('defaultCustomer');
});

test('it creates a new customer', function () {
    // Generate test data with specific attributes
    $customer = CustomerDto::factory()->state([
        'number' => 'CUST002',
        'name' => 'New Customer Ltd',
        'status' => 'Active',
        'creditLimit' => 50000.00,
        'currencyId' => 'NOK',
    ])->make();

    $mockClient = MockClient::global([
        CustomerPostRequest::class => MockResponse::make([
            'data' => $customer->toArray(),
        ], 201),
    ]);

    $response = $this->post(route('customers.store'), [
        'number' => 'CUST002',
        'name' => 'New Customer Ltd',
        'credit_limit' => 50000.00,
    ]);

    $response->assertRedirect(route('customers.show', 'CUST002'));
});

test('it sends a POST request to create a customer using the SDK', function () {
    $customerToCreate = CustomerDto::factory()->state([
        'number' => 'CUST003',
        'name' => 'Test Customer AS',
        'status' => 'Active',
        'creditLimit' => 100000.00,
        'currencyId' => 'NOK',
    ])->make();

    $createdCustomer = CustomerDto::factory()->state([
        'number' => 'CUST003',
        'name' => 'Test Customer AS',
        'status' => 'Active',
        'creditLimit' => 100000.00,
        'currencyId' => 'NOK',
    ])->make();

    $mockClient = MockClient::global([
        CustomerPostRequest::class => MockResponse::make([
            'data' => $createdCustomer->toArray(),
        ], 201),
    ]);

    artisan('sync:customers')->assertOk();

    // Assert the request body was sent correctly
    $mockClient->assertSent(function (CustomerPostRequest $request) {
        $body = $request->body()->all();

        return $body['data']['attributes']['number'] === 'CUST003'
            && $body['data']['attributes']['name'] === 'Test Customer AS'
            && $body['data']['attributes']['creditLimit'] === 100000.00;
    });
});
```

#### Factory Methods

Every DTO in the SDK has a corresponding factory class with the following methods:

```php
// Create a single model with random data, without an ID
$customer = CustomerDto::factory()->make();

// Create multiple models with unique UUID IDs
$customers = CustomerDto::factory()->withId()->count(3)->make(); // Returns Collection

// Override specific attributes
$customer = CustomerDto::factory()->state([
    'number' => 'CUST100',
    'name' => 'Q1 Customer',
    'status' => 'Active',
    'creditLimit' => 10000.00,
])->make();

// Chain state calls for complex scenarios
$customer = CustomerDto::factory()
    ->state(['number' => $customerNumber])
    ->state(['currencyId' => 'NOK'])
    ->make();
```

For more information on mocking Saloon requests, see the [Saloon Mocking Documentation](https://docs.saloon.dev/testing/faking-responses).

### Pagination

The SDK supports automatic pagination for all collection endpoints using Saloon's pagination plugin:

```php
use Pionect\VismaSdk\VismaConnector;
use Pionect\VismaSdk\Requests\Customer\CustomerGetAllCollectionRequest;

class CustomerController extends Controller
{
    public function index(VismaConnector $visma)
    {
        // Create a paginator
        $paginator = $visma->paginate(new CustomerGetAllCollectionRequest());

        // Optionally set items per page (default is API's default)
        $paginator->setPerPageLimit(50);

        // Iterate through all pages automatically
        foreach ($paginator->items() as $customer) {
            // Process each customer across all pages
            // The paginator handles pagination automatically
        }

        // Or collect all items at once
        $allCustomers = $paginator->dtoCollection();
    }
}
```

The paginator:
- Automatically handles JSON:API pagination (`page[number]` and `page[size]`)
- Detects the last page via `links.next`
- Works with all GET collection requests (CustomerGetAllCollectionRequest, CustomerInvoiceGetAllCollectionRequest, etc.)

### Custom Response Methods

All responses are instances of `VismaResponse` which extends Saloon's Response with JSON:API convenience methods:

```php
use Pionect\VismaSdk\Requests\CustomerInvoice\CustomerInvoiceGetAllCollectionRequest;

$response = $visma->send(new CustomerInvoiceGetAllCollectionRequest());

// Get the first item from a collection
$firstInvoice = $response->firstItem();

// Check for errors
if ($response->hasErrors()) {
    $errors = $response->errors();
    // Handle errors...
}

// Access JSON:API meta information
$meta = $response->meta();
$total = $meta['total'] ?? 0;

// Access pagination links
$links = $response->links();
$nextPage = $links['next'] ?? null;

// Access included resources
$included = $response->included();
foreach ($included as $resource) {
    // Process related resources
}
```

### Model Features

- **Extends `Model` base class**
- **Property attributes** via `#[Property]` for serialization
- **DateTime handling** with Carbon instances
- **Type safety** with PHP 8.1+ type hints
- **HasAttributes trait** for easy attribute manipulation
- **Relationship support** with automatic hydration and serialization

## Regenerating the SDK

This SDK is generated from the Visma API OpenAPI specification. 
Download the OpenApi specification from https://api.finance.visma.net/API-index/index.html
To regenerate:

```bash
# Regenerate all DTOs and Requests
./bin/generate-sdk generate path/to/openapi.json 
```

## Credits

- Built with [Saloon](https://docs.saloon.dev/)
- Generated using [Saloon SDK Generator](https://docs.saloon.dev/installable-plugins/sdk-generator)
