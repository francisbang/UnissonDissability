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

/* menu-levels.html.twig */
class __TwigTemplate_99e895ed57d801775781514634c889488aa462d4c4a6b238095ff333338a0e82 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 7, "for" => 13, "set" => 14];
        $filters = ["first" => 7, "escape" => 8, "without" => 21, "render" => 22, "trim" => 34, "striptags" => 34, "raw" => 36];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['first', 'escape', 'without', 'render', 'trim', 'striptags', 'raw'],
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
        // line 1
        echo "\t";
        // line 7
        if (($this->getAttribute(twig_first($this->env, ($context["items"] ?? null)), "menu_level", []) == 0)) {
            // line 8
            echo "<ul class=\"menu menu-level-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(twig_first($this->env, $this->sandbox->ensureToStringAllowed(($context["items"] ?? null))), "menu_level", [])), "html", null, true);
            echo " primary\">
";
        } else {
            // line 10
            echo "<ul class=\"menu menu-level-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(twig_first($this->env, $this->sandbox->ensureToStringAllowed(($context["items"] ?? null))), "menu_level", [])), "html", null, true);
            echo " submenu\">
<div class=\"wrapper\">
";
        }
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            if ((twig_first($this->env, $context["key"]) != "#")) {
                // line 14
                echo "  ";
                $context["menu_item_classes"] = [0 => "menu-item", 1 => (($this->getAttribute(                // line 16
$context["item"], "is_expanded", [])) ? ("menu-item--expanded") : ("")), 2 => (($this->getAttribute(                // line 17
$context["item"], "is_collapsed", [])) ? ("menu-item--collapsed") : ("")), 3 => (($this->getAttribute(                // line 18
$context["item"], "in_active_trail", [])) ? ("menu-item--active-trail") : (""))];
                // line 20
                echo "  
  ";
                // line 21
                $context["rendered_content"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "");
                // line 22
                echo "    ";
                if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["rendered_content"] ?? null))) {
                    // line 23
                    echo "      ";
                    $context["menu_dropdown_classes"] = [0 => "menu-dropdown", 1 => ("menu-dropdown-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(                    // line 25
$context["item"], "menu_level", []))), 2 => ("menu-type-" . $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(                    // line 26
$context["item"], "content", []), "#view_mode", [], "array")))];
                    // line 28
                    echo "   ";
                }
                // line 29
                echo "  
  <li";
                // line 30
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["menu_item_classes"] ?? null)], "method")), "html", null, true);
                echo ">
    <a href=\"";
                // line 31
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                echo "\">
    ";
                // line 32
                if (($this->getAttribute(twig_first($this->env, ($context["items"] ?? null)), "menu_level", []) == 0)) {
                    // line 33
                    echo "    ";
                } else {
                    // line 34
                    echo "    <i style=\"background: url('";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", []))))), "html", null, true);
                    echo "') no-repeat; background-size: 100%;\"></i>
    ";
                }
                // line 36
                echo "    ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])));
                echo "
    </a>
  </li>
  
  ";
                // line 40
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rendered_content"] ?? null)), "html", null, true);
                echo "
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        if (($this->getAttribute(twig_first($this->env, ($context["items"] ?? null)), "menu_level", []) == 0)) {
            // line 43
            echo "</ul>
";
        } else {
            // line 45
            echo "</div>
</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "menu-levels.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 45,  140 => 43,  138 => 42,  129 => 40,  121 => 36,  115 => 34,  112 => 33,  110 => 32,  106 => 31,  102 => 30,  99 => 29,  96 => 28,  94 => 26,  93 => 25,  91 => 23,  88 => 22,  86 => 21,  83 => 20,  81 => 18,  80 => 17,  79 => 16,  77 => 14,  72 => 13,  65 => 10,  59 => 8,  57 => 7,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "menu-levels.html.twig", "themes/unisson_disability/templates/menu-levels.html.twig");
    }
}
