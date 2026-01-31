<?php

use Pionect\VismaSdk\Dto\AccountUpdateDto;
use Pionect\VismaSdk\Requests\Account\AccountGetAllRequest;
use Pionect\VismaSdk\Requests\Account\AccountGetByaccountCdRequest;
use Pionect\VismaSdk\Requests\Account\AccountPostRequest;
use Pionect\VismaSdk\Requests\Account\AccountPutByaccountCdRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the accountGetByaccountCdRequest method in the Account resource', function () {
    Saloon::fake([
        AccountGetByaccountCdRequest::class => MockResponse::make([
            'accountId' => 42,
            'accountCd' => 'String value',
            'accountGroupCd' => 'String value',
            'accountClass' => 'String value',
            'type' => 'String value',
            'active' => true,
            'description' => 'String value',
            'accountClassDescription' => 'String value',
            'useDefaultSub' => true,
            'postOption' => 'String value',
            'currency' => 'String value',
            'taxCategory' => 'String value',
            'cashAccount' => true,
            'publicCode1' => 'String value',
            'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
            'externalCode1info' => [
                'number' => 'String value',
                'description' => 'String value',
            ],
            'externalCode2info' => [
                'number' => 'String value',
                'description' => 'String value',
            ],
            'analisysCodeInfo' => [
                'number' => 'String value',
                'description' => 'String value',
            ],
            'controlAccountModule' => 'String value',
            'allowManualEntry' => true,
            'timeStamp' => 'String value',
            'errorInfo' => 'String value',
        ], 200),
    ]);

    $request = new AccountGetByaccountCdRequest(
        accountCd: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(AccountGetByaccountCdRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->accountId->toBe(42)
        ->accountCd->toBe('String value')
        ->accountGroupCd->toBe('String value')
        ->accountClass->toBe('String value')
        ->type->toBe('String value')
        ->active->toBe(true)
        ->description->toBe('String value')
        ->accountClassDescription->toBe('String value')
        ->useDefaultSub->toBe(true)
        ->postOption->toBe('String value')
        ->currency->toBe('String value')
        ->taxCategory->toBe('String value')
        ->cashAccount->toBe(true)
        ->publicCode1->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->externalCode1info->number->toBe('String value')
        ->externalCode1info->description->toBe('String value')
        ->externalCode2info->number->toBe('String value')
        ->externalCode2info->description->toBe('String value')
        ->analisysCodeInfo->number->toBe('String value')
        ->analisysCodeInfo->description->toBe('String value')
        ->controlAccountModule->toBe('String value')
        ->allowManualEntry->toBe(true)
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the accountPutByaccountCdRequest method in the Account resource', function () {
    $bodyData = new AccountUpdateDto(
        accountCd: 'String value',
        active: true,
        accountClass: 'String value',
        analysisCode: 'String value',
        currency: 'String value',
        description: 'String value',
        extenalCode1: 'String value',
        externalCode2: 'String value',
        accountGroupCd: 'String value',
        postOption: 'String value',
        publicCode1: 'String value',
        type: 'String value',
        useDefaultSub: true,
        taxCategory: 'String value'
    );

    Saloon::fake([
        AccountPutByaccountCdRequest::class => MockResponse::make([], 201),
    ]);

    $request = new AccountPutByaccountCdRequest(
        accountCd: 'test string',
        erpApiBackground: 'test string',
        ifMatch: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(AccountPutByaccountCdRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the accountGetAllRequest method in the Account resource', function () {
    Saloon::fake([
        AccountGetAllRequest::class => MockResponse::make([
            0 => [
                'accountId' => 42,
                'accountCd' => 'String value',
                'accountGroupCd' => 'String value',
                'accountClass' => 'String value',
                'type' => 'String value',
                'active' => true,
                'description' => 'String value',
                'accountClassDescription' => 'String value',
                'useDefaultSub' => true,
                'postOption' => 'String value',
                'currency' => 'String value',
                'taxCategory' => 'String value',
                'cashAccount' => true,
                'publicCode1' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'externalCode1info' => [
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'externalCode2info' => [
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'analisysCodeInfo' => [
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'controlAccountModule' => 'String value',
                'allowManualEntry' => true,
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
            1 => [
                'accountId' => 42,
                'accountCd' => 'String value',
                'accountGroupCd' => 'String value',
                'accountClass' => 'String value',
                'type' => 'String value',
                'active' => true,
                'description' => 'String value',
                'accountClassDescription' => 'String value',
                'useDefaultSub' => true,
                'postOption' => 'String value',
                'currency' => 'String value',
                'taxCategory' => 'String value',
                'cashAccount' => true,
                'publicCode1' => 'String value',
                'lastModifiedDateTime' => '2025-11-22T10:40:04+00:00',
                'externalCode1info' => [
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'externalCode2info' => [
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'analisysCodeInfo' => [
                    'number' => 'String value',
                    'description' => 'String value',
                ],
                'controlAccountModule' => 'String value',
                'allowManualEntry' => true,
                'timeStamp' => 'String value',
                'errorInfo' => 'String value',
            ],
        ], 200),
    ]);

    $request = new AccountGetAllRequest(
        active: true,
        includeAccountClassDescription: true,
        greaterThanValue: 'test string',
        publicCode: 'test string',
        externalCode1: 'test string',
        externalCode2: 'test string',
        analysisCode: 'test string',
        numberToRead: 123,
        skipRecords: 123,
        lastModifiedDateTime: 'test string',
        lastModifiedDateTimeCondition: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(AccountGetAllRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->accountId->toBe(42)
        ->accountCd->toBe('String value')
        ->accountGroupCd->toBe('String value')
        ->accountClass->toBe('String value')
        ->type->toBe('String value')
        ->active->toBe(true)
        ->description->toBe('String value')
        ->accountClassDescription->toBe('String value')
        ->useDefaultSub->toBe(true)
        ->postOption->toBe('String value')
        ->currency->toBe('String value')
        ->taxCategory->toBe('String value')
        ->cashAccount->toBe(true)
        ->publicCode1->toBe('String value')
        ->lastModifiedDateTime->toEqual(new \Carbon\Carbon('2025-11-22T10:40:04+00:00'))
        ->externalCode1info->number->toBe('String value')
        ->externalCode1info->description->toBe('String value')
        ->externalCode2info->number->toBe('String value')
        ->externalCode2info->description->toBe('String value')
        ->analisysCodeInfo->number->toBe('String value')
        ->analisysCodeInfo->description->toBe('String value')
        ->controlAccountModule->toBe('String value')
        ->allowManualEntry->toBe(true)
        ->timeStamp->toBe('String value')
        ->errorInfo->toBe('String value');
});

it('calls the accountPostRequest method in the Account resource', function () {
    $bodyData = new AccountUpdateDto(
        accountCd: 'String value',
        active: true,
        accountClass: 'String value',
        analysisCode: 'String value',
        currency: 'String value',
        description: 'String value',
        extenalCode1: 'String value',
        externalCode2: 'String value',
        accountGroupCd: 'String value',
        postOption: 'String value',
        publicCode1: 'String value',
        type: 'String value',
        useDefaultSub: true,
        taxCategory: 'String value'
    );

    Saloon::fake([
        AccountPostRequest::class => MockResponse::make([], 201),
    ]);

    $request = new AccountPostRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(AccountPostRequest::class);

    expect($response->status())->toBe(201);
});
