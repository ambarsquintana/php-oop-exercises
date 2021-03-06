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


    public function getAttributes($name)
    {
        return $this->attributes[$name] ?? null;
    }


    //Methods
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


    //Magic methods
    public function __call($method, array $args = [])
    {
        if (!isset($args[0])) {
            throw new \Exception("You forgot to pass the value to the attribute {$method}");
        }

        $this->attributes[$method] = $args[0];
        return $this;
    }


    public static function __callStatic($method, array $args = [])
    {
        $content = $args[0] ?? null;
        
        $attributes = $args[1] ?? [];

        return new HtmlNode($method, $content, $attributes);
    }


    public function __toString()
    {
        return $this->render();
    }


    public function __invoke($name)
    {
        return $this->getAttributes($name);
    }

}