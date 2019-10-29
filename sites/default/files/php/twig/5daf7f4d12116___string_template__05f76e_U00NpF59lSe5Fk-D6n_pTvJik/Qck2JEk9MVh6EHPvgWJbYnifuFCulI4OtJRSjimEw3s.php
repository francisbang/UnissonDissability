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

/* __string_template__05f76e29d493ac4df92da23db5b0d8b9116fb95d89868ef6744500fe5aea5460 */
class __TwigTemplate_8a786e6d333b6269bceff0f0eefa1e82e8c7b4ed31f9773e3147bd3085934885 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 5];
        $filters = ["escape" => 1, "render" => 5];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'render'],
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
        echo "<img src=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_header_image"] ?? null)), "html", null, true);
        echo "\" id=\"title-header\">
<img src=\"";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_header_image_mobile"] ?? null)), "html", null, true);
        echo "\" id=\"title-header-mobile\">
<h1>
";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_header_main_heading"] ?? null)), "html", null, true);
        echo "<br>
";
        // line 5
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["field_header_sub_heading"] ?? null)))) {
            // line 6
            echo "<span class=\"yellow\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_header_sub_heading"] ?? null)), "html", null, true);
            echo "</span>
";
        }
        // line 8
        echo "</h1>";
    }

    public function getTemplateName()
    {
        return "__string_template__05f76e29d493ac4df92da23db5b0d8b9116fb95d89868ef6744500fe5aea5460";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 8,  71 => 6,  69 => 5,  65 => 4,  60 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__05f76e29d493ac4df92da23db5b0d8b9116fb95d89868ef6744500fe5aea5460", "");
    }
}
