<?php

namespace Phalcon\Mvc\Collection;

/**
 * Phalcon\Mvc\Collection\BehaviorInterface
 * Interface for Phalcon\Mvc\Collection\Behavior
 */
interface BehaviorInterface
{

    /**
     * Phalcon\Mvc\Collection\Behavior
     *
     * @param array $options 
     */
    public function __construct($options = null);

    /**
     * This method receives the notifications from the EventsManager
     *
     * @param string $type 
     * @param mixed $collection 
     */
    public function notify($type, \Phalcon\Mvc\CollectionInterface $collection);

    /**
     * Calls a method when it's missing in the collection
     *
     * @param mixed $collection 
     * @param string $method 
     * @param mixed $arguments 
     */
    public function missingMethod(\Phalcon\Mvc\CollectionInterface $collection, $method, $arguments = null);

}
