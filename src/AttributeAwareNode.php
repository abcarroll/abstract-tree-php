<?php

namespace Ab\Tree;

/**
 * A given node is aware of attributes.
 */
interface AttributeAwareNode
{
    /**
     * @param string $name
     * @return mixed
     */
    public function getAttrByName(string $name);

    /**
     * @param string $name
     * @param $value
     * @return mixed
     */
    public function setAttrByName(string $name, $value);

    /**
     * @param string $name
     * @return mixed
     */
    public function removeAttrByName(string $name);

    /**
     * @param int $index
     * @return mixed
     */
    public function getAttrByIndex(int $index);

    /**
     * All attribute keys as an array
     * @return iterable|array
     */
    public function attrKeys();

    /**
     * @return mixed
     */
    public function attrValues();

    /**
     * @return mixed
     */
    public function attrEntries();
}
