<?php

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Avendor\Contact\Model;

use Avendor\Contact\Api\ContactRepositoryInterface;
use Avendor\Contact\Api\Data;
use Magento\Contact\Model\MailInterface;
use Magento\Framework\Exception\LocalizedException;

class ContactRepository implements ContactRepositoryInterface
{
    /**
     * @var MailInterface
     */
    private $mail;

    /**
     * ContactRepository constructor.
     * @param MailInterface $mail
     */
    public function __construct(
        MailInterface $mail
    ) {
        $this->mail = $mail;
    }

    /**
     * @param Data\ContactInterface $contact
     * @return mixed|void
     * @throws LocalizedException
     */
    public function save(Data\ContactInterface $contact)
    {
        $this->sendEmail($this->validatedParams($contact));
    }

    /**
     * @param Data\ContactInterface $contact
     */
    private function sendEmail($contact)
    {
        $this->mail->send(
            $contact->getEmail(),
            ['data' => new \Magento\Framework\DataObject($contact->getData())]
        );
    }

    /**
     * @param Data\ContactInterface $contact
     * @return mixed
     * @throws LocalizedException
     */
    private function validatedParams($contact)
    {
        if (trim($contact->getName()) === '') {
            throw new LocalizedException(__('Enter the Name and try again.'));
        }
        if (trim($contact->getComment()) === '') {
            throw new LocalizedException(__('Enter the comment and try again.'));
        }
        if (false === \strpos($contact->getEmail(), '@')) {
            throw new LocalizedException(__('The email address is invalid. Verify the email address and try again.'));
        }

        return $contact;
    }
}
