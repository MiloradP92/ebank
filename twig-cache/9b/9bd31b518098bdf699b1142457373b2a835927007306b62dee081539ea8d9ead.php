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
        echo "
<div class=\"row\">
\t<div class=\"col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3\">
\t\t<i class=\"fa fa-user-circle-o fa-3x\" aria-hidden=\"true\"></i>
\t</div>
\t<div class=\"col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9\">
\t\t<p>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ime", [], "any", false, false, false, 10), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "prezime", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
\t\t<p>Poslednji log in: ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "poslednji_log_in", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>\t
\t</div>
</div>
\t
";
    }

    // line 17
    public function block_basicinfo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "\t<div class=\"col-md-8 offset-md-5 basicinfo\">
\t\t<p>Osnovni tekući račun</p>
\t\t<p>";
        // line 20
        echo twig_escape_filter($this->env, ($context["osnovniracun"] ?? null), "html", null, true);
        echo "</p>
\t\t<p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ime", [], "any", false, false, false, 21), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "prezime", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
\t</div>
";
    }

    // line 25
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "
<div class=\"row col-md-8 offset-md-2 form-wrapper\">
\t<form id='prenos-frm' action='zapocni_prenos' method='post'>
\t\t<div class=\"form-group\">
\t\t\t<label>Račun na teret</label>
\t\t\t<select class=\"form-control\" name=\"target_racun\" id='target-racun'>
\t\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["racuni"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["racun"]) {
            // line 33
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["racun"], "id_racuna", [], "any", false, false, false, 33), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["racun"], "broj_racuna", [], "any", false, false, false, 33), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["racun"], "valuta_racuna", [], "any", false, false, false, 33), "html", null, true);
            echo ")</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['racun'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t</select>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label>Račun u korist</label>
\t\t\t<select class=\"form-control\" name=\"dest_racun\" id='dest-racun'>
\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["racuni"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["racun"]) {
            // line 41
            echo "\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["racun"], "id_racuna", [], "any", false, false, false, 41), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["racun"], "broj_racuna", [], "any", false, false, false, 41), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["racun"], "valuta_racuna", [], "any", false, false, false, 41), "html", null, true);
            echo ")</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['racun'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
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

    // line 56
    public function block_rightpanel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "
<div class=\"row text-center tran\">
\t<h5 class=\"tran-h5\">Arhiva prenosa</h5>
</div>

<div class=\"row tbl-wrapper\">
\t<table class=\"table tran-table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Datum</th>
\t\t\t\t<th>Sa računa</th>
\t\t\t\t<th>Na račun</th>
\t\t\t\t<th>Iznos</th>
\t\t\t</th>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["arhiva"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 74
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "datum_transakcije", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "sa_racuna", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "na_racun", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "iznos_transakcije", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "\t\t</tbody>\t\t\t\t\t\t\t\t
\t</table>\t\t\t\t\t
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
        return array (  215 => 81,  206 => 78,  202 => 77,  198 => 76,  194 => 75,  191 => 74,  187 => 73,  169 => 57,  165 => 56,  150 => 43,  137 => 41,  133 => 40,  126 => 35,  113 => 33,  109 => 32,  101 => 26,  97 => 25,  88 => 21,  84 => 20,  80 => 18,  76 => 17,  67 => 11,  61 => 10,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Racun/prenos.html", "C:\\xampp\\htdocs\\ebank_app\\views\\Racun\\prenos.html");
    }
}
