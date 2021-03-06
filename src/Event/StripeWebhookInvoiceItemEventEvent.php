<?php

/*
 * This file is part of the SHQStripeBundle.
 *
 * Copyright Adamo Aerendir Crespi 2016-2017.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author    Adamo Aerendir Crespi <hello@aerendir.me>
 * @copyright Copyright (C) 2016 - 2017 Aerendir. All rights reserved.
 * @license   MIT License.
 */

namespace SerendipityHQ\Bundle\StripeBundle\Event;

/**
 * Dispatched when a invoiceitem.* event has been received by the webhook endpoint.
 *
 * @author Adamo Crespi <hello@aerendir.me>
 */
class StripeWebhookInvoiceItemEventEvent extends AbstractStripeWebhookEventEvent
{
    /**
     * Occurs whenever an invoice item is created.
     *
     * @var string
     *
     * @see https://stripe.com/docs/api#event_types-invoiceitem.created
     */
    const CREATED = 'stripe.webhook.invoiceitem.created';

    /**
     * Occurs whenever an invoice item is deleted.
     *
     * @var string
     *
     * @see https://stripe.com/docs/api#event_types-invoiceitem.deleted
     */
    const DELETED = 'stripe.webhook.invoiceitem.deleted';

    /**
     * Occurs whenever an invoice item is updated.
     *
     * @var string
     *
     * @see https://stripe.com/docs/api#event_types-invoiceitem.updated
     */
    const UPDATED = 'stripe.webhook.invoiceitem.updated';
}
