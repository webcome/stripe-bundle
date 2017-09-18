<?php

/*
 * This file is part of the SerendipityHQ Stripe Bundle.
 *
 * Copyright (c) Adamo Crespi <hello@aerendir.me>.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SerendipityHQ\Bundle\StripeBundle\Event;

use SerendipityHQ\Bundle\StripeBundle\Model\StripeLocalWebhookEvent;

/**
 * Abstract class to manage Charges.
 */
abstract class AbstractStripeWebhookEventEvent extends AbstractStripeEvent
{
    /** @var StripeLocalWebhookEvent $localWebhookEvent */
    private $localWebhookEvent;

    /**
     * @param StripeLocalWebhookEvent $localWebhookEvent The local entity representing the \Stripe\Event
     */
    public function __construct(StripeLocalWebhookEvent $localWebhookEvent)
    {
        $this->localWebhookEvent = $localWebhookEvent;
    }

    /**
     * @return StripeLocalWebhookEvent
     */
    public function getLocalWebhookEvent()
    {
        return $this->localWebhookEvent;
    }
}