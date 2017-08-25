<?php

/* index.html */
class __TwigTemplate_8e6472577cc4a4b38095a2a162c9a898737c7a24f5702fd436b64519b3629e81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Yee\">
    <title></title>
</head>

<body>
 ";
        // line 14
        echo twig_escape_filter($this->env, ($context["helo"] ?? null), "html", null, true);
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 14,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "/home/data/wwwroot/YeeSlim3/views/views/index.html");
    }
}
