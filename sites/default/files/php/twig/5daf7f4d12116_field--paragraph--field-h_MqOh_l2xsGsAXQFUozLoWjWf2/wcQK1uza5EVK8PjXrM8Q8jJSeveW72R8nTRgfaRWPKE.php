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

/* themes/unisson_disability/templates/field--paragraph--field-history-fields-hb.html.twig */
class __TwigTemplate_94d65024cbccdc149cb850c3f196fbffffa5a5ba5cd680758de4583ec161760a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 40, "for" => 42, "if" => 43];
        $filters = ["escape" => 44, "raw" => 65];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'raw'],
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
        // line 40
        $context["history_count"] = 0;
        // line 41
        echo "<ul class=\"slides\">
";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            echo "\t  ";
            if ((0 == ($context["history_count"] ?? null) % 2)) {
                // line 44
                echo "\t  \t<li><h4 class=\"top\"><a data-time=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["history_count"] ?? null)), "html", null, true);
                echo "\" href=\"#\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", []), "#field_collection_item", [], "array"), "field_history_year", []), "value", [])), "html", null, true);
                echo "</a></h4><i></i></li>
\t  ";
            } else {
                // line 46
                echo "\t  \t<li><h4 class=\"bottom\"><a data-time=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["history_count"] ?? null)), "html", null, true);
                echo "\" href=\"#\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", []), "#field_collection_item", [], "array"), "field_history_year", []), "value", [])), "html", null, true);
                echo "</a></h4><i></i></li>
\t  ";
            }
            // line 47
            echo "\t
      ";
            // line 48
            $context["history_count"] = (($context["history_count"] ?? null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "</ul>

";
        // line 52
        $context["history_count"] = 0;
        // line 53
        echo "<div class=\"panel-group\" id=\"accordion\">
\t";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 55
            echo "\t";
            $context["collaspe_count"] = (($context["history_count"] ?? null) + 1);
            // line 56
            echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h4 class=\"panel-title\">
                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
            // line 59
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["collaspe_count"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", []), "#field_collection_item", [], "array"), "field_history_year", []), "value", [])), "html", null, true);
            echo "</a>
\t\t\t</h4>
\t\t</div>
\t\t<div id=\"collapse";
            // line 62
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["collaspe_count"] ?? null)), "html", null, true);
            echo "\" class=\"story panel-collapse collapse\" data-time=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["history_count"] ?? null)), "html", null, true);
            echo "\">
\t\t\t<div class=\"heading\">
\t\t\t<a class=\"closeStory\" href=\"#\"><img src=\"/themes/unisson_disability/css/images/sprite/close-time@2x.png\" width=\"25\" height=\"25\" alt=\"Close Button\"></a>
\t\t\t";
            // line 65
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", []), "#field_collection_item", [], "array"), "field_history_heading", []), "value", [])));
            echo "
\t\t\t</div>
\t\t\t<div class=\"content\">
\t\t\t";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", []), "#field_collection_item", [], "array"), "field_history_description", []), "value", [])));
            echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t";
            // line 72
            $context["history_count"] = (($context["history_count"] ?? null) + 1);
            // line 73
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/unisson_disability/templates/field--paragraph--field-history-fields-hb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 74,  144 => 73,  142 => 72,  135 => 68,  129 => 65,  121 => 62,  113 => 59,  108 => 56,  105 => 55,  101 => 54,  98 => 53,  96 => 52,  92 => 50,  86 => 48,  83 => 47,  75 => 46,  67 => 44,  64 => 43,  60 => 42,  57 => 41,  55 => 40,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/unisson_disability/templates/field--paragraph--field-history-fields-hb.html.twig", "/home/npdpoe4s/public_html/themes/unisson_disability/templates/field--paragraph--field-history-fields-hb.html.twig");
    }
}
