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

/* Racun/zapocniPrenos.html */
class __TwigTemplate_317565726fa0e8a73e7f1c727e6beebf6cc3e860f43130e07356d774ee1b0e98 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'lastlogin' => [$this, 'block_lastlogin'],
            'basicinfo' => [$this, 'block_basicinfo'],
            'main' => [$this, 'block_main'],
            'rightpanel' => [$this, 'block_rightpanel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_global/index.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("_global/index.html", "Racun/zapocniPrenos.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_lastlogin($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<div class=\"col-md-2\">
\t\t<i class=\"fa fa-user-circle-o fa-3x\" aria-hidden=\"true\"></i>
\t</div>
\t<div class=\"col-md-10\">
\t\t<p>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ime", [], "any", false, false, false, 8), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "prezime", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>
\t\t<p>Poslednji Log In: ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "poslednji_log_in", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
\t</div>
";
    }

    // line 13
    public function block_basicinfo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "\t<div class=\"col-md-8 offset-md-5\" style=\"line-height:.5; color:#f2f2f2; padding-top: 20px\">
\t\t<p>Osnovni tekuci racun</p>
\t\t<p>";
        // line 16
        echo twig_escape_filter($this->env, ($context["osnovniracun"] ?? null), "html", null, true);
        echo "</p>
\t\t<p>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ime", [], "any", false, false, false, 17), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "prezime", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
\t</div>
";
    }

    // line 21
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "
<div class=\"row col-md-8 offset-md-2\" style=\"margin-top:20px\">
\t<h2>";
        // line 24
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "</h2>
</div>


";
    }

    // line 30
    public function block_rightpanel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "
<div class=\"row text-center\" style=\"margin-bottom: 10px; background-color: #993399; color:white;\">
\t<h5 style=\"padding-left: 5px\">Arhiva prenosa</h5>
</div>

<div class=\"row\" style=\"background-color: #993399; height: 358px;\">
\t<table class=\"table\" style=\"font-size: 10px; color:white\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Datum</th>
\t\t\t\t<th>Sa racuna</th>
\t\t\t\t<th>Na racun</th>
\t\t\t\t<th>Iznos</th>
\t\t\t</th>
\t\t</thead>
\t\t<tbody>
\t\t</tbody>\t\t\t\t\t\t\t\t
\t</table>\t\t\t\t\t
</div>
";
    }

    public function getTemplateName()
    {
        return "Racun/zapocniPrenos.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 31,  110 => 30,  101 => 24,  97 => 22,  93 => 21,  84 => 17,  80 => 16,  76 => 14,  72 => 13,  65 => 9,  59 => 8,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Racun/zapocniPrenos.html", "C:\\xampp\\htdocs\\ebank_app\\views\\Racun\\zapocniPrenos.html");
    }
}
