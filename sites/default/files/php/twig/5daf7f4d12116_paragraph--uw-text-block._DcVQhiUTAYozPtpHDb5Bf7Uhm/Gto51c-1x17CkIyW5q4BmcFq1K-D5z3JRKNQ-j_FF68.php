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

/* themes/unisson_disability/templates/paragraph--uw-text-block.html.twig */
class __TwigTemplate_91fe71c190a6c70ce46ba790cba80c5987ba4ccca4d2639721f1d17d4b7b4ce6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 42, "block" => 51, "if" => 56];
        $filters = ["clean_class" => 45, "escape" => 52];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape'],
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
        // line 42
        $context["classes"] = [0 => "col-sm-6", 1 => "paragraph", 2 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 45
($context["paragraph"] ?? null), "bundle", [])))), 3 => ((        // line 46
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : (""))];
        // line 49
        echo "

";
        // line 51
        $this->displayBlock('paragraph', $context, $blocks);
        // line 63
        echo "  
";
    }

    // line 51
    public function block_paragraph($context, array $blocks = [])
    {
        // line 52
        echo "  <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
        <h2>";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_heading", []), 0, [])), "html", null, true);
        echo "</h2>
        <p>";
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_sub_copy", []), 0, [])), "html", null, true);
        echo "</p>

        ";
        // line 56
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cta_url", []), 0, []))) {
            // line 57
            echo "          ";
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cta_label", []), 0, []))) {
                // line 58
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cta_url", []), 0, [])), "html", null, true);
                echo "\" class=\"button\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cta_label", []), 0, [])), "html", null, true);
                echo "</a>
          ";
            }
            // line 60
            echo "        ";
        }
        // line 61
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/unisson_disability/templates/paragraph--uw-text-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 61,  101 => 60,  93 => 58,  90 => 57,  88 => 56,  83 => 54,  79 => 53,  74 => 52,  71 => 51,  66 => 63,  64 => 51,  60 => 49,  58 => 46,  57 => 45,  56 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/unisson_disability/templates/paragraph--uw-text-block.html.twig", "/home/npdpoe4s/public_html/themes/unisson_disability/templates/paragraph--uw-text-block.html.twig");
    }
}
