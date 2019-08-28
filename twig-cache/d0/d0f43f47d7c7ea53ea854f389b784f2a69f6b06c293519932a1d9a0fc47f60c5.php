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

/* Racun/listaRacuna.html */
class __TwigTemplate_d57fa750498dd3e903c0bda80bc1de21af1a4e450c21f3088fb6e57612f15adf extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Racun/listaRacuna.html", 1);
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
<div class=\"row col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 offset-1 offset-sm-1 offset-md-2 offset-lg-2 offset-xl-2 tek-rac\">
\t<select class=\"form-control tekuci-racuni\">
\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["racuni"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["racun"]) {
            // line 28
            echo "\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["racun"], "id_racuna", [], "any", false, false, false, 28), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["racun"], "broj_racuna", [], "any", false, false, false, 28), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["racun"], "valuta_racuna", [], "any", false, false, false, 28), "html", null, true);
            echo ")</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['racun'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t</select>
</div>\t\t\t\t\t

<div class=\"row racuni-tbl-wrapper\">
\t<table class=\"table racuni-tbl\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Tip računa</th>
\t\t\t\t<th>Valuta računa</th>
\t\t\t\t<th>Datum otvaranja</th>
\t\t\t\t<th>Trenutno stanje</th>
\t\t\t</th>
\t\t</thead>
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td id='tbl-tip'>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["racuni"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "tip_racuna", [], "any", false, false, false, 45), "html", null, true);
        echo "</td>
\t\t\t\t<td id='tbl-valuta'>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["racuni"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "valuta_racuna", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
\t\t\t\t<td id='tbl-datum'>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["racuni"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "datum_kreacije", [], "any", false, false, false, 47), "html", null, true);
        echo "</td>
\t\t\t\t<td id='tbl-stanje'>";
        // line 48
        echo twig_escape_filter($this->env, ($context["stanje"] ?? null), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t</tbody>\t\t\t\t\t\t\t\t
\t</table>\t
</div>

";
    }

    // line 56
    public function block_rightpanel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "
<div class=\"row\">
\t<div class=\"h-25 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">
\t\t<h5 class=\"tran-h5\">Transakcije</h5>
\t</div>
\t<div class=\"h-75 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tbl-wrapper\">
\t\t<table id='tran-tbl' class=\"table tran-table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Datum</th>
\t\t\t\t\t<th>Opis</th>
\t\t\t\t\t<th>Iznos</th>
\t\t\t\t</th>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["transakcije"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 73
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "datum_transakcije_at", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "opis", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "iznos_transakcije", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "\t\t\t</tbody>
\t\t\t
\t\t</table>\t\t\t\t\t
\t</div>\t
</div>
\t\t\t

";
    }

    public function getTemplateName()
    {
        return "Racun/listaRacuna.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 79,  197 => 76,  193 => 75,  189 => 74,  186 => 73,  182 => 72,  165 => 57,  161 => 56,  150 => 48,  146 => 47,  142 => 46,  138 => 45,  121 => 30,  108 => 28,  104 => 27,  99 => 24,  95 => 23,  86 => 19,  82 => 18,  78 => 16,  74 => 15,  66 => 10,  60 => 9,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Racun/listaRacuna.html", "C:\\xampp\\htdocs\\ebank_app\\views\\Racun\\listaRacuna.html");
    }
}
