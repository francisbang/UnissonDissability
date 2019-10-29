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

/* themes/unisson_disability/templates/paragraph--video_and_text.html.twig */
class __TwigTemplate_e32a2765e73720fba0b90409ca39bec4b4cc494e7250247209f85ba3261ebafe extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 42, "block" => 50];
        $filters = ["clean_class" => 44, "escape" => 57];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
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
        // line 50
        $this->displayBlock('paragraph', $context, $blocks);
        // line 75
        echo "  
";
    }

    // line 50
    public function block_paragraph($context, array $blocks = [])
    {
        // line 51
        echo "<section class=\"tabs-heading work\">
    <div class=\"wrapper\">
        <div class=\"tab-content\">
            <div id=\"chapter1\" class=\"tab-pane fade in active\">
                <div class=\"col1\">
                    <div class=\"media video\">
                        <a href=\"";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_video_url", []), 0, [])), "html", null, true);
        echo "\" class=\"mfp-iframe\">
                            <img src=\"";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_video_image", []), 0, [])), "html", null, true);
        echo "\" alt=\"Unisson\">
                        </a>
                    </div> <!-- end.media-->
                </div> <!-- end.col1 -->

                <div class=\"col2\">
                    <div class=\"content\">
                        <h2>";
        // line 65
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_heading", []), 0, [])), "html", null, true);
        echo "</h2>
                        ";
        // line 66
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_sub_copy", []), 0, [])), "html", null, true);
        echo "
                    </div> <!-- end.content -->
                </div> <!-- end.col2 -->

            </div> <!-- end.tab-pane -->
        </div> <!-- end.tab-content -->
    </div> <!-- end.wrapper -->
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/unisson_disability/templates/paragraph--video_and_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 66,  96 => 65,  86 => 58,  82 => 57,  74 => 51,  71 => 50,  66 => 75,  64 => 50,  60 => 48,  58 => 45,  57 => 44,  56 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/unisson_disability/templates/paragraph--video_and_text.html.twig", "/home/npdpoe4s/public_html/themes/unisson_disability/templates/paragraph--video_and_text.html.twig");
    }
}
