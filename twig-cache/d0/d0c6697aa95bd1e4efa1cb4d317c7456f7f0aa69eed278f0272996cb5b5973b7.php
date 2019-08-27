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

/* Home/index.html */
class __TwigTemplate_bf9089b330b3307159796fcc810850916e5bd9a9120011366a074197b6e1deef extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Home/index.html", 1);
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
\t<div class=\"col-md-8\">
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
<div class=\"text-center osnovno-stanje\">
\t<p>Stanje na osnovnom računu</p>
\t<p style=\"font-size: 25px;\">";
        // line 25
        echo twig_escape_filter($this->env, ($context["stanje"] ?? null), "html", null, true);
        echo "<p>
\t<hr />
\t<p>RSD</p>
</div>

";
    }

    // line 32
    public function block_rightpanel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
<div class=\"row text-center tran\">
\t<h5 class=\"tran-h5\">Transakcije (osnovni račun)</h5>
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
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["transakcije"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 49
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "datum_transakcije", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "opis", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "iznos_transakcije", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t</tbody>
\t\t
\t</table>\t\t\t\t\t
</div>\t\t\t\t

";
    }

    public function getTemplateName()
    {
        return "Home/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 55,  148 => 52,  144 => 51,  140 => 50,  137 => 49,  133 => 48,  116 => 33,  112 => 32,  102 => 25,  97 => 22,  93 => 21,  84 => 17,  80 => 16,  76 => 14,  72 => 13,  65 => 9,  59 => 8,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Home/index.html", "C:\\xampp\\htdocs\\ebank_app\\views\\Home\\index.html");
    }
}
