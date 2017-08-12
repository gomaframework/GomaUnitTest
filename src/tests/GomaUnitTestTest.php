<?php

/**
 * Tests GomaUnitTest.
 *
 * @package goma/goma-test-core
 * @author		Goma-Team
 * @license		GNU Lesser General Public License, version 3; see "LICENSE.txt"
 * @copyright Ingenieurbüro Peter Gruber
 */
class GomaUnitTestTest extends GomaUnitTest
{
    /**
     * Tests assertThrows method when exception is correctly thrown.
     */
    public function testAssertThrowsTrue() {
        $this->assertThrows(function(){
            throw new LogicException("Stup!");
        }, LogicException::class);
    }
}
