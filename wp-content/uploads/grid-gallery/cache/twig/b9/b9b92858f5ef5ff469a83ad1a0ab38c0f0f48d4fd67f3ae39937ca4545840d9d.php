<?php

/* @galleries/settings.twig */
class __TwigTemplate_3b4338c4a7e03ee09f653f1df18ebd5f69ce4040d54a0b1272f3b40f3c2e54e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@galleries/settings.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'tabs' => array($this, 'block_tabs'),
            'preview' => array($this, 'block_preview'),
            'content' => array($this, 'block_content'),
            'area' => array($this, 'block_area'),
            'openByLink' => array($this, 'block_openByLink'),
            'disableRightClick' => array($this, 'block_disableRightClick'),
            'socialSharing' => array($this, 'block_socialSharing'),
            'horizontalScroll' => array($this, 'block_horizontalScroll'),
            'horizontalScrollAfter' => array($this, 'block_horizontalScrollAfter'),
            'border' => array($this, 'block_border'),
            'shadow' => array($this, 'block_shadow'),
            'popup' => array($this, 'block_popup'),
            'popupLinkedImageText' => array($this, 'block_popupLinkedImageText'),
            'disableSourceImageForLi' => array($this, 'block_disableSourceImageForLi'),
            'popupAfter' => array($this, 'block_popupAfter'),
            'preload' => array($this, 'block_preload'),
            'post' => array($this, 'block_post'),
            'icons' => array($this, 'block_icons'),
            'categories' => array($this, 'block_categories'),
            'pagination' => array($this, 'block_pagination'),
            'watermark' => array($this, 'block_watermark'),
            'form' => array($this, 'block_form'),
            'iconsEffects' => array($this, 'block_iconsEffects'),
            'modals' => array($this, 'block_modals'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "grid-gallery.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\" style=\"float: left; padding-top: 20px;\">
        ";
        // line 27
        echo "        <a href=\"";
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery by Supsystic")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 29
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 31
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute($_gallery_, "id", array()))), "method"), "html", null, true);
        echo "\">";
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo $this->getAttribute($_gallery_, "title", array());
        echo "</a>
    </nav>

    <h2 class=\"form-tabs\">
        <a class=\"nav-tab change-tab\" href=\"area\">
            <i class=\"fa fa-home\"></i>
            ";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "html", null, true);
        echo "
        </a>

        <a class=\"nav-tab change-tab\" href=\"overlay\">
            <i class=\"fa fa-info\"></i>
            ";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Captions")), "html", null, true);
        echo "
        </a>

        <a class=\"nav-tab change-tab\" href=\"cats\">
            <i class=\"fa fa-bookmark-o\"></i>
            ";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Categories")), "html", null, true);
        echo "
        </a>

        <a class=\"nav-tab change-tab\" href=\"post\">
            <i class=\"fa fa-columns\"></i>
            ";
        // line 52
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Posts")), "html", null, true);
        echo "
        </a>

        <a class=\"nav-tab change-tab\" href=\"water-m-tab\">
            <i class=\"fa fa-fw fa-certificate\"></i>
            ";
        // line 57
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Watermark")), "html", null, true);
        echo "
        </a>
        ";
        // line 59
        $this->displayBlock('tabs', $context, $blocks);
        // line 60
        echo "    </h2>
";
    }

    // line 59
    public function block_tabs($context, array $blocks = array())
    {
    }

    // line 63
    public function block_preview($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ($this->getAttribute($_settings_, "watermark", array(), "any", true, true)) {
            // line 65
            echo "        ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            $context["settingsWatermark"] = twig_array_merge($this->getAttribute($_settings_, "watermark", array()), array("galleryId" => $this->getAttribute($_gallery_, "id", array())));
            // line 66
            echo "        ";
            if (isset($context["settingsWatermark"])) { $_settingsWatermark_ = $context["settingsWatermark"]; } else { $_settingsWatermark_ = null; }
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_attachment_settings')->getCallable(), array("watermark", $_settingsWatermark_)), "html", null, true);
            echo "
    ";
        }
        // line 68
        echo "    ";
        $context["style"] = $this->loadTemplate("@galleries/shortcode/style.twig", "@galleries/settings.twig", 68);
        // line 69
        echo "    ";
        $context["attachment"] = $this->loadTemplate("@galleries/helpers/attachment.twig", "@galleries/settings.twig", 69);
        // line 70
        echo "
    <div id=\"preview\" class=\"gallery-preview\">
        <section class=\"supsystic-bar-preview\" id=\"single-gallery-toolbar\">
            <ul class=\"supsystic-bar-controls\">
                ";
        // line 81
        echo "
                <li title=\"";
        // line 82
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload new images")), "html", null, true);
        echo "\">
                    <button class=\"button button-primary gallery import-to-gallery\" data-gallery-id=\"";
        // line 83
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
        echo "\">
                        <i class=\"fa fa-fw fa-camera\"></i>
                        ";
        // line 85
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Images")), "html", null, true);
        echo "
                    </button>
                </li>

                <li>
                    <a class=\"button\"
                       href=\"";
        // line 91
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute($_gallery_, "id", array()))), "method"), "html", null, true);
        echo "\">
                        <i class=\"fa fa-list fa-fw\"></i>
                        ";
        // line 93
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images list")), "html", null, true);
        echo "
                    </a>
                </li>

                <li>
                    <a class=\"button button-primary\" target=\"_blank\"
                       href=\"";
        // line 99
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries", 1 => "preview", 2 => array("gallery_id" => $this->getAttribute($_gallery_, "id", array()))), "method"), "html", null, true);
        echo "\">
                        <i class=\"fa fa-fw fa-eye\"></i>
                        ";
        // line 101
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preview")), "html", null, true);
        echo "
                    </a>
                </li>

                <li>
                    <button class=\"button button-primary\" id=\"btnSave\">
                        <i class=\"fa fa-fw fa-check\"></i>
                        ";
        // line 108
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save")), "html", null, true);
        echo "
                    </button>
                </li>
            </ul>
        </section>
        ";
        // line 113
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        if ( !twig_test_empty($this->getAttribute($_gallery_, "photos", array()))) {
            // line 114
            echo "            <div style=\"
            ";
            // line 115
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($_gallery_, "settings", array()), "area", array()), "photo_width_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($_gallery_, "settings", array()), "area", array()), "photo_width", array())))) {
                // line 116
                echo "                width:";
                if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_gallery_, "settings", array()), "area", array()), "photo_width", array()), "html", null, true);
                echo "px;
            ";
            }
            // line 118
            echo "            margin: 10px auto;
            max-width: 380px;
            clear:both;
            \">
                <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"center\" style=\"float: none !important;\">
                   ";
            // line 123
            list($context["width"], $context["height"], $context["crop"]) =             array(0, 0, 0);
            // line 124
            echo "
                    ";
            // line 125
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width_unit", array()) == 0)) {
                // line 126
                echo "                        ";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                $context["width"] = $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width", array());
                // line 127
                echo "                    ";
            }
            // line 128
            echo "
                    ";
            // line 129
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height_unit", array()) == 0)) {
                // line 130
                echo "                        ";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                $context["height"] = $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height", array());
                // line 131
                echo "                    ";
            }
            // line 132
            echo "
                    ";
            // line 133
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (((($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == 0) || ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == "2")) || ($this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()) == "3"))) {
                // line 134
                echo "                        ";
                $context["crop"] = 1;
                // line 135
                echo "                    ";
            } else {
                // line 136
                echo "                        ";
                $context["height"] = null;
                // line 137
                echo "                    ";
            }
            // line 138
            echo "
                    ";
            // line 139
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) {
                // line 140
                echo "                        ";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                $context["cropQuality"] = $this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "cropQuality", array());
                // line 141
                echo "                    ";
            } else {
                // line 142
                echo "                        ";
                $context["cropQuality"] = null;
                // line 143
                echo "                    ";
            }
            // line 144
            echo "                    <img src=\"";
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            if (isset($context["width"])) { $_width_ = $context["width"]; } else { $_width_ = null; }
            if (isset($context["height"])) { $_height_ = $context["height"]; } else { $_height_ = null; }
            if (isset($context["crop"])) { $_crop_ = $context["crop"]; } else { $_crop_ = null; }
            if (isset($context["cropQuality"])) { $_cropQuality_ = $context["cropQuality"]; } else { $_cropQuality_ = null; }
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_gallery_, "photos", array()), 0, array(), "array"), "attachment", array()), "id", array()), $_width_, $_height_, $_crop_, $_cropQuality_)), "html", null, true);
            echo "\" data-src=\"";
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            echo twig_escape_filter($this->env, ("holder.js/350x250?theme=simple&text=" . $this->getAttribute($_gallery_, "title", array())), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
            echo $this->getAttribute($_gallery_, "title", array());
            echo "\" style=\"width: auto; height: auto;\"/>
                    <figcaption style=\"";
            // line 145
            if (isset($context["figcaptionStyle"])) { $_figcaptionStyle_ = $context["figcaptionStyle"]; } else { $_figcaptionStyle_ = null; }
            echo twig_escape_filter($this->env, trim($_figcaptionStyle_), "html", null, true);
            echo "\">
                        <div style=\"display: table; height: 100%; width: 100%;\">
                            <div class=\"grid-gallery-figcaption-wrap\" style=\"display: table-cell;\">
                                <span>Gallery by Supsystic</span>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        ";
        } else {
            // line 155
            echo "            <div style=\"clear: both;\"></div>
            <h2 style=\"text-align: center;\">
                ";
            // line 157
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("There're no images in the gallery.")), "html", null, true);
            echo "<br>
                <a class=\"import-to-gallery\" href=\"#\">Add Images</a>
            </h2>
        ";
        }
        // line 161
        echo "
        <div style=\"clear: both;\"></div>

        <div class=\"shortcode-wrap\" style=\"margin-top: 20px\">
            <div class=\"shortcode\">";
        // line 165
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shortcode:")), "html", null, true);
        echo " <input type=\"text\" id=\"shortcode\" class=\"gallery-shortcode\" value=\"[";
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "config", array()), "get", array(0 => "shortcode_name"), "method"), "html", null, true);
        echo " id=";
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gallery_, "id", array()), "html", null, true);
        echo "]\" onclick=\"this.select();\" size=\"42\" style=\"font-size: 12px;\" readonly></div>
            <div class=\"shortcode\">";
        // line 166
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("PHPCode:")), "html", null, true);
        echo " <input type=\"text\" id=\"shortcode\" class=\"gallery-shortcode\" value=\"";
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, (("<?php echo do_shortcode('[supsystic-gallery id=" . $this->getAttribute($_gallery_, "id", array())) . "]') ?>"), "html", null, true);
        echo "\" onclick=\"this.select();\" size=\"42\" style=\"font-size: 12px;\" readonly></div>
        </div>

        <small style=\"left:25px;position:absolute;top:10px;display:none;\">Oops! Transparency doesn't work in live preview. </small>
        <div class=\"separator\"></div>

        <div style=\"margin: 20px 0\">
            <a class=\"button\" id=\"openSettingsImportDialog\" href=\"\"><i class=\"fa fa-copy\"></i> ";
        // line 173
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import settings")), "html", null, true);
        echo "</a>
        </div>
    </div>
";
    }

    // line 178
    public function block_content($context, array $blocks = array())
    {
        // line 179
        echo "    ";
        $context["form"] = $this->loadTemplate("@core/form.twig", "@galleries/settings.twig", 179);
        // line 180
        echo "    ";
        $context["f"] = $this;
        // line 181
        echo "
    <div class=\"settings-wrap\" data-leave-confirm=\"";
        // line 182
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Your changes not saved. You really want to leave without saving?")), "html", null, true);
        echo "\">
        ";
        // line 183
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        if (isset($context["_wpnonce"])) { $__wpnonce_ = $context["_wpnonce"]; } else { $__wpnonce_ = null; }
        echo $_form_->getopen("post", $this->getAttribute($_environment_, "generateUrl", array(0 => "galleries", 1 => "saveSettings", 2 => array("gallery_id" => $this->getAttribute($_gallery_, "id", array()), "_wpnonce" => $__wpnonce_)), "method"), array("id" => "form-settings"));
        echo "
        <input id=\"currentPresetTitle\" name=\"title\" type=\"hidden\" value=\"";
        // line 184
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_settings_, "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_settings_, "title", array()), "")) : ("")), "html", null, true);
        echo "\"/>
        <input name=\"previewImage\" type=\"hidden\" value=\"";
        // line 185
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_gallery_, "settings", array()), "previewImage", array()), "html", null, true);
        echo "\"/>
        <input name=\"sort[sortto]\" type=\"hidden\" value=\"";
        // line 186
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortto", array()), "html", null, true);
        echo "\"/>
        <input name=\"sort[sortby]\" type=\"hidden\" value=\"";
        // line 187
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "sort", array()), "sortby", array()), "html", null, true);
        echo "\"/>

        <div data-tab=\"area\">
            ";
        // line 190
        $this->displayBlock('area', $context, $blocks);
        // line 313
        echo "
            ";
        // line 314
        $this->displayBlock('socialSharing', $context, $blocks);
        // line 458
        echo "
            ";
        // line 459
        $this->displayBlock('horizontalScroll', $context, $blocks);
        // line 497
        echo "
            <div class=\"load-more-button-preview\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 500
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Load more gallery images with scroll or button")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\" href=\"";
        // line 502
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">";
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Get PRO"), "method"), "html", null, true);
        echo "</a>
                </h1>
                <div>
                    <a href=\"";
        // line 505
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                        <img src=\"";
        // line 506
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/load_more_button_pro.jpg\" />
                    </a>
                </div>
                <div class=\"separator\"></div>
            </div>

            <div class=\"custom-buttons-preview\">
                <table class=\"form-table\">
                    <thead>
                        ";
        // line 515
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Custom Buttons")), $_form_->getbutton("buttons-presets-editor-preview", "Show preset Editor", array("class" => "button button-primary")), "custom-buttons-preview", true);
        // line 516
        echo "
                    </thead>
                </table>
                <div class=\"separator\"></div>
            </div>

            ";
        // line 522
        $this->displayBlock('border', $context, $blocks);
        // line 567
        echo "
            ";
        // line 568
        $this->displayBlock('shadow', $context, $blocks);
        // line 635
        echo "
            ";
        // line 636
        $this->displayBlock('popup', $context, $blocks);
        // line 931
        echo "
            ";
        // line 932
        $this->displayBlock('preload', $context, $blocks);
        // line 984
        echo "        </div>

        ";
        // line 986
        $this->displayBlock('post', $context, $blocks);
        // line 1003
        echo "
        <div data-tab=\"overlay\">
            <table class=\"form-table\" name=\"captions\">
                <thead>
                    ";
        // line 1008
        echo "                    ";
        $context["effects"] = array("none" => "None", "center" => "Middle", "quarter-appear" => "Appear", "quarter-slide-up" => "Quarter Slide Up", "quarter-slide-side" => "Quarter Slide Side", "quarter-fall-in" => "Quarter Fall in", "quarter-two-step" => "Quarter Two-step", "quarter-zoom" => "Quarter Caption Zoom", "cover-fade" => "Cover Fade", "cover-push-right" => "Cover Push Right", "revolving-door-left" => "Revolving Door Left", "revolving-door-right" => "Revolving Door Right", "revolving-door-top" => "Revolving Door Top", "revolving-door-bottom" => "Revolving Door Bottom", "cover-slide-top" => "Cover Slide Top", "offset" => "Caption Offset", "guillotine-reverse" => "Guillotine Reverse", "half-slide" => "Half Slide", "sqkwoosh" => "Sqkwoosh", "tunnel" => "Tunnel", "direction-aware" => "Direction Aware", "phophorus-rotate" => "Phophorus Rotate", "phophorus-offset" => "Phophorus Offset", "phophorus-scale" => "Phophorus Scale", "cube" => "Cube", "polaroid" => "Polaroid", "3d-cube" => "3D Cube");
        // line 1037
        echo "                    ";
        $context["iconsWithCaptionsEffects"] = array("icons" => "Default", "icons-scale" => "Scale", "icons-sodium-left" => "Sodium Left", "icons-sodium-top" => "Sodium Top", "icons-nitrogen-top" => "Nitrogen Top");
        // line 1044
        echo "                    ";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context["enableCaptions"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 1045
        echo "                    ";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context["polaroidIsEnable"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "effect", array()) == "polaroid")) ? ("true") : ("false"));
        // line 1046
        echo "
                    ";
        // line 1048
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["enableCaptions"])) { $_enableCaptions_ = $context["enableCaptions"]; } else { $_enableCaptions_ = null; }
        if (isset($context["f"])) { $_f_ = $context["f"]; } else { $_f_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Captions")), ((($_form_->getradio("thumbnail[overlay][enabled]", "true", twig_array_merge(array("id" => "showCaptions"), (($_enableCaptions_) ? (array("checked" => "checked")) : (array())))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "showCaptions")) . $_form_->getradio("thumbnail[overlay][enabled]", "false", twig_array_merge(array("id" => "hideCaptions"), (($_enableCaptions_) ? (array()) : (array("checked" => "checked")))))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "hideCaptions")), "", true, "useCaptions");
        // line 1068
        echo "

                    ";
        // line 1071
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Effect")), ($_form_->getbutton("", call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose effect")), array("id" => "chooseEffect", "class" => "button bordered")) . $_form_->gethidden("thumbnail[overlay][effect]", (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "effect", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "effect", array()), "quarter-appear")) : ("quarter-appear")), array("id" => "overlayEffect"))), "chooseEffect");
        // line 1083
        echo "

                    ";
        // line 1086
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Personal captions")), $_form_->getselect("thumbnail[overlay][personal]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "personal", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "personal", array()), "false")) : ("false")), array("style" => "width: auto;")), "overlay-personal");
        // line 1094
        echo "

                    ";
        // line 1097
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["polaroidIsEnable"])) { $_polaroidIsEnable_ = $context["polaroidIsEnable"]; } else { $_polaroidIsEnable_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Style")), $_form_->getselect("", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), $_polaroidIsEnable_, array("style" => "width: auto;")), "polaroid-effect");
        // line 1105
        echo "

                    ";
        // line 1108
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Image Animation")), $_form_->getselect("thumbnail[overlay][polaroidAnimation]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array()), "true")) : ("true")), array("style" => "width: auto;")), "polaroid-animation");
        // line 1116
        echo "

                    ";
        // line 1119
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Image Scattering ")), $_form_->getselect("thumbnail[overlay][polaroidScattering]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array()), "true")) : ("true")), array("style" => "width: auto;")), "polaroid-scattering");
        // line 1127
        echo "

                    ";
        // line 1130
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Frame Width")), $_form_->getinput("number", "thumbnail[overlay][polaroidFrameWidth]", (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array()), 20)) : (20)), array("style" => array("width" => "140px"))), "polaroid-frame-width");
        // line 1138
        echo "

                    ";
        // line 1141
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), $_form_->gettext("thumbnail[overlay][background]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "background", array()), array("class" => "gg-color-picker")), "overlay-background");
        // line 1148
        echo "

                    ";
        // line 1151
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text color")), $_form_->gettext("thumbnail[overlay][foreground]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "foreground", array()), array("class" => "gg-color-picker")), "overlay-foreground");
        // line 1158
        echo "

                    ";
        // line 1161
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transparency")), $_form_->getselect("thumbnail[overlay][transparency]", array(0 => "0%", 1 => "10%", 2 => "20%", 3 => "30%", 4 => "40%", 5 => "50%", 6 => "60%", 7 => "70%", 8 => "80%", 9 => "90%", 10 => "100%"), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "transparency", array()), 9)) : (9)), array("style" => "width: auto;")), "overlay-transparency");
        // line 1169
        echo "

                    ";
        // line 1172
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text size")), ($_form_->getinput("number", "thumbnail[overlay][text_size]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size", array()), array("style" => array("width" => "140px"))) . $_form_->getselect("thumbnail[overlay][text_size_unit]", array(0 => "pixels", 1 => "percents", 2 => "ems"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array("style" => "margin-top: -2px; height: 27px"))), "text-size");
        // line 1186
        echo "

                    ";
        // line 1189
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text horizontal align")), $_form_->getselect("thumbnail[overlay][text_align]", array("left" => "Left", "right" => "Right", "center" => "Center", "auto" => "Auto"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_align", array()), array("style" => "width: auto;")), "text-align");
        // line 1197
        echo "

                    ";
        // line 1200
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text vertical align")), $_form_->getselect("thumbnail[overlay][position]", array("top" => "Top", "middle" => "Middle", "bottom" => "Bottom"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "position", array()), array("style" => "width: auto;")), "overlay-position");
        // line 1208
        echo "

                    ";
        // line 1211
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["fontList"])) { $_fontList_ = $context["fontList"]; } else { $_fontList_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Font family")), $_form_->getselectv("thumbnail[overlay][font_family]", $_fontList_, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "font_family", array()), array("style" => "width: auto;")), "font-family");
        // line 1219
        echo "


                    ";
        // line 1223
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide image title tooltip")), $_form_->getselect("thumbnail[tooltip]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), $this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "tooltip", array()), array("style" => "width: auto;")), "tooltip");
        // line 1231
        echo "

                    ";
        // line 1234
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mobile - show always caption")), $_form_->getselect("thumbnail[isMobile]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "isMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "isMobile", array()), "false")) : ("false"))), "ismobile");
        // line 1241
        echo "

                    ";
        // line 1244
        echo "                    ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable captions on mobile")), $_form_->getselect("thumbnail[isDisableMobileCaption]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array()), "false")) : ("false"))), "isDisableMobileCaption");
        // line 1251
        echo "
                </thead>
            </table>

            <div class=\"separator\"></div>

            ";
        // line 1257
        $this->displayBlock('icons', $context, $blocks);
        // line 1384
        echo "        </div>

        ";
        // line 1386
        $this->displayBlock('categories', $context, $blocks);
        // line 1417
        echo "
        ";
        // line 1418
        $this->displayBlock('watermark', $context, $blocks);
        // line 1433
        echo "
        ";
        // line 1434
        $this->displayBlock('form', $context, $blocks);
        // line 1436
        echo "
        ";
        // line 1437
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getclose();
        echo "

        <div id=\"saveDialog\" title=\"";
        // line 1439
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save settings as preset")), "html", null, true);
        echo "\">
            <div>
                <label for=\"presetTitle\">
                    ";
        // line 1442
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preset title:")), "html", null, true);
        echo "
                </label>
            </div>
            <div>
                <input id=\"presetTitle\" type=\"text\" name=\"title\" style=\"width:100%;\" value=\"";
        // line 1446
        if (isset($context["preset"])) { $_preset_ = $context["preset"]; } else { $_preset_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_preset_, "title", array()), "html", null, true);
        echo "\"/>
                <input id=\"settingsId\" type=\"hidden\" name=\"settings_id\" value=\"";
        // line 1447
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\"/>
            </div>
        </div>

        <div id=\"deletePreset\" title=\"";
        // line 1451
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete preset")), "html", null, true);
        echo "\">
            <p>
                ";
        // line 1453
        if (isset($context["preset"])) { $_preset_ = $context["preset"]; } else { $_preset_ = null; }
        echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Are you really want to delete preset \"%s\"?")), $this->getAttribute($_preset_, "title", array())), "html", null, true);
        echo "
            </p>
            <input type=\"hidden\" id=\"presetId\" value=\"";
        // line 1455
        if (isset($context["preset"])) { $_preset_ = $context["preset"]; } else { $_preset_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_preset_, "id", array()), "html", null, true);
        echo "\">
        </div>

        <div id=\"loadPreset\" title=\"";
        // line 1458
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Load settings from presets")), "html", null, true);
        echo "\">
            <div>
                <label for=\"presetList\">";
        // line 1460
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select preset:")), "html", null, true);
        echo "</label>
            </div>
            <div>
                <select id=\"presetList\" name=\"presetList\" style=\"width:100%\"></select>
            </div>
            <div id=\"presetListError\">
                <p id=\"presetLoadingFailed\" style=\"display:none\">
                    ";
        // line 1467
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Failed to load the presets.")), "html", null, true);
        echo "
                </p>

                <p id=\"presetEmpty\" style=\"display:none\">
                    ";
        // line 1471
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Currently you have no presets.")), "html", null, true);
        echo "
                </p>
            </div>
        </div>

        <div id=\"themeDialog\" title=\"";
        // line 1476
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select \"Big image\" theme")), "html", null, true);
        echo "\">
            <h1>
                ";
        // line 1478
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select a theme")), "html", null, true);
        echo "
            </h1>
            <div>
                ";
        // line 1481
        $context["bigImageThemes"] = array("theme_1" => "Theme 1", "theme_2" => "Theme 2", "theme_3" => "Theme 3", "theme_4" => "Theme 4", "theme_5" => "Theme 5", "theme_6" => "Theme 6", "theme_7" => "Theme 7");
        // line 1490
        echo "
                ";
        // line 1491
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if ($this->getAttribute($_environment_, "isPro", array(), "method")) {
            // line 1492
            echo "                    ";
            if (isset($context["bigImageThemes"])) { $_bigImageThemes_ = $context["bigImageThemes"]; } else { $_bigImageThemes_ = null; }
            $context["bigImageThemes"] = twig_array_merge($_bigImageThemes_, array("theme_1_pro" => "Fullscreen popup"));
            // line 1493
            echo "                ";
        }
        // line 1494
        echo "
                ";
        // line 1495
        if (isset($context["bigImageThemes"])) { $_bigImageThemes_ = $context["bigImageThemes"]; } else { $_bigImageThemes_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_bigImageThemes_);
        foreach ($context['_seq'] as $context["value"] => $context["name"]) {
            // line 1496
            echo "                    <div class=\"grid-gallery-caption\">
                        <img data-name=\"";
            // line 1497
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\" data-val=\"";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
            echo "\" class=\"theme dialog-image\"
                             src=\"";
            // line 1498
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "getModule", array(0 => "colorbox"), "method"), "getThemeScreenshotUrl", array(0 => $_value_), "method"), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\"
                             title=\"";
            // line 1499
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\"/>
                        <div class=\"select-element\">
                            <h3>";
            // line 1501
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "</h3>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1505
        echo "
            </div>
        </div>

        <div id=\"effectDialog\" title=\"";
        // line 1509
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select overlay effect")), "html", null, true);
        echo "\">
            <div id=\"effectsPreview\" style=\"margin-top: 10px;\">
                ";
        // line 1511
        if (isset($context["effects"])) { $_effects_ = $context["effects"]; } else { $_effects_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_effects_);
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 1512
            echo "                    ";
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            if (($_type_ == "direction-aware")) {
                // line 1513
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                echo twig_escape_filter($this->env, $_type_, "html", null, true);
                echo "\">
                            <div class=\"box\">
                                <div class=\"box__right\">Right → Left</div>
                                <div class=\"box__left\">Left → Right</div>
                                <div class=\"box__top\">Top → Bottom</div>
                                <div class=\"box__bottom\">Bottom → Top</div>
                                <div class=\"box__center\">
                                </div>
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 1521
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "\" class=\"dialog-image\">
                            </div>
                            <div class=\"select-element\">
                                ";
                // line 1524
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>
                    ";
            } elseif (($_type_ == "3d-cube")) {
                // line 1528
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                echo twig_escape_filter($this->env, $_type_, "html", null, true);
                echo "\">
                            <div class=\"box-3d-cube-scene\" style=\"perspective: 300px;-webkit-perspective: 300px\">
                                <div class=\"box-3d-cube\"
                                     style=\"
                                         transform-origin:50% 50% -75px;
                                         -ms-transform-origin: 50% 50% -75px;
                                         -webkit-transform-origin: 50% 50% -75px;
                                         width:150px; height:150px
                                     \"
                                >
                                    <div class=\"face front\" style=\"width:150px; height:150px\">
                                        <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 1539
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "\" class=\"dialog-image\">
                                    </div>
                                    <div style=\"";
                // line 1541
                if (isset($context["figcaptionStyle"])) { $_figcaptionStyle_ = $context["figcaptionStyle"]; } else { $_figcaptionStyle_ = null; }
                echo twig_escape_filter($this->env, trim($_figcaptionStyle_), "html", null, true);
                echo "width:150px; height:150px\" class=\"face back\">
                                        <div class=\"grid-gallery-figcaption-wrap\">
                                            <span>";
                // line 1543
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"select-element\">
                                ";
                // line 1549
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>
                    ";
            } else {
                // line 1553
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
                echo twig_escape_filter($this->env, $_type_, "html", null, true);
                echo "\">
                            <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 1554
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "\" class=\"dialog-image\">
                            <figcaption style=\"";
                // line 1555
                if (isset($context["figcaptionStyle"])) { $_figcaptionStyle_ = $context["figcaptionStyle"]; } else { $_figcaptionStyle_ = null; }
                echo twig_escape_filter($this->env, trim($_figcaptionStyle_), "html", null, true);
                echo "\">
                                <div class=\"grid-gallery-figcaption-wrap\" style=\"width:100%;height:100%;top:0;\">
                                    <div style=\"display:table;width:100%;height:100%;\">
                                        <span style=\"display:table-cell;font-size:";
                // line 1558
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                echo ";padding:10px;vertical-align:";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
                echo ";\">Caption</span>
                                    </div>
                                </div>
                            </figcaption>
                            <div class=\"select-element\">
                                ";
                // line 1563
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>
                    ";
            }
            // line 1567
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1568
        echo "                <div class=\"grid-gallery-clearfix\" style=\"clear: both;\"></div>
                <div class=\"captions-effect-with-icons\" data-confirm=\"";
        // line 1569
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("This effect requires icons be enabled. Enable Icons?")), "html", null, true);
        echo "\">
                    <h3>Captions effects with icons</h3>
                    ";
        // line 1571
        $this->displayBlock('iconsEffects', $context, $blocks);
        // line 1595
        echo "                </div>
            </div>
        </div>

        <div id=\"shadowDialog\" title=\"";
        // line 1599
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select shadow preset")), "html", null, true);
        echo "\">
            <h1>
                ";
        // line 1601
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select shadow")), "html", null, true);
        echo "
            </h1>
            <div class=\"shadow-dialog-wrapper\">
                ";
        // line 1604
        $context["shadowPresets"] = array("effect_1" => array("name" => "Effect 1", "offset_x" => "8", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_2" => array("name" => "Effect 2", "offset_x" => "-8", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_3" => array("name" => "Effect 3", "offset_x" => "-8", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_4" => array("name" => "Effect 4", "offset_x" => "8", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_5" => array("name" => "Effect 5", "offset_x" => "8", "offset_y" => "0", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_6" => array("name" => "Effect 6", "offset_x" => "-8", "offset_y" => "0", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_7" => array("name" => "Effect 7", "offset_x" => "0", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_8" => array("name" => "Effect 8", "offset_x" => "0", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_9" => array("name" => "Effect 9", "offset_x" => "0", "offset_y" => "4", "blur" => "10", "color" => "rgba(0, 0, 0, 1.0)"), "effect_10" => array("name" => "Effect 10", "offset_x" => "0", "offset_y" => "-4", "blur" => "8", "color" => "rgba(0, 0, 0, 1.0)"));
        // line 1676
        echo "

                ";
        // line 1678
        if (isset($context["shadowPresets"])) { $_shadowPresets_ = $context["shadowPresets"]; } else { $_shadowPresets_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_shadowPresets_);
        foreach ($context['_seq'] as $context["value"] => $context["effect"]) {
            // line 1679
            echo "                    <div class=\"grid-gallery-caption\" style=\"float: left; margin-left: 15px; cursor: pointer;\">
                        <div class=\"shadow-preset\" data-offset-x=\"";
            // line 1680
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "offset_x", array()), "html", null, true);
            echo "\" data-offset-y=\"";
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "offset_y", array()), "html", null, true);
            echo "\" data-blur=\"";
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "blur", array()), "html", null, true);
            echo "\" data-color=\"";
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "color", array()), "html", null, true);
            echo "\"
                             style=\"margin: 20px; box-shadow: ";
            // line 1681
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "offset_x", array()), "html", null, true);
            echo "px ";
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "offset_y", array()), "html", null, true);
            echo "px ";
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "blur", array()), "html", null, true);
            echo "px ";
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "color", array()), "html", null, true);
            echo ";\">
                            <img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 1682
            if (isset($context["effect"])) { $_effect_ = $context["effect"]; } else { $_effect_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_effect_, "name", array()), "html", null, true);
            echo "\" class=\"dialog-image\"/>
                        </div>
                        <div class=\"select-element\">
                            ";
            // line 1685
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['effect'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1689
        echo "
            </div>
        </div>

        <div id=\"reviewNotice\" title=\"Review\" hidden>
            <h3>Hey, I noticed you just use Gallery by Supsystic over a week – that’s awesome!</h3>
            <p>Could you please do me a BIG favor and give it a 5-star rating on WordPress? Just to help us spread the word and boost our motivation.</p>

            <ul style=\"list-style: circle; padding-left: 30px;\">
                <li>
                    <button class=\"button button-primary\"><a href=\"//wordpress.org/support/view/plugin-reviews/gallery-by-supsystic?rate=5#postform\" target=\"_blank\" class=\"bupSendStatistic\" data-statistic-code=\"is_shown\" style=\"color:#000000 !important;\">Ok, you deserve it</a></button>
                </li>
                <li>
                    <button class=\"button button-primary\"><span class=\"toeLikeLink bupSendStatistic\" data-statistic-code=\"is_shown\">Nope, maybe later</span></button>
                </li>
                <li>
                    <button class=\"button button-primary\"><span class=\"toeLikeLink bupSendStatistic\" data-statistic-code=\"is_shown\">I already did</span></button>
                </li>
            </ul>
        </div>

        <div id=\"settingsImportDialog\" title=\"Import\" hidden>
            <div class=\"import\">
                <p>";
        // line 1712
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import settings from gallery")), "html", null, true);
        echo "</p>
                <select class=\"list\"></select>
            </div>
            <div class=\"import-not-available\" style=\"display:none\">
                <p>";
        // line 1716
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Here you can import settings from other galleries, but right now, you have only one gallery, create more - and see how it works")), "html", null, true);
        echo "</p>
            </div>
        </div>

        ";
        // line 1720
        $context["importTypes"] = $this->loadTemplate("@galleries/shortcode/import.twig", "@galleries/settings.twig", 1720);
        // line 1721
        echo "        <div id=\"importDialog\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select source to import from")), "html", null, true);
        echo "\" style=\"display: none;\">
            ";
        // line 1722
        if (isset($context["importTypes"])) { $_importTypes_ = $context["importTypes"]; } else { $_importTypes_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo $_importTypes_->getshow(400, $this->getAttribute($_gallery_, "id", array()));
        echo "
        </div>

        <div class=\"buttons-edit-preset-dialog-preview\" title=\"";
        // line 1725
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons preset editor for Paginations, Categories and Load More buttons")), "html", null, true);
        echo "\">
            <a href=\"";
        // line 1726
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                <img src=\"";
        // line 1727
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/custom_button_icon_pro.jpg\" />
            </a>
        </div>
        <div class=\"loader-dialog-preview\" title=\"";
        // line 1730
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Improve free version")), "html", null, true);
        echo "\" style=\"line-height: 200%;\">
            Please be advised that this option is available only in <u>Pro version</u>. You can
            <a  href=\"";
        // line 1732
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\" class=\"button\">
                Get PRO
            </a>
            today and get this and other PRO options for Galleries!
        </div>
    </div>

    ";
        // line 1739
        $this->displayBlock('modals', $context, $blocks);
    }

    // line 190
    public function block_area($context, array $blocks = array())
    {
        // line 191
        echo "                <table class=\"form-table\" name=\"area\">
                    <thead>
                        ";
        // line 193
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Type")), $_form_->getselect("area[grid]", array(0 => "Fixed", 1 => "Vertical", 2 => "Horizontal", 3 => "Fixed Columns"), $this->getAttribute($this->getAttribute($_settings_, "area", array()), "grid", array()), array("style" => "width: auto;")), "grid-type", "gallery-types", "columns");
        // line 194
        echo "
        \t\t\t\t
                        <tr id=\"generalColumnsRow\" hidden>
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
        // line 199
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Number of Columns")), "html", null, true);
        echo "
        \t\t\t\t\t\t\t";
        // line 200
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getshow_tooltip("columns");
        echo "
        \t\t\t\t\t\t\t<br />
        \t\t\t\t\t\t\t<label><a href=\"http://supsystic.com/fixed-columns-gallery-example/\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">More Info</a> </label>
                                </label>
                            </th>
                            <td>
                                <input type=\"number\" name=\"general[columns][number]\" value=\"";
        // line 206
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)), "html", null, true);
        echo "\">
                            </td>
                        </tr>

                        ";
        // line 210
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Responsive columns")), ((((((((((((($_form_->getinput("number", "general[responsiveColumns][desktop][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "width", array()), 1200)) : (1200)), array("style" => array("width" => "60px;"))) . $_form_->getspan("", "px")) . $_form_->getinput("number", "general[responsiveColumns][desktop][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $_form_->getspan("", "columns")) . "<br>") . $_form_->getinput("number", "general[responsiveColumns][tablet][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "width", array()), 768)) : (768)), array("style" => array("width" => "60px;")))) . $_form_->getspan("", "px")) . $_form_->getinput("number", "general[responsiveColumns][tablet][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $_form_->getspan("", "columns")) . "<br>") . $_form_->getinput("number", "general[responsiveColumns][mobile][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "width", array()), 320)) : (320)), array("style" => array("width" => "60px;")))) . $_form_->getspan("", "px")) . $_form_->getinput("number", "general[responsiveColumns][mobile][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $_form_->getspan("", "columns")), "responsive-columns");
        // line 219
        echo "

                        ";
        // line 223
        echo "    \t\t\t\t\t
    \t\t\t\t\t";
        // line 224
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["gallery"])) { $_gallery_ = $context["gallery"]; } else { $_gallery_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Name:")), $_form_->getinput("text", "title", $this->getAttribute($_gallery_, "title", array()), array("style" => array("width" => "232px;"))), "title");
        // line 226
        echo "

                        ";
        // line 228
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow($this->getAttribute($_environment_, "translate", array(0 => "Gallery Position"), "method"), $_form_->getselect("area[position]", array(0 => "Left", 1 => "Center", 2 => "Right"), (($this->getAttribute($this->getAttribute($_settings_, "area", array(), "any", false, true), "position", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "area", array(), "any", false, true), "position", array()), 1)) : (1)), array("style" => "width: 100px;")));
        // line 229
        echo "


                        ";
        // line 232
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images distance")), ($_form_->getinput("number", "area[distance]", $this->getAttribute($this->getAttribute($_settings_, "area", array()), "distance", array()), array("style" => array("width" => "140px;"))) . $_form_->getspan("", "pixels")), "distance");
        // line 234
        echo "

                        ";
        // line 236
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery width")), ($_form_->getinput("number", "area[width]", $this->getAttribute($this->getAttribute($_settings_, "area", array()), "width", array()), array("style" => array("width" => "140px"))) . $_form_->getselect("area[width_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute($_settings_, "area", array()), "width_unit", array()), array("style" => "margin-top: -2px; height: 27px;"))), "area-width");
        // line 238
        echo "

                        ";
        // line 241
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Full screen width")), $_form_->getcheckbox("fullscreen", "1", (($this->getAttribute($_settings_, "fullscreen", array())) ? (array("checked" => "checked")) : (array()))), "full-screen-width");
        // line 248
        echo "

                        ";
        // line 250
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery padding")), ($_form_->getinput("number", "area[padding]", (($this->getAttribute($this->getAttribute($_settings_, "area", array(), "any", false, true), "padding", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "area", array(), "any", false, true), "padding", array()), 0)) : (0)), array("style" => array("width" => "140px"))) . $_form_->getspan("", "pixels")), "area-padding");
        // line 251
        echo "

                        ";
        // line 258
        echo "
                        ";
        // line 259
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image width")), ($_form_->getinput("number", "area[photo_width]", $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width", array()), array("style" => array("width" => "140px"))) . $_form_->getselect("area[photo_width_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_width_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "photo-width");
        // line 261
        echo "


                        ";
        // line 264
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image height")), ($_form_->getinput("number", "area[photo_height]", $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height", array()), array("style" => array("width" => "140px"))) . $_form_->getselect("area[photo_height_unit]", array(0 => "pixels"), $this->getAttribute($this->getAttribute($_settings_, "area", array()), "photo_height_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "photo-height");
        // line 266
        echo "

                        ";
        // line 268
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image radius")), ($_form_->getinput("number", "thumbnail[border][radius]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "radius", array()), array("style" => array("width" => "140px"))) . $_form_->getselect("thumbnail[border][radius_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "radius_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "border-radius");
        // line 270
        echo "
                   
                        ";
        // line 273
        echo "                        ";
        $context["qualityList"] = array("100" => "100%", "90" => "90%", "80" => "80%", "70" => "70%", "60" => "60%", "50" => "50%", "40" => "40%", "30" => "30%", "20" => "20%", "10" => "10%");
        // line 285
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["qualityList"])) { $_qualityList_ = $context["qualityList"]; } else { $_qualityList_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image crop quality")), $_form_->getselect("thumbnail[cropQuality]", $_qualityList_, (($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array(), "any", false, true), "cropQuality", array()), "100")) : ("100"))), "cropQuality");
        // line 292
        echo "

                        ";
        // line 294
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Display only first image")), $_form_->getcheckbox("displayFirstPhoto", "on", ((($this->getAttribute($_settings_, "displayFirstPhoto", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "display-first-photo");
        // line 295
        echo "

                        ";
        // line 297
        $this->displayBlock('openByLink', $context, $blocks);
        // line 305
        echo "

                        ";
        // line 307
        $this->displayBlock('disableRightClick', $context, $blocks);
        // line 309
        echo "                    </thead>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 297
    public function block_openByLink($context, array $blocks = array())
    {
        // line 298
        echo "                            ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open by link in popup")), "utm_source=plugin&utm_medium=open-by-link&utm_campaign=gallery", "open-by-link", $_form_->getcheckbox("openByLink", "on", array("disabled" => "disabled")));
        // line 303
        echo "
                        ";
    }

    // line 307
    public function block_disableRightClick($context, array $blocks = array())
    {
        // line 308
        echo "                        ";
    }

    // line 314
    public function block_socialSharing($context, array $blocks = array())
    {
        // line 315
        echo "                <table class=\"form-table\">
                    <thead>
                    ";
        // line 317
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (isset($context["f"])) { $_f_ = $context["f"]; } else { $_f_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social Sharing")), ((($_form_->getradio("socialSharing[enabled]", true, twig_array_merge(array("id" => "social-sharing-enable"), (($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "enabled", array())) ? (array("checked" => "checked")) : (array())))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "social-sharing-enable")) . $_form_->getradio("socialSharing[enabled]", false, twig_array_merge(array("id" => "social-sharing-disable"), (($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "enabled", array())) ? (array()) : (array("checked" => "checked")))))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "social-sharing-disable")), "social-sharing", true);
        // line 321
        echo "
                    </thead>
                    <tbody style=\"display: none;\">
                    ";
        // line 324
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "pluginInstalled", array())) {
            // line 325
            echo "                        ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "projectsList", array()))) {
                // line 326
                echo "

                            ";
                // line 328
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social Buttons Project")), $_form_->getselect("socialSharing[projectId]", $this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "projectsList", array()), $this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "projectId", array()), array("style" => "width: 200px")), "social-buttons-project");
                // line 333
                echo "

                            ";
                // line 335
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Sharing")), $_form_->getcheckbox("socialSharing[gallerySharing][enabled]", true, (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "gallerySharing", array()), "enabled", array())) ? (array("checked" => "checked")) : (array()))), "gallery-social-sharing");
                // line 336
                echo "

                            ";
                // line 338
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")), $_form_->getselect("socialSharing[gallerySharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "all" => "top and bottom"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "gallerySharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "gallery-sharing-buttons-position");
                // line 347
                echo "

                            ";
                // line 349
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $_form_->getrow("", $_form_->getcheckbox("socialSharing[imageSharing][enabled]", "0", array("checked" => "checked")), "image-sharing-hidden");
                // line 350
                echo "

                            ";
                // line 352
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                $context["enabled"] = $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "imageSharing", array()), "enabled", array());
                // line 353
                echo "                            ";
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["enabled"])) { $_enabled_ = $context["enabled"]; } else { $_enabled_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image Sharing")), $_form_->getcheckbox("socialSharing[imageSharing][enabled]", true, ((($_enabled_ != "0")) ? (array("checked" => "checked")) : (array()))), "image-social-sharing");
                // line 354
                echo "

                            ";
                // line 356
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")), $_form_->getselect("socialSharing[imageSharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "left" => "left", "right " => "right "), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "imageSharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "image-sharing-buttons-position");
                // line 366
                echo "

                            ";
                // line 368
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")), $_form_->getselect("socialSharing[imageSharing][buttonsAlignHorizontal]", array("left" => "left", "center" => "center", "right" => "right"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "imageSharing", array()), "buttonsAlignHorizontal", array()), array("style" => "width: 200px")), "image-sharing-buttons-align-horizontal");
                // line 377
                echo "

                            ";
                // line 379
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")), $_form_->getselect("socialSharing[imageSharing][buttonsAlignVertical]", array("top" => "top", "middle" => "middle", "bottom" => "bottom"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "imageSharing", array()), "buttonsAlignVertical", array()), array("style" => "width: 200px")), "image-sharing-buttons-align-vertical");
                // line 388
                echo "

                            ";
                // line 390
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                echo $_form_->getrow("", $_form_->getcheckbox("socialSharing[popupImageSharing][enabled]", "0", array("checked" => "checked")), "popup-sharing-hidden");
                // line 391
                echo "

                            ";
                // line 393
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                $context["enabled"] = $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "popupImageSharing", array()), "enabled", array());
                // line 394
                echo "                            ";
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["enabled"])) { $_enabled_ = $context["enabled"]; } else { $_enabled_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image Sharing")), $_form_->getcheckbox("socialSharing[popupImageSharing][enabled]", true, ((($_enabled_ != "0")) ? (array("checked" => "checked")) : (array()))), "popup-social-sharing");
                // line 395
                echo "

                            ";
                // line 397
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")), $_form_->getselect("socialSharing[popupImageSharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "left" => "left", "right " => "right "), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "popupImageSharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "popup-sharing-buttons-position");
                // line 407
                echo "

                            ";
                // line 409
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")), $_form_->getselect("socialSharing[popupImageSharing][buttonsAlignHorizontal]", array("left" => "left", "center" => "center", "right" => "right"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignHorizontal", array()), array("style" => "width: 200px")), "popup-sharing-buttons-align-horizontal");
                // line 418
                echo "

                            ";
                // line 420
                if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")), $_form_->getselect("socialSharing[popupImageSharing][buttonsAlignVertical]", array("top" => "top", "middle" => "middle", "bottom" => "bottom"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignVertical", array()), array("style" => "width: 200px")), "popup-sharing-buttons-align-vertical");
                // line 429
                echo "

                        ";
            } else {
                // line 432
                echo "                            <tr>
                                <td colspan=\"2\">
                                    <span>";
                // line 434
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You have no Social Sharing projects for now.")), "html", null, true);
                echo " </span>
                                    <a href=\"/wp-admin/admin.php?page=supsystic-social-sharing&module=projects&action=add\"
                                       target=\"_blank\" rel=\"noopener noreferrer\"
                                    >";
                // line 437
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Create your first project")), "html", null, true);
                echo "</a>
                                    <span> ";
                // line 438
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("then just reload page with your Gallery settings, and you will see list with available Social Projects for your Gallery.")), "html", null, true);
                echo "</span>
                                </td>
                            </tr>
                        ";
            }
            // line 442
            echo "                    ";
        } else {
            // line 443
            echo "                        <tr>
                            <td colspan=\"2\">
                                <span>";
            // line 445
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You need to install Social Share Buttons by Supsystic to use this feature.")), "html", null, true);
            echo " </span>
                                <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"/wp-admin/plugin-install.php?tab=search&type=term&s=Social+Share+Buttons+by+Supsystic\"
                                >";
            // line 447
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Install plugin")), "html", null, true);
            echo "</a>
                                <span> ";
            // line 448
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("from your admin area, or visit it's official page on Wordpress.org")), "html", null, true);
            echo " </span>
                                <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"https://wordpress.org/plugins/social-share-buttons-by-supsystic/\"> ";
            // line 449
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("here.")), "html", null, true);
            echo "</a>
                            </td>

                        </tr>
                    ";
        }
        // line 454
        echo "                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 459
    public function block_horizontalScroll($context, array $blocks = array())
    {
        // line 460
        echo "                <table class=\"form-table\">
                    <thead>
                        ";
        // line 462
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context["horizontalScrollEnabled"] = ((($this->getAttribute($this->getAttribute($_settings_, "horizontalScroll", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "horizontalScroll", array(), "any", false, true), "enabled", array()), "false")) : ("false")) == "true");
        // line 463
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["horizontalScrollEnabled"])) { $_horizontalScrollEnabled_ = $context["horizontalScrollEnabled"]; } else { $_horizontalScrollEnabled_ = null; }
        if (isset($context["f"])) { $_f_ = $context["f"]; } else { $_f_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Horizontal Scroll")), ((($_form_->getradio("horizontalScroll[enabled]", "true", twig_array_merge(array("id" => "horizontal-scroll-enable"), (($_horizontalScrollEnabled_) ? (array("checked" => "checked")) : (array())))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "horizontal-scroll-enable")) . $_form_->getradio("horizontalScroll[enabled]", "false", twig_array_merge(array("id" => "horizontal-scroll-disable"), (($_horizontalScrollEnabled_) ? (array()) : (array("checked" => "checked")))))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "horizontal-scroll-disable")), "horizontal-scroll", true);
        // line 467
        echo "
                    </thead>
                    <tbody>
                        ";
        // line 470
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Scroll Bar Color")), $_form_->gettext("horizontalScroll[color]", $this->getAttribute($this->getAttribute($_settings_, "horizontalScroll", array()), "color", array()), array("class" => "gg-color-picker")), "horizontal-scroll-color");
        // line 471
        echo "

                        ";
        // line 473
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Scroll Bar Transparency")), $_form_->getselect("horizontalScroll[transparency]", array("0" => "0%", "10" => "10%", "20" => "20%", "30" => "30%", "40" => "40%", "50" => "50%", "60" => "60%", "70" => "70%", "80" => "80%", "90" => "90%", "100" => "100%"), (($this->getAttribute($this->getAttribute($_settings_, "horizontalScroll", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "horizontalScroll", array(), "any", false, true), "transparency", array()), "60")) : ("60")), array("style" => "width: auto")), "horizontal-scroll-transparency");
        // line 489
        echo "

                        ";
        // line 491
        $this->displayBlock('horizontalScrollAfter', $context, $blocks);
        // line 493
        echo "                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 491
    public function block_horizontalScrollAfter($context, array $blocks = array())
    {
        // line 492
        echo "                        ";
    }

    // line 522
    public function block_border($context, array $blocks = array())
    {
        // line 523
        echo "                <table class=\"form-table\" name=\"border\">
                    <thead>
                        ";
        // line 525
        $context["borderTypes"] = array("solid" => "Solid", "dotted" => "Dotted", "dashed" => "Dashed", "double" => "Double", "groove" => "Groove", "ridge" => "Ridge", "inset" => "Inset", "outset" => "Outset", "none" => "None");
        // line 536
        echo "
                        ";
        // line 552
        echo "
                        ";
        // line 553
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["borderTypes"])) { $_borderTypes_ = $context["borderTypes"]; } else { $_borderTypes_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border Type")), ($_form_->getselect("thumbnail[border][type]", $_borderTypes_, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "type", array()), array("style" => "width: auto;")) . $_form_->getinput("text", "border-type", "Example", array("style" => "margin-top: -2px; height: 27px; width: 70px; border: 1px solid black; display:none;"))), "border-type", "gallery-borders");
        // line 555
        echo "

                        ";
        // line 557
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border color")), $_form_->getinput("text", "thumbnail[border][color]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "color", array()), array("class" => "gg-color-picker")), "border-color");
        // line 558
        echo "

                        ";
        // line 560
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border width")), ($_form_->getinput("number", "thumbnail[border][width]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "border", array()), "width", array()), array("style" => array("width" => "140px;"))) . $_form_->getspan("", "pixels")), "border-width");
        // line 562
        echo "
                    </thead>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 568
    public function block_shadow($context, array $blocks = array())
    {
        // line 569
        echo "                <table class=\"form-table\" name=\"shadow\">
                    <thead>
                        <tr id=\"useShadowRow\">
                            <th scope=\"row\">
                                <h3 style=\"margin: 0 !important;\">
                                    ";
        // line 574
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow")), "html", null, true);
        echo "
                                </h3>
                            </th>
                            <td>
                                <input type=\"radio\" id=\"showShadow\" name=\"use_shadow\" value=\"1\" ";
        // line 578
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "use_shadow", array()) == "1")) {
            echo "checked";
        }
        echo ">
                                    ";
        // line 579
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "html", null, true);
        echo "
                                <input type=\"radio\" id=\"hideShadow\" name=\"use_shadow\" value=\"0\" ";
        // line 580
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "use_shadow", array()) != "1")) {
            echo "checked";
        }
        echo ">
                                    ";
        // line 581
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "html", null, true);
        echo "
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope=\"row\">
                                ";
        // line 588
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow preset")), "html", null, true);
        echo "
                            </th>
                            <td>
                                <button id=\"chooseShadowPreset\" class=\"button bordered\" type=\"button\">
                                    ";
        // line 592
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose preset")), "html", null, true);
        echo "
                                </button>
                            </td>
                        </tr>

                        <tr id=\"useMouseShadowRow\">
                            <th scope=\"row\">
                                ";
        // line 599
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("When mouse is over")), "html", null, true);
        echo "
                                ";
        // line 600
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getshow_tooltip("when-mouse-is-over");
        echo "
                            </th>
                            <td>
                                <select id=\"useMouseOverShadow\" style=\"width: auto;\" name=\"mouse_shadow\">
                                    <option value=\"0\" ";
        // line 604
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "mouse_shadow", array()) == "0")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 605
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Off")), "html", null, true);
        echo "
                                    </option>
                                    <option value=\"1\" ";
        // line 607
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "mouse_shadow", array()) == "1")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 608
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show mouse on")), "html", null, true);
        echo "
                                    </option>
                                    <option value=\"2\" ";
        // line 610
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "mouse_shadow", array()) == "2")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 611
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide mouse on")), "html", null, true);
        echo "
                                    </option>
                                </select>
                            </td>
                        </tr>

                        ";
        // line 617
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay image with shadow")), $_form_->getselect("thumbnail[shadow][overlay]", array(0 => "Off", 1 => "On"), $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "shadow", array()), "overlay", array()), array("style" => "width: auto;")), "overlay-type");
        // line 618
        echo "

                        ";
        // line 620
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow color")), $_form_->gettext("thumbnail[shadow][color]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "shadow", array()), "color", array()), array("style" => array("width" => "300px"), "class" => "gg-color-picker")), "shadow-color");
        // line 621
        echo "

                        ";
        // line 623
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow blur")), $_form_->getinput("number", "thumbnail[shadow][blur]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "shadow", array()), "blur", array()), array("style" => array("width" => "auto"))), "shadow-blur");
        // line 624
        echo "

                        ";
        // line 626
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow X")), $_form_->getinput("number", "thumbnail[shadow][x]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "shadow", array()), "x", array()), array("style" => array("width" => "auto"))), "shadow-x");
        // line 627
        echo "

                        ";
        // line 629
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow Y")), $_form_->getinput("number", "thumbnail[shadow][y]", $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "shadow", array()), "y", array()), array("style" => array("width" => "auto"))), "shadow-y");
        // line 630
        echo "
                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 636
    public function block_popup($context, array $blocks = array())
    {
        // line 637
        echo "                <table class=\"form-table\">
                    <thead>
                        ";
        // line 640
        echo "                        ";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context["popUpEnabled"] = ((($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 641
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["popUpEnabled"])) { $_popUpEnabled_ = $context["popUpEnabled"]; } else { $_popUpEnabled_ = null; }
        if (isset($context["f"])) { $_f_ = $context["f"]; } else { $_f_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pop-up Image")), ((($_form_->getradio("box[enabled]", "true", twig_array_merge(array("id" => "box-enable"), (($_popUpEnabled_) ? (array("checked" => "checked")) : (array())))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "box-enable")) . $_form_->getradio("box[enabled]", "false", twig_array_merge(array("id" => "box-disable"), (($_popUpEnabled_) ? (array()) : (array("checked" => "checked")))))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "box-disable")), "box", true);
        // line 660
        echo "
                    </thead>
                    <tbody>
                        ";
        // line 664
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup box theme")), (($_form_->getbutton("chooseTheme", call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose theme")), array("class" => "button bordered", "id" => "chooseTheme")) . $_form_->gethidden("box[type]", $this->getAttribute($this->getAttribute($_settings_, "box", array()), "type", array()))) . $_form_->gethidden("box[theme]", $this->getAttribute($this->getAttribute($_settings_, "box", array()), "theme", array()), array("id" => "bigImageTheme"))));
        // line 679
        echo "

                        ";
        // line 682
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable on mobile")), $_form_->getcheckbox("box[mobile]", "on", ((($this->getAttribute($this->getAttribute($_settings_, "box", array()), "mobile", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "mobile");
        // line 689
        echo "

                        ";
        // line 692
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image Text")), $_form_->getselect("box[imageText]", array("data-caption" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Caption")), "data-title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Title")), "alt" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Alt text")), "data-description" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description"))), (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "imageText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "imageText", array()), "data-description")) : ("data-description")), array("style" => "width: 150px")), "popup-image-text");
        // line 704
        echo "

                        ";
        // line 707
        echo "                        ";
        $this->displayBlock('popupLinkedImageText', $context, $blocks);
        // line 731
        echo "
\t\t\t\t\t\t";
        // line 733
        echo "\t\t\t\t\t\t";
        $this->displayBlock('disableSourceImageForLi', $context, $blocks);
        // line 751
        echo "
                        ";
        // line 753
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide Popup Captions")), $_form_->getcheckbox("box[captions]", "on", ((($this->getAttribute($this->getAttribute($_settings_, "box", array()), "captions", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "captions");
        // line 760
        echo "

                        ";
        // line 762
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide long titles")), $_form_->getcheckbox("hideLongTooltipTitles", "on", ((($this->getAttribute($_settings_, "hideLongTooltipTitles", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "hide-long-tooltip-titles");
        // line 768
        echo "

                        ";
        // line 771
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), $_form_->gettext("box[background]", $this->getAttribute($this->getAttribute($_settings_, "box", array()), "background", array()), array("class" => "gg-color-picker")), "box-background");
        // line 778
        echo "
                        
                        ";
        // line 781
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transparency")), $_form_->getselect("box[transparency]", array("0" => "0%", "10" => "10%", "20" => "20%", "30" => "30%", "40" => "40%", "50" => "50%", "60" => "60%", "70" => "70%", "80" => "80%", "90" => "90%", "100" => "100%"), (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "transparency", array()), 30)) : (30)), array("style" => "width: auto")), "box-transparency");
        // line 800
        echo "

                        ";
        // line 803
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow")), $_form_->getselect("box[slideshow]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshow", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshow", array()), "false")) : ("false")), array("style" => "width: auto")), "slideshow");
        // line 811
        echo "

                        ";
        // line 814
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow speed")), $_form_->getinput("number", "box[slideshowSpeed]", (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshowSpeed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshowSpeed", array()), 2500)) : (2500)), array("style" => array("width" => "auto")), "box-slideshowSpeed"));
        // line 822
        echo "

                        ";
        // line 825
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow pause on hover")), $_form_->getselect("box[popupHoverStop]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No"))), (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "popupHoverStop", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "popupHoverStop", array()), "false")) : ("false")), array("style" => "width: auto"), "box-popupHoverStop"), "popupHoverStop");
        // line 834
        echo "

                        ";
        // line 837
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow autostart")), $_form_->getselect("box[slideshowAuto]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No"))), (($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshowAuto", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "box", array(), "any", false, true), "slideshowAuto", array()), "false")) : ("false")), array("style" => "width: auto"), "box-slideshowAuto"));
        // line 845
        echo "

                        ";
        // line 848
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image size")), ((($_form_->getinput("number", "box[popupwidth]", $this->getAttribute($this->getAttribute($_settings_, "box", array()), "popupwidth", array()), array("style" => array("width" => "60px"))) . $_form_->getspan("", "x")) . $_form_->getinput("number", "box[popupheight]", $this->getAttribute($this->getAttribute($_settings_, "box", array()), "popupheight", array()), array("style" => array("width" => "60px")))) . $_form_->getspan("", "pixels")), "box-popupsize");
        // line 864
        echo "


                        ";
        // line 868
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable browser history")), $_form_->getcheckbox("box[disableHistory]", "true", ((($this->getAttribute($this->getAttribute($_settings_, "box", array()), "disableHistory", array()) == "true")) ? (array("checked" => "checked")) : (array()))), "box-disableHistory");
        // line 876
        echo "

                        ";
        // line 879
        echo "                        ";
        $this->displayBlock('popupAfter', $context, $blocks);
        // line 927
        echo "                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 707
    public function block_popupLinkedImageText($context, array $blocks = array())
    {
        // line 708
        echo "                            <tr>
                                <th scope=\"row\">
                                    <label style=\"margin: 0 !important;\">
                                        ";
        // line 711
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Linked Image Text")), "html", null, true);
        echo "
                                        <br />
                                        <label><a href=\"";
        // line 713
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=linkedImageText&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                    </label>
                                </th>
                                <td>
                                    ";
        // line 717
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getselect("box[linkedImageTextFree]", array("data-title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Title")), "alt" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Alt text")), "data-description" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description"))), "data-title", array("style" => "width: 150px", "disabled" => "", "id" => "ptsLinkTextChoose"));
        // line 727
        echo "
                                </td>
                            </tr>
                        ";
    }

    // line 733
    public function block_disableSourceImageForLi($context, array $blocks = array())
    {
        // line 734
        echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label style=\"margin: 0 !important;\">
\t\t\t\t\t\t\t\t\t\t";
        // line 737
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable source image for Linked Images")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t<label><a href=\"";
        // line 739
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=linkedImageText&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
        // line 743
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_->getcheckbox("box[disableSourceImageForLiFree]", "1", array("disabled" => "disabled"));
        // line 747
        echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
    }

    // line 879
    public function block_popupAfter($context, array $blocks = array())
    {
        // line 880
        echo "                            ";
        // line 881
        echo "                            ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video size")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.size", ((($_form_->gettext("popup[video][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "popup", array(), "any", false, true), "video", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "popup", array(), "any", false, true), "video", array(), "any", false, true), "width", array()), "853")) : ("853")), array("style" => array("width" => "40px"), "disabled" => "")) . $_form_->getspan("", "x")) . $_form_->gettext("popup[video][height]", (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "popup", array(), "any", false, true), "video", array(), "any", false, true), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "popup", array(), "any", false, true), "video", array(), "any", false, true), "height", array()), "480")) : ("480")), array("style" => array("width" => "40px"), "disabled" => ""))) . $_form_->getspan("", "pixels")));
        // line 896
        echo "

                            ";
        // line 899
        echo "                            ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Autoplay video")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.autoplay", $_form_->getselect("popup[video][autoplay]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "popup", array(), "any", false, true), "video", array(), "any", false, true), "autoplay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "popup", array(), "any", false, true), "video", array(), "any", false, true), "autoplay", array()), "false")) : ("false")), array("disabled" => "")));
        // line 908
        echo "
                            
                            ";
        // line 911
        echo "                            ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("When video ends")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.onEnd", $_form_->getselect("popup[video][onEnd]", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Do nothing")), "1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open next slide")), "2" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Close popup"))), (($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "popup", array(), "any", false, true), "video", array(), "any", false, true), "onEnd", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "popup", array(), "any", false, true), "video", array(), "any", false, true), "onEnd", array()), "0")) : ("0")), array("disabled" => "")));
        // line 924
        echo "

                        ";
    }

    // line 932
    public function block_preload($context, array $blocks = array())
    {
        // line 933
        echo "                <table class=\"form-table\" name=\"preload\">
                    <thead>
                        ";
        // line 935
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context["preloadEnabled"] = ((($this->getAttribute($this->getAttribute($_settings_, "preload", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "preload", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 936
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["preloadEnabled"])) { $_preloadEnabled_ = $context["preloadEnabled"]; } else { $_preloadEnabled_ = null; }
        if (isset($context["f"])) { $_f_ = $context["f"]; } else { $_f_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Loader")), ((($_form_->getradio("preload[enabled]", "true", twig_array_merge(array("id" => "preload-enable"), (($_preloadEnabled_) ? (array("checked" => "checked")) : (array())))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "preload-enable")) . $_form_->getradio("preload[enabled]", "false", twig_array_merge(array("id" => "preload-disable"), (($_preloadEnabled_) ? (array()) : (array("checked" => "checked")))))) . $_f_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "preload-disable")), "preload", true);
        // line 940
        echo "
                    </thead>
                ";
        // line 942
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if ( !$this->getAttribute($_environment_, "isPro", array(), "method")) {
            // line 943
            echo "                    <tbody>
                        <tr id=\"preload-background\">
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
            // line 947
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), "html", null, true);
            echo "
                                    <br />
                                    <label><a href=\"";
            // line 949
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                </label>
                            </th>
                            <td>
                                ";
            // line 953
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $_form_->gettext("preload[background]", "#0073AA", array("class" => "gg-color-picker", "id" => "preloadColor-free"));
            echo "
                            </td>
                        </tr>
                        ";
            // line 956
            $context["piconImg"] = ('' === $tmp = "                            <div class=\"gallery-loading\">
                                <div class=\"blocks\">
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                </div>
                            </div>
                        ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 966
            echo "
                        <tr>
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
            // line 970
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose Icon")), "html", null, true);
            echo "
                                    <br />
                                    <label><a href=\"";
            // line 972
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                </label>
                            </th>
                            <td>
                                ";
            // line 976
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $_form_->getbutton("buttons-preload-icon", "Choose Icon", array("class" => "button button-primary", "id" => "choosePreicon-free"));
            echo "
                                ";
            // line 977
            if (isset($context["piconImg"])) { $_piconImg_ = $context["piconImg"]; } else { $_piconImg_ = null; }
            echo twig_escape_filter($this->env, $_piconImg_, "html", null, true);
            echo "
                            </td>
                        </tr>
                    </tbody>
                ";
        }
        // line 982
        echo "                </table>
            ";
    }

    // line 986
    public function block_post($context, array $blocks = array())
    {
        // line 987
        echo "            <div data-tab=\"post\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 989
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show Posts and Pages")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\"
                       href=\"";
        // line 992
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=postfeed&utm_campaign=gallery")), "html", null, true);
        echo "\">Get
                        PRO for 29\$</a>
                </h1>

                <div>
                    <a href=\"";
        // line 997
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=postfeed&utm_campaign=gallery")), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 998
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/posts_pro.jpg\" />
                    </a>
                </div>
            </div>
        ";
    }

    // line 1257
    public function block_icons($context, array $blocks = array())
    {
        // line 1258
        echo "                <table class=\"form-table\" name=\"icons\">
                    <thead>
                        ";
        // line 1260
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        $context["iconsEnabled"] = ((($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "enabled", array()), "false")) : ("false")) == "true");
        // line 1261
        echo "                        ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["iconsEnabled"])) { $_iconsEnabled_ = $context["iconsEnabled"]; } else { $_iconsEnabled_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show icons")), ((($_form_->getradio("icons[enabled]", "true", twig_array_merge(array("id" => "icons-enable"), (($_iconsEnabled_) ? (array("checked" => "checked")) : (array())))) . $_form_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "icons-enable")) . $_form_->getradio("icons[enabled]", "false", twig_array_merge(array("id" => "icons-disable"), (($_iconsEnabled_) ? (array()) : (array("checked" => "checked")))))) . $_form_->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "icons-disable")), "photo-icon", true);
        // line 1265
        echo "
                    </thead>
                    <tbody>
                        ";
        // line 1268
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select effect")), ($_form_->getbutton(null, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Animation")), array("class" => "button bordered", "id" => "selectIconsEffect")) . $_form_->gethidden("icons[effect]", $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "effect", array()), array("id" => "iconsEffectName"))));
        // line 1271
        echo "
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsColor\">
                                    ";
        // line 1275
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons color")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"text\" id=\"iconsColor\" class=\"gg-color-picker\" value=\"";
        // line 1279
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "color", array()), "html", null, true);
        echo "\" name=\"icons[color]\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsHoverColor\">
                                    ";
        // line 1285
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons hover color")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"text\" id=\"iconsHoverColor\" class=\"gg-color-picker\" value=\"";
        // line 1289
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "hover_color", array()), "html", null, true);
        echo "\" name=\"icons[hover_color]\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsBackgroundColor\">
                                    ";
        // line 1295
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"text\" id=\"iconsBackgroundColor\" class=\"gg-color-picker\" value=\"";
        // line 1299
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "background", array()), "html", null, true);
        echo "\" name=\"icons[background]\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsBackgroundHoverColor\">
                                    ";
        // line 1305
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background hover color")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"text\" id=\"iconsBackgroundHoverColor\" class=\"gg-color-picker\" value=\"";
        // line 1309
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "background_hover", array()), "html", null, true);
        echo "\" name=\"icons[background_hover]\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsSize\">
                                    ";
        // line 1315
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons size")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"number\" pattern=\"[0-9]\" id=\"iconsSize\"  name=\"icons[size]\" value=\"";
        // line 1319
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "size", array()), "html", null, true);
        echo "\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsMargin\">
                                    ";
        // line 1325
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Distance between icons")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"number\" pattern=\"[0-9]\" id=\"iconsMargin\"  name=\"icons[margin]\" value=\"";
        // line 1329
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "margin", array()), "html", null, true);
        echo "\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsOverlay\">
                                    ";
        // line 1335
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show overlay")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <select id=\"iconsOverlay\" name=\"icons[overlay_enabled]\" style=\"width: auto;\">
                                    <option value=\"true\" ";
        // line 1340
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_enabled", array()), "true");
        echo ">
                                        ";
        // line 1341
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "html", null, true);
        echo "
                                    </option>
                                    <option value=\"false\" ";
        // line 1343
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_enabled", array()), "false");
        echo ">
                                        ";
        // line 1344
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "html", null, true);
        echo "
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <tr class=\"icons-overlay-toggle\">
                            <th scope=\"row\">
                                <label for=\"iconsOverlayColor\">
                                    ";
        // line 1352
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay color")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"text\" id=\"iconsOverlayColor\" class=\"gg-color-picker\" value=\"";
        // line 1356
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_color", array()), "html", null, true);
        echo "\" name=\"icons[overlay_color]\"/>
                            </td>
                        </tr>
                        <tr class=\"icons-overlay-toggle\">
                            <th scope=\"row\">
                                <label for=\"iconsOverlayTransparency\">
                                    ";
        // line 1362
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay transparency")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <select id=\"iconsOverlayTransparency\" name=\"icons[overlay_transparency]\" style=\"width: auto;\">
                                    <option value=\"0\" ";
        // line 1367
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 0);
        echo ">0%</option>
                                    <option value=\"1\" ";
        // line 1368
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 1);
        echo ">10%</option>
                                    <option value=\"2\" ";
        // line 1369
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 2);
        echo ">20%</option>
                                    <option value=\"3\" ";
        // line 1370
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 3);
        echo ">30%</option>
                                    <option value=\"4\" ";
        // line 1371
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 4);
        echo ">40%</option>
                                    <option value=\"5\" ";
        // line 1372
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 5);
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ( !$this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "overlay_transparency", array(), "any", true, true)) {
            echo "selected=\"selected\"";
        }
        echo ">50%</option>
                                    <option value=\"6\" ";
        // line 1373
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 6);
        echo ">60%</option>
                                    <option value=\"7\" ";
        // line 1374
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 7);
        echo ">70%</option>
                                    <option value=\"8\" ";
        // line 1375
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 8);
        echo ">80%</option>
                                    <option value=\"9\" ";
        // line 1376
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 9);
        echo ">90%</option>
                                    <option value=\"10\" ";
        // line 1377
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo $_form_->getselected($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "overlay_transparency", array()), 10);
        echo ">100%</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            ";
    }

    // line 1386
    public function block_categories($context, array $blocks = array())
    {
        // line 1387
        echo "            <div data-tab=\"cats\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 1389
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Categorize images in the gallery")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\"
                       href=\"";
        // line 1392
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=categories&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO</a>
                </h1>

                <div>
                    <a href=\"";
        // line 1396
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=categories&utm_campaign=gallery")), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 1397
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/cats_pro.jpg\" />
                    </a>
                </div>
                ";
        // line 1400
        $this->displayBlock('pagination', $context, $blocks);
        // line 1415
        echo "            </div>
        ";
    }

    // line 1400
    public function block_pagination($context, array $blocks = array())
    {
        // line 1401
        echo "                    <h1 style=\"line-height: 1;\">
                        ";
        // line 1402
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Let user switch gallery pages")), "html", null, true);
        echo "
                        </br>
                        <a class=\"button get-pro\"
                           href=\"";
        // line 1405
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=pages&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO</a>
                    </h1>
                    <div name=\"pagination\">
                        <div>
                            <a href=\"";
        // line 1409
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=pages&utm_campaign=gallery")), "html", null, true);
        echo "\">
                                <img src=\"";
        // line 1410
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/pagination_pro.jpg\" />
                            </a>
                        </div>
                    </div>
                ";
    }

    // line 1418
    public function block_watermark($context, array $blocks = array())
    {
        // line 1419
        echo "            <div data-tab=\"water-m-tab\">
                <h1 style=\"line-height: 1em;\">
                    ";
        // line 1421
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add watermarks to your photos")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\"
                       href=\"";
        // line 1424
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=watermarks&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO for 29\$</a>
                </h1>
                <div>
                    <a href=\"";
        // line 1427
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=watermarks&utm_campaign=gallery")), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 1428
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_environment_, "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/water_m_pro.png\" />
                    </a>
                </div>
            </div>
        ";
    }

    // line 1434
    public function block_form($context, array $blocks = array())
    {
        // line 1435
        echo "        ";
    }

    // line 1571
    public function block_iconsEffects($context, array $blocks = array())
    {
        // line 1572
        echo "                        ";
        if (isset($context["iconsWithCaptionsEffects"])) { $_iconsWithCaptionsEffects_ = $context["iconsWithCaptionsEffects"]; } else { $_iconsWithCaptionsEffects_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_iconsWithCaptionsEffects_);
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 1573
            echo "                            <figure class=\"grid-gallery-caption\" data-type=\"icons\" data-grid-gallery-type=\"";
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $_type_, "html", null, true);
            echo "\">
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 1574
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\" class=\"dialog-image\"/>
                                <figcaption style=\"";
            // line 1575
            if (isset($context["figcaptionStyle"])) { $_figcaptionStyle_ = $context["figcaptionStyle"]; } else { $_figcaptionStyle_ = null; }
            echo twig_escape_filter($this->env, trim($_figcaptionStyle_), "html", null, true);
            echo "\">
                                    <div class=\"hi-icon-wrap\" style=\"width: 48px; height: 48px; margin-top: 30%; position:relative;\">
                                        <a href=\"#\" class=\"hi-icon icon-link\" style=\"border:1px solid #ccc; border-radius:50%;margin:auto;position:absolute;left:0;right:0;top: 0;bottom: 0;\">
                                        </a>
                                    </div>
                                </figcaption>
                                <div class=\"caption-with-";
            // line 1581
            if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
            echo twig_escape_filter($this->env, $_type_, "html", null, true);
            echo "\">
                                    <div style=\"display: table; height:100%; width:100%;\">
                                        <span style=\"padding: 10px;display:table-cell;font-size:";
            // line 1583
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo "
                                        vertical-align:";
            // line 1584
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_settings_, "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";\">
                                            Caption
                                        </span>
                                    </div>
                                </div>
                                <div class=\"select-element\">
                                    ";
            // line 1590
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
                                </div>
                            </figure>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1594
        echo "                    ";
    }

    // line 1739
    public function block_modals($context, array $blocks = array())
    {
        // line 1740
        echo "        <div id=\"iconsPreview\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select icons effects")), "html", null, true);
        echo "\">
            ";
        // line 1742
        $context["iconsEffects"] = array("hi-icon-effect-1a" => array("padding" => "0", "bg" => "41ab6b"), "hi-icon-effect-1b" => array("padding" => "0", "bg" => "41ab6b"), "hi-icon-effect-2a" => array("padding" => "0", "bg" => "eea303"), "hi-icon-effect-2b" => array("padding" => "0", "bg" => "eea303"), "hi-icon-effect-3a" => array("padding" => "0", "bg" => "f06060"), "hi-icon-effect-3b" => array("padding" => "0", "bg" => "f06060"), "hi-icon-effect-5a" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5b" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5c" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5d" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-7a" => array("padding" => "0", "bg" => "d54f30"), "hi-icon-effect-7b" => array("padding" => "0", "bg" => "d54f30"), "hi-icon-effect-9a" => array("padding" => "0", "bg" => "96a94b"), "hi-icon-effect-9b" => array("padding" => "0", "bg" => "96a94b"));
        // line 1759
        echo "            ";
        if (isset($context["iconsEffects"])) { $_iconsEffects_ = $context["iconsEffects"]; } else { $_iconsEffects_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_iconsEffects_);
        foreach ($context['_seq'] as $context["name"] => $context["p"]) {
            // line 1760
            echo "                <div class=\"hi-icon-wrap ";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["length"])) { $_length_ = $context["length"]; } else { $_length_ = null; }
            echo twig_escape_filter($this->env, twig_slice($this->env, $_name_, 0, ($_length_ - 1)), "html", null, true);
            echo " ";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo " holderjs\" style=\"display: inline-block; padding: ";
            if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_p_, "padding", array()), "html", null, true);
            echo "; width: 150px; height: 150px; background: no-repeat; overflow: hidden;\" data-background-src=\"holder.js/150x150?theme=industrial&text=\\t\">
                    <a href=\"#\" class=\"hi-icon icon-link\" data-effect=\"";
            // line 1761
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\" title=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Click on the icon to select effect")) . " ") . $_name_), "html", null, true);
            echo "\">Select</a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1764
        echo "        </div>
        <style>
            .hi-icon {
                color: ";
        // line 1767
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "color", array()), "html", null, true);
        echo " !important;
                background: ";
        // line 1768
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "background", array()), "html", null, true);
        echo " !important;
            }
            .hi-icon:hover {
                color: ";
        // line 1771
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "hover_color", array()), "html", null, true);
        echo " !important;
                background: ";
        // line 1772
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_settings_, "icons", array()), "background_hover", array()), "html", null, true);
        echo " !important;
            }
            .hi-icon {
                width: ";
        // line 1775
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
                height: ";
        // line 1776
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
            }
            .hi-icon:before {
                font-size: ";
        // line 1779
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_settings_, "icons", array(), "any", false, true), "size", array()), 16)) : (16)), "html", null, true);
        echo "px !important;
                line-height: ";
        // line 1780
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($_settings_, "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
            }
        </style>
    ";
    }

    // line 3
    public function getlabel($__label__ = null, $__for__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "for" => $__for__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    <label for=\"";
            if (isset($context["for"])) { $_for_ = $context["for"]; } else { $_for_ = null; }
            echo twig_escape_filter($this->env, $_for_, "html", null, true);
            echo "\">";
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            echo twig_escape_filter($this->env, $_label_, "html", null, true);
            echo "</label>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@galleries/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2767 => 4,  2754 => 3,  2745 => 1780,  2740 => 1779,  2733 => 1776,  2728 => 1775,  2721 => 1772,  2716 => 1771,  2709 => 1768,  2704 => 1767,  2699 => 1764,  2686 => 1761,  2673 => 1760,  2667 => 1759,  2665 => 1742,  2660 => 1740,  2657 => 1739,  2653 => 1594,  2643 => 1590,  2633 => 1584,  2628 => 1583,  2622 => 1581,  2612 => 1575,  2607 => 1574,  2601 => 1573,  2595 => 1572,  2592 => 1571,  2588 => 1435,  2585 => 1434,  2575 => 1428,  2571 => 1427,  2565 => 1424,  2559 => 1421,  2555 => 1419,  2552 => 1418,  2542 => 1410,  2538 => 1409,  2531 => 1405,  2525 => 1402,  2522 => 1401,  2519 => 1400,  2514 => 1415,  2512 => 1400,  2505 => 1397,  2501 => 1396,  2494 => 1392,  2488 => 1389,  2484 => 1387,  2481 => 1386,  2468 => 1377,  2462 => 1376,  2456 => 1375,  2450 => 1374,  2444 => 1373,  2434 => 1372,  2428 => 1371,  2422 => 1370,  2416 => 1369,  2410 => 1368,  2404 => 1367,  2396 => 1362,  2386 => 1356,  2379 => 1352,  2368 => 1344,  2362 => 1343,  2357 => 1341,  2351 => 1340,  2343 => 1335,  2333 => 1329,  2326 => 1325,  2316 => 1319,  2309 => 1315,  2299 => 1309,  2292 => 1305,  2282 => 1299,  2275 => 1295,  2265 => 1289,  2258 => 1285,  2248 => 1279,  2241 => 1275,  2235 => 1271,  2231 => 1268,  2226 => 1265,  2221 => 1261,  2218 => 1260,  2214 => 1258,  2211 => 1257,  2201 => 998,  2197 => 997,  2189 => 992,  2183 => 989,  2179 => 987,  2176 => 986,  2171 => 982,  2162 => 977,  2157 => 976,  2150 => 972,  2145 => 970,  2139 => 966,  2129 => 956,  2122 => 953,  2115 => 949,  2110 => 947,  2104 => 943,  2101 => 942,  2097 => 940,  2091 => 936,  2088 => 935,  2084 => 933,  2081 => 932,  2075 => 924,  2070 => 911,  2066 => 908,  2061 => 899,  2057 => 896,  2052 => 881,  2050 => 880,  2047 => 879,  2040 => 747,  2037 => 743,  2030 => 739,  2025 => 737,  2020 => 734,  2017 => 733,  2010 => 727,  2007 => 717,  2000 => 713,  1995 => 711,  1990 => 708,  1987 => 707,  1980 => 927,  1977 => 879,  1973 => 876,  1968 => 868,  1963 => 864,  1958 => 848,  1954 => 845,  1949 => 837,  1945 => 834,  1940 => 825,  1936 => 822,  1931 => 814,  1927 => 811,  1922 => 803,  1918 => 800,  1913 => 781,  1909 => 778,  1904 => 771,  1900 => 768,  1896 => 762,  1892 => 760,  1887 => 753,  1884 => 751,  1881 => 733,  1878 => 731,  1875 => 707,  1871 => 704,  1866 => 692,  1862 => 689,  1857 => 682,  1853 => 679,  1848 => 664,  1843 => 660,  1837 => 641,  1833 => 640,  1829 => 637,  1826 => 636,  1818 => 630,  1814 => 629,  1810 => 627,  1806 => 626,  1802 => 624,  1798 => 623,  1794 => 621,  1790 => 620,  1786 => 618,  1782 => 617,  1773 => 611,  1766 => 610,  1761 => 608,  1754 => 607,  1749 => 605,  1742 => 604,  1734 => 600,  1730 => 599,  1720 => 592,  1713 => 588,  1703 => 581,  1696 => 580,  1692 => 579,  1685 => 578,  1678 => 574,  1671 => 569,  1668 => 568,  1660 => 562,  1656 => 560,  1652 => 558,  1648 => 557,  1644 => 555,  1639 => 553,  1636 => 552,  1633 => 536,  1631 => 525,  1627 => 523,  1624 => 522,  1620 => 492,  1617 => 491,  1610 => 493,  1608 => 491,  1604 => 489,  1600 => 473,  1596 => 471,  1592 => 470,  1587 => 467,  1581 => 463,  1578 => 462,  1574 => 460,  1571 => 459,  1564 => 454,  1556 => 449,  1552 => 448,  1548 => 447,  1543 => 445,  1539 => 443,  1536 => 442,  1529 => 438,  1525 => 437,  1519 => 434,  1515 => 432,  1510 => 429,  1506 => 420,  1502 => 418,  1498 => 409,  1494 => 407,  1490 => 397,  1486 => 395,  1481 => 394,  1478 => 393,  1474 => 391,  1471 => 390,  1467 => 388,  1463 => 379,  1459 => 377,  1455 => 368,  1451 => 366,  1447 => 356,  1443 => 354,  1438 => 353,  1435 => 352,  1431 => 350,  1428 => 349,  1424 => 347,  1420 => 338,  1416 => 336,  1412 => 335,  1408 => 333,  1404 => 328,  1400 => 326,  1396 => 325,  1393 => 324,  1388 => 321,  1383 => 317,  1379 => 315,  1376 => 314,  1372 => 308,  1369 => 307,  1364 => 303,  1360 => 298,  1357 => 297,  1350 => 309,  1348 => 307,  1344 => 305,  1342 => 297,  1338 => 295,  1334 => 294,  1330 => 292,  1324 => 285,  1321 => 273,  1317 => 270,  1313 => 268,  1309 => 266,  1305 => 264,  1300 => 261,  1296 => 259,  1293 => 258,  1289 => 251,  1285 => 250,  1281 => 248,  1276 => 241,  1272 => 238,  1268 => 236,  1264 => 234,  1260 => 232,  1255 => 229,  1250 => 228,  1246 => 226,  1242 => 224,  1239 => 223,  1235 => 219,  1231 => 210,  1223 => 206,  1213 => 200,  1209 => 199,  1202 => 194,  1198 => 193,  1194 => 191,  1191 => 190,  1187 => 1739,  1177 => 1732,  1172 => 1730,  1165 => 1727,  1161 => 1726,  1157 => 1725,  1149 => 1722,  1144 => 1721,  1142 => 1720,  1135 => 1716,  1128 => 1712,  1103 => 1689,  1093 => 1685,  1086 => 1682,  1072 => 1681,  1058 => 1680,  1055 => 1679,  1050 => 1678,  1046 => 1676,  1044 => 1604,  1038 => 1601,  1033 => 1599,  1027 => 1595,  1025 => 1571,  1020 => 1569,  1017 => 1568,  1011 => 1567,  1004 => 1563,  990 => 1558,  983 => 1555,  978 => 1554,  972 => 1553,  965 => 1549,  955 => 1543,  949 => 1541,  943 => 1539,  927 => 1528,  920 => 1524,  913 => 1521,  900 => 1513,  896 => 1512,  891 => 1511,  886 => 1509,  880 => 1505,  870 => 1501,  864 => 1499,  855 => 1498,  847 => 1497,  844 => 1496,  839 => 1495,  836 => 1494,  833 => 1493,  829 => 1492,  826 => 1491,  823 => 1490,  821 => 1481,  815 => 1478,  810 => 1476,  802 => 1471,  795 => 1467,  785 => 1460,  780 => 1458,  773 => 1455,  767 => 1453,  762 => 1451,  754 => 1447,  749 => 1446,  742 => 1442,  736 => 1439,  730 => 1437,  727 => 1436,  725 => 1434,  722 => 1433,  720 => 1418,  717 => 1417,  715 => 1386,  711 => 1384,  709 => 1257,  701 => 1251,  696 => 1244,  692 => 1241,  687 => 1234,  683 => 1231,  678 => 1223,  673 => 1219,  667 => 1211,  663 => 1208,  658 => 1200,  654 => 1197,  649 => 1189,  645 => 1186,  640 => 1172,  636 => 1169,  631 => 1161,  627 => 1158,  622 => 1151,  618 => 1148,  613 => 1141,  609 => 1138,  604 => 1130,  600 => 1127,  595 => 1119,  591 => 1116,  586 => 1108,  582 => 1105,  577 => 1097,  573 => 1094,  568 => 1086,  564 => 1083,  559 => 1071,  555 => 1068,  549 => 1048,  546 => 1046,  542 => 1045,  538 => 1044,  535 => 1037,  532 => 1008,  526 => 1003,  524 => 986,  520 => 984,  518 => 932,  515 => 931,  513 => 636,  510 => 635,  508 => 568,  505 => 567,  503 => 522,  495 => 516,  492 => 515,  479 => 506,  475 => 505,  466 => 502,  461 => 500,  456 => 497,  454 => 459,  451 => 458,  449 => 314,  446 => 313,  444 => 190,  437 => 187,  432 => 186,  427 => 185,  422 => 184,  414 => 183,  410 => 182,  407 => 181,  404 => 180,  401 => 179,  398 => 178,  390 => 173,  377 => 166,  367 => 165,  361 => 161,  354 => 157,  350 => 155,  336 => 145,  320 => 144,  317 => 143,  314 => 142,  311 => 141,  307 => 140,  304 => 139,  301 => 138,  298 => 137,  295 => 136,  292 => 135,  289 => 134,  286 => 133,  283 => 132,  280 => 131,  276 => 130,  273 => 129,  270 => 128,  267 => 127,  263 => 126,  260 => 125,  257 => 124,  255 => 123,  248 => 118,  241 => 116,  238 => 115,  235 => 114,  232 => 113,  224 => 108,  214 => 101,  207 => 99,  198 => 93,  191 => 91,  182 => 85,  176 => 83,  172 => 82,  169 => 81,  163 => 70,  160 => 69,  157 => 68,  150 => 66,  145 => 65,  141 => 64,  138 => 63,  133 => 59,  128 => 60,  126 => 59,  121 => 57,  113 => 52,  105 => 47,  97 => 42,  89 => 37,  75 => 31,  67 => 29,  58 => 27,  55 => 8,  52 => 7,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/settings.twig", "Z:\\home\\shumilina.local\\www\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Galleries\\views\\settings.twig");
    }
}
