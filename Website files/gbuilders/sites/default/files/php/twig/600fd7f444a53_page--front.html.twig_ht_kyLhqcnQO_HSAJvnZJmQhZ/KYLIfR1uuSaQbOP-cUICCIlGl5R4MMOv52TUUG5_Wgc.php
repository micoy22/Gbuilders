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

/* themes/yg_glow/templates/page--front.html.twig */
class __TwigTemplate_6fbb72c29b48fb3ceb10cf38fd73282e807ad9cddef4ea31e677f9f2d1258ac9 extends \Twig\Template
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
        // line 1
        echo "<div id=\"fh5co-wrapper\">
   <div id=\"fh5co-page\">
    ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tabs", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "
      <!-- Header -->
      <div id=\"fh5co-header\">
         <header id=\"fh5co-header-section\">
            <div class=\"container\">
               <div class=\"nav-header\">
                  <a href=\"#\" class=\"js-fh5co-nav-toggle fh5co-nav-toggle\"><i></i></a>
                  ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "
                  <!-- START #fh5co-menu-wrap -->
                   ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
               </div>
            </div>
         </header>
      </div>
      <!-- Header End -->

      <!-- Content -->
         ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "
      <!-- Content End -->
      
      <!-- Footer --> 
      <footer>
         <div id=\"footer\">
            <div class=\"container\">
               <div class=\"row\">
                  <div class=\"col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0\">
                     <h3>";
        // line 29
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["about_title"] ?? null)))) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["about_title"] ?? null), 29, $this->source), "html", null, true);
        }
        echo "</h3>
                     ";
        // line 30
        if (($context["about_desc"] ?? null)) {
            // line 31
            echo "                       ";
            // line 32
            echo "                         ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["about_desc"] ?? null), 32, $this->source));
            echo "
                       ";
            // line 34
            echo "                     ";
        }
        // line 35
        echo "                  </div>
                  <div class=\"col-md-3 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0\">
                     ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "latest_blog", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "
                  </div>
                  <div class=\"col-md-3 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0\">
                     ";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        echo "
                  </div>
                  <div class=\"col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0\">
                     <h3>";
        // line 43
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["social_title"] ?? null)))) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_title"] ?? null), 43, $this->source), "html", null, true);
        }
        echo "</h3>
                     <ul class=\"fh5co-social\">
                        ";
        // line 45
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["twitter_url"] ?? null)))) {
            // line 46
            echo "                        <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 46, $this->source), "html", null, true);
            echo "\"><i class=\"icon-twitter2\"></i> Twitter</a></li>
                        ";
        }
        // line 48
        echo "                        ";
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["facebook_url"] ?? null)))) {
            // line 49
            echo "                        <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 49, $this->source), "html", null, true);
            echo "\"><i class=\"icon-facebook2\"></i> Facebook</a></li>
                        ";
        }
        // line 51
        echo "                        ";
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["google_plus_url"] ?? null)))) {
            // line 52
            echo "                        <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 52, $this->source), "html", null, true);
            echo "\"><i class=\"icon-google-plus2\"></i> Google Plus</a></li>
                        ";
        }
        // line 54
        echo "                        ";
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["instagram_url"] ?? null)))) {
            // line 55
            echo "                         <li><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 55, $this->source), "html", null, true);
            echo "\"><i class=\"icon-instagram2\"></i> Instagram</a></li>
                        ";
        }
        // line 57
        echo "                     </ul>
                  </div>
               </div>
            </div>
            <div class=\"fh5co-copyright text-center\">
               <p><span> &copy; 2018 <i>YG Glow</i> All Rights Reserved. Designed with <i class=\"icon-heart\"></i> by <a href=\"http://freehtml5.co\" target=\"_blank\">FREEHTML5.co</a><br> Theme By<a href=\"https://www.drupaldevelopersstudio.com\" target=\"_blank\"> Drupal Developers Studio</a>, A Division of <a href=\"http://www.youngglobes.com\" target=\"_blank\">Young Globes</a></span></p>
            </div>
         </div>
      </footer>
     <!-- Footer End --> 

   </div>
   <!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->
";
    }

    public function getTemplateName()
    {
        return "themes/yg_glow/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 57,  151 => 55,  148 => 54,  142 => 52,  139 => 51,  133 => 49,  130 => 48,  124 => 46,  122 => 45,  115 => 43,  109 => 40,  103 => 37,  99 => 35,  96 => 34,  91 => 32,  89 => 31,  87 => 30,  81 => 29,  69 => 20,  58 => 12,  53 => 10,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_glow/templates/page--front.html.twig", "C:\\xampp\\htdocs\\gbuilders\\themes\\yg_glow\\templates\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 29, "autoescape" => 31);
        static $filters = array("escape" => 3, "render" => 29, "raw" => 32);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'autoescape'],
                ['escape', 'render', 'raw'],
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
