<?php

class LinkedList
{
    private ?Node $first = null;

    public function insert(mixed $data, ?Node $after = null): self
    {
        if ($after === null) {
            // 2 -> 3 -> 13 -> 5 -> 10 -> 15
            $this->first = new Node($data, $this->first);
        } else {
            $after->setNext(new Node($data, $after->getNext()));
        }

        return $this;
    }

    public function delete(Node $node): self
    {
        if ($this->first === null) {
            return $this;
        }

        // 2 -> 3 -> 5 -> 10 -> 15
        if ($this->first === $node) {
            $this->first = $node->getNext();
        }

        // search prev
        $prev = $this->first;
        while ($prev->getNext() !== $node && $prev->getNext() !== null) {
            $prev = $prev->getNext();
        }

        if ($prev->getNext() === $node) {
            $prev->setNext($node->getNext());
        }

        return $this;
    }

    public function search(mixed $data): ?Node
    {
        $current = $this->first;
        if ($current === null) {
            return null;
        }

        while ($current->getNext() !== null) {
            if ($current->getData() === $data) {
                return $current;
            }

            $current = $current->getNext();
        }

        return null;
    }

    public function print(): void
    {
        $datas = [];
        $current = $this->first;
        while ($current !== null) {
            $datas[] = $current->getData();
            $current = $current->getNext();
        }

        echo implode(' -> ', $datas) . "\n";
    }
}