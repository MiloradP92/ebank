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
        echo "<!DOCTYPE html>
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
\t\t\t\t<div class=\"col-11 col-sm-10 col-md-10 col-lg-10 col-xl-10 info-bar-inner text-center\">
\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t<div class=\"col-11 col-sm-10 col-md-8 col-lg-8 col-xl-8 offset-1 offset-sm-2 offset-md-3 offset-lg-3 offset-xl-3\">
\t\t\t\t\t\t\t";
        // line 21
        $this->displayBlock('lastlogin', $context, $blocks);
        // line 23
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-1 col-sm-2 col-md-2 col-lg-2 col-xl-2 sign-out\">
\t\t\t\t\t<div class=\"pull-right\"><a id=\"log-out-lnk\" href=\"logout\"><i class=\"fa fa-power-off fa-3x\" aria-hidden=\"true\"></i></a></div>
\t\t\t\t</div>
\t\t\t</div>\t\t\t
\t\t\t<div class=\"row up-banner\">
\t\t\t\t";
        // line 31
        $this->displayBlock('basicinfo', $context, $blocks);
        // line 33
        echo "\t\t\t</div>
\t\t\t<div class=\"row menu-container\">
\t\t\t\t<div class=\"h-100 col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 left-menu\">
\t\t\t\t\t<ul style=\"list-style-type: none\">
\t\t\t\t\t\t<li><a href=\"ebank_app\">Stanje</a></li>
\t\t\t\t\t\t<li><a href=\"listaRacuna\">Pregled Računa</a></li>
\t\t\t\t\t\t<li><a href=\"prenos\">Prenos sredstava</a></li>
\t\t\t\t\t\t<li><a href=\"nalog\">Nalog</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"h-100 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 middle-space\">\t\t\t\t\t
\t\t\t\t\t";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 46
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"h-100 col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 wrapper\">
\t\t\t\t\t<div class=\"row h-100\">\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"h-100 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 right-menu\">\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 50
        $this->displayBlock('rightpanel', $context, $blocks);
        // line 51
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row footer\">
\t\t\t\t<div class=\"h-100 col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6 offset-1 offset-sm-2 offset-md-4 offset-lg-5 offset-xl-5 social\">
\t\t\t\t\t<span class=\"ftr-brand\"><a href=\"www.facebook.com\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></span>
\t\t\t\t\t<span class=\"ftr-brand\"><a href=\"www.twitter.com\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></span>
\t\t\t\t\t<span class=\"ftr-brand\"><a href=\"www.linkedin.com\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></span>
\t\t\t\t\t<span class=\"ftr-brand\"><a href=\"www.youtube.com\"><i class=\"fa fa-youtube-play\" aria-hidden=\"true\"></i></a></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t\t\t\t\t\t\t
\t</body>

</html>";
    }

    // line 21
    public function block_lastlogin($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "\t\t\t\t\t\t\t";
    }

    // line 31
    public function block_basicinfo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "\t\t\t\t";
    }

    // line 44
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "\t\t\t\t\t";
    }

    // line 50
    public function block_rightpanel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "\t\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "_global/index.html";
    }

    public function getDebugInfo()
    {
        return array (  148 => 51,  144 => 50,  140 => 45,  136 => 44,  132 => 32,  128 => 31,  124 => 22,  120 => 21,  100 => 51,  98 => 50,  92 => 46,  90 => 44,  77 => 33,  75 => 31,  65 => 23,  63 => 21,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_global/index.html", "C:\\xampp\\htdocs\\ebank_app\\views\\_global\\index.html");
    }
}
