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
        echo "<form class=\"form-horizontal\" action=\"login\" method=\"POST\">
\t<div class=\"form-group\">
\t\t<label for=\"input_email\">Email:</label>
\t\t<input class=\"form-control\" type=\"email\" id=\"input_email\" name=\"login_email\" required
\t\tplaceholder=\"Unesite svoju adresu e-poste\" pattern=\"[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,4}\$\"
\t\ttitle=\"Uneta e-mail adresa nije u validnom formatu!\">
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"input_password\">Lozinka:</label>
\t\t<input class=\"form-control\" type=\"password\" id=\"input_password\" name=\"login_password\" required placeholder=\"Unesite svoju lozinku\">\t\t
\t</div>
\t
\t<button class=\"btn btn-primary\" type=\"submit\">
\t\tLogin
\t</button>
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
