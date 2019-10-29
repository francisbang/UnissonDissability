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

/* themes/unisson_disability/templates/field--paragraph--field-team-details.html.twig */
class __TwigTemplate_8dcf7e79c4a6d48cd4623a346c1f7aa0218f7ee25c4e2ae6b1689bd5e362e3a7 extends \Twig\Template
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
        echo "<ul id=\"myTab\" class=\"nav nav-tabs team\">
";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            echo "      ";
            if ((($context["tab_count"] ?? null) == 1)) {
                // line 44
                echo "      <li class=\"active\"><a data-toggle=\"tab\" href=\"#tab";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_count"] ?? null)), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", []), "#field_collection_item", [], "array"), "field_team_tab_heading", []), "value", [])), "html", null, true);
                echo "</a></li>
      ";
            } else {
                // line 46
                echo "      <li><a data-toggle=\"tab\" href=\"#tab";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_count"] ?? null)), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", []), "#field_collection_item", [], "array"), "field_team_tab_heading", []), "value", [])), "html", null, true);
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
        echo "\t<div class=\"tab-content team\">
\t";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 55
            echo "\t\t";
            if ((($context["tab_count"] ?? null) == 1)) {
                // line 56
                echo "\t\t<div class=\"tab-pane fade in active\" id=\"tab";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_count"] ?? null)), "html", null, true);
                echo "\">
\t\t";
                // line 57
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
                echo "
\t\t</div>
\t\t";
            } else {
                // line 60
                echo "\t\t<div class=\"tab-pane fade\" id=\"tab";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tab_count"] ?? null)), "html", null, true);
                echo "\">
\t\t";
                // line 61
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
                echo "
\t\t</div>
\t\t";
            }
            // line 64
            echo "\t\t";
            $context["tab_count"] = (($context["tab_count"] ?? null) + 1);
            // line 65
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/unisson_disability/templates/field--paragraph--field-team-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 66,  131 => 65,  128 => 64,  122 => 61,  117 => 60,  111 => 57,  106 => 56,  103 => 55,  99 => 54,  96 => 53,  94 => 52,  90 => 50,  83 => 48,  75 => 46,  67 => 44,  64 => 43,  60 => 42,  57 => 41,  55 => 40,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/unisson_disability/templates/field--paragraph--field-team-details.html.twig", "/home/npdpoe4s/public_html/themes/unisson_disability/templates/field--paragraph--field-team-details.html.twig");
    }
}
