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

/* Nalog/index.html */
class __TwigTemplate_ba9657159c187c87c8afa10e45c8e81a0052b8d7369ae30e0bfd5d8bd37e6188 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Nalog/index.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_lastlogin($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<div class=\"row\">
\t\t<div class=\"col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3\">
\t\t\t<i class=\"fa fa-user-circle-o fa-3x\" aria-hidden=\"true\"></i>
\t\t</div>
\t\t<div class=\"col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9\">
\t\t\t<p>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ime", [], "any", false, false, false, 9), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "prezime", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
\t\t\t<p>Poslednji log in: ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "poslednji_log_in", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>\t
\t\t</div>
\t</div>
";
    }

    // line 15
    public function block_basicinfo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "\t<div class=\"col-12 col-sm-11 col-md-8 col-lg-8 col-xl-12 offset-1 offset-sm-1 offset-md-5 offset-lg-5 offset-xl-5 basicinfo\">
\t\t<p>Osnovni tekući račun</p>
\t\t<p>";
        // line 18
        echo twig_escape_filter($this->env, ($context["osnovniracun"] ?? null), "html", null, true);
        echo "</p>
\t\t<p>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ime", [], "any", false, false, false, 19), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "prezime", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>
\t</div>
";
    }

    // line 23
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "
<div class=\"text-center pic-wrapper\">
\t<i class=\"fa fa-user-circle-o fa-5x\" aria-hidden=\"true\"></i>
\t<div style=\"margin-top:20px\"><button type=\"button\" class=\"btn btn-primary\">Promenite sliku</button></div>
</div>

";
    }

    // line 32
    public function block_rightpanel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
<div class=\"row h-100\">
\t<div class=\"h-25 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tran\">
\t\t<h5 class=\"tran-h5\">Osnovni podaci</h5>
\t</div>
\t
\t<div class=\"h-75 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tbl-wrapper\">
\t\t<table class=\"table tran-table\">
\t\t\t<thead>
\t\t\t\t<tr hidden>
\t\t\t\t\t<th>Atribut</th>
\t\t\t\t\t<th>Vrednost</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>Ime</td>
\t\t\t\t\t<td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ime", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Prezime</td>
\t\t\t\t\t<td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "prezime", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Email</td>
\t\t\t\t\t<td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Broj telefona</td>
\t\t\t\t\t<td>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "telefon", [], "any", false, false, false, 62), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t\t
\t\t</table>\t\t\t\t\t
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "Nalog/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 62,  146 => 58,  139 => 54,  132 => 50,  113 => 33,  109 => 32,  99 => 24,  95 => 23,  86 => 19,  82 => 18,  78 => 16,  74 => 15,  66 => 10,  60 => 9,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Nalog/index.html", "C:\\xampp\\htdocs\\ebank_app\\views\\Nalog\\index.html");
    }
}
