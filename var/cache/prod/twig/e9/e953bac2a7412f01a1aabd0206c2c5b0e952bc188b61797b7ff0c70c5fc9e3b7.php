<?php

/* @PrestaShop/Admin/Product/ProductPage/product.html.twig */
class __TwigTemplate_cf8754d6427db00818abbd914e80abac6748e08a26772722be4d1bddf43e3fdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'product_header' => array($this, 'block_product_header'),
            'product_tabs_container' => array($this, 'block_product_tabs_container'),
            'product_panel_essentials' => array($this, 'block_product_panel_essentials'),
            'product_panel_combinations' => array($this, 'block_product_panel_combinations'),
            'product_panel_shipping' => array($this, 'block_product_panel_shipping'),
            'product_panel_pricing' => array($this, 'block_product_panel_pricing'),
            'product_panel_seo' => array($this, 'block_product_panel_seo'),
            'product_panel_options' => array($this, 'block_product_panel_options'),
            'product_panel_modules' => array($this, 'block_product_panel_modules'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 329
        $context["js_translatable"] = twig_array_merge(array("Are you sure to disable variations ? they will all be deleted" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will delete all the combinations. Do you wish to proceed?", array(), "Admin.Catalog.Notification")),         // line 331
($context["js_translatable"] ?? null));
        // line 333
        $context["js_translatable"] = twig_array_merge(array("Form update success" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Settings updated.", array(), "Admin.Notifications.Success"), "Form update errors" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unable to update settings.", array(), "Admin.Notifications.Error"), "Delete" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", array(), "Admin.Actions"), "ToLargeFile" => twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The file is too large. Maximum size allowed is: [1]. The file you are trying to upload is [2].", array(), "Admin.Notifications.Error"), array("[1]" => "{{maxFilesize}}", "[2]" => "{{filesize}}")), "Drop images here" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Drop images here", array(), "Admin.Catalog.Feature"), "or select files" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("or select files", array(), "Admin.Catalog.Feature"), "files recommandations" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Recommended size 800 x 800px for default theme.", array(), "Admin.Catalog.Feature"), "files recommandations2" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("JPG, GIF or PNG format.", array(), "Admin.Catalog.Feature"), "Cover" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cover", array(), "Admin.Catalog.Feature"), "Are you sure to delete this?" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure to delete this?", array(), "Admin.Notifications.Warning"), "This will delete the specific price. Do you wish to proceed?" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will delete the specific price. Do you wish to proceed?", array(), "Admin.Catalog.Notification"), "Quantities" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantities", array(), "Admin.Catalog.Feature"), "Combinations" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations", array(), "Admin.Catalog.Feature"), "Virtual product" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Virtual product", array(), "Admin.Catalog.Feature"), "tax incl." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tax incl.", array(), "Admin.Catalog.Feature"), "tax excl." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tax excl.", array(), "Admin.Catalog.Feature"), "You can't create pack product with variations. Are you sure to disable variations ? they will all be deleted." => (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A pack of products can't have combinations.", array(), "Admin.Catalog.Notification") . " ") . $this->getAttribute(        // line 350
($context["js_translatable"] ?? null), "Are you sure to disable variations ? they will all be deleted", array(), "array")), "You can't create virtual product with variations. Are you sure to disable variations ? they will all be deleted." => (($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A virtual product can't have combinations.", array(), "Admin.Catalog.Notification") . " ") . $this->getAttribute(        // line 351
($context["js_translatable"] ?? null), "Are you sure to disable variations ? they will all be deleted", array(), "array"))),         // line 352
($context["js_translatable"] ?? null));
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "
  <form name=\"form\" id=\"form\" method=\"post\" class=\"form-horizontal product-page row justify-content-md-center\" novalidate=\"novalidate\">";
        // line 31
        if ( !($context["editable"] ?? null)) {
            echo " <fieldset disabled id=\"field-disabled\">";
        }
        // line 33
        $this->displayBlock('product_header', $context, $blocks);
        // line 44
        echo "
    <div class=\"col-md-10\">
      <div id=\"form_bubbling_errors\">";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
      </div>
    </div>

    <div id=\"form-loading\" class=\"col-xxl-10\">";
        // line 53
        $this->displayBlock('product_tabs_container', $context, $blocks);
        // line 56
        echo "      <div id=\"form_content\" class=\"tab-content\">";
        // line 59
        $this->displayBlock('product_panel_essentials', $context, $blocks);
        // line 82
        $this->displayBlock('product_panel_combinations', $context, $blocks);
        // line 106
        $this->displayBlock('product_panel_shipping', $context, $blocks);
        // line 127
        $this->displayBlock('product_panel_pricing', $context, $blocks);
        // line 136
        $this->displayBlock('product_panel_seo', $context, $blocks);
        // line 144
        $this->displayBlock('product_panel_options', $context, $blocks);
        // line 152
        $this->displayBlock('product_panel_modules', $context, $blocks);
        // line 248
        echo "      </div>";
        // line 250
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "id_product", array()), 'widget');
        // line 251
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'widget');
        echo "

    </div>";
        // line 255
        echo twig_include($this->env, $context, "@Product/ProductPage/Blocks/footer.html.twig", array("preview_link" =>         // line 256
($context["preview_link"] ?? null), "preview_link_deactivate" =>         // line 257
($context["preview_link_deactivate"] ?? null), "is_shop_context" =>         // line 258
($context["is_shop_context"] ?? null), "editable" =>         // line 259
($context["editable"] ?? null), "is_active" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 260
($context["form"] ?? null), "step1", array()), "vars", array()), "value", array()), "active", array()), "productId" =>         // line 261
($context["id_product"] ?? null)));
        // line 263
        if ( !($context["editable"] ?? null)) {
            echo " </fieldset>";
        }
        // line 264
        echo "  </form>";
        // line 267
        $this->loadTemplate("@PrestaShop/Admin/Product/ProductPage/product.html.twig", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", 267, "2000488614")->display(array_merge($context, array("id" => "confirmation_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Warning", array(), "Admin.Notifications.Warning"), "closable" => false, "actions" => array(0 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No", array(), "Admin.Global"), "class" => "btn btn-outline-secondary btn-lg cancel"), 1 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes", array(), "Admin.Global"), "class" => "btn btn-primary btn-lg continue")))));
    }

    // line 33
    public function block_product_header($context, array $blocks = array())
    {
        // line 34
        echo twig_include($this->env, $context, "@Product/ProductPage/Blocks/header.html.twig", array("formName" => $this->getAttribute($this->getAttribute(        // line 35
($context["form"] ?? null), "step1", array()), "name", array()), "formType" => $this->getAttribute($this->getAttribute(        // line 36
($context["form"] ?? null), "step1", array()), "type_product", array()), "is_multishop_context" =>         // line 37
($context["is_multishop_context"] ?? null), "languages" =>         // line 38
($context["languages"] ?? null), "help_link" =>         // line 39
($context["help_link"] ?? null), "stats_link" =>         // line 40
($context["stats_link"] ?? null)));
    }

    // line 53
    public function block_product_tabs_container($context, array $blocks = array())
    {
        // line 54
        echo twig_include($this->env, $context, "@Product/ProductPage/Blocks/tabs.html.twig");
    }

    // line 59
    public function block_product_panel_essentials($context, array $blocks = array())
    {
        // line 60
        $context["formQuantityShortcut"] = (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array(), "any", false, true), "qty_0_shortcut", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step1", array()), "qty_0_shortcut", array())) : (null));
        // line 61
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/essentials.html.twig", array("formPackItems" => $this->getAttribute($this->getAttribute(        // line 62
($context["form"] ?? null), "step1", array()), "inputPackItems", array()), "productId" =>         // line 63
($context["id_product"] ?? null), "images" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 64
($context["form"] ?? null), "step1", array()), "vars", array()), "value", array()), "images", array()), "formShortDescription" => $this->getAttribute($this->getAttribute(        // line 65
($context["form"] ?? null), "step1", array()), "description_short", array()), "formDescription" => $this->getAttribute($this->getAttribute(        // line 66
($context["form"] ?? null), "step1", array()), "description", array()), "formFeatures" => $this->getAttribute($this->getAttribute(        // line 67
($context["form"] ?? null), "step1", array()), "features", array()), "formManufacturer" => $this->getAttribute($this->getAttribute(        // line 68
($context["form"] ?? null), "step1", array()), "id_manufacturer", array()), "formRelatedProducts" => $this->getAttribute($this->getAttribute(        // line 69
($context["form"] ?? null), "step1", array()), "related_products", array()), "is_combination_active" =>         // line 70
($context["is_combination_active"] ?? null), "has_combinations" =>         // line 71
($context["has_combinations"] ?? null), "formReference" => $this->getAttribute($this->getAttribute(        // line 72
($context["form"] ?? null), "step6", array()), "reference", array()), "formQuantityShortcut" =>         // line 73
($context["formQuantityShortcut"] ?? null), "formPriceShortcut" => $this->getAttribute($this->getAttribute(        // line 74
($context["form"] ?? null), "step1", array()), "price_shortcut", array()), "formPriceShortcutTTC" => $this->getAttribute($this->getAttribute(        // line 75
($context["form"] ?? null), "step1", array()), "price_ttc_shortcut", array()), "formCategories" => $this->getAttribute(        // line 76
($context["form"] ?? null), "step1", array())));
    }

    // line 82
    public function block_product_panel_combinations($context, array $blocks = array())
    {
        // line 83
        $context["formStockQuantity"] = (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array(), "any", false, true), "qty_0", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "step3", array()), "qty_0", array())) : (null));
        // line 84
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/combinations.html.twig", array("formDependsOnStocks" => $this->getAttribute($this->getAttribute(        // line 85
($context["form"] ?? null), "step3", array()), "depends_on_stock", array()), "productId" =>         // line 86
($context["id_product"] ?? null), "formStockQuantity" =>         // line 87
($context["formStockQuantity"] ?? null), "formStockMinimalQuantity" => $this->getAttribute($this->getAttribute(        // line 88
($context["form"] ?? null), "step3", array()), "minimal_quantity", array()), "formLowStockThreshold" => $this->getAttribute($this->getAttribute(        // line 89
($context["form"] ?? null), "step3", array()), "low_stock_threshold", array()), "formLocation" => $this->getAttribute($this->getAttribute(        // line 90
($context["form"] ?? null), "step3", array()), "location", array()), "formLowStockAlert" => $this->getAttribute($this->getAttribute(        // line 91
($context["form"] ?? null), "step3", array()), "low_stock_alert", array()), "formVirtualProduct" => $this->getAttribute($this->getAttribute(        // line 92
($context["form"] ?? null), "step3", array()), "virtual_product", array()), "asm_globally_activated" =>         // line 93
($context["asm_globally_activated"] ?? null), "formType" => $this->getAttribute($this->getAttribute(        // line 94
($context["form"] ?? null), "step1", array()), "type_product", array()), "formAdvancedStockManagement" => $this->getAttribute($this->getAttribute(        // line 95
($context["form"] ?? null), "step3", array()), "advanced_stock_management", array()), "formPackStockType" => $this->getAttribute($this->getAttribute(        // line 96
($context["form"] ?? null), "step3", array()), "pack_stock_type", array()), "formStep3" => $this->getAttribute(        // line 97
($context["form"] ?? null), "step3", array()), "formCombinations" =>         // line 98
($context["formCombinations"] ?? null), "has_combinations" =>         // line 99
($context["has_combinations"] ?? null), "max_upload_size" =>         // line 100
($context["max_upload_size"] ?? null)));
    }

    // line 106
    public function block_product_panel_shipping($context, array $blocks = array())
    {
        // line 107
        echo "          <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step4\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"container-fluid\">
                  <div class=\"row\">";
        // line 112
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_shipping.html.twig", array("form" => $this->getAttribute(        // line 113
($context["form"] ?? null), "step4", array()), "asm_globally_activated" =>         // line 114
($context["asm_globally_activated"] ?? null), "isNotVirtual" => ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 115
($context["form"] ?? null), "step1", array()), "type_product", array()), "vars", array()), "value", array()) != "2"), "isChecked" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 116
($context["form"] ?? null), "step3", array()), "advanced_stock_management", array()), "vars", array()), "checked", array()), "warehouses" =>         // line 117
($context["warehouses"] ?? null)));
        // line 118
        echo "
                  </div>
                </div>
              </div>
            </div>
          </div>";
    }

    // line 127
    public function block_product_panel_pricing($context, array $blocks = array())
    {
        // line 128
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/pricing.html.twig", array("pricingForm" => $this->getAttribute(        // line 129
($context["form"] ?? null), "step2", array()), "is_multishop_context" =>         // line 130
($context["is_multishop_context"] ?? null), "productId" =>         // line 131
($context["id_product"] ?? null)));
    }

    // line 136
    public function block_product_panel_seo($context, array $blocks = array())
    {
        // line 137
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/seo.html.twig", array("seoForm" => $this->getAttribute(        // line 138
($context["form"] ?? null), "step5", array()), "productId" =>         // line 139
($context["id_product"] ?? null)));
    }

    // line 144
    public function block_product_panel_options($context, array $blocks = array())
    {
        // line 145
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/options.html.twig", array("optionsForm" => $this->getAttribute(        // line 146
($context["form"] ?? null), "step6", array()), "productId" =>         // line 147
($context["id_product"] ?? null)));
    }

    // line 152
    public function block_product_panel_modules($context, array $blocks = array())
    {
        // line 153
        if (($this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->hookCount("displayAdminProductsExtra") > 0)) {
            // line 154
            echo "            <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"hooks\">
              <div class=\"row\">
                <div class=\"col-md-12\">
                  <div class=\"container-fluid\">
                    <div class=\"row\">";
            // line 161
            echo "                      <div class=\"col-md-12\">";
            // line 162
            $context["hooks"] = $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHooksArray("displayAdminProductsExtra", array("id_product" => ($context["id_product"] ?? null)));
            // line 163
            echo "
                        <div class=\"row module-selection\" style=\"display: none;\">
                          <div class=\"col-md-12 col-lg-7\">";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 167
                echo "                              <div class=\"module-render-container module-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "name", array()), "html", null, true);
                echo "\">
                                <div>
                                  <img class=\"top-logo\" src=\"";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "img", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array()), "html", null, true);
                echo "\">
                                  <h2 class=\"text-ellipsis module-name-grid\">";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array()), "html", null, true);
                echo "
                                  </h2>
                                  <div class=\"text-ellipsis small-text module-version\">";
                // line 174
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "version", array()), "html", null, true);
                echo " by";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "author", array()), "html", null, true);
                echo "
                                  </div>
                                </div>
                                <div class=\"small no-padding\">";
                // line 178
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "description", array()), "html", null, true);
                echo "
                                </div>
                              </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "                          </div>
                          <div class=\"col-md-12 col-lg-5\">
                            <h2>";
            // line 184
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Module to configure", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</h2>
                            <select class=\"modules-list-select\" data-toggle=\"select2\">";
            // line 186
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 187
                echo "                                <option value=\"module-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "name", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array()), "html", null, true);
                echo "</option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "                            </select>
                          </div>
                        </div>

                        <div class=\"module-render-container all-modules\">
                          <p>
                            <h2>";
            // line 195
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose a module to configure", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "</h2>";
            // line 196
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These modules are relative to the product page of your shop.", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "<br />";
            // line 197
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To manage all your modules go to the [1]Installed module page[/1]", array(), "Admin.Catalog.Feature"), array("[1]" => (("<a href=\"" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_manage")) . "\">"), "[/1]" => "</a>"));
            echo "
                          </p>
                          <div class=\"row\">";
            // line 200
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 201
                echo "                              <div class=\"col-md-12 col-lg-6 col-xl-4\">
                                <div class=\"module-item-wrapper-grid\">
                                  <div class=\"module-item-heading-grid\">
                                    <img class=\"module-logo-thumb-grid\" src=\"";
                // line 204
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "img", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array()), "html", null, true);
                echo "\">
                                    <h3 class=\"text-ellipsis module-name-grid\">";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "displayName", array()), "html", null, true);
                echo "
                                    </h3>
                                    <div class=\"text-ellipsis small-text module-version-author-grid\">";
                // line 209
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "version", array()), "html", null, true);
                echo " by";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "author", array()), "html", null, true);
                echo "
                                    </div>
                                  </div>
                                  <div class=\"module-quick-description-grid small no-padding\">";
                // line 213
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "description", array()), "html", null, true);
                echo "
                                  </div>
                                  <div class=\"module-container\">
                                    <div class=\"module-quick-action-grid clearfix\">
                                      <button class=\"modules-list-button btn btn-outline-primary pull-xs-right\" data-target=\"module-";
                // line 217
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
                echo "\">";
                // line 218
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configure", array(), "Admin.Actions"), "html", null, true);
                echo "
                                      </button>
                                    </div>
                                  </div>
                                </div>
                              </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "                          </div>
                        </div>";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hooks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 229
                echo "                          <div
                            id=\"module_";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
                echo "\"
                            class=\"module-render-container module-";
                // line 231
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "name", array()), "html", null, true);
                echo "\"
                            style=\"display: none;\"
                          >
                            <div>";
                // line 235
                echo $this->getAttribute($context["module"], "content", array());
                echo "
                            </div>
                          </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 239
            echo "                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>";
        }
    }

    // line 291
    public function block_javascripts($context, array $blocks = array())
    {
        // line 292
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/form.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/catalog_product.bundle.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-manufacturer.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-related.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-category-tags.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/default-category.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/product-combinations.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/category-tree.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/module_card.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/modal-confirmation.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/tiny_mce/tiny_mce.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/admin/tinymce.inc.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/admin/tinymce_loader.js"), "html", null, true);
        echo "\"></script>

  <script>
      \$(function() {
        var editable = '";
        // line 310
        echo twig_escape_filter($this->env, ($context["editable"] ?? null), "html", null, true);
        echo "';

        if (editable !== '1'){
          \$('#field-disabled').find(\"select\").each(function() {
            \$(this).removeClass('select2-hidden-accessible');
          });
          \$('#field-disabled').find(\"span.select2\").each(function() {
            \$(this).hide();
          });
          \$('#field-disabled').find(\"a.pstaggerClosingCross\").each(function() {
            \$(this).attr(\"disabled\", \"disabled\").on(\"click\", function() {
              return false;
            });
          });
        }
      });
  </script>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/ProductPage/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  488 => 310,  481 => 306,  477 => 305,  473 => 304,  469 => 303,  465 => 302,  461 => 301,  457 => 300,  453 => 299,  449 => 298,  445 => 297,  441 => 296,  436 => 294,  432 => 293,  428 => 292,  425 => 291,  414 => 239,  405 => 235,  399 => 231,  395 => 230,  392 => 229,  388 => 228,  385 => 225,  373 => 218,  370 => 217,  363 => 213,  355 => 209,  350 => 206,  344 => 204,  339 => 201,  335 => 200,  330 => 197,  327 => 196,  324 => 195,  316 => 189,  306 => 187,  302 => 186,  298 => 184,  294 => 182,  285 => 178,  277 => 174,  272 => 171,  266 => 169,  260 => 167,  256 => 166,  252 => 163,  250 => 162,  248 => 161,  242 => 154,  240 => 153,  237 => 152,  233 => 147,  232 => 146,  231 => 145,  228 => 144,  224 => 139,  223 => 138,  222 => 137,  219 => 136,  215 => 131,  214 => 130,  213 => 129,  212 => 128,  209 => 127,  200 => 118,  198 => 117,  197 => 116,  196 => 115,  195 => 114,  194 => 113,  193 => 112,  187 => 107,  184 => 106,  180 => 100,  179 => 99,  178 => 98,  177 => 97,  176 => 96,  175 => 95,  174 => 94,  173 => 93,  172 => 92,  171 => 91,  170 => 90,  169 => 89,  168 => 88,  167 => 87,  166 => 86,  165 => 85,  164 => 84,  162 => 83,  159 => 82,  155 => 76,  154 => 75,  153 => 74,  152 => 73,  151 => 72,  150 => 71,  149 => 70,  148 => 69,  147 => 68,  146 => 67,  145 => 66,  144 => 65,  143 => 64,  142 => 63,  141 => 62,  140 => 61,  138 => 60,  135 => 59,  131 => 54,  128 => 53,  124 => 40,  123 => 39,  122 => 38,  121 => 37,  120 => 36,  119 => 35,  118 => 34,  115 => 33,  111 => 267,  109 => 264,  105 => 263,  103 => 261,  102 => 260,  101 => 259,  100 => 258,  99 => 257,  98 => 256,  97 => 255,  92 => 251,  90 => 250,  88 => 248,  86 => 152,  84 => 144,  82 => 136,  80 => 127,  78 => 106,  76 => 82,  74 => 59,  72 => 56,  70 => 53,  63 => 47,  59 => 44,  57 => 33,  53 => 31,  50 => 28,  47 => 27,  43 => 25,  41 => 352,  40 => 351,  39 => 350,  38 => 333,  36 => 331,  35 => 329,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", "C:\\xampp\\htdocs\\phoneshop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\ProductPage\\product.html.twig");
    }
}


/* @PrestaShop/Admin/Product/ProductPage/product.html.twig */
class __TwigTemplate_cf8754d6427db00818abbd914e80abac6748e08a26772722be4d1bddf43e3fdf_2000488614 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 267
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", 267);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 284
    public function block_content($context, array $blocks = array())
    {
        // line 285
        echo "      <div class=\"modal-body\"></div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/ProductPage/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  566 => 285,  563 => 284,  546 => 267,  488 => 310,  481 => 306,  477 => 305,  473 => 304,  469 => 303,  465 => 302,  461 => 301,  457 => 300,  453 => 299,  449 => 298,  445 => 297,  441 => 296,  436 => 294,  432 => 293,  428 => 292,  425 => 291,  414 => 239,  405 => 235,  399 => 231,  395 => 230,  392 => 229,  388 => 228,  385 => 225,  373 => 218,  370 => 217,  363 => 213,  355 => 209,  350 => 206,  344 => 204,  339 => 201,  335 => 200,  330 => 197,  327 => 196,  324 => 195,  316 => 189,  306 => 187,  302 => 186,  298 => 184,  294 => 182,  285 => 178,  277 => 174,  272 => 171,  266 => 169,  260 => 167,  256 => 166,  252 => 163,  250 => 162,  248 => 161,  242 => 154,  240 => 153,  237 => 152,  233 => 147,  232 => 146,  231 => 145,  228 => 144,  224 => 139,  223 => 138,  222 => 137,  219 => 136,  215 => 131,  214 => 130,  213 => 129,  212 => 128,  209 => 127,  200 => 118,  198 => 117,  197 => 116,  196 => 115,  195 => 114,  194 => 113,  193 => 112,  187 => 107,  184 => 106,  180 => 100,  179 => 99,  178 => 98,  177 => 97,  176 => 96,  175 => 95,  174 => 94,  173 => 93,  172 => 92,  171 => 91,  170 => 90,  169 => 89,  168 => 88,  167 => 87,  166 => 86,  165 => 85,  164 => 84,  162 => 83,  159 => 82,  155 => 76,  154 => 75,  153 => 74,  152 => 73,  151 => 72,  150 => 71,  149 => 70,  148 => 69,  147 => 68,  146 => 67,  145 => 66,  144 => 65,  143 => 64,  142 => 63,  141 => 62,  140 => 61,  138 => 60,  135 => 59,  131 => 54,  128 => 53,  124 => 40,  123 => 39,  122 => 38,  121 => 37,  120 => 36,  119 => 35,  118 => 34,  115 => 33,  111 => 267,  109 => 264,  105 => 263,  103 => 261,  102 => 260,  101 => 259,  100 => 258,  99 => 257,  98 => 256,  97 => 255,  92 => 251,  90 => 250,  88 => 248,  86 => 152,  84 => 144,  82 => 136,  80 => 127,  78 => 106,  76 => 82,  74 => 59,  72 => 56,  70 => 53,  63 => 47,  59 => 44,  57 => 33,  53 => 31,  50 => 28,  47 => 27,  43 => 25,  41 => 352,  40 => 351,  39 => 350,  38 => 333,  36 => 331,  35 => 329,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", "C:\\xampp\\htdocs\\phoneshop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\ProductPage\\product.html.twig");
    }
}
