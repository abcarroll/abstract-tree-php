<?php

namespace Ab\Tree;

interface ParentNode extends NodeList
{
    public function count(): int;

    public function children(): NodeList;

    public function firstChild(): ?Node;

    public function lastChild(): ?Node;

    public function append(...$nodes): ?Node;

    public function prepend(...$nodes): ?Node;
}
