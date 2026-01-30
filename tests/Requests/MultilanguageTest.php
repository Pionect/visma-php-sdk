<?php

use Pionect\VismaSdk\Dto\MultilanguageDto;
use Pionect\VismaSdk\Requests\Multilanguage\MultilanguageAddDefaultLanguageRequest;
use Pionect\VismaSdk\Requests\Multilanguage\MultilanguageDeleteSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest;
use Pionect\VismaSdk\Requests\Multilanguage\MultilanguageGetAllActiveLanguagesRequest;
use Pionect\VismaSdk\Requests\Multilanguage\MultilanguageGetInventoryTranslationsByinventoryNumberRequest;
use Pionect\VismaSdk\Requests\Multilanguage\MultilanguageGetSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest;
use Pionect\VismaSdk\Requests\Multilanguage\MultilanguagePostSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest;
use Pionect\VismaSdk\Requests\Multilanguage\MultilanguagePutSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

beforeEach(function () {
    $this->vismaConnector = new Pionect\VismaSdk\VismaConnector;
});

it('calls the multilanguageGetSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest method in the Multilanguage resource', function () {
    Saloon::fake([
        MultilanguageGetSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest::class => MockResponse::make([
            'languageIso' => 'String value',
            'translation' => 'String value',
            'isTranslated' => true,
        ], 200),
    ]);

    $request = new MultilanguageGetSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest(
        inventoryNumber: 'test string',
        languageIso: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(MultilanguageGetSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->languageIso->toBe('String value')
        ->translation->toBe('String value')
        ->isTranslated->toBe(true);
});

it('calls the multilanguagePutSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest method in the Multilanguage resource', function () {
    $bodyData = new MultilanguageDto(
        languageIso: 'String value',
        translation: 'String value',
        isTranslated: true
    );

    Saloon::fake([
        MultilanguagePutSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest::class => MockResponse::make([], 201),
    ]);

    $request = new MultilanguagePutSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest(
        inventoryNumber: 'test string',
        languageIso: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(MultilanguagePutSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the multilanguagePostSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest method in the Multilanguage resource', function () {
    $bodyData = new MultilanguageDto(
        languageIso: 'String value',
        translation: 'String value',
        isTranslated: true
    );

    Saloon::fake([
        MultilanguagePostSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest::class => MockResponse::make([], 201),
    ]);

    $request = new MultilanguagePostSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest(
        inventoryNumber: 'test string',
        languageIso: 'test string',
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(MultilanguagePostSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest::class);

    expect($response->status())->toBe(201);
});

it('calls the multilanguageDeleteSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest method in the Multilanguage resource', function () {
    Saloon::fake([
        MultilanguageDeleteSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest::class => MockResponse::make([], 204),
    ]);

    $request = new MultilanguageDeleteSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest(
        inventoryNumber: 'test string',
        languageIso: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(MultilanguageDeleteSpecificInventoryDescrTranslationByinventoryNumberlanguageIsoRequest::class);

    expect($response->status())->toBe(204);
});

it('calls the multilanguageGetInventoryTranslationsByinventoryNumberRequest method in the Multilanguage resource', function () {
    Saloon::fake([
        MultilanguageGetInventoryTranslationsByinventoryNumberRequest::class => MockResponse::make([
            'languageIso' => 'String value',
            'translation' => 'String value',
            'isTranslated' => true,
        ], 200),
    ]);

    $request = new MultilanguageGetInventoryTranslationsByinventoryNumberRequest(
        inventoryNumber: 'test string',
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(MultilanguageGetInventoryTranslationsByinventoryNumberRequest::class);

    expect($response->status())->toBe(200);

    $dto = $response->dto();

    expect($dto)
        ->languageIso->toBe('String value')
        ->translation->toBe('String value')
        ->isTranslated->toBe(true);
});

it('calls the multilanguageGetAllActiveLanguagesRequest method in the Multilanguage resource', function () {
    Saloon::fake([
        MultilanguageGetAllActiveLanguagesRequest::class => MockResponse::make([
            0 => [
                'isDefault' => true,
                'languageIso' => 'String value',
                'nativeName' => 'String value',
                'isActive' => true,
            ],
            1 => [
                'isDefault' => true,
                'languageIso' => 'String value',
                'nativeName' => 'String value',
                'isActive' => true,
            ],
        ], 200),
    ]);

    $request = new MultilanguageGetAllActiveLanguagesRequest(
        erpApiBackground: 'test string'
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(MultilanguageGetAllActiveLanguagesRequest::class);

    expect($response->status())->toBe(200);

    $collection = $response->dto();

    expect($collection)->toHaveCount(2);
    expect($collection->first())
        ->isDefault->toBe(true)
        ->languageIso->toBe('String value')
        ->nativeName->toBe('String value')
        ->isActive->toBe(true);
});

it('calls the multilanguageAddDefaultLanguageRequest method in the Multilanguage resource', function () {
    $bodyData = new MultilanguageDto(
        languageIso: 'String value',
        translation: 'String value',
        isTranslated: true
    );

    Saloon::fake([
        MultilanguageAddDefaultLanguageRequest::class => MockResponse::make([], 201),
    ]);

    $request = new MultilanguageAddDefaultLanguageRequest(
        erpApiBackground: 'test string',
        data: $bodyData
    );
    $response = $this->vismaConnector->send($request);

    Saloon::assertSent(MultilanguageAddDefaultLanguageRequest::class);

    expect($response->status())->toBe(201);
});
