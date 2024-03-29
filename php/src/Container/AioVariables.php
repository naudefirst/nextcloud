<?php

namespace AIO\Container;

class AioVariables {
    /** @var string[] */
    private array $variables = [];

    public function AddVariable(string $variable) : void {
        $this->variables[] = $variable;
    }

    /**
     * @return string[]
     */
    public function GetVariables() : array {
        return $this->variables;
    }
}
