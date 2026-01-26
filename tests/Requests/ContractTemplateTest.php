<?php

// auto-generated

use Carbon\Carbon;
use Pionect\VismaSdk\Requests\ContractTemplate\ContractTemplateGetAllCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the contractTemplateGetAllCollection method in the ContractTemplate resource', function () {
    Saloon::fake([
        ContractTemplateGetAllCollectionRequest::class => MockResponse::make([
            'data' => [
                0 => [
                    'type' => 'contractTemplates',
                    'id' => 'mock-id-1',
                    'attributes' => [
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'attributes' => [],
                        'description' => 'Mock value',
                    ],
                ],
                1 => [
                    'type' => 'contractTemplates',
                    'id' => 'mock-id-2',
                    'attributes' => [
                        'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                        'attributes' => [],
                        'description' => 'Mock value',
                    ],
                ],
            ],
        ], 200),
    ]);

    $request = (new ContractTemplateGetAllCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', expandAttributes: true));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (ContractTemplateGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->description->toBe('Mock value');
});
