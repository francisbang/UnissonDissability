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

/* themes/unisson_disability/templates/paragraph--service-icons.html.twig */
class __TwigTemplate_4fe08500bd71b0d3d6da3f3e5b39077346a8d26f44184990ffd185117a69b66c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 42, "if" => 50, "block" => 54, "for" => 64];
        $filters = ["clean_class" => 44, "escape" => 55];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'for'],
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
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 44
($context["paragraph"] ?? null), "bundle", [])))), 2 => ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : (""))];
        // line 48
        echo "
";
        // line 49
        $context["width"] = "";
        // line 50
        if (twig_in_filter(1, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_wide", []), 0, []))) {
            // line 51
            echo "  ";
            $context["width"] = " wide";
        }
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('paragraph', $context, $blocks);
        // line 86
        echo "  
";
    }

    // line 54
    public function block_paragraph($context, array $blocks = [])
    {
        // line 55
        echo "  <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">

    <section class=\"services-icons";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null)), "html", null, true);
        echo "\">
        <div class=\"wrapper\">
            <h2>";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_heading", []), 0, [])), "html", null, true);
        echo "</h2>
            ";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_sub_copy", [])), "html", null, true);
        echo "
            <ul class=\"icons work\">

              ";
        // line 63
        $context["x"] = 0;
        // line 64
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["content"] ?? null), "field_icons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 65
            echo "      
                  ";
            // line 66
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_icons", []), ($context["x"] ?? null), [], "array")), "html", null, true);
            echo "
                  ";
            // line 67
            $context["x"] = (($context["x"] ?? null) + 1);
            // line 68
            echo "      
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "              ";
        // line 80
        echo "            </ul> <!-- end ul.icons -->
        </div> <!-- end.wrapper -->
    </section>    

  </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/unisson_disability/templates/paragraph--service-icons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 80,  128 => 70,  121 => 68,  119 => 67,  115 => 66,  112 => 65,  107 => 64,  105 => 63,  99 => 60,  95 => 59,  90 => 57,  84 => 55,  81 => 54,  76 => 86,  74 => 54,  71 => 53,  67 => 51,  65 => 50,  63 => 49,  60 => 48,  58 => 45,  57 => 44,  56 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/unisson_disability/templates/paragraph--service-icons.html.twig", "/home/npdpoe4s/public_html/themes/unisson_disability/templates/paragraph--service-icons.html.twig");
    }
}
