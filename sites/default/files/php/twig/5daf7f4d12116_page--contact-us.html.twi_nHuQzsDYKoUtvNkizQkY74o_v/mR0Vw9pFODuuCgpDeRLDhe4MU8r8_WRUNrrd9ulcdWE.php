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

/* themes/unisson_disability/templates/page--contact-us.html.twig */
class __TwigTemplate_4f36d6cf7bdc550c2b247480e6c6c46e2f12cc9daa9349de16d6a598c6cede40 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 92];
        $filters = ["escape" => 67];
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
        echo "<!--
Start of DoubleClick Floodlight Tag: Please do not remove
Activity name of this tag: Unisson Disability_Conversion
URL of the webpage where the tag is expected to be placed: http://unissondisability.org.au
This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
Creation Date: 12/03/2017
-->
<script type=\"text/javascript\">
var axel = Math.random() + \"\";
var a = axel * 10000000000000;
document.write('<img src=\"https://ad.doubleclick.net/ddm/activity/src=8283105;type=invmedia;cat=dmzjrquu;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=' + a + '?\" width=\"1\" height=\"1\" alt=\"\"/>');
</script>
<noscript>
<img src=\"https://ad.doubleclick.net/ddm/activity/src=8283105;type=invmedia;cat=dmzjrquu;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1?\" width=\"1\" height=\"1\" alt=\"\"/>
</noscript>
<!-- End of DoubleClick Floodlight Tag: Please do not remove -->
<div class=\"layout-container\">

  <header role=\"banner\">
    <section class=\"top-nav\">
\t\t<div class=\"wrapper\">
\t    \t";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
\t    \t<div class=\"tools\">
\t    \t\t";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_tools", [])), "html", null, true);
        echo "\t
\t    \t</div>
\t    \t<div class=\"tools-mobile\">
\t    \t\t";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_tools_mobile", [])), "html", null, true);
        echo "\t
\t    \t</div>
\t    \t<div class=\"search-mobile\">
\t    \t";
        // line 75
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_search_mobile", [])), "html", null, true);
        echo "
\t    \t</div>
\t    \t<div class=\"mob-menu-container\"></div>
\t\t</div>
    </section>
  </header>
  
  <section class=\"main-nav\">
\t  ";
        // line 83
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
  </section>
  
  ";
        // line 86
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
        echo "
  ";
        // line 87
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
  ";
        // line 88
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "
  ";
        // line 89
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
  
  
  ";
        // line 92
        if ($this->getAttribute(($context["page"] ?? null), "page_header", [])) {
            // line 93
            echo "  <section class=\"title-header general\">
    <div class=\"wrapper\">
  \t\t";
            // line 95
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_header", [])), "html", null, true);
            echo "      
    </div> <!-- end.wrapper -->
    <a id=\"go-down-section\" href=\"\"><img id=\"go-down-mobile\" src=\"/themes/unisson_disability/css/images/sprite/go-down-mobile@2x.png\" width=\"63\" height=\"63\" alt=\"Down Arrow\"></a>
   </section>
   ";
        }
        // line 100
        echo "   
   ";
        // line 101
        if ($this->getAttribute(($context["page"] ?? null), "page_actions", [])) {
            // line 102
            echo "  <section class=\"page-actions\">
    <div class=\"wrapper\">
  \t\t";
            // line 104
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_actions", [])), "html", null, true);
            echo "      
    </div> <!-- end.wrapper -->
   </section>
   ";
        }
        // line 108
        echo "  
  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 111
        echo "
    <div class=\"layout-content\">
      ";
        // line 113
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
    </div>";
        // line 115
        echo "
    ";
        // line 116
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 117
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 118
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 121
        echo "
    ";
        // line 122
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 123
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 124
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 127
        echo "
  </main>

  <footer role=\"contentinfo\">
      <div class=\"cols\">\t
      \t<div class=\"col1\">
      \t";
        // line 133
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
        echo "
      \t</div>
      \t<div class=\"col2\">
\t  \t";
        // line 136
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
        echo "
      \t</div>
      \t<div class=\"col3\">
\t  \t";
        // line 139
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
        echo "
      \t</div>
      </div>
      <div class=\"footer-logo\">
      \t";
        // line 143
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_logo", [])), "html", null, true);
        echo "
      </div>
      <div class=\"footer-white\">
      \t";
        // line 146
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_copyright", [])), "html", null, true);
        echo "
      </div>
    </footer>
    
</div>";
    }

    public function getTemplateName()
    {
        return "themes/unisson_disability/templates/page--contact-us.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 146,  227 => 143,  220 => 139,  214 => 136,  208 => 133,  200 => 127,  194 => 124,  191 => 123,  189 => 122,  186 => 121,  180 => 118,  177 => 117,  175 => 116,  172 => 115,  168 => 113,  164 => 111,  160 => 108,  153 => 104,  149 => 102,  147 => 101,  144 => 100,  136 => 95,  132 => 93,  130 => 92,  124 => 89,  120 => 88,  116 => 87,  112 => 86,  106 => 83,  95 => 75,  89 => 72,  83 => 69,  78 => 67,  55 => 46,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/unisson_disability/templates/page--contact-us.html.twig", "/home/npdpoe4s/public_html/themes/unisson_disability/templates/page--contact-us.html.twig");
    }
}
