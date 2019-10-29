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

/* themes/unisson_disability/templates/field--paragraph--field-tabbed-block-fields.html.twig */
class __TwigTemplate_75143105b346a1733feee10466b6b9e48bf586f69180e04ea587348e73cb29a6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 40, "for" => 42, "if" => 43];
        $filters = ["escape" => 44];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
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
        // line 40
        $context["tab_count"] = 1;
        // line 41
        echo "<ul id=\"myTab\" class=\"nav nav-tabs\">
";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            echo "\t  ";
            if ((($context["tab_count"] ?? null) == 1)) {
                echo "\t
      <li class=\"active\"><a data-toggle=\"tab\" href=\"#tab";
                // line 44
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_count"] ?? null)), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", []), "#field_collection_item", [], "array"), "field_tabbed_heading", []), "value", [])), "html", null, true);
                echo "</a></li>
      ";
            } else {
                // line 46
                echo "      <li class=\"\"><a data-toggle=\"tab\" href=\"#tab";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_count"] ?? null)), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", []), "#field_collection_item", [], "array"), "field_tabbed_heading", []), "value", [])), "html", null, true);
                echo "</a></li>
      ";
            }
            // line 48
            echo "      ";
            $context["tab_count"] = (($context["tab_count"] ?? null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "</ul>

";
        // line 52
        $context["tab_count"] = 1;
        // line 53
        echo "<div class=\"tab-content\">
";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 55
            echo "     ";
            if ((($context["tab_count"] ?? null) == 1)) {
                echo "\t
      <div id=\"tab";
                // line 56
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_count"] ?? null)), "html", null, true);
                echo "\" class=\"tab-pane fade in active\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
                echo "</div>
      ";
            } else {
                // line 58
                echo "      <div id=\"tab";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_count"] ?? null)), "html", null, true);
                echo "\" class=\"tab-pane fade\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
                echo "</div>
      ";
            }
            // line 60
            echo "      ";
            $context["tab_count"] = (($context["tab_count"] ?? null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/unisson_disability/templates/field--paragraph--field-tabbed-block-fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 62,  124 => 60,  116 => 58,  109 => 56,  104 => 55,  100 => 54,  97 => 53,  95 => 52,  91 => 50,  84 => 48,  76 => 46,  69 => 44,  64 => 43,  60 => 42,  57 => 41,  55 => 40,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/unisson_disability/templates/field--paragraph--field-tabbed-block-fields.html.twig", "/home/npdpoe4s/public_html/themes/unisson_disability/templates/field--paragraph--field-tabbed-block-fields.html.twig");
    }
}
