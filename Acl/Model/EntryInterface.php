<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Acl\Model;

/**
 * This class represents an individual entry in the ACL list.
 *
 * Instances MUST be immutable, as they are returned by the ACL and should not
 * allow client modification.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * @TODO re-extends \Serializable
 */
interface EntryInterface extends BaseEntryInterface
{
    /**
     * The primary key of this ACE
     *
     * @return integer
     */
    public function getId();

    /**
     * The ACL this ACE is associated with.
     *
     * @return AclInterface
     */
    public function getAcl();
}
