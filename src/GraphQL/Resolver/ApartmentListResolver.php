<?php

namespace App\GraphQL\Resolver;

use App\Repository\ApartmentRepository;
use Overblog\GraphQLBundle\Definition\Argument;
use Overblog\GraphQLBundle\Definition\Resolver\AliasedInterface;
use Overblog\GraphQLBundle\Definition\Resolver\ResolverInterface;

/**
 * Class ApartmentListResolver.
 */
class ApartmentListResolver implements ResolverInterface, AliasedInterface
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

    /**
     * @param Argument $args
     *
     * @return array
     */
    public function resolve(Argument $args): array
    {
        $apartments = $this->apartmentRepository->findBy(
            [],
            ['id' => 'desc'],
            $args['limit'],
            0
        );

        return ['apartments' => $apartments];
    }

    /**
     * {@inheritdoc}
     */
    public static function getAliases(): array
    {
        return [
            'resolve' => 'ApartmentList',
        ];
    }
}
