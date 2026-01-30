# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a **Laravel package** providing a type-safe PHP SDK for the Visma.net ERP API. Built on Saloon v3.0+

The SDK is generated using this openapi spec: https://api.finance.visma.net/API-index/api/vismanet.erp.service.api-apim

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
- `src/Providers/VismaServiceProvider.php` - Laravel service provider registration
- `config/visma-sdk.php` - Configuration template

### Generated Components (do not edit manually)

- `src/Dto/` - ~1,686 Data Transfer Object classes extending `Data` from Spatie\Laravel-Data
- `src/Requests/` - ~112 directories with request classes per API resource
- `factories/` - ~1,688 factory classes for test data generation

**Generator:** The SDK uses custom generators in `generator/Generators/` extending the base Saloon SDK Generator. Fixes to generated code patterns should be made in these generator classes, then code regenerated using `./bin/generate-sdk generate openapi.json`.

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