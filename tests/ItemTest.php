<?php

namespace Cart\Tests;

use Cart\Item;

class ItemTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function createItem() {
        $item = new Item('123');

        // Is an Item
        $this->assertInstanceOf('Cart\Item', $item);

        // Check Properties
        foreach (['id'] as $property) {
            $this->assertObjectHasAttribute($property, $item);
        }

        // Check methods
        foreach (['id'] as $method) {
            $this->assertTrue(
                method_exists($item, $method),
                'Cart Item does not have method "' . $method . '"'
            );
        }
    }

    /** @test */
    public function itemPropertiesReturnsAnArray()
    {
        $item = new Item(uniqid());

        $this->assertTrue(
            is_array($item->properties()),
            'Cart Item properties does not return an array'
        );
    }
}