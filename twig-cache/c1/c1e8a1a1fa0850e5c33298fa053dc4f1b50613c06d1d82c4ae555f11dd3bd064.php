<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* _global/index.html */
class __TwigTemplate_73b66a9a321e4d53fa1b74352f2cdc178dc88c70f7c0cde055c87bb7a55ef6ed extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'lastlogin' => [$this, 'block_lastlogin'],
            'basicinfo' => [$this, 'block_basicinfo'],
            'main' => [$this, 'block_main'],
            'rightpanel' => [$this, 'block_rightpanel'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html>

\t<head>
\t\t<title>EBank Aplikacija</title>
\t\t<link rel=\"stylesheet\" 
\t\t\thref=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"frontend/javascript/main.js\"></script>
\t\t<link rel=\"stylesheet\" href=\"frontend/css/main.css\">
\t\t<meta charset=\"utf-8\">
\t</head>
\t
\t<body>\t
\t\t<div class=\"container\">
\t\t\t<div class=\"row info-bar\">
\t\t\t\t<div class=\"col-md-8 offset-md-4 info-bar-inner\">
\t\t\t\t\t<div class=\"row col-md-8\">
\t\t\t\t\t\t";
        // line 20
        $this->displayBlock('lastlogin', $context, $blocks);
        // line 22
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t\t\t
\t\t\t<div class=\"row up-banner\">
\t\t\t\t";
        // line 26
        $this->displayBlock('basicinfo', $context, $blocks);
        // line 28
        echo "\t\t\t</div>
\t\t\t<div class=\"row menu-container\">
\t\t\t\t<div class=\"col-md-3 left-menu\">
\t\t\t\t\t<ul style=\"list-style-type: none\">
\t\t\t\t\t\t<li><a href=\"/ebank_app/\">Stanje</a></li>
\t\t\t\t\t\t<li><a href=\"pregled_racuna\">Pregled Računa</a></li>
\t\t\t\t\t\t<li><a href=\"prenos\">Prenos sredstava</a></li>
\t\t\t\t\t\t<li><a href=\"nalog\">Nalog</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 middle-space center-box\">
\t\t\t\t\t";
        // line 39
        $this->displayBlock('main', $context, $blocks);
        // line 41
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 wrapper\">
\t\t\t\t\t<div class=\"right-menu\">
\t\t\t\t\t\t";
        // line 44
        $this->displayBlock('rightpanel', $context, $blocks);
        // line 45
        echo "\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row fotter\">
\t\t\t\t<div class=\"col-md-6 offset-md-5 social\">
\t\t\t\t\t<span class=\"ftr-brand\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t<span class=\"ftr-brand\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t<span class=\"ftr-brand\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t<span class=\"ftr-brand\"><i class=\"fa fa-youtube-play\" aria-hidden=\"true\"></i></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t\t\t\t\t\t\t
\t</body>

</html>";
    }

    // line 20
    public function block_lastlogin($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "\t\t\t\t\t\t";
    }

    // line 26
    public function block_basicinfo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "\t\t\t\t";
    }

    // line 39
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "\t\t\t\t\t";
    }

    // line 44
    public function block_rightpanel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "_global/index.html";
    }

    public function getDebugInfo()
    {
        return array (  141 => 45,  137 => 44,  133 => 40,  129 => 39,  125 => 27,  121 => 26,  117 => 21,  113 => 20,  94 => 45,  92 => 44,  87 => 41,  85 => 39,  72 => 28,  70 => 26,  64 => 22,  62 => 20,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_global/index.html", "C:\\xampp\\htdocs\\ebank_app\\views\\_global\\index.html");
    }
}
