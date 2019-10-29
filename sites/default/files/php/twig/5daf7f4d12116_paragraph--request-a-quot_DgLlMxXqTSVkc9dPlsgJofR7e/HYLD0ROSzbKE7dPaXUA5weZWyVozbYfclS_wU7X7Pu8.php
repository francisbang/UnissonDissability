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

/* themes/unisson_disability/templates/paragraph--request-a-quote.html.twig */
class __TwigTemplate_c0782c226384bb8ab17b942640f3ab5233c85e152b24c4e9107eec6177f486a5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 42, "block" => 51, "if" => 66];
        $filters = ["clean_class" => 45, "escape" => 56];
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
        // line 102
        echo "  
";
    }

    // line 51
    public function block_paragraph($context, array $blocks = [])
    {
        // line 52
        echo "
  <section class=\"contact-form work\">
      <div class=\"wrapper\">
          <div class=\"heading\">
              <h2>";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_heading", []), 0, [])), "html", null, true);
        echo "</h2>
              <h3>";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_sub", []), 0, [])), "html", null, true);
        echo "</h3>
          </div>
          <div class=\"contact-fields\">
              ";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["unisson_works_contact_from_block"] ?? null)), "html", null, true);
        echo "
          </div> <!-- end.contact-fields -->
          <div class=\"contact-info\">
              <div class=\"wrapper-info\">
                  <h2>";
        // line 64
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_contact_info_heading", []), 0, [])), "html", null, true);
        echo "</h2>
                  <p>
                      ";
        // line 66
        if (($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_contact_info_phone", []), 0, []) != "")) {
            // line 67
            echo "                      <strong>T </strong>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_contact_info_phone", []), 0, [])), "html", null, true);
            echo "<br>
                      ";
        }
        // line 69
        echo "                      ";
        if (($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_contact_info_fax", []), 0, []) != "")) {
            // line 70
            echo "                      <strong>F </strong>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_contact_info_fax", []), 0, [])), "html", null, true);
            echo "<br>
                      ";
        }
        // line 72
        echo "                      ";
        if (($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_contact_info_email", []), 0, []) != "")) {
            // line 73
            echo "                      <strong>E </strong><a href=\"mailto:";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_contact_info_email", []), 0, [])), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_contact_info_email", []), 0, [])), "html", null, true);
            echo "</a><br>
                      ";
        }
        // line 75
        echo "                  </p>

                  ";
        // line 77
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_contact_info_cta_url", []), 0, []))) {
            // line 78
            echo "                    ";
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_contact_info_cta_label", []), 0, []))) {
                // line 79
                echo "                      <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_contact_info_cta_url", []), 0, [])), "html", null, true);
                echo "\" class=\"button\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_contact_info_cta_label", []), 0, [])), "html", null, true);
                echo "</a>
                    ";
            }
            // line 81
            echo "                  ";
        }
        // line 82
        echo "              </div>
              <div class=\"wrapper-info\">
                  <h2>";
        // line 84
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_extra_section_heading", []), 0, [])), "html", null, true);
        echo "</h2>
                  <a href=\"";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_extra_section_cra_url", []), 0, [])), "html", null, true);
        echo "\" class=\"button\">FAQs</a>
              </div>
              <div class=\"wrapper-info social\">
                  <h3>Connect<br>with US</h3>
                  ";
        // line 89
        if (($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_facebook_url", []), 0, []) != "")) {
            // line 90
            echo "                  <span><a target=\"_blank\" href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_facebook_url", []), 0, [])), "html", null, true);
            echo "\"><img src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
            echo "/images/facebook-work.png\" width=\"30px\" alt=\"Unisson\"></a></span>
                  ";
        }
        // line 92
        echo "
                  ";
        // line 93
        if (($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_linkedin_url", []), 0, []) != "")) {
            // line 94
            echo "                  <span><a target=\"_blank\" href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_linkedin_url", []), 0, [])), "html", null, true);
            echo "\"><img width=\"30px\" src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
            echo "/images/linkedin-work.png\" alt=\"Unisson\"></a></span>
                  ";
        }
        // line 96
        echo "              </div>
          </div> <!-- end.contact-info -->
      </div> <!-- end.wrapper -->
  </section>

";
    }

    public function getTemplateName()
    {
        return "themes/unisson_disability/templates/paragraph--request-a-quote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 96,  180 => 94,  178 => 93,  175 => 92,  167 => 90,  165 => 89,  158 => 85,  154 => 84,  150 => 82,  147 => 81,  139 => 79,  136 => 78,  134 => 77,  130 => 75,  122 => 73,  119 => 72,  113 => 70,  110 => 69,  104 => 67,  102 => 66,  97 => 64,  90 => 60,  84 => 57,  80 => 56,  74 => 52,  71 => 51,  66 => 102,  64 => 51,  60 => 49,  58 => 46,  57 => 45,  56 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/unisson_disability/templates/paragraph--request-a-quote.html.twig", "/home/npdpoe4s/public_html/themes/unisson_disability/templates/paragraph--request-a-quote.html.twig");
    }
}
