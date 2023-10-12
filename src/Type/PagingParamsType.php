<?php
/**
 * This file is a part of GraphQLExtensions project.
 *
 * @author Alexandr Viniychuk <a@viniychuk.com>
 * created: 2/23/17 4:10 PM
 */

namespace Youshido\GraphQLExtension\Type;

use Youshido\GraphQL\Type\InputObject\AbstractInputObjectType;
use Youshido\GraphQL\Type\Scalar\IntType;

class PagingParamsType extends AbstractInputObjectType
{
    public function build($config): void
    {
        $this->addFields([
            'offset' => new IntType(),
            'limit' => new IntType(),
        ]);
    }
}