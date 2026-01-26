<?php

// auto-generated

use Pionect\VismaSdk\Requests\CreditTerm\CreditTermGetCreditTermsCollectionRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector(
        clientId: 'replace',
        clientSecret: 'replace'
    );
});

it('calls the creditTermGetCreditTermsCollection method in the CreditTerm resource', function () {
    Saloon::fake([
        CreditTermGetCreditTermsCollectionRequest::class => MockResponse::make([
            0 => [
                'pageNumber' => 42,
                'pageSize' => 42,
                'totalCount' => 42,
                'records' => [],
            ],
            1 => [
                'pageNumber' => 42,
                'pageSize' => 42,
                'totalCount' => 42,
                'records' => [],
            ],
        ], 200),
    ]);

    $request = (new CreditTermGetCreditTermsCollectionRequest(lastModifiedDateTime: 'test string', lastModifiedDateTimeCondition: 'test string', createdDateTime: 'test string', createdDateTimeCondition: 'test string', termsId: 'test string', pageNumber: 123, pageSize: 123));

    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(function (CreditTermGetCreditTermsCollectionRequest $request) {
        $query = $request->query()->all();

        return true;
    });

    expect($response->status())->toBe(200);

    $dtoCollection = $response->dto();

    expect($dtoCollection->first())
        ->pageNumber->toBe(42)
        ->pageSize->toBe(42)
        ->totalCount->toBe(42);
});
