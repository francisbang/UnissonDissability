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

/* __string_template__205b316e2f12c1dba23b38220d7dad8a23c11e9c007f1646b16fbf812c224224 */
class __TwigTemplate_fcce390007b50f4574f8152aa795198fb4f37402da78ae325d11685414b7cf6b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 2, "set" => 3, "for" => 4];
        $filters = ["escape" => 1, "render" => 2, "split" => 3, "raw" => 5];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'render', 'split', 'raw'],
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
        echo "<h3>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_services_location"] ?? null)), "html", null, true);
        echo "</h3>
\t";
        // line 2
        if (twig_in_filter("||", $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["field_services_offered"] ?? null)))) {
            // line 3
            echo "\t ";
            $context["services_offered"] = twig_split_filter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["field_services_offered"] ?? null))), "||");
            // line 4
            echo "\t ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["services_offered"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
                // line 5
                echo "\t <div class=\"address\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["items"]));
                echo "</div>
\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "\t ";
        } else {
            // line 8
            echo "\t ";
            if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["field_services_offered"] ?? null)))) {
                // line 9
                echo "\t <div class=\"address\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_services_offered"] ?? null)), "html", null, true);
                echo "</div>
\t ";
            }
            // line 11
            echo " ";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__205b316e2f12c1dba23b38220d7dad8a23c11e9c007f1646b16fbf812c224224";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 11,  85 => 9,  82 => 8,  79 => 7,  70 => 5,  65 => 4,  62 => 3,  60 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__205b316e2f12c1dba23b38220d7dad8a23c11e9c007f1646b16fbf812c224224", "");
    }
}
