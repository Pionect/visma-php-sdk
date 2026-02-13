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
- [Regenerating the SDK](#regenerating-the-sdk)
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
use Pionect\VismaSdk\Requests\Customer\CustomerGetAllRequest;
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
        $customers = $this->visma->paginate(new CustomerGetAllRequest())
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
use Pionect\VismaSdk\Requests\Customer\CustomerGetAllRequest;
use Pionect\VismaSdk\VismaConnector;

class SyncCustomersCommand extends Command
{
    public function handle(VismaConnector $visma): int
    {
        $customers = $visma->paginate(
            new CustomerGetAllRequest()
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
use Pionect\VismaSdk\Requests\Customer\CustomerGetAllRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerGetBycustomerCdRequest;
use Pionect\VismaSdk\Requests\Customer\CustomerPostRequest;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

test('it displays customers', function () {
    // Generate test data using factories
    $customers = CustomerDto::factory()->count(2)->make();

    // Create mock responses using factory-generated data
    $mockClient = MockClient::global([
        CustomerGetAllRequest::class => MockResponse::make($customers->toArray(), 200),
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
        CustomerPostRequest::class => MockResponse::make($customer->toArray(), 201),
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
        CustomerPostRequest::class => MockResponse::make($createdCustomer->toArray(), 201),
    ]);

    artisan('sync:customers')->assertOk();

    // Assert the request body was sent correctly
    $mockClient->assertSent(function (CustomerPostRequest $request) {
        $body = $request->body()->all();

        return $body['number'] === 'CUST003'
            && $body['name'] === 'Test Customer AS'
            && $body['creditLimit'] === 100000.00;
    });
});
```

**Note:** When testing code that uses pagination, mock the underlying collection request (e.g., `CustomerGetAllRequest`) as shown above. The paginator will automatically use your mocked responses for each page.

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

The SDK supports automatic pagination for collection endpoints that return multiple pages:

```php
use Pionect\VismaSdk\VismaConnector;
use Pionect\VismaSdk\Requests\Customer\CustomerGetAllRequest;

// Simple: Get all pages as a Laravel Collection
$customers = $visma->paginate(new CustomerGetAllRequest())
    ->dtoCollection();

foreach ($customers as $customer) {
    // Process each customer
    // All pages have been fetched automatically
}
```

**Advanced: Memory-efficient streaming for large datasets**

For processing thousands of records without loading everything into memory:

```php
$paginator = $visma->paginate(new CustomerGetAllRequest());

// Optional: configure page size (default is API default)
$paginator->setPerPageLimit(50);

// Stream through all pages lazily (fetches pages as needed)
foreach ($paginator->items() as $customer) {
    // Process each customer
    // Pages are fetched on-demand, reducing memory usage
}
```

**How it works:**
- `dtoCollection()`: Eagerly fetches all pages and returns a Laravel Collection of DTOs (simple, good for most cases)
- `items()`: Returns an iterator that lazily fetches pages (memory-efficient for large datasets)
- The paginator automatically handles different pagination types used by various Visma API endpoints

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
