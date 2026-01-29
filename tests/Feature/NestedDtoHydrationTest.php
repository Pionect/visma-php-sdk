<?php

use Pionect\VismaSdk\Dto\VatZoneDto;
use Pionect\VismaSdk\Requests\VatZone\VatZoneGetVatZonesCollectionRequest;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('can hydrate VatZoneDto with nested TaxCategoryNumberDescriptionDto from factory', function () {
    // This test demonstrates the issue: factories generate nested DTO objects,
    // but toArray() doesn't convert them recursively, and the hydrator can't handle nested DTOs

    MockClient::global([
        VatZoneGetVatZonesCollectionRequest::class => MockResponse::make(
            VatZoneDto::factory()->count(2)->make()->toArray()
        ),
    ]);

    $request = new VatZoneGetVatZonesCollectionRequest;
    $response = $this->vismaConnector->send($request);

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection)->toHaveCount(2);

    $firstDto = $dtoCollection->first();

    expect($firstDto)
        ->toBeInstanceOf(VatZoneDto::class)
        ->id->toBeString()
        ->description->toBeString()
        ->defaultVatCategory->toBeString();

    // This is where the problem occurs - defaultTaxCategory should be a TaxCategoryNumberDescriptionDto
    expect($firstDto->defaultTaxCategory)
        ->toBeInstanceOf(\Pionect\VismaSdk\Dto\TaxCategoryNumberDescriptionDto::class)
        ->number->toBeString()
        ->description->toBeString();
});

it('converts nested DTOs to arrays recursively when calling toArray()', function () {
    // Create a VatZoneDto with a nested TaxCategoryNumberDescriptionDto
    $vatZone = VatZoneDto::factory()->make();

    // Convert to array
    $array = $vatZone->toArray();

    // The defaultTaxCategory should be an array, not a DTO object
    expect($array)
        ->toBeArray()
        ->toHaveKey('defaultTaxCategory')
        ->and($array['defaultTaxCategory'])
        ->toBeArray()
        ->toHaveKeys(['number', 'description']);

    // Verify the values are preserved
    expect($array['defaultTaxCategory']['number'])->toBeString();
    expect($array['defaultTaxCategory']['description'])->toBeString();
});

it('handles null nested DTOs correctly', function () {
    MockClient::global([
        VatZoneGetVatZonesCollectionRequest::class => MockResponse::make([
            [
                'id' => 'test-id',
                'description' => 'Test description',
                'defaultVatCategory' => 'TEST',
                'defaultTaxCategory' => null, // Null nested DTO
                'errorInfo' => null,
            ],
        ]),
    ]);

    $request = new VatZoneGetVatZonesCollectionRequest;
    $response = $this->vismaConnector->send($request);

    $dtoCollection = $response->dto();
    $firstDto = $dtoCollection->first();

    expect($firstDto)
        ->toBeInstanceOf(VatZoneDto::class)
        ->defaultTaxCategory->toBeNull();
});
