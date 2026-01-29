<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\Attribute\AttributeGetAttributeByattributeIdRequest;
use Pionect\VismaSdk\Requests\Attribute\AttributeGetAttributesCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the attributeGetAttributeByattributeId method in the Attribute resource', function () {
    Saloon::fake([
        AttributeGetAttributeByattributeIdRequest::class => MockResponse::make([
            'attributeId' => 'mock-id-123',
            'description' => 'String value',
            'controlType' => 'String value',
            'internal' => true,
            'entryMask' => 'String value',
            'regExp' => 'String value',
            'details' => [],
            'createdDateTime' => '2025-11-22T10:40:04.065Z',
            'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new AttributeGetAttributeByattributeIdRequest(
        attributeId: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(AttributeGetAttributeByattributeIdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->attributeId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->controlType->toBe('String value')
        ->internal->toBeTrue()
        ->entryMask->toBe('String value')
        ->regExp->toBe('String value')
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value');
});

it('calls the attributeGetAttributesCollection method in the Attribute resource', function () {
    Saloon::fake([
        AttributeGetAttributesCollectionRequest::class => MockResponse::make([
            0 => [
                'attributeId' => 'mock-id-123',
                'description' => 'String value',
                'controlType' => 'String value',
                'internal' => true,
                'entryMask' => 'String value',
                'regExp' => 'String value',
                'details' => [],
                'createdDateTime' => '2025-11-22T10:40:04.065Z',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
            1 => [
                'attributeId' => 'mock-id-123',
                'description' => 'String value',
                'controlType' => 'String value',
                'internal' => true,
                'entryMask' => 'String value',
                'regExp' => 'String value',
                'details' => [],
                'createdDateTime' => '2025-11-22T10:40:04.065Z',
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'errorInfo' => 'String value',
                'metadata' => [
                    'totalCount' => 2,
                    'maxPageSize' => 100,
                ],
            ],
        ], 200),
    ]);

    $request = (new AttributeGetAttributesCollectionRequest(attributeId: 'test string', controlType: 'test string', internal: true, greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', pageNumber: 123, pageSize: 123));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (AttributeGetAttributesCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->attributeId->toBe('mock-id-123')
        ->description->toBe('String value')
        ->controlType->toBe('String value')
        ->internal->toBeTrue()
        ->entryMask->toBe('String value')
        ->regExp->toBe('String value')
        ->createdDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->errorInfo->toBe('String value');
});
