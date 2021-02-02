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

/* modules/menu_item_extras/templates/menu--extras.html.twig */
class __TwigTemplate_9adbb3612c9031595c9e0efc47b9e1acd10eb163e302bfed5e501530a0388e57 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "
";
        // line 23
        $macros["menu"] = $this->macros["menu"] = $this->loadTemplate("menu-levels.html.twig", "modules/menu_item_extras/templates/menu--extras.html.twig", 23)->unwrap();
        // line 24
        echo "
";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menu"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 25, $context, $this->getSourceContext()));
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/menu_item_extras/templates/menu--extras.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 25,  44 => 24,  42 => 23,  39 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/menu_item_extras/templates/menu--extras.html.twig", "C:\\xampp\\htdocs\\gbuilders\\modules\\menu_item_extras\\templates\\menu--extras.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
