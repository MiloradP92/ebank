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

/* Racun/prenos.html */
class __TwigTemplate_a61749177d71f639eef74c72f0aad64dfc4b49c3a4b46adbec46b40bda83190b extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Racun/prenos.html", 1);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "poslednji_log_in_at", [], "any", false, false, false, 10), "html", null, true);
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
<div class=\"row col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 offset-1 offset-sm-1 offset-md-2 offset-lg-2 offset-xl-2 form-wrapper\">
\t<form id='prenos-frm' action='zapocni_prenos' method='post'>
\t\t<div class=\"form-group\">
\t\t\t<label>Račun na teret</label>
\t\t\t<select class=\"form-control\" name=\"target_racun\" id='target-racun'>
\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["racuni"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["racun"]) {
            // line 31
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["racun"], "id_racuna", [], "any", false, false, false, 31), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["racun"], "broj_racuna", [], "any", false, false, false, 31), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["racun"], "valuta_racuna", [], "any", false, false, false, 31), "html", null, true);
            echo ")</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['racun'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t\t</select>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label>Račun u korist</label>
\t\t\t<select class=\"form-control\" name=\"dest_racun\" id='dest-racun'>
\t\t\t\t";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["racuni"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["racun"]) {
            // line 39
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["racun"], "id_racuna", [], "any", false, false, false, 39), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["racun"], "broj_racuna", [], "any", false, false, false, 39), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["racun"], "valuta_racuna", [], "any", false, false, false, 39), "html", null, true);
            echo ")</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['racun'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t\t</select>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label>Iznos za prenos</label>
\t\t\t<input type=\"number\" class=\"form-control\" name=\"suma\" id=\"suma\" />
\t\t</div>
\t\t<button type=\"submit\" class=\"btn btn-primary\">Započni prenos</button>
\t</form>
</div>


";
    }

    // line 54
    public function block_rightpanel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "
<div class=\"row h-100\">
\t<div class=\"h-25 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tran\">
\t\t<h5 class=\"tran-h5\">Arhiva prenosa</h5>
\t</div>
\t
\t<div class=\"h-75 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tbl-wrapper\">
\t\t<table class=\"table tran-table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Datum</th>
\t\t\t\t\t<th>Sa računa</th>
\t\t\t\t\t<th>Na račun</th>
\t\t\t\t\t<th>Iznos</th>
\t\t\t\t</th>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["arhiva"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 73
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "datum_transakcije_at", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "sa_racuna", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "na_racun", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "iznos_transakcije", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "\t\t\t</tbody>\t\t\t\t\t\t\t\t
\t\t</table>\t\t\t\t\t
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "Racun/prenos.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 80,  205 => 77,  201 => 76,  197 => 75,  193 => 74,  190 => 73,  186 => 72,  167 => 55,  163 => 54,  148 => 41,  135 => 39,  131 => 38,  124 => 33,  111 => 31,  107 => 30,  99 => 24,  95 => 23,  86 => 19,  82 => 18,  78 => 16,  74 => 15,  66 => 10,  60 => 9,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Racun/prenos.html", "C:\\xampp\\htdocs\\ebank_app\\views\\Racun\\prenos.html");
    }
}
