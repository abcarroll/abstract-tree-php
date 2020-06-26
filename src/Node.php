<?php

namespace Ab\Tree;

/**
 * @property Node|null $parentNode
 */
interface Node
{
    /**
     * @return mixed
     */
    public function value();

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
