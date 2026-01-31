<?php

use Pionect\VismaSdk\Requests\CreditTerm\CreditTermGetCreditTermsRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the creditTermGetCreditTermsRequest method in the CreditTerm resource', function () {
    Saloon::fake([
        CreditTermGetCreditTermsRequest::class => MockResponse::make([
            0 => [],
            1 => [],
        ], 200),
    ]);

    $request = new CreditTermGetCreditTermsRequest(
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        createdDateTime: 'test string',
        createdDateTimeCondition: 'test string',
        termsId: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CreditTermGetCreditTermsRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->toBeInstanceOf(\Spatie\LaravelData\Data::class);
});
