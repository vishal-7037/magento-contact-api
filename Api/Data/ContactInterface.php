<?php

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Avendor\Contact\Api\Data;

interface ContactInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const NAME          = 'name';
    const EMAIL         = 'email';
    const TELEPHONE     = 'telephone';
    const COMMENT       = 'comment';

    /**
     * @param $name
     * @return mixed
     */
    public function setName($name);

    /**
     * @return mixed
     */
    public function getName();

    /**
     * @param $email
     * @return mixed
     */
    public function setEmail($email);

    /**
     * @return mixed
     */
    public function getEmail();

    /**
     * @param $telephone
     * @return mixed
     */
    public function setTelephone($telephone);

    /**
     * @return mixed
     */
    public function getTelephone();

    /**
     * @param $comment
     * @return mixed
     */
    public function setComment($comment);

    /**
     * @return mixed
     */
    public function getComment();
}
