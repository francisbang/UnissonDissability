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

/* themes/unisson_disability/templates/paragraph--paragraph-find-us.html.twig */
class __TwigTemplate_0acd71da01a3a0104fd6c6f293259b7966d73964a68f33fd19742d5e070915d1 extends \Twig\Template
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
        $tags = ["set" => 42, "block" => 48];
        $filters = ["clean_class" => 44, "escape" => 49];
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
        // line 87
        echo "  </div>
";
    }

    // line 50
    public function block_content($context, array $blocks = [])
    {
        // line 51
        echo "      <section class=\"map\" id=\"map-section\">
    <div class=\"wrapper\">
        <img src=\"/themes/unisson_disability/css/images/maps/SUN_A0114.Unisson.map.png\" alt=\"Unisson\" usemap=\"#Map\" />
\t\t<img style=\"display:none;\" id=\"imageHunter\" src=\"/themes/unisson_disability/css/images/maps/SUN_A0114.Unisson.map.hunter.png\" alt=\"Hunter Region\" />
        <img style=\"display:none;\" id=\"imageCentral\" src=\"/themes/unisson_disability/css/images/maps/SUN_A0114.Unisson.map.centralcoast.png\" alt=\"Central Coast\" />
        <img style=\"display:none;\" id=\"imageBlue\" src=\"/themes/unisson_disability/css/images/maps/SUN_A0114.Unisson.map.bluemoountains.png\" alt=\"Blue Mountains and Western Syndey\" />
        <img style=\"display:none;\" id=\"imageNorthShore\" src=\"/themes/unisson_disability/css/images/maps/SUN_A0114.Unisson.map.northshore.png\" alt=\"North Shore\" />
        <img style=\"display:none;\" id=\"imageNorthBeaches\" src=\"/themes/unisson_disability/css/images/maps/SUN_A0114.Unisson.map.northerbeaches.png\" alt=\"Northern Beaches\" />

        <map name=\"Map\" id=\"Map\">
            <!-- Hunter Region -->
            <area id=\"hunter\" alt=\"Hunter Region\" title=\"Hunter Region\" data-toggle=\"tab\" href=\"#tab2\" shape=\"poly\" coords=\"590,54,608,83,626,88,640,93,660,102,706,110,766,129,805,140,837,146,865,163,877,172,897,199,907,220,914,238,922,264,925,281,934,290,939,301,952,308,950,315,948,320,936,325,928,336,923,348,916,358,902,364,882,363,866,371,853,376,835,375,819,375,802,380,794,384,779,390,765,392,754,391,737,389,721,381,713,352,697,329,680,325,656,317,637,297,613,282,583,262,566,250,552,243,536,234,520,213,508,197,485,184,508,136,519,109,554,71\" />

            <!-- Central Coast -->
            <area id=\"centralCoast\" alt=\"Central Coast\" title=\"Central Coast\" data-toggle=\"tab\" href=\"#tab1\" shape=\"poly\" coords=\"653,319,651,322,666,324,681,329,690,331,697,335,700,337,705,345,709,351,712,358,711,362,712,367,714,375,713,383,717,388,723,391,729,395,738,403,742,416,741,425,740,433,736,439,732,442,727,445,732,452,733,457,738,459,739,471,741,476,743,482,748,488,751,491,754,499,757,505,758,518,753,523,748,532,741,540,736,547,730,555,724,560,717,565,712,568,707,569,699,570,691,571,685,573,678,576,672,573,665,565,655,560,647,551,637,544,629,537,621,535,613,536,603,536,594,538,586,538,577,537,567,532,562,518,557,502,554,492,556,474,562,449,558,434,557,422,562,407\" />

            <!-- Blue Mountains & Western Sydney -->
            <area id=\"blueMount\" alt=\"Blue Mountains & Western Sydney\" title=\"Blue Mountains & Western Sydney\" data-toggle=\"tab\" href=\"#tab5\" shape=\"poly\" coords=\"581,544,594,543,603,542,611,542,621,542,624,542,630,543,634,547,638,550,642,553,646,556,650,559,654,563,655,565,649,567,633,567,625,573,616,581,606,591,603,601,602,606,604,616,604,624,605,635,602,644,597,649,592,653,585,656,578,656,566,656,558,655,544,655,532,655,530,660,526,669,518,679,512,689,503,700,495,707,494,712,489,719,479,724,475,728,466,732,463,738,456,744,450,752,445,758,441,766,438,771,432,769,423,767,418,766,411,765,406,762,402,754,403,744,402,731,399,721,393,713,389,705,385,691,385,681,388,665,396,648,404,630,405,616,407,597,410,579,410,556,410,536,413,520,413,509,456,554,482,575,577,565,518,556,514,560,510,564,497,571,507,572,538,567\" />

            <!-- North Shore -->
            <area id=\"northShore\" alt=\"North Shore\" title=\"North Shore\" data-toggle=\"tab\" href=\"#tab3\" shape=\"poly\" coords=\"607,644,614,650,621,650,629,653,636,656,641,660,647,665,651,667,655,670,661,670,670,674,680,675,685,678,689,685,675,687,667,692,655,693,642,693,632,693,622,689,609,687,599,686,590,685,580,683,575,679,572,668,572,661\" />

            <!-- Northern Beaches -->
            <area id=\"northBeaches\" alt=\"Northern Beaches\" title=\"Northern Beaches\" data-toggle=\"tab\" href=\"#tab4\" shape=\"poly\" coords=\"664,569,674,578,684,580,691,580,690,586,685,596,680,599,682,607,690,612,692,613,700,591,702,593,701,583,704,595,702,602,701,609,698,616,694,626,689,632,689,638,685,648,684,654,683,663,684,667,683,671,675,670,666,669,661,666,652,664,643,657,639,654,632,649,626,646,617,643,611,641,609,633,605,619,605,606,607,594,622,580,631,571\" />
        </map>
    </div> <!-- end.wrapper -->
</section> <!-- end.map -->

      
      <section class=\"tabs-heading findus\">
\t  <div class=\"wrapper\">
\t\t      \t";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
\t  </div>
      </section>
      
    ";
    }

    public function getTemplateName()
    {
        return "themes/unisson_disability/templates/paragraph--paragraph-find-us.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 82,  82 => 51,  79 => 50,  74 => 87,  72 => 50,  67 => 49,  61 => 48,  59 => 45,  58 => 44,  57 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/unisson_disability/templates/paragraph--paragraph-find-us.html.twig", "/home/npdpoe4s/public_html/themes/unisson_disability/templates/paragraph--paragraph-find-us.html.twig");
    }
}
