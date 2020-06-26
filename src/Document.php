<?php

namespace Ab\Tree;

/**
 * Interface Document
 * @package Ab\Tree
 */
interface Document extends ParentNode, Node
{
    /**
     * @return mixed
     */
    public function getContentType();

    /**
     * @return mixed
     */
    public function getCharacterSet();
}
