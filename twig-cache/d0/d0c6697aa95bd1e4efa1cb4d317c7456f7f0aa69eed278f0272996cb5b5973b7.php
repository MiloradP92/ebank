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
<div class=\"col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center osnovno-stanje\">
\t<p>Stanje na osnovnom računu</p>
\t<p style=\"font-size: 25px;\">";
        // line 27
        echo twig_escape_filter($this->env, ($context["stanje"] ?? null), "html", null, true);
        echo "<p>
\t<hr />
\t<p>RSD</p>
</div>

";
    }

    // line 34
    public function block_rightpanel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "
<div class=\"row h-100\">
\t<div class=\"h-25 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tran\">
\t\t<h5 class=\"tran-h5\">Transakcije (osnovni račun)</h5>
\t</div>
\t
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
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["transakcije"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 52
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "datum_transakcije", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "opis", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "iznos_transakcije", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t</tbody>
\t\t\t
\t\t</table>\t\t\t\t\t
\t</div>
</div>

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
        return array (  160 => 58,  151 => 55,  147 => 54,  143 => 53,  140 => 52,  136 => 51,  118 => 35,  114 => 34,  104 => 27,  99 => 24,  95 => 23,  86 => 19,  82 => 18,  78 => 16,  74 => 15,  66 => 10,  60 => 9,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Home/index.html", "C:\\xampp\\htdocs\\ebank_app\\views\\Home\\index.html");
    }
}
