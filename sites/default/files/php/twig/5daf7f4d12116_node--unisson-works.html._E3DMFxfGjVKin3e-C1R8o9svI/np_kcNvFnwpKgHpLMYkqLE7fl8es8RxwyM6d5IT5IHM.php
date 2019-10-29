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

/* themes/unisson_disability/templates/node--unisson-works.html.twig */
class __TwigTemplate_d39220975617209bcaf1f3c46787c603a081fc8b9700399d87c0c8d05df0acee extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 75];
        $filters = ["escape" => 77, "without" => 101];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'without'],
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
        // line 73
        echo "

";
        // line 75
        if (twig_in_filter(1, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_header_banner_type", []), 0, [], "array"))) {
            // line 76
            echo "
<section class=\"title-header work\" style=\"height: 520px; background-image: url(&quot;";
            // line 77
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_header_image", []), 0, [])), "html", null, true);
            echo "&quot;);\">
    <img id=\"title-header\" src=\"";
            // line 78
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_header_image", []), 0, [])), "html", null, true);
            echo "\" alt=\"Unisson\">
    <img id=\"title-header-mobile\" src=\"";
            // line 79
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_header_image_mobile", []), 0, [])), "html", null, true);
            echo "\" alt=\"Unisson\">
    <div class=\"wrapper\">
        <h1><span class=\"yellow\">";
            // line 81
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_header_main_heading", []), 0, [])), "html", null, true);
            echo "</span><br>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_header_sub_heading", []), 0, [])), "html", null, true);
            echo "</h1>
    </div> <!-- end.wrapper -->
    <img class=\"work-icon\" src=\"";
            // line 83
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
            echo "/images/work-icon-half.png\" alt=\"Unisson Work\">
    <a id=\"go-down-section\" href=\"#undefined\"><img id=\"go-down-mobile\" src=\"";
            // line 84
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
            echo "/images/go-down-mobile@2x.png\" width=\"63\" height=\"63\" alt=\"Unisson\"></a>
</section>

";
        } elseif (twig_in_filter(2, $this->getAttribute($this->getAttribute(        // line 87
($context["content"] ?? null), "field_header_banner_type", []), 0, [], "array"))) {
            // line 88
            echo "
<section class=\"title-header general word-detail\" style=\"height: 340px; background-image: url(&quot;";
            // line 89
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_header_image", []), 0, [])), "html", null, true);
            echo "&quot;);\">
    <img id=\"title-header\" src=\"";
            // line 90
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_header_image", []), 0, [])), "html", null, true);
            echo "\" alt=\"Unisson\">
    <img id=\"title-header-mobile\" src=\"";
            // line 91
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_header_image_mobile", []), 0, [])), "html", null, true);
            echo "\" alt=\"Unisson\">
    <div class=\"wrapper\">
\t\t<h1><img src=\"";
            // line 93
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_banner_logo", []), 0, [])), "html", null, true);
            echo "\" /></h1>
    </div> <!-- end.wrapper -->
    <a id=\"go-down-section\" href=\"\"><img id=\"go-down-mobile\" src=\"";
            // line 95
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
            echo "/images/go-down-mobile@2x.png\" width=\"63\" height=\"63\" alt=\"Unisson\"></a>
</section>

";
        }
        // line 99
        echo "

";
        // line 101
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_header_image", "field_header_image_mobile", "field_header_banner_type", "field_header_main_heading", "field_header_sub_heading", "field_banner_logo"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/unisson_disability/templates/node--unisson-works.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 101,  124 => 99,  117 => 95,  112 => 93,  107 => 91,  103 => 90,  99 => 89,  96 => 88,  94 => 87,  88 => 84,  84 => 83,  77 => 81,  72 => 79,  68 => 78,  64 => 77,  61 => 76,  59 => 75,  55 => 73,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/unisson_disability/templates/node--unisson-works.html.twig", "/home/npdpoe4s/public_html/themes/unisson_disability/templates/node--unisson-works.html.twig");
    }
}
