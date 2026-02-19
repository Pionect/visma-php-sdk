<?php

use Pionect\VismaSdk\Dto\StocktakeUpdateDto;
use Pionect\VismaSdk\Enums\StocktakeV2dtoSummaryStatusEnum;
use Pionect\VismaSdk\Requests\StocktakeV2\StocktakeV2GetAllStocktakesRequest;
use Pionect\VismaSdk\Requests\StocktakeV2\StocktakeV2GetByreferenceNumberRequest;
use Pionect\VismaSdk\Requests\StocktakeV2\StocktakeV2PutByreferenceNumberRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the stocktakeV2getByreferenceNumberRequest method in the StocktakeV2 resource', function () {
    Saloon::fake([
        StocktakeV2GetByreferenceNumberRequest::class => MockResponse::make([
            'referenceNbr' => 'String value',
            'description' => 'String value',
            'summaryStatus' => 'Cancelled',
            'freezeDate' => '2025-11-22T10:40:04+00:00',
            'numberOfLines' => 42,
            'physicalQty' => 42,
            'varianceQty' => 42,
            'varianceCost' => 42,
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'lines' => [],
            'timestamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new StocktakeV2GetByreferenceNumberRequest(
        referenceNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(StocktakeV2GetByreferenceNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->referenceNbr->toBe('String value')
        ->description->toBe('String value')
        ->summaryStatus->toEqual(StocktakeV2dtoSummaryStatusEnum::CANCELLED)
        ->freezeDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->numberOfLines->toBe(42)
        ->physicalQty->toBe(42)
        ->varianceQty->toBe(42)
        ->varianceCost->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->timestamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the stocktakeV2putByreferenceNumberRequest method in the StocktakeV2 resource', function () {
    $bodyData = new StocktakeUpdateDto(
        lines: []
    );

    Saloon::fake([
        StocktakeV2PutByreferenceNumberRequest::class => MockResponse::make([], 201),
    ]);

    $request = new StocktakeV2PutByreferenceNumberRequest(
        referenceNumber: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(StocktakeV2PutByreferenceNumberRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the stocktakeV2getAllStocktakesRequest method in the StocktakeV2 resource', function () {
    Saloon::fake([
        StocktakeV2GetAllStocktakesRequest::class => MockResponse::make([
            0 => [
                'referenceNbr' => 'String value',
                'description' => 'String value',
                'summaryStatus' => 'Cancelled',
                'freezeDate' => '2025-11-22T10:40:04+00:00',
                'numberOfLines' => 42,
                'physicalQty' => 42,
                'varianceQty' => 42,
                'varianceCost' => 42,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'lines' => [],
                'timestamp' => 'String value',
                'errorInfo' => 'String value',
            ],
            1 => [
                'referenceNbr' => 'String value',
                'description' => 'String value',
                'summaryStatus' => 'Cancelled',
                'freezeDate' => '2025-11-22T10:40:04+00:00',
                'numberOfLines' => 42,
                'physicalQty' => 42,
                'varianceQty' => 42,
                'varianceCost' => 42,
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'lines' => [],
                'timestamp' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new StocktakeV2GetAllStocktakesRequest(
        warehouse: 'test string',
        location: 'test string',
        inventory: 'test string',
        lotSerialNumber: 'test string',
        summaryStatus: 'test string',
        startWithLine: 123,
        endWithLine: 123,
        freezeDateTime: 'test string',
        freezeDateTimeCondition: 'test string',
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        expirationDateTime: 'test string',
        expirationDateTimeCondition: 'test string',
        status: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(StocktakeV2GetAllStocktakesRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->referenceNbr->toBe('String value')
        ->description->toBe('String value')
        ->summaryStatus->toEqual(StocktakeV2dtoSummaryStatusEnum::CANCELLED)
        ->freezeDate->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->numberOfLines->toBe(42)
        ->physicalQty->toBe(42)
        ->varianceQty->toBe(42)
        ->varianceCost->toBe(42)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->timestamp->toBe('String value')
        ->errorInfo->toBe('String value');
});
