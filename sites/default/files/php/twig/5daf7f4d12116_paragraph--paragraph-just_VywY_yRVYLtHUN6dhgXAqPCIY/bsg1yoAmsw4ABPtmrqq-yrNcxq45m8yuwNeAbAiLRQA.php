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

/* themes/unisson_disability/templates/paragraph--paragraph-just-image.html.twig */
class __TwigTemplate_d4d02121d7e46be76a9641b7408e4b5d42df6e142e8d4df38520f1b8d819a6f6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 42, "block" => 48, "if" => 54];
        $filters = ["clean_class" => 44, "escape" => 49, "field_value" => 52, "striptags" => 54, "render" => 54, "trim" => 56];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape', 'field_value', 'striptags', 'render', 'trim'],
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
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 49
        echo "  <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
    ";
        // line 50
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "  </div>
";
    }

    // line 50
    public function block_content($context, array $blocks = [])
    {
        // line 51
        echo "      <div class=\"maincontent-post\">
      \t";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_text_field_pitv", []))), "html", null, true);
        echo "
      </div>
      ";
        // line 54
        if (twig_in_filter("image", strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_media_type", []))))) {
            echo "\t
      \t<div class=\"image-post\" id=\"image-post\">
\t      <img src=\"";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_post_image", []))))), "html", null, true);
            echo "\"><br>
\t      <div class=\"image-caption\">";
            // line 57
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image_caption", []))), "html", null, true);
            echo "</div>
\t\t</div>
      ";
        } else {
            // line 60
            echo "      \t<div class=\"image-post video\" id=\"image-post\">
\t      <a href=\"";
            // line 61
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_field_value\Twig\Extension\FieldValueExtension')->getFieldValue($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_video_url", []))), "html", null, true);
            echo "\" class=\"mfp-iframe\"><img src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_post_image", []))))), "html", null, true);
            echo "\"></a>
\t  </div>
      ";
        }
        // line 64
        echo "      ";
    }

    public function getTemplateName()
    {
        return "themes/unisson_disability/templates/paragraph--paragraph-just-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 64,  108 => 61,  105 => 60,  99 => 57,  95 => 56,  90 => 54,  85 => 52,  82 => 51,  79 => 50,  74 => 65,  72 => 50,  67 => 49,  61 => 48,  59 => 45,  58 => 44,  57 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/unisson_disability/templates/paragraph--paragraph-just-image.html.twig", "/home/npdpoe4s/public_html/themes/unisson_disability/templates/paragraph--paragraph-just-image.html.twig");
    }
}
