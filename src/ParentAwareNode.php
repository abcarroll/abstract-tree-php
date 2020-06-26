<?php

namespace Ab\Tree;

/**
 * Interface ParentAwareNode
 * @package Ab\Tree
 */
interface ParentAwareNode
{
    /**
     * @return mixed
     */
    public function remove();

    /**
     * @param mixed ...$items
     * @return mixed
     */
    public function before(...$items);

    /**
     * @param mixed ...$items
     * @return mixed
     */
    public function after(...$items);

    /**
     * @param $node
     * @return mixed
     */
    public function replaceWith($node);
}
