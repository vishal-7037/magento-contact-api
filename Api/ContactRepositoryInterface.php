<?php

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Avendor\Contact\Api;

interface ContactRepositoryInterface
{
    /**
     * @param Data\ContactInterface $contact
     * @return mixed
     */
    public function save(Data\ContactInterface $contact);
}
