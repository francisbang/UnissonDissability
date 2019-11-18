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

/* themes/unisson_disability_v2/templates/html.html.twig */
class __TwigTemplate_9b50a1d2518a00321f5495e248f36e665e0c389039ed2eef0d00370ae4abcd21 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 27];
        $filters = ["clean_class" => 29, "escape" => 35, "safe_join" => 38, "t" => 78];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'safe_join', 't'],
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
        // line 27
        $context["body_classes"] = [0 => ((        // line 28
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 29
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null)))))), 2 => ((        // line 30
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null))))) : ("")), 3 => ((        // line 31
($context["db_offline"] ?? null)) ? ("db-offline") : (""))];
        // line 34
        echo "<!DOCTYPE html>
<html";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null)), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)), "html", null, true);
        echo "\">
    <title>";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null)), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)), "html", null, true);
        echo "\">
    <js-placeholder token=\"";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)), "html", null, true);
        echo "\">
   
\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-109150952-1\"></script>
\t<script>
\twindow.dataLayer = window.dataLayer || [];
\tfunction gtag(){dataLayer.push(arguments);}
\tgtag('js', new Date());
\tgtag('config', 'UA-109150952-1');
\t</script>
\t<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5TDDPX2');</script>
<!-- End Google Tag Manager -->
  </head>
  <body";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method")), "html", null, true);
        echo ">
    <!--Start of DoubleClick Floodlight Tag: Please do not remove
Activity name of this tag: Unisson Disability_Conversion
URL of the webpage where the tag is expected to be placed: http://unissondisability.org.au
This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
Creation Date: 12/03/2017-->
<script type=\"text/javascript\">
var axel = Math.random() + \"\";
var a = axel * 10000000000000;
document.write('<img src=\"https://ad.doubleclick.net/ddm/activity/src=8283105;type=invmedia;cat=dmzjrquu;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=' + a + '?\" width=\"1\" height=\"1\" alt=\"\"/>');
</script>
<noscript>
<img src=\"https://ad.doubleclick.net/ddm/activity/src=8283105;type=invmedia;cat=dmzjrquu;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1?\" width=\"1\" height=\"1\" alt=\"\"/>
</noscript>
<!-- End of DoubleClick Floodlight Tag: Please do not remove -->  
    ";
        // line 77
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content"));
        echo "
    </a>
    <div class=\"layout-container\">

      <header role=\"banner\">
        <section class=\"top-nav\">
        <div class=\"wrapper\">
            ";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
            <div class=\"tools\">
                <div class=\"sel accessibility-bar\">
                    <div class='txt btn-accessibility'>Accessibility</div>
                    <div class=\"options accessibility-list\" style=\"display:none;\">
                        ";
        // line 90
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "hidden", [])), "html", null, true);
        echo "\t
                    </div>
                </div>
              ";
        // line 93
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_tools", [])), "html", null, true);
        echo "\t
            </div>
            <div class=\"tools-mobile\">
              ";
        // line 96
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_tools_mobile", [])), "html", null, true);
        echo "\t
            </div>
            
            <div class=\"mob-menu-container\">
              <div class=\"search-mobile\">
                ";
        // line 101
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_search_mobile", [])), "html", null, true);
        echo "
              </div>
            </div>
        </div>
        </section>
      </header>
      
      <section class=\"main-nav\">
        ";
        // line 109
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
      </section>
      
      ";
        // line 112
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
        echo "
      ";
        // line 113
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
      ";
        // line 114
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "
      ";
        // line 115
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "


            ";
        // line 118
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null)), "html", null, true);
        echo "
            ";
        // line 119
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null)), "html", null, true);
        echo "
            ";
        // line 120
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null)), "html", null, true);
        echo "



      <footer role=\"contentinfo\">
        <div class=\"footer-bottom\">
          <div class=\"wrapper\">
            <div class=\"cols\">\t
              <div class=\"col1\">
              ";
        // line 129
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
        echo "
              </div>
              <div class=\"col2\">
              ";
        // line 132
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
        echo "
              </div>
              <div class=\"col3\">
              ";
        // line 135
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
        echo "
              </div>
            </div>
            ";
        // line 144
        echo "          </div>
        </div>
      </footer>
        
    </div>";
        // line 148
        echo "  

    <js-bottom-placeholder token=\"";
        // line 150
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)), "html", null, true);
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/unisson_disability_v2/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 150,  240 => 148,  234 => 144,  228 => 135,  222 => 132,  216 => 129,  204 => 120,  200 => 119,  196 => 118,  190 => 115,  186 => 114,  182 => 113,  178 => 112,  172 => 109,  161 => 101,  153 => 96,  147 => 93,  141 => 90,  133 => 85,  123 => 78,  120 => 77,  102 => 58,  81 => 40,  77 => 39,  73 => 38,  69 => 37,  64 => 35,  61 => 34,  59 => 31,  58 => 30,  57 => 29,  56 => 28,  55 => 27,);
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
 * Theme override for the basic structure of a single Drupal page.
 *
 * Variables:
 * - logged_in: A flag indicating if user is logged in.
 * - root_path: The root path of the current page (e.g., node, admin, user).
 * - node_type: The content type for the current node, if the page is a node.
 * - head_title: List of text elements that make up the head_title variable.
 *   May contain one or more of the following:
 *   - title: The title of the page.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site.
 * - page_top: Initial rendered markup. This should be printed before 'page'.
 * - page: The rendered page markup.
 * - page_bottom: Closing rendered markup. This variable should be printed after
 *   'page'.
 * - db_offline: A flag indicating if the database is offline.
 * - placeholder_token: The token for generating head, css, js and js-bottom
 *   placeholders.
 *
 * @see template_preprocess_html()
 */
#}
{%
  set body_classes = [
    logged_in ? 'user-logged-in',
    not root_path ? 'path-frontpage' : 'path-' ~ root_path|clean_class,
    node_type ? 'page-node-type-' ~ node_type|clean_class,
    db_offline ? 'db-offline',
  ]
%}
<!DOCTYPE html>
<html{{ html_attributes }}>
  <head>
    <head-placeholder token=\"{{ placeholder_token }}\">
    <title>{{ head_title|safe_join(' | ') }}</title>
    <css-placeholder token=\"{{ placeholder_token }}\">
    <js-placeholder token=\"{{ placeholder_token }}\">
   
\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-109150952-1\"></script>
\t<script>
\twindow.dataLayer = window.dataLayer || [];
\tfunction gtag(){dataLayer.push(arguments);}
\tgtag('js', new Date());
\tgtag('config', 'UA-109150952-1');
\t</script>
\t<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5TDDPX2');</script>
<!-- End Google Tag Manager -->
  </head>
  <body{{ attributes.addClass(body_classes) }}>
    <!--Start of DoubleClick Floodlight Tag: Please do not remove
Activity name of this tag: Unisson Disability_Conversion
URL of the webpage where the tag is expected to be placed: http://unissondisability.org.au
This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
Creation Date: 12/03/2017-->
<script type=\"text/javascript\">
var axel = Math.random() + \"\";
var a = axel * 10000000000000;
document.write('<img src=\"https://ad.doubleclick.net/ddm/activity/src=8283105;type=invmedia;cat=dmzjrquu;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=' + a + '?\" width=\"1\" height=\"1\" alt=\"\"/>');
</script>
<noscript>
<img src=\"https://ad.doubleclick.net/ddm/activity/src=8283105;type=invmedia;cat=dmzjrquu;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;ord=1?\" width=\"1\" height=\"1\" alt=\"\"/>
</noscript>
<!-- End of DoubleClick Floodlight Tag: Please do not remove -->  
    {#
      Keyboard navigation/accessibility link to main content section in
      page.html.twig.
    #}
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      {{ 'Skip to main content'|t }}
    </a>
    <div class=\"layout-container\">

      <header role=\"banner\">
        <section class=\"top-nav\">
        <div class=\"wrapper\">
            {{ page.header }}
            <div class=\"tools\">
                <div class=\"sel accessibility-bar\">
                    <div class='txt btn-accessibility'>Accessibility</div>
                    <div class=\"options accessibility-list\" style=\"display:none;\">
                        {{ page.hidden }}\t
                    </div>
                </div>
              {{ page.header_tools }}\t
            </div>
            <div class=\"tools-mobile\">
              {{ page.header_tools_mobile }}\t
            </div>
            
            <div class=\"mob-menu-container\">
              <div class=\"search-mobile\">
                {{ page.header_search_mobile }}
              </div>
            </div>
        </div>
        </section>
      </header>
      
      <section class=\"main-nav\">
        {{ page.primary_menu }}
      </section>
      
      {{ page.secondary_menu }}
      {{ page.breadcrumb }}
      {{ page.highlighted }}
      {{ page.help }}


            {{ page_top }}
            {{ page }}
            {{ page_bottom }}



      <footer role=\"contentinfo\">
        <div class=\"footer-bottom\">
          <div class=\"wrapper\">
            <div class=\"cols\">\t
              <div class=\"col1\">
              {{ page.footer_first }}
              </div>
              <div class=\"col2\">
              {{ page.footer_second }}
              </div>
              <div class=\"col3\">
              {{ page.footer_third }}
              </div>
            </div>
            {#<div class=\"footer-logo\">
              {{ page.footer_logo }}
            </div>
            <div class=\"footer-white\">
              {{ page.footer_copyright }}
            </div>#}
          </div>
        </div>
      </footer>
        
    </div>{# /.layout-container #}  

    <js-bottom-placeholder token=\"{{ placeholder_token }}\">
  </body>
</html>
", "themes/unisson_disability_v2/templates/html.html.twig", "/Users/Simran/Sites/unissondissability/themes/unisson_disability_v2/templates/html.html.twig");
    }
}
