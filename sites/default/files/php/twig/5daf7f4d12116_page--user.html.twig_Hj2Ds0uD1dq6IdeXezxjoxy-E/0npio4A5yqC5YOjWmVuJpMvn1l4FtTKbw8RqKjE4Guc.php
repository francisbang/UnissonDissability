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

/* themes/unisson_disability/templates/page--user.html.twig */
class __TwigTemplate_d7382de82861fa6427ebbd0a79ee6f4ccfd21f0b94f61ce2e44abe6b09f18e26 extends \Twig\Template
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
  
  
  
  <main role=\"main\">
    <div class=\"wrapper\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 80
        echo "\t<div class=\"layout-content\">
      ";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
    </div>";
        // line 83
        echo "
    ";
        // line 84
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 85
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 86
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 89
        echo "
    ";
        // line 90
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 91
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 92
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 95
        echo "    </div>
  </main>

  <footer role=\"contentinfo\">
      <div class=\"cols\">\t
      \t<div class=\"col1\">
      \t";
        // line 101
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
        echo "
      \t</div>
      \t<div class=\"col2\">
\t  \t";
        // line 104
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
        echo "
      \t</div>
      \t<div class=\"col3\">
\t  \t";
        // line 107
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
        echo "
      \t</div>
      </div>
      <div class=\"footer-logo\">
      \t";
        // line 111
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_logo", [])), "html", null, true);
        echo "
      </div>
      <div class=\"footer-white\">
      \t";
        // line 114
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_copyright", [])), "html", null, true);
        echo "
      </div>
    </footer>

</div>";
    }

    public function getTemplateName()
    {
        return "themes/unisson_disability/templates/page--user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 114,  179 => 111,  172 => 107,  166 => 104,  160 => 101,  152 => 95,  146 => 92,  143 => 91,  141 => 90,  138 => 89,  132 => 86,  129 => 85,  127 => 84,  124 => 83,  120 => 81,  117 => 80,  108 => 73,  104 => 72,  100 => 71,  96 => 70,  90 => 67,  79 => 59,  73 => 56,  67 => 53,  62 => 51,  55 => 46,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/unisson_disability/templates/page--user.html.twig", "/home/npdpoe4s/public_html/themes/unisson_disability/templates/page--user.html.twig");
    }
}
