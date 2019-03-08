<?php

namespace App\GraphQL\Resolver;

use App\Repository\ApartmentRepository;
use Overblog\GraphQLBundle\Definition\Argument;
use Overblog\GraphQLBundle\Definition\Resolver\AliasedInterface;
use Overblog\GraphQLBundle\Definition\Resolver\ResolverInterface;

/**
 * Class ApartmentResolver.
 */
class ApartmentResolver implements ResolverInterface, AliasedInterface
{
    /**
     * @var ApartmentRepository
     */
    private $apartmentRepository;

    /**
     * ApartmentResolver constructor.
     *
     * @param ApartmentRepository $apartmentRepository
     */
    public function __construct(ApartmentRepository $apartmentRepository)
    {
        $this->apartmentRepository = $apartmentRepository;
    }

    public function resolve(Argument $args)
    {
        return $this->apartmentRepository->find($args['id']);
    }

    /**
     * {@inheritdoc}
     */
    public static function getAliases()
    {
        return [
            'resolve' => 'Apartment',
        ];
    }
}
