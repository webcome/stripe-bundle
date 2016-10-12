<?php

/*
 * This file is part of the AWS SES Monitor Bundle.
 *
 * @author Adamo Aerendir Crespi <hello@aerendir.me>
 * @author Audrius Karabanovas <audrius@karabanovas.net>
 */

namespace SerendipityHQ\Bundle\StripeBundle\Repository;

use Doctrine\ORM\EntityRepository;
use SerendipityHQ\Bundle\StripeBundle\Model\StripeLocalCard;
use SerendipityHQ\Bundle\StripeBundle\Model\StripeLocalCustomer;

/**
 * @author Audrius Karabanovas <audrius@karabanovas.net>
 * @author Adamo Aerendir Crespi <hello@aerendir.me>
 *
 * {@inheritdoc}
 */
class StripeLocalCustomerRepository extends EntityRepository implements ByStripeIdInterface
{
    /**
     * @param $id
     *
     * @return object|StripeLocalCustomer|null
     */
    public function findOneByStripeId($id)
    {
        return $this->findOneBy(['id' => mb_strtolower($id)]);
    }
}
