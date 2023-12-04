<?php

/* @Product/ProductPage/Panels/essentials.html.twig */
class __TwigTemplate_a764a083e2f6096a61deac1d22e58ea33383ee6812ed8aba811c2102afc94c31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_c818bf8262a0a4d303035323738968f6358fe58d1ccd513fbf80a97a2e631da1' => array($this, 'block___internal_c818bf8262a0a4d303035323738968f6358fe58d1ccd513fbf80a97a2e631da1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "<div role=\"tabpanel\" class=\"form-contenttab tab-pane active\" id=\"step1\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"container-fluid\">
        <div class=\"row\">";
        // line 32
        echo "          <div class=\"col-md-9 left-column\">

            <div id=\"js_form_step1_inputPackItems\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formPackItems"] ?? null), 'errors');
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formPackItems"] ?? null), 'widget');
        echo "
            </div>

            <div id=\"product-images-container\" class=\"mb-4\">
              <div id=\"product-images-dropzone\" class=\"panel dropzone ui-sortable col-md-12\"
                  url-upload=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_image_upload", array("idProduct" => ($context["productId"] ?? null))), "html", null, true);
        echo "\"
                  url-position=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_image_positions");
        echo "\"
                  data-max-size=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_LIMIT_UPLOAD_IMAGE_VALUE"), "html", null, true);
        echo "\"
              >
                <div id=\"product-images-dropzone-error\" class=\"text-danger\"></div>
                <div class=\"dz-default dz-message openfilemanager\">
                    <i class=\"material-icons\">add_a_photo</i><br/>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["js_translatable"] ?? null), "Drop images here", array(), "array"), "html", null, true);
        echo "<br/>
                    <a>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["js_translatable"] ?? null), "or select files", array(), "array"), "html", null, true);
        echo "</a><br/>
                    <small>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["js_translatable"] ?? null), "files recommandations", array(), "array"), "html", null, true);
        echo "<br/>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["js_translatable"] ?? null), "files recommandations2", array(), "array"), "html", null, true);
        echo "
                    </small>
                </div>";
        // line 55
        if ((isset($context["images"]) || array_key_exists("images", $context))) {
            // line 56
            if (($context["editable"] ?? null)) {
                // line 57
                echo "                        <div class=\"dz-preview disabled openfilemanager\">
                            <div><span>+</span></div>
                        </div>";
            }
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 62
                echo "                    <div class=\"dz-preview dz-processing dz-image-preview dz-complete ui-sortable-handle\"
                        data-id=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
                echo "\"
                        url-delete=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_image_delete", array("idImage" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
                echo "\"
                        url-update=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_image_form", array("idImage" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
                echo "\"
                    >
                      <div class=\"dz-image bg\" style=\"background-image: url('";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "base_image_url", array()), "html", null, true);
                echo "-home_default.";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "format", array()), "html", null, true);
                echo "');\"></div>
                      <div class=\"dz-details\">
                        <div class=\"dz-size\"><span data-dz-size=\"\"></span></div>
                        <div class=\"dz-filename\"><span data-dz-name=\"\"></span></div>
                      </div>
                      <div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress=\"\" style=\"width: 100%;\"></span></div>
                      <div class=\"dz-error-message\"><span data-dz-errormessage=\"\"></span></div>
                      <div class=\"dz-success-mark\"></div>
                      <div class=\"dz-error-mark\"></div>";
                // line 76
                if ($this->getAttribute($context["image"], "cover", array())) {
                    // line 77
                    echo "                        <div class=\"iscover\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cover", array(), "Admin.Catalog.Feature"), "html", null, true);
                    echo "</div>";
                }
                // line 79
                echo "                    </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 82
        echo "              </div>
              <div id=\"product-images-form-container\" class=\"col-md-4\">
                <div id=\"product-images-form\"></div>
              </div>
              <div class=\"dropzone-expander text-sm-center col-md-12\">
                <span class=\"expand\">";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View all images", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
                <span class=\"compress\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View less", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
              </div>

            </div>

            <div class=\"summary-description-container\">
              <ul class=\"nav nav-tabs bordered\">
                <li id=\"tab_description_short\" class=\"nav-item\"><a href=\"#description_short\" data-toggle=\"tab\" class=\"nav-link description-tab active\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Summary", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</a></li>
                <li id=\"tab_description\" class=\"nav-item\"><a href=\"#description\" data-toggle=\"tab\" class=\"nav-link description-tab\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description", array(), "Admin.Global"), "html", null, true);
        echo "</a></li>
              </ul>

              <div class=\"tab-content bordered\">
                <div class=\"tab-pane panel panel-default active\" id=\"description_short\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formShortDescription"] ?? null), 'widget');
        echo "
                </div>
                <div class=\"tab-pane panel panel-default \" id=\"description\">";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formDescription"] ?? null), 'widget');
        echo "
                </div>
              </div>
            </div>";
        // line 109
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsMainStepLeftColumnMiddle", array("id_product" => ($context["productId"] ?? null)));
        echo "

            <div id=\"features\" class=\"mb-3\">
              <div id=\"features-content\" class=\"content";
        // line 112
        echo (((twig_length_filter($this->env, ($context["formFeatures"] ?? null)) == 0)) ? ("hide") : (""));
        echo "\">
                <h2>";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Features", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formFeatures"] ?? null), 'errors');
        echo "
                <div
                  class=\"feature-collection nostyle\"
                  data-prototype=\"";
        // line 117
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_c818bf8262a0a4d303035323738968f6358fe58d1ccd513fbf80a97a2e631da1", $context, $blocks));
        // line 119
        echo "\"
                >";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["formFeatures"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 122
            echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_feature.html.twig", array("form" => $context["feature"]));
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-md-4\">
                  <button type=\"button\" class=\"btn btn-outline-primary sensitive add\" id=\"add_feature_button\"><i class=\"material-icons\">add_circle</i>";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a feature", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</button>
                </div>
              </div>
            </div>

            <div id=\"manufacturer\" class=\"mb-3\">";
        // line 134
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_manufacturer.html.twig", array("form" => ($context["formManufacturer"] ?? null)));
        echo "
            </div>

            <div id=\"related-product\" class=\"mb-3\">";
        // line 138
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_related_products.html.twig", array("form" => ($context["formRelatedProducts"] ?? null)));
        echo "
            </div>";
        // line 141
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsMainStepLeftColumnBottom", array("id_product" => ($context["productId"] ?? null)));
        echo "

          </div>";
        // line 146
        echo "          <div class=\"col-md-3 right-column\">

              <div class=\"row\">
                <div class=\"col-md-12\">";
        // line 151
        if (($context["is_combination_active"] ?? null)) {
            // line 152
            echo "                    <div class=\"form-group mb-3\" id=\"show_variations_selector\">
                      <h2>";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "
                        <span class=\"help-box\" data-toggle=\"popover\"
                          data-content=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations are the different variations of a product, with attributes like its size, weight or color taking different values. Does your product require combinations?", array(), "Admin.Catalog.Help"), "html", null, true);
            echo "\" ></span>
                      </h2>
                      <div class=\"radio\">
                        <label>
                          <input type=\"radio\" name=\"show_variations\" value=\"0\"";
            // line 160
            if ( !($context["has_combinations"] ?? null)) {
                echo "checked=\"checked\"";
            }
            echo ">";
            // line 161
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Simple product", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "
                        </label>
                      </div>
                      <div class=\"radio\">
                        <label>
                          <input type=\"radio\" name=\"show_variations\" value=\"1\"";
            // line 166
            if (($context["has_combinations"] ?? null)) {
                echo "checked=\"checked\"";
            }
            echo ">";
            // line 167
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product with combinations", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "
                        </label>
                        <div id=\"product_type_combinations_shortcut\">
                          <span class=\"small font-secondary\">";
            // line 172
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Advanced settings in [1][2]Combinations[/1]", array(), "Admin.Catalog.Help"), array("[1]" => "<a href=\"#tab-step3\" onclick=\"\$('a[href=\\'#step3\\']').tab('show');\" class=\"btn sensitive px-0\">", "[/1]" => "</a>", "[2]" => "<i class=\"material-icons\">open_in_new</i>"));
            echo "
                          </span>
                        </div>
                      </div>
                    </div>";
        }
        // line 178
        echo "
                  <div class=\"form-group mb-4\">
                    <h2>";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                      <span class=\"help-box\" data-toggle=\"popover\"
                        data-content=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your reference code for this product. Allowed special characters: .-_#.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                    </h2>";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formReference"] ?? null), 'errors');
        echo "
                    <div class=\"row\">
                      <div class=\"col-xl-12 col-lg-12\" id=\"product_reference_field\">";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formReference"] ?? null), 'widget');
        echo "
                      </div>
                    </div>
                  </div>";
        // line 193
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 194
            echo "                    <div class=\"form-group mb-4\" id=\"product_qty_0_shortcut_div\">
                      <h2>";
            // line 196
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "
                        <span class=\"help-box\" data-toggle=\"popover\"
                          data-content=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("How many products should be available for sale?", array(), "Admin.Catalog.Help"), "html", null, true);
            echo "\" ></span>
                      </h2>";
            // line 200
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formQuantityShortcut"] ?? null), 'errors');
            echo "
                      <div class=\"row\">
                        <div class=\"col-xl-6 col-lg-12\">";
            // line 203
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formQuantityShortcut"] ?? null), 'widget');
            echo "
                        </div>
                      </div>
                      <span class=\"small font-secondary\">";
            // line 208
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Advanced settings in [1][2]Quantities[/1]", array(), "Admin.Catalog.Help"), array("[1]" => "<a href=\"#tab-step3\" onclick=\"\$('a[href=\\'#step3\\']').tab('show');\" class=\"btn sensitive px-0\">", "[/1]" => "</a>", "[2]" => "<i class=\"material-icons\">open_in_new</i>"));
            echo "
                      </span>
                    </div>";
        }
        // line 212
        echo "
                  <div class=\"form-group mb-4\">
                    <h2>";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price", array(), "Admin.Global"), "html", null, true);
        echo "
                      <span class=\"help-box\" data-toggle=\"popover\"
                        data-content=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This is the retail price at which you intend to sell this product to your customers. The tax included price will change according to the tax rule you select.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                    </h2>
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <label class=\"form-control-label\">";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax excluded", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>";
        // line 222
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formPriceShortcut"] ?? null), 'widget');
        // line 223
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formPriceShortcut"] ?? null), 'errors');
        echo "
                      </div>
                      <div class=\"col-md-6 col-offset-md-1\">
                        <label class=\"form-control-label\">";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax included", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>";
        // line 227
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formPriceShortcutTTC"] ?? null), 'widget');
        // line 228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formPriceShortcutTTC"] ?? null), 'errors');
        echo "
                      </div>
                      <div class=\"col-md-12 mt-1\">
                        <label class=\"form-control-label\">";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax rule", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>";
        // line 232
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin/Common:renderField", array("formName" => "step2", "formType" => "PrestaShopBundle\\Form\\Admin\\Product\\ProductPrice", "fieldName" => "id_tax_rules_group", "fieldData" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 237
($context["form"] ?? null), "step2", array()), "id_tax_rules_group", array()), "vars", array()), "value", array()))));
        // line 241
        echo "
                      </div>
                      <div class=\"col-md-12\">
                        <span class=\"small font-secondary\">";
        // line 246
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Advanced settings in [1][2]Pricing[/1]", array(), "Admin.Catalog.Help"), array("[1]" => "<a href=\"#tab-step2\" onclick=\"\$('a[href=\\'#step2\\']').tab('show');\" class=\"btn sensitive px-0\">", "[/1]" => "</a>", "[2]" => "<i class=\"material-icons\">open_in_new</i>"));
        echo "
                        </span>
                      </div>
                    </div>
                    <div class=\"row hide\">
                      <div class=\"col-md-12\">
                        <label>";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tax rule", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
                      </div>
                      <div class=\"clearfix\"></div>
                      <div class=\"col-md-11\" id=\"tax_rule_shortcut\">
                      </div>
                      <a href=\"#\" onclick=\"\$(this).parent().hide()\">&times;</a>
                    </div>
                  </div>

                  <div class=\"form-group mb-4\" id=\"categories\">";
        // line 262
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_categories.html.twig", array("form" => ($context["formCategories"] ?? null), "productId" => ($context["productId"] ?? null)));
        echo "
                  </div>";
        // line 265
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminProductsMainStepRightColumnBottom", array("id_product" => ($context["productId"] ?? null)));
        echo "

                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    // line 117
    public function block___internal_c818bf8262a0a4d303035323738968f6358fe58d1ccd513fbf80a97a2e631da1($context, array $blocks = array())
    {
        // line 118
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_feature.html.twig", array("form" => $this->getAttribute($this->getAttribute(($context["formFeatures"] ?? null), "vars", array()), "prototype", array())));
    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Panels/essentials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 118,  452 => 117,  437 => 265,  433 => 262,  421 => 252,  412 => 246,  407 => 241,  405 => 237,  404 => 232,  401 => 231,  395 => 228,  393 => 227,  390 => 226,  384 => 223,  382 => 222,  379 => 221,  372 => 217,  367 => 215,  363 => 212,  357 => 208,  351 => 203,  346 => 200,  342 => 198,  337 => 196,  334 => 194,  332 => 193,  326 => 188,  321 => 185,  317 => 183,  312 => 181,  308 => 178,  300 => 172,  294 => 167,  289 => 166,  281 => 161,  276 => 160,  269 => 156,  264 => 154,  261 => 152,  259 => 151,  254 => 146,  249 => 141,  245 => 138,  239 => 134,  231 => 128,  225 => 124,  211 => 122,  194 => 121,  191 => 119,  189 => 117,  183 => 114,  180 => 113,  176 => 112,  170 => 109,  164 => 104,  159 => 101,  152 => 96,  148 => 95,  138 => 88,  134 => 87,  127 => 82,  120 => 79,  115 => 77,  113 => 76,  100 => 67,  95 => 65,  91 => 64,  87 => 63,  84 => 62,  80 => 61,  75 => 57,  73 => 56,  71 => 55,  66 => 52,  63 => 51,  59 => 49,  55 => 48,  48 => 43,  44 => 42,  40 => 41,  32 => 36,  30 => 35,  26 => 32,  20 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Product/ProductPage/Panels/essentials.html.twig", "C:\\xampp\\htdocs\\phoneshop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Product\\ProductPage\\Panels\\essentials.html.twig");
    }
}
