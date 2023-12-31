<?php
/**
 * This class implements a Laravel Event for SPIDAuth Package.
 *
 * @license BSD-3-clause
 */

namespace App\Events;

use App\Models\SPIDUser;

class LogoutEvent
{
    /** The SPIDUser in the current event. */
    protected $SPIDUser;

    /** The current selected Identity Provider. */
    protected $idp;

    /**
     * Create a new event instance.
     *
     * @param SPIDUser current authenticated SPIDUser
     * @param string current selected Identity Provider
     */
    public function __construct(SPIDUser $SPIDUser, string $idp)
    {
        $this->SPIDUser = $SPIDUser;
        $this->idp = $idp;
    }

    /**
     * Return SPIDUser.
     *
     * @return SPIDUser SPIDUser logging out
     */
    public function getSPIDUser(): SPIDUser
    {
        return $this->SPIDUser;
    }

    /**
     * Return idp.
     *
     * @return string Identity Provider used to logout
     */
    public function getIdp(): string
    {
        return $this->idp;
    }
}
