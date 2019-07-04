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

/* Racun/list.html */
class __TwigTemplate_dfbedd54d8424aef6ef038534f90afc908e123cdfc10929066d7f6e4752b2596 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Racun/list.html", 1);
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

    // line 21
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "
<div class=\"row col-md-8 offset-md-2 tek-rac\">
\t<select class=\"form-control tekuci-racuni\">
\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["racuni"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["racun"]) {
            // line 26
            echo "\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["racun"], "id_racuna", [], "any", false, false, false, 26), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["racun"], "broj_racuna", [], "any", false, false, false, 26), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["racun"], "valuta_racuna", [], "any", false, false, false, 26), "html", null, true);
            echo ")</option>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['racun'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
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
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["racuni"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "tip_racuna", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
\t\t\t\t<td id='tbl-valuta'>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["racuni"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "valuta_racuna", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
\t\t\t\t<td id='tbl-datum'>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["racuni"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "datum_kreacije", [], "any", false, false, false, 45), "html", null, true);
        echo "</td>
\t\t\t\t<td id='tbl-stanje'>";
        // line 46
        echo twig_escape_filter($this->env, ($context["stanje"] ?? null), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t</tbody>\t\t\t\t\t\t\t\t
\t</table>\t
</div>

";
    }

    // line 54
    public function block_rightpanel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "
<div class=\"row text-center tran\">
\t<h5 class=\"tran-h5\">Transakcije</h5>
</div>

<div class=\"row tbl-wrapper\">
\t<table id='tran-tbl' class=\"table tran-table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Datum</th>
\t\t\t\t<th>Opis</th>
\t\t\t\t<th>Iznos</th>
\t\t\t</th>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["transakcije"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 71
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "datum_transakcije", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "opis", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "iznos_transakcije", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t\t</tbody>
\t\t
\t</table>\t\t\t\t\t
</div>\t\t\t\t

";
    }

    public function getTemplateName()
    {
        return "Racun/list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 77,  195 => 74,  191 => 73,  187 => 72,  184 => 71,  180 => 70,  163 => 55,  159 => 54,  148 => 46,  144 => 45,  140 => 44,  136 => 43,  119 => 28,  106 => 26,  102 => 25,  97 => 22,  93 => 21,  84 => 17,  80 => 16,  76 => 14,  72 => 13,  65 => 9,  59 => 8,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Racun/list.html", "C:\\xampp\\htdocs\\ebank_app\\views\\Racun\\list.html");
    }
}
