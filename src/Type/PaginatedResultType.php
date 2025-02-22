<?php
/**
 * This file is a part of GraphQLExtensions project.
 *
 * @author Alexandr Viniychuk <a@viniychuk.com>
 * created: 2/21/17 9:51 PM
 */

namespace Youshido\GraphQLExtension\Type;

use Youshido\GraphQL\Type\AbstractType;
use Youshido\GraphQL\Type\ListType\ListType;
use Youshido\GraphQL\Type\Object\AbstractObjectType;

class PaginatedResultType extends AbstractObjectType
{
    private AbstractType $listItemType;

    public function __construct(AbstractType $type)
    {
        parent::__construct([
            'name' => sprintf('Batch%sResult', $type->getName()),
            'description' => sprintf('Returns list of type %s in batches', $type->getName())
        ]);
        $this->listItemType = $type;
    }

    public function build($config): void
    {
        $config->addFields([
            'pagingInfo' => new PagingInfoType(),
            'items' => new ListType($this->listItemType),
        ]);
    }
}