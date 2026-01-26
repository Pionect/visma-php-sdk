<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Generator\Generators;

use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Literal;
use Timatic\JsonApiSdk\Generators\JsonApiConnectorGenerator;

class PlainJsonConnectorGenerator extends JsonApiConnectorGenerator
{
    /**
     * Use plain JSON headers instead of JSON:API.
     */
    public function addDefaultHeaders(ClassType $classType): void
    {
        $defaultHeaders = $classType->addMethod('defaultHeaders')
            ->setProtected()
            ->setReturnType('array');

        $defaultHeaders->setBody(<<<'PHP'
return [
    'Accept' => 'application/json',
    'Content-Type' => 'application/json',
];
PHP);
    }

    /**
     * Use PlainJsonPaginator instead of JsonApiPaginator.
     */
    public function addPaginateMethod(ClassType $classType): void
    {
        $plainJsonPaginatorClass = $this->config->namespace.'\\Foundation\\Pagination\\PlainJsonPaginator';

        $paginate = $classType->addMethod('paginate')
            ->setPublic()
            ->setReturnType($plainJsonPaginatorClass);

        $paginate->addParameter('request')
            ->setType(\Saloon\Http\Request::class);

        $paginate->setBody('return new ?($this, $request);', [new Literal('PlainJsonPaginator')]);
    }

    /**
     * Remove custom Response class - use standard Saloon Response.
     */
    public function addResolveResponseClassMethod(ClassType $classType): void
    {
        // No-op: don't add resolveResponseClass method, use standard Saloon Response
    }
}
