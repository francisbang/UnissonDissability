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

/* themes/unisson_disability/templates/page.html.twig */
class __TwigTemplate_ce341f2c534161eede78ba3b9c31e37f7ed269387aa839aad5e281aff589009b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 75];
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
        // line 75
        if ($this->getAttribute(($context["page"] ?? null), "page_header", [])) {
            // line 76
            echo "  <section class=\"title-header general\">
    <div class=\"wrapper\">
  \t\t";
            // line 78
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_header", [])), "html", null, true);
            echo "      
    </div> <!-- end.wrapper -->
    <a id=\"go-down-section\" href=\"\"><img id=\"go-down-mobile\" src=\"/themes/unisson_disability/css/images/sprite/go-down-mobile@2x.png\" width=\"63\" height=\"63\" alt=\"Down Arrow\"></a>
   </section>
   ";
        }
        // line 83
        echo "   
   ";
        // line 84
        if ($this->getAttribute(($context["page"] ?? null), "page_actions", [])) {
            // line 85
            echo "  <section class=\"page-actions\">
    <div class=\"wrapper\">
  \t\t";
            // line 87
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_actions", [])), "html", null, true);
            echo "      
    </div> <!-- end.wrapper -->
   </section>
   ";
        }
        // line 91
        echo "  
  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 94
        echo "
    <div class=\"layout-content\">
      ";
        // line 96
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
    </div>";
        // line 98
        echo "
    ";
        // line 99
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 100
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 101
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 104
        echo "
    ";
        // line 105
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 106
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 107
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 110
        echo "
  </main>

  <footer role=\"contentinfo\">
      <div class=\"cols\">\t
      \t<div class=\"col1\">
      \t";
        // line 116
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
        echo "
      \t</div>
      \t<div class=\"col2\">
\t  \t";
        // line 119
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
        echo "
      \t</div>
      \t<div class=\"col3\">
\t  \t";
        // line 122
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
        echo "
      \t</div>
      </div>
      <div class=\"footer-logo\">
      \t";
        // line 126
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_logo", [])), "html", null, true);
        echo "
      </div>
      <div class=\"footer-white\">
      \t";
        // line 129
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_copyright", [])), "html", null, true);
        echo "
      </div>
    </footer>
    
</div>";
    }

    public function getTemplateName()
    {
        return "themes/unisson_disability/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 129,  210 => 126,  203 => 122,  197 => 119,  191 => 116,  183 => 110,  177 => 107,  174 => 106,  172 => 105,  169 => 104,  163 => 101,  160 => 100,  158 => 99,  155 => 98,  151 => 96,  147 => 94,  143 => 91,  136 => 87,  132 => 85,  130 => 84,  127 => 83,  119 => 78,  115 => 76,  113 => 75,  108 => 73,  104 => 72,  100 => 71,  96 => 70,  90 => 67,  79 => 59,  73 => 56,  67 => 53,  62 => 51,  55 => 46,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/unisson_disability/templates/page.html.twig", "/home/npdpoe4s/public_html/themes/unisson_disability/templates/page.html.twig");
    }
}
