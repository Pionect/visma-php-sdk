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
                'branchNumber' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'customer' => [
                    'internalId' => 42,
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'beginBalance' => 42,
                'sales' => 42,
                'paymentsAndPrepayments' => 42,
                'adjustmentsAndDiscounts' => 42,
                'overdueCharges' => 42,
                'yearToDateBalance' => 42,
            ],
            1 => [
                'branchNumber' => [
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'customer' => [
                    'internalId' => 42,
                    'number' => 'String value',
                    'name' => 'String value',
                ],
                'beginBalance' => 42,
                'sales' => 42,
                'paymentsAndPrepayments' => 42,
                'adjustmentsAndDiscounts' => 42,
                'overdueCharges' => 42,
                'yearToDateBalance' => 42,
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
        ->branchNumber->number->toBe('String value')
        ->branchNumber->name->toBe('String value')
        ->customer->internalId->toBe(42)
        ->customer->number->toBe('String value')
        ->customer->name->toBe('String value')
        ->beginBalance->toBe(42)
        ->sales->toBe(42)
        ->paymentsAndPrepayments->toBe(42)
        ->adjustmentsAndDiscounts->toBe(42)
        ->overdueCharges->toBe(42)
        ->yearToDateBalance->toBe(42);
});
