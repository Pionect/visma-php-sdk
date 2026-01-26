# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a **Laravel package** providing a type-safe PHP SDK for the Visma.net ERP API. Built on Saloon v3.0+ with JSON:API specification compliance.

**Important:** Most files in `src/Requests/`, `src/Dto/`, and `factories/` are **automatically generated** from OpenAPI specifications. Do not manually edit these files.

## Commands

```bash
# Install dependencies
composer install

# Run tests
composer test

# Generate coverage report
composer coverage

# Static analysis
composer analyse

# Code formatting
composer format
```

## Architecture

### Core Components (editable)

- `src/VismaConnector.php` - Main API connector with OAuth2 client credentials authentication
- `src/Foundation/` - Core framework: hydration system, responses, pagination, filtering
- `src/Providers/VismaServiceProvider.php` - Laravel service provider registration
- `config/visma-sdk.php` - Configuration template

### Generated Components (do not edit manually)

- `src/Dto/` - ~1,686 Data Transfer Object classes extending `Model`
- `src/Requests/` - ~112 directories with request classes per API resource
- `factories/` - ~1,688 factory classes for test data generation

**Generator:** Fixes to generated code should be made in the generator at https://github.com/Timatic/json-api-php-sdk-generator/ then regenerated.

### Key Patterns

**Model-DTO Pattern:** DTOs extend `Model` using PHP 8 attributes:
- `#[Property]` - Maps JSON:API attributes to typed properties
- `#[DateTime]` - Auto-parses to Carbon instances
- `#[Relationship]` - Handles nested model relationships

**Request Pattern:** Each resource has dedicated request classes:
- `*GetAllCollectionRequest` - Paginated collections
- `*GetRequest` - Single resource fetch
- `*CreateRequest` / `*PostRequest` - Create operations
- `*PutRequest` - Update operations
- `*DeleteRequest` - Delete operations

**Hydration:** API responses are converted to DTOs via `Hydrator::hydrate()` and `Hydrator::hydrateCollection()`

**Pagination:** `JsonApiPaginator` uses `page[number]` and `page[size]` query parameters

### Testing

Uses Pest with Saloon's MockClient:

```php
Saloon::fake([
    SomeRequest::class => MockResponse::make(['data' => [...]], 200),
]);
$response = $this->vismaConnector->send(new SomeRequest());
```

## Configuration

Required environment variables:
```env
VISMA_APPLICATION_ID=your-app-id
VISMA_APPLICATION_SECRET=your-app-secret
VISMA_TENANT_ID=your-tenant-id
VISMA_BASE_URL=https://integration.visma.net/API
```