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

/* Main/getLogin.html */
class __TwigTemplate_c5d2ef82431b8ebab5906acba77d57801be5fda5f0bd51a5d1b36547523d0d67 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Main/getLogin.html", 1);
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
        echo "<form action=\"login\" method=\"POST\">
\t<div>
\t\t<label for=\"input_email\">Email:</label>
\t\t<input type=\"email\" id=\"input_email\" name=\"login_email\" required placeholder=\"Unesite svoju adresu e-poste\">
\t</div>

\t<div>
\t\t<label for=\"input_lozinka\">Lozinka:</label>
\t\t<input type=\"password\" id=\"input_password\" name=\"login_password\" required placeholder=\"Unesite svoju lozinku\">\t\t
\t</div>
\t
\t<div>
\t\t<button type=\"submit\">
\t\t\tLogin
\t\t</button>
\t</div>
\t
</form>

";
    }

    public function getTemplateName()
    {
        return "Main/getLogin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  67 => 12,  61 => 9,  55 => 6,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/getLogin.html", "C:\\xampp\\htdocs\\ebank_app\\views\\Main\\getLogin.html");
    }
}
