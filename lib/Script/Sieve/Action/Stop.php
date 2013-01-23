<?php
/**
 * The Ingo_Script_Sieve_Action_Stop class represents a stop action.
 *
 * Copyright 2012-2013 Horde LLC (http://www.horde.org/)
 *
 * See the enclosed file LICENSE for license information (ASL).  If you
 * did not receive this file, see http://www.horde.org/licenses/apache.
 *
 * @author   Mike Cochrane <mike@graftonhall.co.nz>
 * @author   Jan Schneider <jan@horde.org>
 * @category Horde
 * @license  http://www.horde.org/licenses/apache ASL
 * @package  Ingo
 */
class Ingo_Script_Sieve_Action_Stop extends Ingo_Script_Sieve_Action
{
    /**
     * Returns a script snippet representing this rule and any sub-rules.
     *
     * @return string  A Sieve script snippet.
     */
    public function generate()
    {
        return 'stop;';
    }

    /**
     * Checks if the rule parameters are valid.
     *
     * @return boolean|string  True if this rule is valid, an error message
     *                         otherwise.
     */
    public function check()
    {
        return true;
    }
}
