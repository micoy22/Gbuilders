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

/* modules/menu_item_extras/modules/mie_demo_base/templates/menu-link-content--mie-demo-base-menu--menu-level-0--terms.html.twig */
class __TwigTemplate_3da4320f900d0f2400d102854e6545828043361a0a177a99b08fccf2fb82a27e extends \Twig\Template
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
        // line 16
        $context["entityObject"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["elements"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["#menu_link_content"] ?? null) : null);
        // line 17
        $context["rendered_content"] = $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 17, $this->source), "field_body", "field_image", "children");
        // line 18
        echo "
<div class=\"menu-item-child-items\">
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

  ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "children", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "
</div>

<div class=\"menu-item-dropdown-content\">
  ";
        // line 28
        if (($context["rendered_content"] ?? null)) {
            // line 29
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rendered_content"] ?? null), 29, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 31
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/menu_item_extras/modules/mie_demo_base/templates/menu-link-content--mie-demo-base-menu--menu-level-0--terms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 31,  73 => 29,  71 => 28,  64 => 24,  59 => 22,  55 => 21,  51 => 20,  47 => 18,  45 => 17,  43 => 16,  39 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/menu_item_extras/modules/mie_demo_base/templates/menu-link-content--mie-demo-base-menu--menu-level-0--terms.html.twig", "C:\\xampp\\htdocs\\gbuilders\\modules\\menu_item_extras\\modules\\mie_demo_base\\templates\\menu-link-content--mie-demo-base-menu--menu-level-0--terms.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 28);
        static $filters = array("without" => 17, "escape" => 20);
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
