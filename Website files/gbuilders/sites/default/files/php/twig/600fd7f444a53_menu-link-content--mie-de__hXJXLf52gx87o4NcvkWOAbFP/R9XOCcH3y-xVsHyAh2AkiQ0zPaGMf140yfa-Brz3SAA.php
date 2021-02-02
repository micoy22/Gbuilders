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

/* modules/menu_item_extras/modules/mie_demo_base/templates/menu-link-content--mie-demo-base-menu--menu-level-0--default.html.twig */
class __TwigTemplate_27c7d5da153a50e68d2804673605b6bd526fe471dd9c50169e81d0a48064be4a extends \Twig\Template
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
        // line 14
        echo "
";
        // line 15
        $context["entityObject"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["elements"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["#menu_link_content"] ?? null) : null);
        // line 16
        $context["rendered_content"] = $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 16, $this->source), "field_body", "field_image");
        // line 17
        echo "
<div class=\"menu-item-teaser\">
  <h2>";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["entityObject"] ?? null), "getTitle", [], "method", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "</h2>
  ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "
  ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_body", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "
  ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(("Go to " . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["entityObject"] ?? null), "getTitle", [], "method", false, false, true, 22), 22, $this->source)), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["entityObject"] ?? null), "getUrlObject", [], "method", false, false, true, 22), 22, $this->source)), "html", null, true);
        echo "
</div>

<div class=\"menu-item-dropdown-content\">
  ";
        // line 26
        if (($context["rendered_content"] ?? null)) {
            // line 27
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rendered_content"] ?? null), 27, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 29
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/menu_item_extras/modules/mie_demo_base/templates/menu-link-content--mie-demo-base-menu--menu-level-0--default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 29,  71 => 27,  69 => 26,  62 => 22,  58 => 21,  54 => 20,  50 => 19,  46 => 17,  44 => 16,  42 => 15,  39 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/menu_item_extras/modules/mie_demo_base/templates/menu-link-content--mie-demo-base-menu--menu-level-0--default.html.twig", "C:\\xampp\\htdocs\\gbuilders\\modules\\menu_item_extras\\modules\\mie_demo_base\\templates\\menu-link-content--mie-demo-base-menu--menu-level-0--default.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 15, "if" => 26);
        static $filters = array("without" => 16, "escape" => 19);
        static $functions = array("link" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['without', 'escape'],
                ['link']
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
