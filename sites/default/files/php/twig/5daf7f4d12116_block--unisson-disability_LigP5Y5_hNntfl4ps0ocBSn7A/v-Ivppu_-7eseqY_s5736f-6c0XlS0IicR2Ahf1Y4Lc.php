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

/* themes/unisson_disability/templates/block--unisson-disability-main-menu.html.twig */
class __TwigTemplate_49b523d704566bc0c32c4f92fcdb48a083fcbc7da255ab96a6cec05bebe4aae0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 35, "if" => 47, "block" => 54];
        $filters = ["clean_class" => 39, "clean_id" => 42, "escape" => 45, "without" => 45];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'clean_id', 'escape', 'without'],
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
        // line 35
        $context["classes"] = [0 => "block", 1 => "block-menu", 2 => "navigation", 3 => ("menu--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 39
($context["derivative_plugin_id"] ?? null))))];
        // line 42
        $context["heading_id"] = ($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "id", [])) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 43
        echo "<div class=\"contain-menu\">
<div class=\"wrapper\">
<nav role=\"navigation\" aria-labelledby=\"";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null)), "html", null, true);
        echo "\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "role", "aria-labelledby"), "html", null, true);
        echo ">
  ";
        // line 47
        echo "  ";
        if ( !$this->getAttribute(($context["configuration"] ?? null), "label_display", [])) {
            // line 48
            echo "    ";
            $context["title_attributes"] = $this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "visually-hidden"], "method");
            // line 49
            echo "  ";
        }
        // line 50
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  <h2";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "setAttribute", [0 => "id", 1 => ($context["heading_id"] ?? null)], "method")), "html", null, true);
        echo ">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["configuration"] ?? null), "label", [])), "html", null, true);
        echo "</h2>
  ";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 54
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "</nav>
</div>
</div>
";
    }

    // line 54
    public function block_content($context, array $blocks = [])
    {
        // line 55
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/unisson_disability/templates/block--unisson-disability-main-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 55,  105 => 54,  98 => 57,  95 => 54,  91 => 52,  85 => 51,  80 => 50,  77 => 49,  74 => 48,  71 => 47,  65 => 45,  61 => 43,  59 => 42,  57 => 39,  56 => 35,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/unisson_disability/templates/block--unisson-disability-main-menu.html.twig", "/home/npdpoe4s/public_html/themes/unisson_disability/templates/block--unisson-disability-main-menu.html.twig");
    }
}
