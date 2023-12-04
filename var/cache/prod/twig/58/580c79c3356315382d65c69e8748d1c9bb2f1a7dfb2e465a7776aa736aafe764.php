<?php

/* @Product/CatalogPage/Forms/form_products.html.twig */
class __TwigTemplate_4a0c8255841e93e297aab450f6e3f12d3d54533647bf6e281476db99b7fa81c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'product_catalog_form_table' => array($this, 'block_product_catalog_form_table'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "<form
  name=\"product_catalog_list\"
  id=\"product_catalog_list\"
  method=\"post\"
  action=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => ($context["limit"] ?? null), "orderBy" => ($context["orderBy"] ?? null), "sortOrder" => ($context["sortOrder"] ?? null))), "html", null, true);
        echo "\"
  orderingurl=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("offset" => 0, "limit" => 300, "orderBy" => "position_ordering", "sortOrder" => ($context["sortOrder"] ?? null))), "html", null, true);
        echo "\"
  newproducturl=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_new");
        echo "\"
>
  <div class=\"row\">
    <div class=\"col-md-12\">
      <input type=\"hidden\" name=\"filter_category\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (((isset($context["filter_category"]) || array_key_exists("filter_category", $context))) ? (_twig_default_filter(($context["filter_category"] ?? null), "")) : ("")), "html", null, true);
        echo "\" />
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-12\">";
        // line 41
        $this->displayBlock('product_catalog_form_table', $context, $blocks);
        // line 62
        echo "    </div>
  </div>";
        // line 65
        if ((($context["product_count_filtered"] ?? null) > 20)) {
            // line 66
            echo "    <div class=\"row\">
      <div class=\"col-md-12\">";
            // line 68
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin\\Common:pagination", array("limit" =>             // line 69
($context["limit"] ?? null), "offset" => ($context["offset"] ?? null), "total" => ($context["product_count_filtered"] ?? null), "caller_parameters" => ($context["pagination_parameters"] ?? null), "limit_choices" => ($context["pagination_limit_choices"] ?? null))));
            // line 70
            echo "
      </div>
    </div>";
        }
        // line 74
        echo "</form>
";
    }

    // line 41
    public function block_product_catalog_form_table($context, array $blocks = array())
    {
        // line 42
        echo twig_include($this->env, $context, "@Product/CatalogPage/Lists/products_table.html.twig", array("limit" =>         // line 43
($context["limit"] ?? null), "orderBy" =>         // line 44
($context["orderBy"] ?? null), "offset" =>         // line 45
($context["offset"] ?? null), "sortOrder" =>         // line 46
($context["sortOrder"] ?? null), "filter_category" =>         // line 47
($context["filter_category"] ?? null), "filter_column_id_product" =>         // line 48
($context["filter_column_id_product"] ?? null), "filter_column_name" =>         // line 49
($context["filter_column_name"] ?? null), "filter_column_reference" =>         // line 50
($context["filter_column_reference"] ?? null), "filter_column_name_category" =>         // line 51
($context["filter_column_name_category"] ?? null), "filter_column_price" =>         // line 52
($context["filter_column_price"] ?? null), "filter_column_sav_quantity" =>         // line 53
($context["filter_column_sav_quantity"] ?? null), "filter_column_active" =>         // line 54
($context["filter_column_active"] ?? null), "has_category_filter" =>         // line 55
($context["has_category_filter"] ?? null), "activate_drag_and_drop" =>         // line 56
($context["activate_drag_and_drop"] ?? null), "products" =>         // line 57
($context["products"] ?? null), "last_sql" =>         // line 58
($context["last_sql"] ?? null)));
    }

    public function getTemplateName()
    {
        return "@Product/CatalogPage/Forms/form_products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 58,  90 => 57,  89 => 56,  88 => 55,  87 => 54,  86 => 53,  85 => 52,  84 => 51,  83 => 50,  82 => 49,  81 => 48,  80 => 47,  79 => 46,  78 => 45,  77 => 44,  76 => 43,  75 => 42,  72 => 41,  67 => 74,  62 => 70,  60 => 69,  59 => 68,  56 => 66,  54 => 65,  51 => 62,  49 => 41,  41 => 35,  34 => 31,  30 => 30,  26 => 29,  20 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Product/CatalogPage/Forms/form_products.html.twig", "C:\\xampp\\htdocs\\phoneshop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\CatalogPage\\Forms\\form_products.html.twig");
    }
}
