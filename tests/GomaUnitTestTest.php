<?php

/**
 * Tests GomaUnitTest.
 *
 * @package goma/goma-test-core
 * @author		Goma-Team
 * @license		GNU Lesser General Public License, version 3; see "LICENSE.txt"
 * @copyright Goma-Team
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

    /**
     * Tests assertThrows method when exception is not thrown.
     */
    public function testAssertThrowsFalse() {
        try {
            $this->assertThrows(function () {
                $i = 1;
            }, LogicException::class);

            $this->fail("Fail!");
        } catch (Exception $e) {
            $this->assertInstanceOf(Exception::class, $e);
        }
    }

    /**
     * Assert null test for null.
     */
    public function testAssertNull() {
        $this->assertNull(null);
    }

    /**
     * Assert null if null is not null.
     */
    public function testAssertNullFail() {
        try {
            $this->assertNull(true);

            $this->fail("Fail.");
        } catch (Exception $e) {
            $this->assertInstanceOf(Exception::class, $e);
        }
    }

    /**
     * Tests valid code.
     */
    public function testValidateCode() {
        $this->assertSyntax('<?php $a = 1 + 1;');
    }
}
