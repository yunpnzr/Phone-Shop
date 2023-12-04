<?php

/* @Product/ProductPage/Forms/form_specific_price.html.twig */
class __TwigTemplate_7314db6727113140cc65f2a9cc594a676d1f6562a8828936dced924c2a9b1d72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        if ( !(isset($context["is_modal"]) || array_key_exists("is_modal", $context))) {
            // line 26
            $context["is_modal"] = false;
        }
        // line 29
        if ((($context["is_modal"] ?? null) == false)) {
            // line 30
            $context["column_default_md_3"] = "col-md-3";
            // line 31
            $context["column_default_md_2"] = "col-md-2";
            // line 32
            $context["column_default_xl_2"] = "col-xl-2";
        } else {
            // line 34
            $context["column_default_md_3"] = "col-md-9";
            // line 35
            $context["column_default_md_2"] = "col-md-4";
            // line 36
            $context["column_default_xl_2"] = "col-xl-4";
        }
        // line 38
        echo "
<div class=\"card card-block\">
  <h4><b>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Specific price conditions", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</b></h4>";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 43
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "sp_id_shop", array(), "any", false, true), "vars", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 44
            echo "  <div class=\"row\">
    <div class=\"col-md-4\">
      <fieldset class=\"form-group\">
        <label>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop", array(), "Admin.Global"), "html", null, true);
            echo "</label>";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_id_shop", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_id_shop", array()), 'widget');
            echo "
      </fieldset>
    </div>
  </div>";
        } else {
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_id_shop", array()), 'widget');
        }
        // line 56
        echo "
  <div class=\"row\">
    <div class=\"";
        // line 58
        echo twig_escape_filter($this->env, ($context["column_default_md_3"] ?? null), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("For", array(), "Admin.Global"), "html", null, true);
        echo "</label>";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_id_currency", array()), 'errors');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_id_currency", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["column_default_md_3"] ?? null), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_id_country", array()), 'errors');
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_id_country", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 72
        echo twig_escape_filter($this->env, ($context["column_default_md_3"] ?? null), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_id_group", array()), 'errors');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_id_group", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"col-md-6\">
      <fieldset class=\"form-group\">
        <label>";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer", array(), "Admin.Global"), "html", null, true);
        echo "</label>";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_id_customer", array()), 'errors');
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_id_customer", array()), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <div class=\"row\">
    <div id=\"specific-price-combination-selector\" class=\"col-md-6";
        // line 88
        echo ((($context["has_combinations"] ?? null)) ? ("") : ("hide"));
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "sp_id_product_attribute", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_id_product_attribute", array()), 'errors');
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_id_product_attribute", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"";
        // line 96
        echo twig_escape_filter($this->env, ($context["column_default_md_3"] ?? null), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "sp_from", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_from", array()), 'errors');
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_from", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 103
        echo twig_escape_filter($this->env, ($context["column_default_md_3"] ?? null), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("to", array(), "Admin.Global");
        echo "</label>";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_to", array()), 'errors');
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_to", array()), 'widget');
        echo "
      </fieldset>
    </div>";
        // line 110
        if ((($context["is_modal"] ?? null) == true)) {
            // line 111
            echo "  </div>
  <div class=\"row\">";
        }
        // line 114
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, ($context["column_default_md_2"] ?? null), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "sp_from_quantity", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_from_quantity", array()), 'errors');
        echo "
        <div class=\"input-group\">";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_from_quantity", array()), 'widget');
        echo "
          <div class=\"input-group-append\">
            <span class=\"input-group-text\">";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unit(s)", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
          </div>
        </div>
      </fieldset>
    </div>
  </div>
  <br>

  <h4><b>";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Impact on price", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</b></h4>
  <div class=\"row\">
    <div class=\"";
        // line 131
        echo twig_escape_filter($this->env, ($context["column_default_md_3"] ?? null), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "sp_price", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label>";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_price", array()), 'errors');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_price", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 138
        echo twig_escape_filter($this->env, ($context["column_default_md_3"] ?? null), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "leave_bprice", array()), 'errors');
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "leave_bprice", array()), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"";
        // line 147
        echo twig_escape_filter($this->env, ($context["column_default_xl_2"] ?? null), "html", null, true);
        echo " col-lg-3\">
      <fieldset class=\"form-group\">
        <label>";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Apply a discount of", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_reduction", array()), 'errors');
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_reduction", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 154
        echo twig_escape_filter($this->env, ($context["column_default_xl_2"] ?? null), "html", null, true);
        echo " col-lg-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_reduction_type", array()), 'errors');
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_reduction_type", array()), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 161
        echo twig_escape_filter($this->env, ($context["column_default_xl_2"] ?? null), "html", null, true);
        echo " col-lg-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_reduction_tax", array()), 'errors');
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sp_reduction_tax", array()), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <div class=\"col-md-12 text-sm-right\">";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cancel", array()), 'widget');
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "save", array()), 'widget');
        echo "
  </div>
  <div class=\"clearfix\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_specific_price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 171,  294 => 170,  287 => 165,  285 => 164,  280 => 161,  274 => 158,  272 => 157,  267 => 154,  261 => 151,  259 => 150,  256 => 149,  251 => 147,  243 => 142,  241 => 141,  236 => 138,  230 => 135,  228 => 134,  225 => 133,  220 => 131,  215 => 129,  204 => 121,  199 => 119,  195 => 117,  192 => 116,  186 => 114,  182 => 111,  180 => 110,  175 => 107,  173 => 106,  170 => 105,  165 => 103,  159 => 100,  157 => 99,  154 => 98,  149 => 96,  142 => 92,  140 => 91,  137 => 90,  132 => 88,  124 => 83,  122 => 82,  119 => 81,  111 => 76,  109 => 75,  104 => 72,  98 => 69,  96 => 68,  91 => 65,  85 => 62,  83 => 61,  80 => 60,  75 => 58,  71 => 56,  68 => 54,  61 => 49,  59 => 48,  56 => 47,  51 => 44,  49 => 43,  47 => 41,  44 => 40,  40 => 38,  37 => 36,  35 => 35,  33 => 34,  30 => 32,  28 => 31,  26 => 30,  24 => 29,  21 => 26,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Product/ProductPage/Forms/form_specific_price.html.twig", "C:\\xampp\\htdocs\\phoneshop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\ProductPage\\Forms\\form_specific_price.html.twig");
    }
}
