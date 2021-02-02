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

/* themes/yg_glow/templates/html.html.twig */
class __TwigTemplate_d9dccad5a54b3b3a7e6a30f43ad9107f3d8b32a3caac0d427c8db67fd1f06d5c extends \Twig\Template
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
        // line 28
        echo "  ";
        // line 29
        $context["body_classes"] = [0 => ((        // line 30
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 31
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 31, $this->source))))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 32
($context["path_info"] ?? null), "args", [], "any", false, false, true, 32)) ? (("path-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["path_info"] ?? null), "args", [], "any", false, false, true, 32), 32, $this->source))) : ("")), 3 => ((        // line 33
($context["db_offline"] ?? null)) ? ("db-offline") : (""))];
        // line 36
        echo "<!DOCTYPE html>
<html";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 37, $this->source), "html", null, true);
        echo ">
  <head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1\">
    <head-placeholder token=\"";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 40, $this->source));
        echo "\">
    <title>";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 41, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 42, $this->source));
        echo "\">
    <js-placeholder token=\"";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 43, $this->source));
        echo "\">
  </head>
  <body ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 45), 45, $this->source), "html", null, true);
        echo ">
    ";
        // line 46
        if ( !twig_test_empty(($context["preloader"] ?? null))) {
            // line 47
            echo "    <!-- Preloader -->
  <div class=\"preloader\">
    <div class=\"clear-loading loading-effect-2\">
      <span></span>
    </div>
        <div class=\"preloader-toppart\"></div>
        <div class=\"preloader-bottompart\"></div>
  </div>
  ";
        }
        // line 56
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 59, $this->source), "html", null, true);
        echo "
    ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 60, $this->source), "html", null, true);
        echo "
    ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 61, $this->source), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 62, $this->source));
        echo "\">
  ";
        // line 63
        if (($context["goto"] ?? null)) {
            // line 64
            echo "  ";
        }
        // line 65
        echo "  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "themes/yg_glow/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 65,  116 => 64,  114 => 63,  110 => 62,  106 => 61,  102 => 60,  98 => 59,  93 => 57,  90 => 56,  79 => 47,  77 => 46,  73 => 45,  68 => 43,  64 => 42,  60 => 41,  56 => 40,  50 => 37,  47 => 36,  45 => 33,  44 => 32,  43 => 31,  42 => 30,  41 => 29,  39 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_glow/templates/html.html.twig", "C:\\xampp\\htdocs\\gbuilders\\themes\\yg_glow\\templates\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29, "if" => 46);
        static $filters = array("clean_class" => 31, "escape" => 37, "raw" => 40, "safe_join" => 41, "t" => 57);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'raw', 'safe_join', 't'],
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
