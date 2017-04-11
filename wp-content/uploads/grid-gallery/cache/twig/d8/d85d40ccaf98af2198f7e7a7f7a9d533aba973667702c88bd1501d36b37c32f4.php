<?php

/* @settings/index.twig */
class __TwigTemplate_d3a142bdc29f31a745e3df959292c4415db434d6c4a7f09a7dba88567d84d3ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@settings/index.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'beforeSettingsList' => array($this, 'block_beforeSettingsList'),
            'beforeSettings' => array($this, 'block_beforeSettings'),
            'afterSettings' => array($this, 'block_afterSettings'),
            'afterSettingsList' => array($this, 'block_afterSettingsList'),
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $context["h"] = $this->loadTemplate("@core/helpers.twig", "@settings/index.twig", 5);
        // line 6
        echo "
    <form action=\"";
        // line 7
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (isset($context["_wpnonce"])) { $__wpnonce_ = $context["_wpnonce"]; } else { $__wpnonce_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "generateUrl", array(0 => "settings", 1 => "saveSettings", 2 => array("_wpnonce" => $__wpnonce_)), "method"), "html", null, true);
        echo "\" method=\"POST\">
        ";
        // line 8
        $this->displayBlock('beforeSettingsList', $context, $blocks);
        // line 14
        echo "        <div class=\"settings-list\">
            ";
        // line 15
        $this->displayBlock('beforeSettings', $context, $blocks);
        // line 16
        echo "            <div class=\"settings\">
                <div class=\"setting\">
                    <div class=\"setting-description\">
                        <label>";
        // line 19
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Image Editor"), "method"), "html", null, true);
        echo "</label>
                        ";
        // line 20
        if (isset($context["h"])) { $_h_ = $context["h"]; } else { $_h_ = null; }
        echo $_h_->getshowTooltip("Image edit library.", "top", true);
        echo "
                    </div>
                    <div class=\"setting-control\">
                        <select name=\"settings[image_editor]\">
                            ";
        // line 24
        $context["editors"] = array("auto" => "Auto", "gd" => "GD", "imagic" => "Imagic");
        // line 29
        echo "                            ";
        if (isset($context["editors"])) { $_editors_ = $context["editors"]; } else { $_editors_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_editors_);
        foreach ($context['_seq'] as $context["name"] => $context["title"]) {
            // line 30
            echo "                                <option value=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\"
                                ";
            // line 31
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (($_name_ == $this->getAttribute($_settings_, "image_editor", array()))) {
                // line 32
                echo "                                    selected=\"selected\" 
                                ";
            }
            // line 34
            echo "                                >";
            if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
            echo twig_escape_filter($this->env, $_title_, "html", null, true);
            echo "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                        </select>
                    </div>
                </div>
                <div class=\"setting\">
                    <div class=\"setting-description\">

                        <label>";
        // line 43
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Roles"), "method"), "html", null, true);
        echo "</label>
                        ";
        // line 44
        if (isset($context["h"])) { $_h_ = $context["h"]; } else { $_h_ = null; }
        echo $_h_->getshowTooltip("User roles that can use plugin. Administartor is included by default.", "top", true);
        echo "

                        ";
        // line 46
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        if (($this->getAttribute($_environment_, "isPro", array(), "method") == false)) {
            // line 47
            echo "                            <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('build_pro_url')->getCallable(), array(array("utm_medium" => "manage_roles"))), "html", null, true);
            echo "\">
                                ";
            // line 48
            if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "PRO option"), "method"), "html", null, true);
            echo "
                            </a>
                        ";
        }
        // line 51
        echo "                    </div>
                    <div class=\"setting-control\">
                        <select multiple=\"multiple\" name=\"settings[access_roles][]\" class=\"chosen-select\" data-placeholder=\"";
        // line 53
        echo "Select avalilable roles to use tables.";
        echo "\">
                            <option value=\"administrator\" disabled selected>Administrator</option>
                            ";
        // line 55
        $context["roles"] = array("editor" => "Editor", "author" => "Author", "contributor" => "Contributor", "subscriber" => "Subscriber");
        // line 61
        echo "                            ";
        if (isset($context["roles"])) { $_roles_ = $context["roles"]; } else { $_roles_ = null; }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($_roles_);
        foreach ($context['_seq'] as $context["role"] => $context["title"]) {
            // line 62
            echo "                                <option value=\"";
            if (isset($context["role"])) { $_role_ = $context["role"]; } else { $_role_ = null; }
            echo twig_escape_filter($this->env, $_role_, "html", null, true);
            echo "\"
                                ";
            // line 63
            if (isset($context["role"])) { $_role_ = $context["role"]; } else { $_role_ = null; }
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if (twig_in_filter($_role_, $this->getAttribute($_settings_, "access_roles", array()))) {
                // line 64
                echo "                                    selected=\"selected\" 
                                ";
            }
            // line 66
            echo "                                >";
            if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
            echo twig_escape_filter($this->env, $_title_, "html", null, true);
            echo "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['role'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                        </select>
                    </div>
                </div>
            </div>
            ";
        // line 73
        $this->displayBlock('afterSettings', $context, $blocks);
        // line 74
        echo "        </div>
        ";
        // line 75
        $this->displayBlock('afterSettingsList', $context, $blocks);
        // line 76
        echo "    </form>
";
    }

    // line 8
    public function block_beforeSettingsList($context, array $blocks = array())
    {
        // line 9
        echo "            <button class=\"button\">
                <i class=\"fa fa-fw fa-save\"></i>
                ";
        // line 11
        if (isset($context["environment"])) { $_environment_ = $context["environment"]; } else { $_environment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_environment_, "translate", array(0 => "Save"), "method"), "html", null, true);
        echo "
            </button>
        ";
    }

    // line 15
    public function block_beforeSettings($context, array $blocks = array())
    {
    }

    // line 73
    public function block_afterSettings($context, array $blocks = array())
    {
    }

    // line 75
    public function block_afterSettingsList($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@settings/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 75,  221 => 73,  216 => 15,  208 => 11,  204 => 9,  201 => 8,  196 => 76,  194 => 75,  191 => 74,  189 => 73,  183 => 69,  172 => 66,  168 => 64,  164 => 63,  158 => 62,  152 => 61,  150 => 55,  145 => 53,  141 => 51,  134 => 48,  129 => 47,  126 => 46,  120 => 44,  115 => 43,  107 => 37,  96 => 34,  92 => 32,  88 => 31,  82 => 30,  76 => 29,  74 => 24,  66 => 20,  61 => 19,  56 => 16,  54 => 15,  51 => 14,  49 => 8,  43 => 7,  40 => 6,  38 => 5,  35 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@settings/index.twig", "Z:\\home\\shumilina.local\\www\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Settings\\views\\index.twig");
    }
}
