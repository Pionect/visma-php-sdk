<?php

// Generated 2026-01-30 14:10:14

use Pionect\VismaSdk\Requests\ContractTemplate\ContractTemplateGetAllRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the contractTemplateGetAllRequest method in the ContractTemplate resource', function () {
    Saloon::fake([
        ContractTemplateGetAllRequest::class => MockResponse::make([
            0 => [
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'attributes' => [],
                'description' => 'String value',
            ],
            1 => [
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'attributes' => [],
                'description' => 'String value',
            ],
        ], 200),
    ]);

    $request = new ContractTemplateGetAllRequest(
        greaterThanValue: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        expandAttributes: true,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(ContractTemplateGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toBeArray()
        ->and($collection)->toHaveCount(2);

    $firstItem = $collection[0];

    expect($firstItem)
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->description->toBe('String value');
});
