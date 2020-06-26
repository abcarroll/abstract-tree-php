<?php

namespace Ab\Tree;

/**
 * Interface NodeList
 * @package Ab\Tree
 */
interface NodeList
{
    /**
     * @param callable $fn
     * @return mixed
     */
    public function each(callable $fn);

    /**
     * @return mixed
     */
    public function keys();

    /**
     * @return mixed
     */
    public function values();

    /**
     * @return mixed
     */
    public function entries();
}
