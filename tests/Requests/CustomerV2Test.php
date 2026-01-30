<?php

use Pionect\VismaSdk\Requests\CustomerV2\CustomerV2GetAllCustomerBalanceRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the customerV2getAllCustomerBalanceRequest method in the CustomerV2 resource', function () {
    Saloon::fake([
        CustomerV2GetAllCustomerBalanceRequest::class => MockResponse::make([
            0 => [
                'name' => 'Mock value',
            ],
            1 => [
                'name' => 'Mock value',
            ],
        ], 200),
    ]);

    $request = new CustomerV2GetAllCustomerBalanceRequest(
        branchNumber: 'test string',
        customer: 'test string',
        fromFinPeriod: 'test string',
        toFinPeriod: 'test string',
        pageNumber: 123,
        pageSize: 123,
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(CustomerV2GetAllCustomerBalanceRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->name->toBe('Mock value');
});
