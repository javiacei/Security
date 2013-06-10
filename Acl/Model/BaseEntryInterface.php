<?php

namespace Symfony\Component\Security\Acl\Model;

/**
 * This class represents an individual entry in the ACL list.
 *
 * Instances must be immutable.
 *
 * This is decoupled from DBAL and file serialization.
 *
 * @author Charles Bouchard-Légaré <cblegare@idealtechnology.net>
 */
interface BaseEntryInterface
{
    /**
     * The ACL this ACE is associated with.
     * 
     * @return AclInterface
     */
    public function getAcl();

    /**
     * The permission mask of this ACE
     *
     * @return integer
     */
    public function getMask();

    /**
     * The security identity associated with this ACE
     *
     * @return SecurityIdentityInterface
     */
    public function getSecurityIdentity();

    /**
     * The strategy for comparing masks
     *
     * @return string
     */
    public function getStrategy();

    /**
     * Returns whether this ACE is granting, or denying
     *
     * @return Boolean
     */
    public function isGranting();
}
