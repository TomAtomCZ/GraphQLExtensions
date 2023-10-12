<?php

namespace Youshido\GraphQLExtension\Type\Sorting;

use Youshido\GraphQL\Type\Enum\AbstractEnumType;

class SortingOrderType extends AbstractEnumType
{
    public function getValues(): array
    {
        return [
            [
                'name' => 'ASC',
                'value' => 1,
            ],
            [
                'name' => 'DESC',
                'value' => -1,
            ],
        ];
    }
}