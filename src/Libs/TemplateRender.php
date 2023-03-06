<?php

namespace Untek\Core\Text\Libs;

class TemplateRender
{

    protected $replacement = [];
    protected string $beginBlock = '{{';
    protected string $endBlock = '}}';


    public function addReplacement(string $placeholderName, string $value): void
    {
        $this->replacement[$placeholderName] = $value;
    }
}
