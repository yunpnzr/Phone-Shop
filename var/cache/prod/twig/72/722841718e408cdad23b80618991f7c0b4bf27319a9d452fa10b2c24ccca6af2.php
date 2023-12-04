<?php

/* @PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig */
class __TwigTemplate_88f0fc7be23a30c43e9ceafec00935f3be52f07c52b7fcd11ad9392f22208d25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 25);
        // line 25
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@PrestaShop/Admin/TwigTemplateForm/form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", 26);
        // line 26
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_tree_widget' => array($this, 'block_choice_tree_widget'),
                'choice_tree_item_widget' => array($this, 'block_choice_tree_item_widget'),
                'translatefields_widget' => array($this, 'block_translatefields_widget'),
                'translate_fields_widget' => array($this, 'block_translate_fields_widget'),
                'translate_text_widget' => array($this, 'block_translate_text_widget'),
                'date_picker_widget' => array($this, 'block_date_picker_widget'),
                'date_range_widget' => array($this, 'block_date_range_widget'),
                'search_and_reset_widget' => array($this, 'block_search_and_reset_widget'),
                'switch_widget' => array($this, 'block_switch_widget'),
                '_form_step6_attachments_widget' => array($this, 'block__form_step6_attachments_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'material_choice_table_widget' => array($this, 'block_material_choice_table_widget'),
                'material_multiple_choice_table_widget' => array($this, 'block_material_multiple_choice_table_widget'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 30
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 37
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 42
        $this->displayBlock('button_widget', $context, $blocks);
        // line 47
        $this->displayBlock('money_widget', $context, $blocks);
        // line 64
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 73
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 87
        $this->displayBlock('date_widget', $context, $blocks);
        // line 106
        $this->displayBlock('time_widget', $context, $blocks);
        // line 121
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 126
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 148
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 159
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 170
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 181
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
        // line 220
        $this->displayBlock('translatefields_widget', $context, $blocks);
        // line 246
        $this->displayBlock('translate_fields_widget', $context, $blocks);
        // line 253
        $this->displayBlock('translate_text_widget', $context, $blocks);
        // line 291
        $this->displayBlock('date_picker_widget', $context, $blocks);
        // line 305
        $this->displayBlock('date_range_widget', $context, $blocks);
        // line 312
        $this->displayBlock('search_and_reset_widget', $context, $blocks);
        // line 337
        $this->displayBlock('switch_widget', $context, $blocks);
        // line 350
        $this->displayBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 382
        $this->displayBlock('form_label', $context, $blocks);
        // line 387
        $this->displayBlock('choice_label', $context, $blocks);
        // line 393
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 397
        $this->displayBlock('radio_label', $context, $blocks);
        // line 401
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 433
        $this->displayBlock('form_row', $context, $blocks);
        // line 441
        $this->displayBlock('button_row', $context, $blocks);
        // line 447
        $this->displayBlock('choice_row', $context, $blocks);
        // line 452
        $this->displayBlock('date_row', $context, $blocks);
        // line 457
        $this->displayBlock('time_row', $context, $blocks);
        // line 462
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 467
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 474
        $this->displayBlock('radio_row', $context, $blocks);
        // line 483
        $this->displayBlock('form_errors', $context, $blocks);
        // line 516
        $this->displayBlock('material_choice_table_widget', $context, $blocks);
        // line 547
        $this->displayBlock('material_multiple_choice_table_widget', $context, $blocks);
    }

    // line 30
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 31
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || ("file" != ($context["type"] ?? null)))) {
            // line 32
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 34
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 37
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 38
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 39
        $this->displayParentBlock("textarea_widget", $context, $blocks);
    }

    // line 42
    public function block_button_widget($context, array $blocks = array())
    {
        // line 43
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 44
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 47
    public function block_money_widget($context, array $blocks = array())
    {
        // line 48
        echo "<div class=\"input-group money-type\">";
        // line 49
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? null), 0, 2));
        // line 50
        if ( !($context["prepend"] ?? null)) {
            // line 51
            echo "            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">";
            // line 52
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>";
        }
        // line 55
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 56
        if (($context["prepend"] ?? null)) {
            // line 57
            echo "            <div class=\"input-group-append\">
                <span class=\"input-group-text\">";
            // line 58
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>";
        }
        // line 61
        echo "    </div>";
    }

    // line 64
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 65
        echo "<div class=\"input-group\">";
        // line 66
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 67
        echo "<div class=\"input-group-append\">
            <span class=\"input-group-text\">%</span>
        </div>
    </div>";
    }

    // line 73
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 74
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 75
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 77
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 78
            echo "<div";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'errors');
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'errors');
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'widget', array("datetime" => true));
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'widget', array("datetime" => true));
            // line 83
            echo "</div>";
        }
    }

    // line 87
    public function block_date_widget($context, array $blocks = array())
    {
        // line 88
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 89
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 91
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 92
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !($context["datetime"] ?? null))) {
                // line 93
                echo "<div";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 95
            echo twig_replace_filter(($context["date_pattern"] ?? null), array("{{ year }}" =>             // line 96
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", array()), 'widget'), "{{ month }}" =>             // line 97
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", array()), 'widget'), "{{ day }}" =>             // line 98
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", array()), 'widget')));
            // line 100
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !($context["datetime"] ?? null))) {
                // line 101
                echo "</div>";
            }
        }
    }

    // line 106
    public function block_time_widget($context, array $blocks = array())
    {
        // line 107
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 108
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 110
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 111
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) || (false == ($context["datetime"] ?? null)))) {
                // line 112
                echo "<div";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 114
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minute", array()), 'widget');
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "second", array()), 'widget');
            }
            // line 115
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) || (false == ($context["datetime"] ?? null)))) {
                // line 116
                echo "</div>";
            }
        }
    }

    // line 121
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 122
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " custom-select"))));
        // line 123
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 126
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 127
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 128
            echo "<div class=\"control-group\">";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 130
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 131
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 132
($context["choice_translation_domain"] ?? null)));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "</div>";
        } else {
            // line 137
            echo "<div";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 139
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 140
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 141
($context["choice_translation_domain"] ?? null)));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "</div>";
        }
    }

    // line 148
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 149
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 150
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 151
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 153
            echo "<div class=\"checkbox\">";
            // line 154
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 155
            echo "</div>";
        }
    }

    // line 159
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 160
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 161
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 162
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 164
            echo "<div class=\"radio\">";
            // line 165
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 166
            echo "</div>";
        }
    }

    // line 170
    public function block_choice_tree_widget($context, array $blocks = array())
    {
        // line 171
        echo "<div";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"category-tree-overflow\">
        <ul class=\"category-tree\">
            <li class=\"form-control-label text-right main-category\">";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Main category", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</li>";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 175
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "</ul>
    </div>";
    }

    // line 181
    public function block_choice_tree_item_widget($context, array $blocks = array())
    {
        // line 182
        echo "<li>";
        // line 183
        $context["checked"] = ((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "submitted_values", array(), "any", true, true) && $this->getAttribute(($context["submitted_values"] ?? null), $this->getAttribute(($context["child"] ?? null), "id_category", array()), array(), "array", true, true))) ? ("checked=\"checked\"") : (""));
        // line 184
        if (($context["multiple"] ?? null)) {
            // line 185
            echo "<div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "full_name", array()), "html", null, true);
            echo "[tree][]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", array()), "html", null, true);
            echo "\" class=\"category\"";
            echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
            echo ">";
            // line 188
            if (($this->getAttribute(($context["child"] ?? null), "active", array(), "any", true, true) && ($this->getAttribute(($context["child"] ?? null), "active", array()) == 0))) {
                // line 189
                echo "                        <i>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", array()), "html", null, true);
                echo "</i>";
            } else {
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", array()), "html", null, true);
            }
            // line 193
            if ((isset($context["defaultCategory"]) || array_key_exists("defaultCategory", $context))) {
                // line 194
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", array()), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />";
            }
            // line 196
            echo "                </label>
            </div>";
        } else {
            // line 199
            echo "<div class=\"radio\">
                <label>
                    <input type=\"radio\" name=\"form[";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "][tree]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", array()), "html", null, true);
            echo "\"";
            echo twig_escape_filter($this->env, ($context["checked"] ?? null), "html", null, true);
            echo " class=\"category\">";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "name", array()), "html", null, true);
            // line 203
            if ((isset($context["defaultCategory"]) || array_key_exists("defaultCategory", $context))) {
                // line 204
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? null), "id_category", array()), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />";
            }
            // line 206
            echo "                </label>
            </div>";
        }
        // line 209
        if ($this->getAttribute(($context["child"] ?? null), "children", array(), "any", true, true)) {
            // line 210
            echo "            <ul>";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["child"] ?? null), "children", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 212
                $context["child"] = $context["item"];
                // line 213
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "</ul>";
        }
        // line 217
        echo "    </li>";
    }

    // line 220
    public function block_translatefields_widget($context, array $blocks = array())
    {
        // line 221
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <div class=\"translations tabbable\" id=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\">";
        // line 223
        if (((($context["hideTabs"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
            // line 224
            echo "        <ul class=\"translationsLocales nav nav-pills\">";
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 226
                echo "                <li class=\"nav-item\">
                    <a href=\"#\" class=\"";
                // line 227
                if (($this->getAttribute(($context["defaultLocale"] ?? null), "id_lang", array()) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array()))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "id", array()), "html", null, true);
                echo "\">";
                // line 228
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "label", array())), "html", null, true);
                echo "
                    </a>
                </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            echo "        </ul>";
        }
        // line 234
        echo "
        <div class=\"translationsFields tab-content\">";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 237
            echo "                <div class=\"translationsFields-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "id", array()), "html", null, true);
            echo " tab-pane translation-field";
            if (((($context["hideTabs"] ?? null) == false) && (twig_length_filter($this->env, ($context["form"] ?? null)) > 1))) {
                echo "panel panel-default";
            }
            if (($this->getAttribute(($context["defaultLocale"] ?? null), "id_lang", array()) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array()))) {
                echo "show active";
            }
            if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "valid", array())) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "label", array()), "html", null, true);
            echo "\">";
            // line 238
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            // line 239
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
                </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "        </div>
    </div>";
    }

    // line 246
    public function block_translate_fields_widget($context, array $blocks = array())
    {
        // line 247
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || ("file" != ($context["type"] ?? null)))) {
            // line 248
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 250
        $this->displayParentBlock("translate_fields_widget", $context, $blocks);
    }

    // line 253
    public function block_translate_text_widget($context, array $blocks = array())
    {
        // line 254
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <div class=\"input-group locale-input-group js-locale-input-group\">";
        // line 256
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 257
            $context["classes"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array()), "")) : ("")) . " js-locale-input");
            // line 258
            $context["classes"] = ((($context["classes"] ?? null) . " js-locale-") . $this->getAttribute($this->getAttribute($context["translateField"], "vars", array()), "label", array()));
            // line 260
            if (($this->getAttribute(($context["default_locale"] ?? null), "id_lang", array()) != $this->getAttribute($this->getAttribute($context["translateField"], "vars", array()), "name", array()))) {
                // line 261
                $context["classes"] = (($context["classes"] ?? null) . " d-none");
            }
            // line 264
            $context["attr"] = $this->getAttribute($this->getAttribute($context["translateField"], "vars", array()), "attr", array());
            // line 266
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget', array("attr" => array("class" => twig_trim_filter(($context["classes"] ?? null)))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        if ( !($context["hide_locales"] ?? null)) {
            // line 270
            echo "        <div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                    type=\"button\"
                    data-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    id=\"";
            // line 276
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "\"
            >";
            // line 278
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "default_locale", array()), "iso_code", array()), "html", null, true);
            echo "
            </button>

            <div class=\"dropdown-menu\" aria-labelledby=\"";
            // line 281
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
            echo "\">";
            // line 282
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 283
                echo "                    <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "iso_code", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", array()), "html", null, true);
                echo "</span>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            echo "            </div>
        </div>";
        }
        // line 288
        echo "    </div>";
    }

    // line 291
    public function block_date_picker_widget($context, array $blocks = array())
    {
        // line 292
        ob_start();
        // line 293
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " datepicker"))));
        // line 294
        echo "        <div class=\"input-group datepicker\">
            <input type=\"text\" class=\"form-control\"";
        // line 295
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        echo "/>
            <div class=\"input-group-append\">
                <div class=\"input-group-text\">
                    <i class=\"material-icons\">date_range</i>
                </div>
            </div>
        </div>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 305
    public function block_date_range_widget($context, array $blocks = array())
    {
        // line 306
        ob_start();
        // line 307
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "from", array()), 'widget');
        // line 308
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "to", array()), 'widget');
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 312
    public function block_search_and_reset_widget($context, array $blocks = array())
    {
        // line 313
        ob_start();
        // line 314
        echo "        <button type=\"submit\"
                class=\"btn btn-primary d-block\"
                title=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", array(), "Admin.Global"), "html", null, true);
        echo "\"
                name=\"";
        // line 317
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "[search]\"
        >
          <i class=\"material-icons\">search</i>";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", array(), "Admin.Global"), "html", null, true);
        echo "
        </button>";
        // line 323
        if (($context["show_reset_button"] ?? null)) {
            // line 324
            echo "            <button type=\"reset\"
                    name=\"";
            // line 325
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "[reset]\"
                    class=\"btn btn-link js-reset-search btn d-block\"
                    data-url=\"";
            // line 327
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "attr", array()), "data-url", array(), "array"), "html", null, true);
            echo "\"
                    data-redirect=\"";
            // line 328
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "attr", array()), "data-redirect", array(), "array"), "html", null, true);
            echo "\"
            >
              <i class=\"material-icons\">clear</i>";
            // line 331
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", array(), "Admin.Global"), "html", null, true);
            echo "
            </button>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 337
    public function block_switch_widget($context, array $blocks = array())
    {
        // line 338
        ob_start();
        // line 339
        echo "    <span class=\"ps-switch\">";
        // line 340
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 341
            $context["inputId"] = ((($context["id"] ?? null) . "_") . $this->getAttribute($context["choice"], "value", array()));
            // line 342
            echo "            <input id=\"";
            echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
            echo "\"";
            $this->displayBlock("attributes", $context, $blocks);
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
            echo "\"";
            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                echo "checked=\"\"";
            }
            if (($context["disabled"] ?? null)) {
                echo "disabled=\"\"";
            }
            echo "type=\"radio\">
            <label for=\"";
            // line 343
            echo twig_escape_filter($this->env, ($context["inputId"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), ($context["choice_translation_domain"] ?? null)), "html", null, true);
            echo "</label>";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 345
        echo "        <span class=\"slide-button\"></span>
    </span>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 350
    public function block__form_step6_attachments_widget($context, array $blocks = array())
    {
        // line 351
        echo "    <div class=\"js-options-no-attachments";
        echo (((twig_length_filter($this->env, ($context["form"] ?? null)) > 0)) ? ("hide") : (""));
        echo "\">
        <small>";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There is no attachment yet.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "</small>
    </div>
    <div id=\"product-attachments\" class=\"panel panel-default\">
      <div class=\"panel-body js-options-with-attachments";
        // line 355
        echo (((twig_length_filter($this->env, ($context["form"] ?? null)) == 0)) ? ("hide") : (""));
        echo "\">
        <div>
          <table id=\"product-attachment-file\" class=\"table\">
            <thead class=\"thead-default\">
              <tr>
                <th class=\"col-md-3\"><input type=\"checkbox\" id=\"product-attachment-files-check\" />";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-6\">";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("File name", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-2\">";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
              </tr>
            </thead>
            <tbody>";
        // line 366
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 367
            echo "              <tr>
                <td class=\"col-md-3\">";
            // line 368
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "</td>
                <td class=\"col-md-6 file-name\"><span>";
            // line 369
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "attr", array()), "data", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "file_name", array(), "array"), "html", null, true);
            echo "</span></td>
                <td class=\"col-md-2\">";
            // line 370
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "attr", array()), "data", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "mime", array(), "array"), "html", null, true);
            echo "</td>
              </tr>";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 373
        echo "</tbody>
          </table>
        </div>
      </div>
    </div>";
    }

    // line 382
    public function block_form_label($context, array $blocks = array())
    {
        // line 383
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 384
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 387
    public function block_choice_label($context, array $blocks = array())
    {
        // line 389
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 390
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 393
    public function block_checkbox_label($context, array $blocks = array())
    {
        // line 394
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 397
    public function block_radio_label($context, array $blocks = array())
    {
        // line 398
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 401
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        // line 403
        if ((isset($context["widget"]) || array_key_exists("widget", $context))) {
            // line 404
            if (($context["required"] ?? null)) {
                // line 405
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 407
            if ((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) {
                // line 408
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))));
            }
            // line 410
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 411
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
            }
            // line 414
            if ((isset($context["material_design"]) || array_key_exists("material_design", $context))) {
                // line 415
                echo "        <div class=\"md-checkbox md-checkbox-inline\">
          <label";
                // line 416
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 417
                echo ($context["widget"] ?? null);
                // line 418
                echo "<i class=\"md-checkbox-control\"></i>";
                // line 419
                echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 420
                echo "</label>
        </div>";
            } else {
                // line 423
                echo "      <label";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 424
                echo ($context["widget"] ?? null);
                // line 425
                echo (( !(($context["label"] ?? null) === false)) ? ((((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : (($context["label"] ?? null)))) : (""));
                // line 426
                echo "</label>";
            }
        }
    }

    // line 433
    public function block_form_row($context, array $blocks = array())
    {
        // line 434
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\">";
        // line 435
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 436
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 437
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 438
        echo "</div>";
    }

    // line 441
    public function block_button_row($context, array $blocks = array())
    {
        // line 442
        echo "<div class=\"form-group\">";
        // line 443
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 444
        echo "</div>";
    }

    // line 447
    public function block_choice_row($context, array $blocks = array())
    {
        // line 448
        $context["force_error"] = true;
        // line 449
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 452
    public function block_date_row($context, array $blocks = array())
    {
        // line 453
        $context["force_error"] = true;
        // line 454
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 457
    public function block_time_row($context, array $blocks = array())
    {
        // line 458
        $context["force_error"] = true;
        // line 459
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 462
    public function block_datetime_row($context, array $blocks = array())
    {
        // line 463
        $context["force_error"] = true;
        // line 464
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 467
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 468
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 469
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 470
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 471
        echo "</div>";
    }

    // line 474
    public function block_radio_row($context, array $blocks = array())
    {
        // line 475
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 476
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 477
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 478
        echo "</div>";
    }

    // line 483
    public function block_form_errors($context, array $blocks = array())
    {
        // line 484
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 485
            echo "<div class=\"alert alert-danger\">";
            // line 486
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 1)) {
                // line 487
                echo "<ul class=\"alert-text\">";
                // line 488
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 489
                    echo "<li>";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 490
$context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 491
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 492
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error"))), "html", null, true);
                    // line 493
                    echo "
                    </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 496
                echo "</ul>";
            } else {
                // line 498
                echo "<div class=\"alert-text\">";
                // line 499
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 500
                    echo "<p>";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 501
$context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 502
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 503
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error"))), "html", null, true);
                    // line 504
                    echo "
                </p>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 507
                echo "</div>";
            }
            // line 509
            echo "</div>";
        }
    }

    // line 516
    public function block_material_choice_table_widget($context, array $blocks = array())
    {
        // line 517
        ob_start();
        // line 518
        echo "    <div class=\"choice-table\">
      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <th class=\"checkbox\">
              <div class=\"md-checkbox\">
                <label>
                  <input type=\"checkbox\" class=\"js-choice-table-select-all\">
                  <i class=\"md-checkbox-control\"></i>";
        // line 527
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select all", array(), "Admin.Actions"), "html", null, true);
        echo "
                </label>
              </div>
            </th>
          </tr>
        </thead>
        <tbody>";
        // line 534
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 535
            echo "          <tr>
            <td>";
            // line 537
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("material_design" => true));
            echo "
            </td>
          </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 541
        echo "        </tbody>
      </table>
    </div>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 547
    public function block_material_multiple_choice_table_widget($context, array $blocks = array())
    {
        // line 548
        ob_start();
        // line 549
        echo "    <div class=\"choice-table table-responsive\">
      <table class=\"table\">
        <thead>
          <tr>
            <th>";
        // line 553
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "</th>";
        // line 554
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child_choice"]) {
            // line 555
            echo "              <th class=\"text-center\">";
            // line 556
            if ($this->getAttribute($this->getAttribute($context["child_choice"], "vars", array()), "multiple", array())) {
                // line 557
                echo "                  <a href=\"#\"
                     class=\"js-multiple-choice-table-select-column\"
                     data-column-num=\"";
                // line 559
                echo twig_escape_filter($this->env, ($this->getAttribute($context["loop"], "index", array()) + 1), "html", null, true);
                echo "\"
                     data-column-checked=\"false\"
                  >";
                // line 562
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child_choice"], "vars", array()), "label", array()), "html", null, true);
                echo "
                  </a>";
            } else {
                // line 565
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child_choice"], "vars", array()), "label", array()), "html", null, true);
            }
            // line 567
            echo "              </th>";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 569
        echo "          </tr>
        </thead>
        <tbody>";
        // line 572
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? null));
        foreach ($context['_seq'] as $context["choice_name"] => $context["choice_value"]) {
            // line 573
            echo "          <tr>
            <td>";
            // line 575
            echo twig_escape_filter($this->env, $context["choice_name"], "html", null, true);
            echo "
            </td>";
            // line 577
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["child_choice_name"] => $context["child_choice"]) {
                // line 578
                echo "              <td class=\"text-center\">";
                // line 579
                if ($this->getAttribute($this->getAttribute(($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], array(), "array", false, true), $context["child_choice_name"], array(), "array", true, true)) {
                    // line 580
                    $context["entry_index"] = $this->getAttribute($this->getAttribute(($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], array(), "array"), $context["child_choice_name"], array(), "array");
                    // line 582
                    if ($this->getAttribute($this->getAttribute($context["child_choice"], "vars", array()), "multiple", array())) {
                        // line 583
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["child_choice"], ($context["entry_index"] ?? null), array(), "array"), 'widget', array("material_design" => true));
                    } else {
                        // line 585
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($context["child_choice"], ($context["entry_index"] ?? null), array(), "array"), 'widget');
                    }
                } else {
                    // line 588
                    echo "                  --";
                }
                // line 590
                echo "              </td>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child_choice_name'], $context['child_choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 592
            echo "          </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['choice_name'], $context['choice_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 594
        echo "        </tbody>
      </table>
    </div>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1401 => 594,  1395 => 592,  1389 => 590,  1386 => 588,  1382 => 585,  1379 => 583,  1377 => 582,  1375 => 580,  1373 => 579,  1371 => 578,  1367 => 577,  1363 => 575,  1360 => 573,  1356 => 572,  1352 => 569,  1338 => 567,  1335 => 565,  1330 => 562,  1325 => 559,  1321 => 557,  1319 => 556,  1317 => 555,  1300 => 554,  1297 => 553,  1291 => 549,  1289 => 548,  1286 => 547,  1279 => 541,  1270 => 537,  1267 => 535,  1263 => 534,  1254 => 527,  1244 => 518,  1242 => 517,  1239 => 516,  1234 => 509,  1231 => 507,  1224 => 504,  1222 => 503,  1221 => 502,  1220 => 501,  1218 => 500,  1214 => 499,  1212 => 498,  1209 => 496,  1202 => 493,  1200 => 492,  1199 => 491,  1198 => 490,  1196 => 489,  1192 => 488,  1190 => 487,  1188 => 486,  1186 => 485,  1184 => 484,  1181 => 483,  1177 => 478,  1175 => 477,  1173 => 476,  1167 => 475,  1164 => 474,  1160 => 471,  1158 => 470,  1156 => 469,  1150 => 468,  1147 => 467,  1143 => 464,  1141 => 463,  1138 => 462,  1134 => 459,  1132 => 458,  1129 => 457,  1125 => 454,  1123 => 453,  1120 => 452,  1116 => 449,  1114 => 448,  1111 => 447,  1107 => 444,  1105 => 443,  1103 => 442,  1100 => 441,  1096 => 438,  1094 => 437,  1092 => 436,  1090 => 435,  1084 => 434,  1081 => 433,  1075 => 426,  1073 => 425,  1071 => 424,  1057 => 423,  1053 => 420,  1051 => 419,  1049 => 418,  1047 => 417,  1034 => 416,  1031 => 415,  1029 => 414,  1026 => 411,  1024 => 410,  1021 => 408,  1019 => 407,  1016 => 405,  1014 => 404,  1012 => 403,  1009 => 401,  1005 => 398,  1002 => 397,  998 => 394,  995 => 393,  991 => 390,  989 => 389,  986 => 387,  982 => 384,  980 => 383,  977 => 382,  969 => 373,  953 => 370,  949 => 369,  945 => 368,  942 => 367,  925 => 366,  919 => 362,  915 => 361,  911 => 360,  903 => 355,  897 => 352,  892 => 351,  889 => 350,  883 => 345,  866 => 343,  848 => 342,  846 => 341,  829 => 340,  827 => 339,  825 => 338,  822 => 337,  814 => 331,  809 => 328,  805 => 327,  800 => 325,  797 => 324,  795 => 323,  791 => 320,  786 => 317,  782 => 316,  778 => 314,  776 => 313,  773 => 312,  768 => 308,  766 => 307,  764 => 306,  761 => 305,  744 => 295,  741 => 294,  739 => 293,  737 => 292,  734 => 291,  730 => 288,  726 => 285,  716 => 283,  712 => 282,  709 => 281,  703 => 278,  699 => 276,  691 => 270,  689 => 269,  683 => 266,  681 => 264,  678 => 261,  676 => 260,  674 => 258,  672 => 257,  668 => 256,  664 => 254,  661 => 253,  657 => 250,  654 => 248,  652 => 247,  649 => 246,  644 => 242,  636 => 239,  634 => 238,  618 => 237,  614 => 236,  611 => 234,  608 => 232,  599 => 228,  592 => 227,  589 => 226,  585 => 225,  583 => 224,  581 => 223,  578 => 222,  574 => 221,  571 => 220,  567 => 217,  564 => 215,  550 => 213,  548 => 212,  531 => 211,  529 => 210,  527 => 209,  523 => 206,  518 => 204,  516 => 203,  514 => 202,  507 => 201,  503 => 199,  499 => 196,  494 => 194,  492 => 193,  489 => 191,  484 => 189,  482 => 188,  475 => 187,  471 => 185,  469 => 184,  467 => 183,  465 => 182,  462 => 181,  457 => 177,  443 => 175,  426 => 174,  423 => 173,  417 => 171,  414 => 170,  409 => 166,  407 => 165,  405 => 164,  402 => 162,  400 => 161,  398 => 160,  395 => 159,  390 => 155,  388 => 154,  386 => 153,  383 => 151,  381 => 150,  379 => 149,  376 => 148,  371 => 144,  365 => 141,  364 => 140,  363 => 139,  359 => 138,  355 => 137,  352 => 135,  346 => 132,  345 => 131,  344 => 130,  340 => 129,  338 => 128,  336 => 127,  333 => 126,  329 => 123,  327 => 122,  324 => 121,  318 => 116,  316 => 115,  308 => 114,  303 => 112,  301 => 111,  299 => 110,  296 => 108,  294 => 107,  291 => 106,  285 => 101,  283 => 100,  281 => 98,  280 => 97,  279 => 96,  278 => 95,  273 => 93,  271 => 92,  269 => 91,  266 => 89,  264 => 88,  261 => 87,  256 => 83,  254 => 82,  252 => 81,  250 => 80,  248 => 79,  244 => 78,  242 => 77,  239 => 75,  237 => 74,  234 => 73,  227 => 67,  225 => 66,  223 => 65,  220 => 64,  216 => 61,  211 => 58,  208 => 57,  206 => 56,  204 => 55,  199 => 52,  196 => 51,  194 => 50,  192 => 49,  190 => 48,  187 => 47,  183 => 44,  181 => 43,  178 => 42,  174 => 39,  172 => 38,  169 => 37,  165 => 34,  162 => 32,  160 => 31,  157 => 30,  153 => 547,  151 => 516,  149 => 483,  147 => 474,  145 => 467,  143 => 462,  141 => 457,  139 => 452,  137 => 447,  135 => 441,  133 => 433,  131 => 401,  129 => 397,  127 => 393,  125 => 387,  123 => 382,  121 => 350,  119 => 337,  117 => 312,  115 => 305,  113 => 291,  111 => 253,  109 => 246,  107 => 220,  105 => 181,  103 => 170,  101 => 159,  99 => 148,  97 => 126,  95 => 121,  93 => 106,  91 => 87,  89 => 73,  87 => 64,  85 => 47,  83 => 42,  81 => 37,  79 => 30,  21 => 26,  14 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig", "C:\\xampp\\htdocs\\phoneshop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\TwigTemplateForm\\bootstrap_4_layout.html.twig");
    }
}
