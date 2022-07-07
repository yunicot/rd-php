<?php

class Node
{
    public function __construct(
        private int $data,
        private ?Node $left = null,
        private ?Node $right = null,
        private int $height = 1,
    ) {
    }

    public function insert(int $data): self
    {
        if ($data < $this->data) {
            if ($this->getLeft() === null) {
                $this->setLeft(new static($data));
            } else {
                $this->getLeft()->insert($data);
            }
        } else {
            if ($this->getRight() === null) {
                $this->setRight(new static($data));
            } else {
                $this->getRight()->insert($data);
            }
        }

        return $this->balance();
    }

    private function getData(): int
    {
        return $this->data;
    }

    private function getLeft(): ?Node
    {
        return $this->left;
    }

    private function setLeft(?Node $left): Node
    {
        $this->left = $left;

        return $this;
    }

    private function getRight(): ?Node
    {
        return $this->right;
    }

    private function setRight(?Node $right): Node
    {
        $this->right = $right;

        return $this;
    }

    private function getHeight(): int
    {
        return $this->height;
    }

    private function setHeight(int $height): Node
    {
        $this->height = $height;

        return $this;
    }

    private function bFactor(): int
    {
        return $this->right?->getHeight() - $this->left?->getHeight();
    }

    private function fixHeight(): void
    {
        $hl = $this->left?->getHeight() ?? 0;
        $hr = $this->right?->getHeight() ?? 0;
        $this->height = (max($hl, $hr)) + 1;
    }

    private function rotateRight(): Node
    {
        $l = $this->getLeft();
        $this->setLeft($l->getRight());
        $l->setRight($this);
        $l->fixHeight();
        $this->fixHeight();

        return $l;
    }

    private function rotateLeft(): Node
    {
        $p = $this->getRight();
        $this->setRight($p->getLeft());
        $p->setLeft($this);
        $p->fixHeight();
        $this->fixHeight();

        return $p;
    }

    private function balance(): Node
    {
        $this->fixHeight();
        if ($this->bFactor() >= 2) {
            if ($this->getRight() !== null && $this->getRight()->bFactor() < 0) {
                $this->setRight($this->getRight()->rotateRight());
            }
            return $this->rotateLeft();
        }

        if ($this->bFactor() <= -2) {
            if ($this->getLeft() !== null && $this->getLeft()->bFactor() > 0) {
                $this->setLeft($this->getLeft()->rotateLeft());
            }
            return $this->rotateRight();
        }

        return $this;
    }
}