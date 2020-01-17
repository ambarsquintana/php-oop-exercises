<?php

namespace Styde;

class HtmlNode
{
    protected $tag;
    protected $content;
    protected $attributes = [];


    public function __construct($tag, $content = null, $attributes = [])
    {
        $this->tag = $tag;
        $this->content = $content;
        $this->attributes = $attributes;
    }


    public function render()
    {
        $result = "<{$this->tag} {$this->renderAttributes()}>";

        if (!is_null($this->content)) {

            $result .= $this->content;
            $result .= "</{$this->tag}>";
        }

        return $result;
    }


    protected function renderAttributes()
    {
        $result = '';

        foreach($this->attributes as $name => $value)
        {
            $result .= sprintf(' %s="%s"', $name, $value);
        }

        return $result;
    }

}