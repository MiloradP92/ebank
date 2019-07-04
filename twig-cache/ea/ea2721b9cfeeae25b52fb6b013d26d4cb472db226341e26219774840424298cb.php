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

/* Main/nalog.html */
class __TwigTemplate_aa845f96868ded84184540d94db24bb998ce33f6cea13e2eedebe5fbd3393e9f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Main/nalog.html", 1);
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
        echo "\t<div class=\"col-md-8 offset-md-5 basicinfo\">
\t\t<p>Osnovni tekući račun</p>
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

    // line 22
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "
<div class=\"text-center pic-wrapper\">
\t<i class=\"fa fa-user-circle-o fa-5x\" aria-hidden=\"true\"></i>
\t<div style=\"margin-top:20px\"><button type=\"button\" class=\"btn btn-primary\">Promenite sliku</button></div>
</div>

";
    }

    // line 31
    public function block_rightpanel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "
<div class=\"row text-center tran\">
\t<h5 class=\"tran-h5\">Osnovni podaci</h5>
</div>

<div class=\"row tbl-wrapper\">
\t<table class=\"table tran-table\">
\t\t<thead>
\t\t\t<tr hidden>
\t\t\t\t<th>Atribut</th>
\t\t\t\t<th>Vrednost</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td>Ime</td>
\t\t\t\t<td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ime", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>Prezime</td>
\t\t\t\t<td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "prezime", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>Email</td>
\t\t\t\t<td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>Broj telefona</td>
\t\t\t\t<td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "telefon", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t</tbody>
\t\t
\t</table>\t\t\t\t\t
</div>

";
    }

    public function getTemplateName()
    {
        return "Main/nalog.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 60,  143 => 56,  136 => 52,  129 => 48,  111 => 32,  107 => 31,  97 => 23,  93 => 22,  84 => 17,  80 => 16,  76 => 14,  72 => 13,  65 => 9,  59 => 8,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/nalog.html", "C:\\xampp\\htdocs\\ebank_app\\views\\Main\\nalog.html");
    }
}
