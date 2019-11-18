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

/* themes/unisson_disability_v2/templates/page--overview-pages.html.twig */
class __TwigTemplate_d59f19e4bfea9841adf26cc10625b7876bab66d1271ffb367a3fc68b38a00c46 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 48];
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
        echo "
  
  ";
        // line 48
        if ($this->getAttribute(($context["page"] ?? null), "page_header", [])) {
            // line 49
            echo "  <section class=\"title-header\">
    <div class=\"wrapper\">
  \t\t";
            // line 51
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_header", [])), "html", null, true);
            echo "      
    </div> <!-- end.wrapper -->
    <a id=\"go-down-section\" href=\"\"><img id=\"go-down-mobile\" src=\"/themes/unisson_disability/css/images/sprite/go-down-mobile@2x.png\" width=\"63\" height=\"63\" alt=\"Down Arrow\"></a>
   </section>
   ";
        }
        // line 56
        echo "   
   ";
        // line 57
        if ($this->getAttribute(($context["page"] ?? null), "page_actions", [])) {
            // line 58
            echo "  <section class=\"page-actions\">
    <div class=\"wrapper\">
  \t\t";
            // line 60
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_actions", [])), "html", null, true);
            echo "      
    </div> <!-- end.wrapper -->
   </section>
   ";
        }
        // line 64
        echo "  
  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 67
        echo "
    <div class=\"layout-content\">
      ";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
    </div>";
        // line 71
        echo "
    ";
        // line 72
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 73
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 74
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 77
        echo "
    ";
        // line 78
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 79
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 80
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 83
        echo "
  </main>

  
";
    }

    public function getTemplateName()
    {
        return "themes/unisson_disability_v2/templates/page--overview-pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 83,  123 => 80,  120 => 79,  118 => 78,  115 => 77,  109 => 74,  106 => 73,  104 => 72,  101 => 71,  97 => 69,  93 => 67,  89 => 64,  82 => 60,  78 => 58,  76 => 57,  73 => 56,  65 => 51,  61 => 49,  59 => 48,  55 => 46,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}

  
  {% if page.page_header %}
  <section class=\"title-header\">
    <div class=\"wrapper\">
  \t\t{{ page.page_header }}      
    </div> <!-- end.wrapper -->
    <a id=\"go-down-section\" href=\"\"><img id=\"go-down-mobile\" src=\"/themes/unisson_disability/css/images/sprite/go-down-mobile@2x.png\" width=\"63\" height=\"63\" alt=\"Down Arrow\"></a>
   </section>
   {% endif %}
   
   {% if page.page_actions %}
  <section class=\"page-actions\">
    <div class=\"wrapper\">
  \t\t{{ page.page_actions }}      
    </div> <!-- end.wrapper -->
   </section>
   {% endif %}
  
  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

    <div class=\"layout-content\">
      {{ page.content }}
    </div>{# /.layout-content #}

    {% if page.sidebar_first %}
      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        {{ page.sidebar_first }}
      </aside>
    {% endif %}

    {% if page.sidebar_second %}
      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        {{ page.sidebar_second }}
      </aside>
    {% endif %}

  </main>

  
", "themes/unisson_disability_v2/templates/page--overview-pages.html.twig", "/Users/Simran/Sites/unissondissability/themes/unisson_disability_v2/templates/page--overview-pages.html.twig");
    }
}
