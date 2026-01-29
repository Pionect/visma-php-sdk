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
            0 => [
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'attributes' => [],
                'description' => 'String value',
            ],
            1 => [
                'lastModifiedDateTime' => '2025-11-22T10:40:04.065Z',
                'attributes' => [],
                'description' => 'String value',
            ],
        ], 200),
    ]);

    $request = (new ContractTemplateGetAllCollectionRequest(greaterThanValue: 'test string', numberToRead: 123, skipRecords: 123, lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', expandAttributes: true));

    $dtoCollection = $this->vismaConnector->paginate($request)->dtoCollection();

    Saloon::assertSent(function (ContractTemplateGetAllCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($dtoCollection)->toHaveCount(2);

    expect($dtoCollection->first())
        ->lastModifiedDateTime->toEqual(new Carbon('2025-11-22T10:40:04.065Z'))
        ->description->toBe('String value');
});
