<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/unisson_disability/templates/page--unisson-works.html.twig */
class __TwigTemplate_06d58f5aa08eed02250c56c97714ff4a4b5950f780c80f42d502fa85bc53fe03 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 84];
        $filters = ["escape" => 51];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "\t";
        // line 46
        echo "<div class=\"layout-container\">

  <header role=\"banner\">
    <section class=\"top-nav\">
\t\t<div class=\"wrapper\">
\t    \t";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
\t    \t<div class=\"tools\">
\t    \t\t";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_tools", [])), "html", null, true);
        echo "\t
\t    \t</div>
\t    \t<div class=\"tools-mobile\">
\t    \t\t";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_tools_mobile", [])), "html", null, true);
        echo "\t
\t    \t</div>
\t    \t<div class=\"search-mobile\">
\t    \t";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_search_mobile", [])), "html", null, true);
        echo "
\t    \t</div>
\t    \t<div class=\"mob-menu-container\"></div>
\t\t</div>
    </section>
  </header>
  
  <section class=\"main-nav\">
\t  ";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
  </section>
  
  ";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
        echo "
  ";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
  ";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "
  ";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
  
  ";
        // line 83
        echo "   
   ";
        // line 84
        if ($this->getAttribute(($context["page"] ?? null), "page_actions", [])) {
            // line 85
            echo "    ";
            if ((($context["uid"] ?? null) > 0)) {
                // line 86
                echo "      <section class=\"page-actions\" style=\"margin-top:80px;\">
    ";
            } else {
                // line 88
                echo "      <section class=\"page-actions\">
    ";
            }
            // line 90
            echo "    <div class=\"wrapper\">
  \t\t";
            // line 91
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_actions", [])), "html", null, true);
            echo "      
    </div> <!-- end.wrapper -->
   </section>
   <main role=\"main\">
     ";
        } else {
            // line 96
            echo "   <main role=\"main\">
      ";
        }
        // line 98
        echo "  
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 100
        echo "
    <div class=\"layout-content\">
      ";
        // line 102
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
    </div>";
        // line 104
        echo "
    ";
        // line 105
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 106
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 107
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 110
        echo "
    ";
        // line 111
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 112
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 113
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 116
        echo "
  </main>

  <footer role=\"contentinfo\">
      <div class=\"cols\">\t
      \t<div class=\"col1\">
      \t";
        // line 122
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
        echo "
      \t</div>
      \t<div class=\"col2\">
\t  \t";
        // line 125
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
        echo "
      \t</div>
      \t<div class=\"col3\">
\t  \t";
        // line 128
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
        echo "
      \t</div>
      </div>
      <div class=\"footer-logo\">
      \t";
        // line 132
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_logo", [])), "html", null, true);
        echo "
      </div>
      <div class=\"footer-white\">
      \t";
        // line 135
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_copyright", [])), "html", null, true);
        echo "
      </div>
    </footer>
    
</div>";
    }

    public function getTemplateName()
    {
        return "themes/unisson_disability/templates/page--unisson-works.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 135,  212 => 132,  205 => 128,  199 => 125,  193 => 122,  185 => 116,  179 => 113,  176 => 112,  174 => 111,  171 => 110,  165 => 107,  162 => 106,  160 => 105,  157 => 104,  153 => 102,  149 => 100,  146 => 98,  142 => 96,  134 => 91,  131 => 90,  127 => 88,  123 => 86,  120 => 85,  118 => 84,  115 => 83,  110 => 73,  106 => 72,  102 => 71,  98 => 70,  92 => 67,  81 => 59,  75 => 56,  69 => 53,  64 => 51,  57 => 46,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/unisson_disability/templates/page--unisson-works.html.twig", "/home/npdpoe4s/public_html/themes/unisson_disability/templates/page--unisson-works.html.twig");
    }
}
