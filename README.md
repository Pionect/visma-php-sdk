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
VISMA_BASE_URL=https://integration.visma.net/API
VISMA_API_TOKEN=your-api-token-here
```

## Usage

### Using Dependency Injection

The SDK connector is automatically registered in Laravel's service container, making it easy to inject into your controllers, commands, and other classes:

```php
use Pionect\VismaSdk\Requests\Budget\GetBudgetsCollectionRequest;
use Pionect\VismaSdk\Requests\Budget\GetBudgetRequest;
use Pionect\VismaSdk\Requests\Budget\PostBudgetsRequest;
use Pionect\VismaSdk\Requests\BudgetType\GetBudgetTypesCollectionRequest;

use Pionect\VismaSdk\VismaConnector;

class BudgetController extends Controller
{
    public function __construct(
        protected VismaConnector $visma
    ) {}

    public function index()
    {
        // fetch one or more items, limited by the default page size from the api
        $budgetTypes = $this->Visma
            ->send(new GetBudgetTypesCollectionRequest())
            ->dto();
            
        $defaultBudget = $this->Visma->send(
            new \Pionect\VismaSdk\Requests\Budget\GetBudgetRequest(id: '1337')
        )->dtoOrFail();
    
        // fetch all DTO's
        $budgets = $this->Visma->paginate(new GetBudgetsCollectionRequest())
            ->dtoCollection();

        return view('budgets.index', compact('budgets', 'budgetTypes', 'defaultBudget'));
    }

    public function store(Request $request)
    {
        $budget = new \Pionect\VismaSdk\Dto\Budget([
            'title' => $request->input('title'),
            'totalPrice' => $request->input('total_price'),
        ]);

        $created = $this->Visma
            ->send(new PostBudgetsRequest($budget))
            ->dtoOrFail();

        return redirect()->route('budgets.show', $created->id);
    }
}
```

**In Console Commands:**

```php
use Pionect\VismaSdk\Requests\Budget\GetBudgetsCollectionRequest;
use Pionect\VismaSdk\VismaConnector;

class SyncBudgetsCommand extends Command
{
    public function handle(VismaConnector $visma): int
    {
        $budgets = $visma->paginate(
            new GetBudgetsCollectionRequest()
        )->dtoCollection()
        
        foreach ($budgets as $budget) {
            // Process budgets
        }

        return Command::SUCCESS;
    }
}
```

### Testing

When testing code that uses the Visma SDK, you can mock the connector and its responses using factories. The SDK includes factory classes for all DTOs that make it easy to generate test data.

Here's an example of testing the `BudgetController` from the example above:

```php
use Pionect\VismaSdk\VismaConnector;
use Pionect\VismaSdk\Dto\Budget;
use Pionect\VismaSdk\Dto\BudgetType;
use Pionect\VismaSdk\Requests\Budget\GetBudgetsRequest;
use Pionect\VismaSdk\Requests\Budget\PostBudgetsRequest;
use Pionect\VismaSdk\Requests\BudgetType\GetBudgetTypesRequest;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

test('it displays budgets and budget types', function () {
    // Generate test data using factories
    $budget = Budget::factory()->state(['id' => '1'])->make();
    $budgetType = BudgetType::factory()->state(['id' => '1'])->make();

    // Create mock responses using factory-generated data
    $mockClient = MockClient::global([
        GetBudgetsRequest::class => MockResponse::make([
            'data' => [$budget->toJsonApi()],
        ], 200),
        GetBudgetTypesRequest::class => MockResponse::make([
            'data' => [$budgetType->toJsonApi()],
        ], 200),
    ]);

    // Make request
    $response = $this->get(route('budgets.index'));

    // Assert
    $response->assertOk();
    $response->assertViewHas('budgets');
    $response->assertViewHas('budgetTypes');
});

test('it creates a new budget', function () {
    // Generate test data with specific attributes
    $budget = Budget::factory()->state([
        'id' => '2',
        'title' => 'New Budget',
        'totalPrice' => '5000.00',
    ])->make();

    $mockClient = MockClient::global([
        PostBudgetsRequest::class => MockResponse::make([
            'data' => $budget->toJsonApi(),
        ], 201),
    ]);

    $response = $this->post(route('budgets.store'), [
        'title' => 'New Budget',
        'total_price' => 5000.00,
    ]);

    $response->assertRedirect(route('budgets.show', '2'));
});

test('it sends a POST request to create a budget using the SDK', function () {
    $budgetToCreate = Budget::factory()->state([
        'title' => 'New Budget',
        'totalPrice' => '5000.00',
        'customerId' => 'customer-123',
    ])->make();

    $createdBudget = Budget::factory()->state([
        'id' => 'created-456',
        'title' => 'New Budget',
        'totalPrice' => '5000.00',
        'customerId' => 'customer-123',
    ])->make();

    $mockClient = MockClient::global([
        PostBudgetsRequest::class => MockResponse::make([
            'data' => $createdBudget->toJsonApi(),
        ], 201),
    ]);

    artisan('sync:budgets')->assertOk();

    // Assert the request body was sent correctly
    $mockClient->assertSent(function (PostBudgetsRequest $request) {
        $body = $request->body()->all();

        return $body['data']['attributes']['title'] === 'New Budget'
            && $body['data']['attributes']['totalPrice'] === '5000.00'
            && $body['data']['attributes']['customerId'] === 'customer-123';
    });
});
```

#### Factory Methods

Every DTO in the SDK has a corresponding factory class with the following methods:

```php
// Create a single model with random data, without an ID
$budget = Budget::factory()->make();

// Create multiple models with unique UUID IDs
$budgets = Budget::factory()->withId()->count(3)->make(); // Returns Collection

// Override specific attributes
$budget = Budget::factory()->state([
    'title' => 'Q1 Budget',
    'totalPrice' => '10000.00',
])->make();

// Chain state calls for complex scenarios
$budget = Budget::factory()
    ->state(['customerId' => $customerId])
    ->state(['budgetTypeId' => $budgetTypeId])
    ->make();
```

For more information on mocking Saloon requests, see the [Saloon Mocking Documentation](https://docs.saloon.dev/testing/faking-responses).

### Pagination

The SDK supports automatic pagination for all collection endpoints using Saloon's pagination plugin:

```php
use Pionect\VismaSdk\VismaConnector;
use Pionect\VismaSdk\Requests\Budget\GetBudgets;

class BudgetController extends Controller
{
    public function index(VismaConnector $visma)
    {
        // Create a paginator
        $paginator = $visma->paginate(new GetBudgets());

        // Optionally set items per page (default is API's default)
        $paginator->setPerPageLimit(50);

        // Iterate through all pages automatically
        foreach ($paginator->items() as $budget) {
            // Process each budget across all pages
            // The paginator handles pagination automatically
        }

        // Or collect all items at once
        $allBudgets = $paginator->dtoCollection();
    }
}
```

The paginator:
- Automatically handles JSON:API pagination (`page[number]` and `page[size]`)
- Detects the last page via `links.next`
- Works with all GET collection requests (GetBudgets, GetCustomers, GetUsers, etc.)

### Custom Response Methods

All responses are instances of `VismaResponse` which extends Saloon's Response with JSON:API convenience methods:

```php
$response = $visma->send(new GetBudgetsCollectionRequest());

// Get the first item from a collection
$firstBudget = $response->firstItem();

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
./bin/generate-sdk path/to/openapi.json --output=. --force
```

## Credits

- Built with [Saloon](https://docs.saloon.dev/)
- Generated using [Saloon SDK Generator](https://docs.saloon.dev/installable-plugins/sdk-generator)
