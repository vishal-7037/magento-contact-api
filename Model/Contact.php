<?php

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Avendor\Contact\Model;

use Avendor\Contact\Api\Data\ContactInterface;
use Magento\Framework\Model\AbstractModel;

class Contact extends AbstractModel implements ContactInterface
{
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    public function getName()
    {
        return $this->getData(self::NAME);
    }

    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }

    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }

    public function setTelephone($telephone)
    {
        return $this->setData(self::TELEPHONE, $telephone);
    }

    public function getTelephone()
    {
        return $this->getData(self::TELEPHONE);
    }

    public function setComment($comment)
    {
        return $this->setData(self::COMMENT, $comment);
    }

    public function getComment()
    {
        return $this->getData(self::COMMENT);
    }
}
