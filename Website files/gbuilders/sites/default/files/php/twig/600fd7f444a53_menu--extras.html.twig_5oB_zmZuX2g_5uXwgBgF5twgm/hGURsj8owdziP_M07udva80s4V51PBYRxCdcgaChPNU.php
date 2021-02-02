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

/* modules/menu_item_extras/modules/mie_demo_base/templates/menu--extras.html.twig */
class __TwigTemplate_43edc85d590684da0aa02f89e2f747f863eb0e8af228fe4f2c5a28b4773dcbca extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 23
        return "menu-levels.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        $context["elements"] = ($context["items"] ?? null);
        // line 23
        $this->parent = $this->loadTemplate("menu-levels.html.twig", "modules/menu_item_extras/modules/mie_demo_base/templates/menu--extras.html.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "modules/menu_item_extras/modules/mie_demo_base/templates/menu--extras.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 23,  43 => 24,  36 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/menu_item_extras/modules/mie_demo_base/templates/menu--extras.html.twig", "C:\\xampp\\htdocs\\gbuilders\\modules\\menu_item_extras\\modules\\mie_demo_base\\templates\\menu--extras.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 24);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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
