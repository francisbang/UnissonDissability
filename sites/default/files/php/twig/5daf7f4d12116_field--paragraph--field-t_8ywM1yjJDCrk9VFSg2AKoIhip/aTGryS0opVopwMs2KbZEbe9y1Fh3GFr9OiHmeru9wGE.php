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

/* themes/unisson_disability/templates/field--paragraph--field-text-image-right-fields.html.twig */
class __TwigTemplate_89273f2bcbf732990c02230f139a3ba55b6f91b92049abddb235c06b29d098b8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 44, "set" => 62, "if" => 66];
        $filters = ["escape" => 46];
        $functions = ["file_url" => 58];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape'],
                ['file_url']
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
        echo "<div class=\"text-col\">
<div class=\"wrap-text-col\">
<div id=\"text-slider\" class=\"flexslider text-slider\">
<ul class=\"slides\">
";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 45
            echo "      <li>
      ";
            // line 46
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
            echo "
      </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</ul>
</div>
</div>
</div>

<div class=\"img-bg slider\">
        <div id=\"bg-slider\" class=\"flexslider bg-slider\" >
            <ul class=\"slides\">
               ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 58
            echo "               \t\t<li class=\"slideshow_bg\"><img src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", []), "#field_collection_item", [], "array"), "field_text_image_right_image", []), "entity", []), "fileuri", []))]), "html", null, true);
            echo "\"></li>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            </ul>
        </div> <!-- end.vertical-slider -->
        ";
        // line 62
        $context["list_count"] = 0;
        // line 63
        echo "        <div class=\"vertical-slider\">
            <ul class=\"slides\">
            \t";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 66
            echo "            \t\t";
            if ((($context["list_count"] ?? null) == 0)) {
                // line 67
                echo "            \t\t\t<li data-slide=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_count"] ?? null)), "html", null, true);
                echo "\" class=\"slide_thumb active\"><img src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", []), "#field_collection_item", [], "array"), "field_text_image_right_image", []), "entity", []), "fileuri", []))]), "html", null, true);
                echo "\" alt=\"\"></li>
            \t\t";
            } else {
                // line 69
                echo "            \t\t\t<li data-slide=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_count"] ?? null)), "html", null, true);
                echo "\" class=\"slide_thumb\"><img src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", []), "#field_collection_item", [], "array"), "field_text_image_right_image", []), "entity", []), "fileuri", []))]), "html", null, true);
                echo "\" alt=\"\"></li>
            \t\t";
            }
            // line 71
            echo "\t\t\t\t\t";
            $context["list_count"] = (($context["list_count"] ?? null) + 1);
            // line 72
            echo "            \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            </ul>
        </div> <!-- end.vertical-slider -->
        ";
        // line 75
        $context["list_count"] = 0;
        // line 76
        echo "        <div class=\"horizontal-slider\">
            <ul class=\"slides\">
                ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 79
            echo "                ";
            if ((($context["list_count"] ?? null) == 0)) {
                // line 80
                echo "            \t\t\t<li data-slide=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_count"] ?? null)), "html", null, true);
                echo "\" class=\"slide_thumb active\"><img src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", []), "#field_collection_item", [], "array"), "field_text_image_right_image", []), "entity", []), "fileuri", []))]), "html", null, true);
                echo "\" alt=\"\"></li>
            \t\t";
            } else {
                // line 82
                echo "            \t\t\t<li data-slide=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_count"] ?? null)), "html", null, true);
                echo "\" class=\"slide_thumb\"><img src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", []), "#field_collection_item", [], "array"), "field_text_image_right_image", []), "entity", []), "fileuri", []))]), "html", null, true);
                echo "\" alt=\"\"></li>
            \t\t";
            }
            // line 84
            echo "\t\t\t\t\t";
            $context["list_count"] = (($context["list_count"] ?? null) + 1);
            // line 85
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "            </ul>
        </div> <!-- end.vertical-slider -->
    </div> <!-- end.img-bg -->
";
    }

    public function getTemplateName()
    {
        return "themes/unisson_disability/templates/field--paragraph--field-text-image-right-fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 86,  178 => 85,  175 => 84,  167 => 82,  159 => 80,  156 => 79,  152 => 78,  148 => 76,  146 => 75,  142 => 73,  136 => 72,  133 => 71,  125 => 69,  117 => 67,  114 => 66,  110 => 65,  106 => 63,  104 => 62,  100 => 60,  91 => 58,  87 => 57,  77 => 49,  68 => 46,  65 => 45,  61 => 44,  55 => 40,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/unisson_disability/templates/field--paragraph--field-text-image-right-fields.html.twig", "/home/npdpoe4s/public_html/themes/unisson_disability/templates/field--paragraph--field-text-image-right-fields.html.twig");
    }
}
