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

/* Main/postLogin.html */
class __TwigTemplate_95ed62dedc7a85fa2cb5a56839e4167ce6a069dda4f5bcda3ab23a11eefbe11a extends \Twig\Template
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
            'rightpanel' => [$this, 'block_rightpanel'],
            'main' => [$this, 'block_main'],
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
        $this->parent = $this->loadTemplate("_global/index.html", "Main/postLogin.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_lastlogin($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 6
    public function block_basicinfo($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_rightpanel($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 12
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
<div>

\t<p>";
        // line 16
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "</p>
\t
\t<p>Kliknite <a href=\"/ebank_app/login\">ovde </a> da se vratite nazad </p>

</div>

";
    }

    public function getTemplateName()
    {
        return "Main/postLogin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 16,  71 => 13,  67 => 12,  61 => 9,  55 => 6,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/postLogin.html", "C:\\xampp\\htdocs\\ebank_app\\views\\Main\\postLogin.html");
    }
}
