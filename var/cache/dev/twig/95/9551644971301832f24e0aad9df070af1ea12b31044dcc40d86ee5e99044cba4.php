<?php

/* SanteBundle:Default:index.html.twig */
class __TwigTemplate_1fd91ee8e9bb7a2d9a1aced81d5bd2f8a017a2104622f4eb7f4a68a7eade676e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SanteBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7de5db2fc5dcdbc6ed2c0e18ba5a55e7cda52536db603492470796696cef3e6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7de5db2fc5dcdbc6ed2c0e18ba5a55e7cda52536db603492470796696cef3e6f->enter($__internal_7de5db2fc5dcdbc6ed2c0e18ba5a55e7cda52536db603492470796696cef3e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SanteBundle:Default:index.html.twig"));

        $__internal_04616b3a094146fb58c1e1b4f69e5e7f6d801bd67a3cadf5fd633020e8488a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04616b3a094146fb58c1e1b4f69e5e7f6d801bd67a3cadf5fd633020e8488a58->enter($__internal_04616b3a094146fb58c1e1b4f69e5e7f6d801bd67a3cadf5fd633020e8488a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SanteBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7de5db2fc5dcdbc6ed2c0e18ba5a55e7cda52536db603492470796696cef3e6f->leave($__internal_7de5db2fc5dcdbc6ed2c0e18ba5a55e7cda52536db603492470796696cef3e6f_prof);

        
        $__internal_04616b3a094146fb58c1e1b4f69e5e7f6d801bd67a3cadf5fd633020e8488a58->leave($__internal_04616b3a094146fb58c1e1b4f69e5e7f6d801bd67a3cadf5fd633020e8488a58_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_feccb70b2c2d0c346717e4099798547cb78faf5eda45eb875efc6b5ace617175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feccb70b2c2d0c346717e4099798547cb78faf5eda45eb875efc6b5ace617175->enter($__internal_feccb70b2c2d0c346717e4099798547cb78faf5eda45eb875efc6b5ace617175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28b56ce4486fa59d8085b2624e4aff8774c4bf94a93bfad04fe0ad2fd3710cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28b56ce4486fa59d8085b2624e4aff8774c4bf94a93bfad04fe0ad2fd3710cd8->enter($__internal_28b56ce4486fa59d8085b2624e4aff8774c4bf94a93bfad04fe0ad2fd3710cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<!-- Slider Start -->
<div class=\"main-slider clearfix\">
    <div class=\"rev_slider fullscreen\" data-version=\"5.3.0.2\" id=\"rev_slider_1_1\" style=\"display:none;\">
        <ul>
            <!-- SLIDE  -->
            <li data-description=\"\" data-easein=\"default\" data-easeout=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-index=\"rs-1\" data-masterspeed=\"300\" data-param1=\"\" data-param10=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-rotate=\"0\" data-saveperformance=\"off\" data-slotamount=\"default\" data-title=\"Slide\" data-transition=\"slotzoom-horizontal\">
                <!-- MAIN IMAGE -->
                <img alt=\"\" class=\"rev-slidebg\" data-bgfit=\"cover\" data-bgposition=\"center center\" data-bgrepeat=\"no-repeat\" data-no-retina=\"\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/medibg.jpg"), "html", null, true);
        echo "\" title=\"Home\"> <!-- LAYERS 1-->
                <div class=\"tp-caption tp-shape tp-shapewrapper tp-resizeme\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:10,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:2260,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"4000\" data-hoffset=\"['0','0','0','0']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive_offset=\"on\" data-textalign=\"['left','left','left','left']\" data-type=\"shape\" data-voffset=\"['0','0','0','0']\" data-whitespace=\"nowrap\" data-width=\"4000\" data-x=\"['center','center','center','center']\" data-y=\"['middle','middle','middle','middle']\" id=\"slide-1-layer-1\" style=\"z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0);\"></div><!-- LAYER NR. 2 -->
                <div class=\"tp-caption\" data-fontsize=\"['72','62','50','28']\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;&quot;,&quot;mask&quot;:&quot;x:[-100%];y:0;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"['81','66','61','36']\" data-hoffset=\"['29','21','-4','-3']\" data-lineheight=\"['80','65','60','34']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','left','left']\" data-type=\"text\" data-voffset=\"['392','386','-110','-64']\" data-whitespace=\"nowrap\" data-width=\"['385','333','271','152']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" id=\"slide-1-layer-2\" style=\"z-index: 6; min-width: 385px; max-width: 385px; max-width: 81px; max-width: 81px; white-space: nowrap; font-size: 72px; line-height: 80px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family: 'latoregular';\">
                    Health Care
                </div><!-- LAYER NR. 3 -->
                <div class=\"tp-caption\" data-fontsize=\"['30','26','22','16']\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"['73','none','57','41']\" data-hoffset=\"['30','24','-3','-4']\" data-lineheight=\"['36','30','28','20']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"text\" data-voffset=\"['315','315','-46','-24']\" data-whitespace=\"nowrap\" data-width=\"['422','none','307','225']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" id=\"slide-1-layer-3\" style=\"z-index: 7; min-width: 422px; max-width: 422px; max-width: 73px; max-width: 73px; white-space: nowrap; font-size: 30px; line-height: 36px; font-weight: 300; color: rgba(255, 255, 255, 1.00);font-family: 'latolight';\">
                    Renowned pediatricians work at<br>
                    MedLife Pediatric Hospital.
                </div><a class=\"tp-caption rev-btn\" data-actions=\"\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;},{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;0&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;,&quot;force&quot;:true,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgba(255, 255, 255, 1.00);bg:rgba(76, 171, 76, 1.00);bs:solid;bw:0 0 0 0;&quot;}]\" data-height=\"['53','53','54','42']\" data-hoffset=\"['31','26','-2','-2']\" data-lineheight=\"['28','28','28','16']\" data-paddingbottom=\"[12,12,12,12]\" data-paddingleft=\"[35,35,35,35]\" data-paddingright=\"[35,35,35,35]\" data-paddingtop=\"[12,12,12,12]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"button\" data-voffset=\"['241','241','27','27']\" data-whitespace=\"nowrap\" data-width=\"['148','148','210','151']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_services");
        echo "\" id=\"slide-1-layer-4\" style=\"z-index: 8; min-width: 148px; max-width: 148px; max-width: 53px; max-width: 53px; white-space: nowrap; font-size: 14px; line-height: 28px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family: 'latoregular';background-color:rgba(102, 204, 102, 1.00);border-color:rgba(0, 0, 0, 1.00);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;\" target=\"_self\">FIND MORE</a>
            </li><!-- SLIDE  -->
            <!-- SLIDE  -->
            <li data-description=\"\" data-easein=\"default\" data-easeout=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-index=\"rs-2\" data-masterspeed=\"300\" data-param1=\"\" data-param10=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-rotate=\"0\" data-saveperformance=\"off\" data-slotamount=\"default\" data-title=\"Slide\" data-transition=\"slotzoom-horizontal\">
                <img alt=\"\" class=\"rev-slidebg\" data-bgfit=\"cover\" data-bgposition=\"center center\" data-no-retina=\"\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Comp-1-0-00-00-00.jpg"), "html", null, true);
        echo "\" title=\"Home\"> <!-- <div class=\"rs-background-video-layer\" data-forcerewind=\"on\" data-volume=\"mute\" data-ytid=\"w0zelS2nX2E\" data-videoattributes=\"version=3&enablejsapi=1&html5=1&hd=1&wmode=opaque&showinfo=0&rel=0;;origin=https://demo.kallyas.net;\" data-videorate=\"1\" data-videowidth=\"100%\" data-videoheight=\"100%\" data-videocontrols=\"none\" data-videoloop=\"none\" data-forceCover=\"1\" data-aspectratio=\"16:9\" data-autoplay=\"true\" data-autoplayonlyfirsttime=\"false\" data-nextslideatend=\"true\"></div> -->
                <div class=\"rs-background-video-layer\" data-aspectratio=\"16:9\" data-autoplay=\"true\" data-autoplayonlyfirsttime=\"false\" data-forcecover=\"1\" data-forcerewind=\"on\" data-videoheight=\"100%\" data-videoloop=\"loopandnoslidestop\" data-videomp4=\"images/Comp 1 1.mp4\" data-videopreload=\"auto\" data-videowidth=\"100%\" data-volume=\"mute\"></div>
                <div class=\"tp-caption tp-shape tp-shapewrapper tp-resizeme\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:10,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:2260,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"4000\" data-hoffset=\"['0','0','0','0']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive_offset=\"on\" data-textalign=\"['left','left','left','left']\" data-type=\"shape\" data-voffset=\"['0','0','0','0']\" data-whitespace=\"nowrap\" data-width=\"4000\" data-x=\"['center','center','center','center']\" data-y=\"['middle','middle','middle','middle']\" id=\"slide-2-layer-1\" style=\"z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0);\"></div>
                <div class=\"tp-caption\" data-fontsize=\"['72','62','50','28']\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;&quot;,&quot;mask&quot;:&quot;x:[-100%];y:0;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"['161','131','121','69']\" data-hoffset=\"['29','22','-4','-3']\" data-lineheight=\"['80','65','60','34']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"text\" data-voffset=\"['392','386','-130','-82']\" data-whitespace=\"normal\" data-width=\"['416','352','284','168']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" id=\"slide-2-layer-2\" style=\"z-index: 6; min-width: 416px; max-width: 416px; max-width: 161px; max-width: 161px; white-space: normal; font-size: 72px; line-height: 80px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family: 'latoregular';\">
                    Medical Radiography
                </div>
                <div class=\"tp-caption\" data-fontsize=\"['30','26','22','16']\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"none\" data-hoffset=\"['30','24','-3','-4']\" data-lineheight=\"['36','30','28','20']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"text\" data-voffset=\"['315','316','-46','-24']\" data-whitespace=\"normal\" data-width=\"['423','369','308','226']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" id=\"slide-2-layer-3\" style=\"z-index: 7; min-width: 423px; max-width: 423px; white-space: normal; font-size: 30px; line-height: 36px; font-weight: 300; color: rgba(255, 255, 255, 1.00);font-family: 'latolight';\">
                    Brussels finest outpatient diagnostic imaging center
                </div><a class=\"tp-caption rev-btn\" data-actions=\"\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;},{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;0&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;,&quot;force&quot;:true,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgba(255, 255, 255, 1.00);bg:rgba(76, 171, 76, 1.00);bs:solid;bw:0 0 0 0;&quot;}]\" data-height=\"['53','53','54','42']\" data-hoffset=\"['31','26','-2','-2']\" data-lineheight=\"['28','28','28','16']\" data-paddingbottom=\"[12,12,12,12]\" data-paddingleft=\"[35,35,35,35]\" data-paddingright=\"[35,35,35,35]\" data-paddingtop=\"[12,12,12,12]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"button\" data-voffset=\"['241','241','27','27']\" data-whitespace=\"nowrap\" data-width=\"['148','148','210','151']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_services");
        echo "\" id=\"slide-2-layer-4\" style=\"z-index: 8; min-width: 148px; max-width: 148px; max-width: 53px; max-width: 53px; white-space: nowrap; font-size: 14px; line-height: 28px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family: 'latoregular';background-color:rgba(102, 204, 102, 1.00);border-color:rgba(0, 0, 0, 1.00);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;\" target=\"_self\">FIND MORE</a>
            </li><!-- SLIDE  -->
            <!-- SLIDE  -->
            <li data-description=\"\" data-easein=\"default\" data-easeout=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-index=\"rs-3\" data-masterspeed=\"300\" data-param1=\"\" data-param10=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-rotate=\"0\" data-saveperformance=\"off\" data-slotamount=\"default\" data-title=\"Slide\" data-transition=\"slotzoom-horizontal\">
                <img alt=\"\" class=\"rev-slidebg\" data-bgfit=\"cover\" data-bgposition=\"center top\" data-bgrepeat=\"no-repeat\" data-no-retina=\"\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/health-kid.jpg"), "html", null, true);
        echo "\" title=\"Home\">
                <div class=\"tp-caption tp-shape tp-shapewrapper tp-resizeme\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:10,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:2260,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"4000\" data-hoffset=\"['0','0','0','0']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive_offset=\"on\" data-textalign=\"['left','left','left','left']\" data-type=\"shape\" data-voffset=\"['0','0','0','0']\" data-whitespace=\"nowrap\" data-width=\"4000\" data-x=\"['center','center','center','center']\" data-y=\"['middle','middle','middle','middle']\" id=\"slide-3-layer-1\" style=\"z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0);\"></div>
                <div class=\"tp-caption\" data-fontsize=\"['72','62','50','28']\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;&quot;,&quot;mask&quot;:&quot;x:[-100%];y:0;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"['243','196','182','104']\" data-hoffset=\"['27','22','-4','-3']\" data-lineheight=\"['80','65','60','34']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"text\" data-voffset=\"['330','334','-110','-64']\" data-whitespace=\"normal\" data-width=\"['530','447','370','207']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" id=\"slide-3-layer-2\" style=\"z-index: 6; min-width: 530px; max-width: 530px; max-width: 243px; max-width: 243px; white-space: normal; font-size: 72px; line-height: 80px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family: 'latoregular';\">
                    Internal & Family Medicine
                </div>
                <div class=\"tp-caption\" data-fontsize=\"['30','26','22','16']\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"['109','none','85','61']\" data-hoffset=\"['30','24','-3','-4']\" data-lineheight=\"['36','30','28','20']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"text\" data-voffset=\"['286','315','-32','-16']\" data-whitespace=\"normal\" data-width=\"['450','431','336','251']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" id=\"slide-3-layer-3\" style=\"z-index: 7; min-width: 443px; max-width: 443px; max-width: 109px; max-width: 109px; white-space: normal; font-size: 30px; line-height: 36px; font-weight: 300; color: rgba(255, 255, 255, 1.00);font-family: 'latolight';\">
                    Family doctors are the most widely skilled primary care doctors
                </div><a class=\"tp-caption rev-btn\" data-actions=\"\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;},{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;0&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;,&quot;force&quot;:true,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgba(255, 255, 255, 1.00);bg:rgba(76, 171, 76, 1.00);bs:solid;bw:0 0 0 0;&quot;}]\" data-height=\"['53','53','54','42']\" data-hoffset=\"['32','26','-2','-2']\" data-lineheight=\"['28','28','28','16']\" data-paddingbottom=\"[12,12,12,12]\" data-paddingleft=\"[35,35,35,35]\" data-paddingright=\"[35,35,35,35]\" data-paddingtop=\"[12,12,12,12]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"button\" data-voffset=\"['241','241','27','27']\" data-whitespace=\"nowrap\" data-width=\"['148','148','210','151']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_services");
        echo "\" id=\"slide-3-layer-4\" style=\"z-index: 8; min-width: 148px; max-width: 148px; max-width: 53px; max-width: 53px; white-space: nowrap; font-size: 14px; line-height: 28px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family: 'latoregular';background-color:rgba(102, 204, 102, 1.00);border-color:rgba(0, 0, 0, 1.00);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;\" target=\"_self\">FIND MORE</a>
            </li><!-- SLIDE  -->
            <!-- SLIDE  -->
            <li data-description=\"\" data-easein=\"default\" data-easeout=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-index=\"rs-4\" data-masterspeed=\"300\" data-param1=\"\" data-param10=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-rotate=\"0\" data-saveperformance=\"off\" data-slotamount=\"default\" data-title=\"Slide\" data-transition=\"slotzoom-horizontal\">
                <img alt=\"\" class=\"rev-slidebg\" data-bgfit=\"cover\" data-bgposition=\"center center\" data-bgrepeat=\"no-repeat\" data-no-retina=\"\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/medibg2.jpg"), "html", null, true);
        echo "\" title=\"Home\">
                <div class=\"tp-caption tp-shape tp-shapewrapper tp-resizeme\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:10,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:2260,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"4000\" data-hoffset=\"['0','0','0','0']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive_offset=\"on\" data-textalign=\"['left','left','left','left']\" data-type=\"shape\" data-voffset=\"['0','0','0','0']\" data-whitespace=\"nowrap\" data-width=\"4000\" data-x=\"['center','center','center','center']\" data-y=\"['middle','middle','middle','middle']\" id=\"slide-4-layer-1\" style=\"z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0);\"></div>
                <div class=\"tp-caption\" data-fontsize=\"['72','62','50','28']\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;&quot;,&quot;mask&quot;:&quot;x:[-100%];y:0;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"['243','197','181','103']\" data-hoffset=\"['26','21','-4','-3']\" data-lineheight=\"['80','65','60','34']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"text\" data-voffset=\"['324','332','-110','-64']\" data-whitespace=\"normal\" data-width=\"['501','431','329','193']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" id=\"slide-4-layer-2\" style=\"z-index: 6; min-width: 501px; max-width: 501px; max-width: 243px; max-width: 243px; white-space: normal; font-size: 72px; line-height: 80px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family: 'latoregular';\">
                    Comprehensive Breast Center
                </div>
                <div class=\"tp-caption\" data-fontsize=\"['30','26','22','16']\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"['73','none','57','41']\" data-hoffset=\"['30','24','-3','-4']\" data-lineheight=\"['36','30','28','20']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"text\" data-voffset=\"['315','315','-46','-25']\" data-whitespace=\"nowrap\" data-width=\"['422','none','307','225']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" id=\"slide-4-layer-3\" style=\"z-index: 7; min-width: 422px; max-width: 422px; max-width: 73px; max-width: 73px; white-space: nowrap; font-size: 30px; line-height: 36px; font-weight: 300; color: rgba(255, 255, 255, 1.00);font-family: 'latolight';\">
                    We are here to help, guide<br>
                    and support you.
                </div><a class=\"tp-caption rev-btn\" data-actions=\"\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;},{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;0&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;,&quot;force&quot;:true,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgba(255, 255, 255, 1.00);bg:rgba(76, 171, 76, 1.00);bs:solid;bw:0 0 0 0;&quot;}]\" data-height=\"['53','53','54','42']\" data-hoffset=\"['31','26','-2','-2']\" data-lineheight=\"['28','28','28','16']\" data-paddingbottom=\"[12,12,12,12]\" data-paddingleft=\"[35,35,35,35]\" data-paddingright=\"[35,35,35,35]\" data-paddingtop=\"[12,12,12,12]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"button\" data-voffset=\"['241','241','27','27']\" data-whitespace=\"nowrap\" data-width=\"['148','148','210','151']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_services");
        echo "\" id=\"slide-4-layer-4\" style=\"z-index: 8; min-width: 148px; max-width: 148px; max-width: 53px; max-width: 53px; white-space: nowrap; font-size: 14px; line-height: 28px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family: 'latoregular';background-color:rgba(102, 204, 102, 1.00);border-color:rgba(0, 0, 0, 1.00);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;\" target=\"_self\">FIND MORE</a>
            </li><!-- SLIDE  -->
            <!-- SLIDE  -->
            <li data-description=\"\" data-easein=\"default\" data-easeout=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-index=\"rs-5\" data-masterspeed=\"300\" data-param1=\"\" data-param10=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-rotate=\"0\" data-saveperformance=\"off\" data-slotamount=\"default\" data-title=\"Slide\" data-transition=\"slotzoom-horizontal\">
                <img alt=\"\" class=\"rev-slidebg\" data-bgfit=\"cover\" data-bgposition=\"center center\" data-bgrepeat=\"no-repeat\" data-no-retina=\"\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/medibg3.jpg"), "html", null, true);
        echo "\" title=\"Home\">
                <div class=\"tp-caption tp-shape tp-shapewrapper tp-resizeme\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:10,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:2260,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"4000\" data-hoffset=\"['0','0','0','0']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive_offset=\"on\" data-textalign=\"['left','left','left','left']\" data-type=\"shape\" data-voffset=\"['0','0','0','0']\" data-whitespace=\"nowrap\" data-width=\"4000\" data-x=\"['center','center','center','center']\" data-y=\"['middle','middle','middle','middle']\" id=\"slide-5-layer-1\" style=\"z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0);\"></div>
                <div class=\"tp-caption\" data-fontsize=\"['72','62','50','28']\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;&quot;,&quot;mask&quot;:&quot;x:[-100%];y:0;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"['81','66','61','36']\" data-hoffset=\"['29','21','-4','-3']\" data-lineheight=\"['80','65','60','34']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"text\" data-voffset=\"['392','386','-110','-64']\" data-whitespace=\"nowrap\" data-width=\"['385','333','271','152']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" id=\"slide-5-layer-2\" style=\"z-index: 6; min-width: 385px; max-width: 385px; max-width: 81px; max-width: 81px; white-space: nowrap; font-size: 72px; line-height: 80px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family: 'latoregular';\">
                    Pediatrics
                </div>
                <div class=\"tp-caption\" data-fontsize=\"['30','26','22','16']\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"['73','none','57','41']\" data-hoffset=\"['30','24','-3','-4']\" data-lineheight=\"['36','30','28','20']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"text\" data-voffset=\"['315','315','-46','-24']\" data-whitespace=\"nowrap\" data-width=\"['422','none','307','225']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" id=\"slide-5-layer-3\" style=\"z-index: 7; min-width: 422px; max-width: 422px; max-width: 73px; max-width: 73px; white-space: nowrap; font-size: 30px; line-height: 36px; font-weight: 300; color: rgba(255, 255, 255, 1.00);font-family: 'latolight';\">
                    Renowned pediatricians work at<br>
                    MedLife Pediatric Hospital.
                </div><a class=\"tp-caption rev-btn\" data-actions=\"\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;},{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;0&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;,&quot;force&quot;:true,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgba(255, 255, 255, 1.00);bg:rgba(76, 171, 76, 1.00);bs:solid;bw:0 0 0 0;&quot;}]\" data-height=\"['53','53','54','42']\" data-hoffset=\"['31','26','-2','-2']\" data-lineheight=\"['28','28','28','16']\" data-paddingbottom=\"[12,12,12,12]\" data-paddingleft=\"[35,35,35,35]\" data-paddingright=\"[35,35,35,35]\" data-paddingtop=\"[12,12,12,12]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"button\" data-voffset=\"['241','241','27','27']\" data-whitespace=\"nowrap\" data-width=\"['148','148','210','151']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_services");
        echo "\" id=\"slide-5-layer-4\" style=\"z-index: 8; min-width: 148px; max-width: 148px; max-width: 53px; max-width: 53px; white-space: nowrap; font-size: 14px; line-height: 28px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family: 'latoregular';background-color:rgba(102, 204, 102, 1.00);border-color:rgba(0, 0, 0, 1.00);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;\" target=\"_self\">FIND MORE</a>
            </li><!-- SLIDE  -->
        </ul>
        <div class=\"tp-static-layers\" style=\"\">
            <div class=\"tp-caption tp-shape tp-shapewrapper tp-static-layer\" data-endslide=\"4\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]\" data-height=\"['330','334','273','273']\" data-hoffset=\"['29','26','0','0']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-startslide=\"0\" data-textalign=\"['inherit','inherit','inherit','inherit']\" data-type=\"shape\" data-voffset=\"['180','180','-7','-7']\" data-whitespace=\"nowrap\" data-width=\"['296','251','697','697']\" data-x=\"['right','right','center','center']\" data-y=\"['bottom','bottom','bottom','bottom']\" id=\"slider-1-layer-24\" style=\"z-index: 25;font-family:Open Sans;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 0);\"></div>
            <div class=\"tp-caption tp-static-layer\" data-endslide=\"4\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]\" data-height=\"none\" data-hoffset=\"['244','209','-151','-151']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-startslide=\"0\" data-textalign=\"['inherit','inherit','inherit','inherit']\" data-type=\"image\" data-voffset=\"['421','421','172','172']\" data-whitespace=\"nowrap\" data-width=\"none\" data-x=\"['right','right','center','center']\" data-y=\"['bottom','bottom','bottom','bottom']\" id=\"slider-1-layer-25\" style=\"z-index: 26;\"><img alt=\"\" data-hh=\"['46px','46px','46px','46px']\" data-no-retina=\"\" data-ww=\"['46px','46px','46px','46px']\" height=\"70\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/appointment.png"), "html", null, true);
        echo "\" width=\"70\"></div>
            <div class=\"tp-caption tp-static-layer\" data-endslide=\"4\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]\" data-height=\"none\" data-hoffset=\"['242','207','-149','-149']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-startslide=\"0\" data-textalign=\"['inherit','inherit','inherit','inherit']\" data-type=\"image\" data-voffset=\"['329','329','103','103']\" data-whitespace=\"nowrap\" data-width=\"none\" data-x=\"['right','right','center','center']\" data-y=\"['bottom','bottom','bottom','bottom']\" id=\"slider-1-layer-26\" style=\"z-index: 27;\"><img alt=\"\" data-hh=\"['48px','48px','48px','48px']\" data-no-retina=\"\" data-ww=\"['48px','48px','48px','48px']\" height=\"70\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/services.png"), "html", null, true);
        echo "\" width=\"70\"></div>
            <div class=\"tp-caption tp-static-layer\" data-endslide=\"4\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]\" data-height=\"['none','none','34','34']\" data-hoffset=\"['69','44','14','14']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-startslide=\"0\" data-textalign=\"['inherit','inherit','center','center']\" data-type=\"text\" data-voffset=\"['412','412','156','156']\" data-whitespace=\"['normal','normal','nowrap','nowrap']\" data-width=\"['146','146','262','262']\" data-x=\"['right','right','center','center']\" data-y=\"['bottom','bottom','bottom','bottom']\" id=\"slider-1-layer-29\" style=\"z-index: 30; min-width: 146px; max-width: 146px; white-space: normal; font-size: 12px; line-height: 16px; font-weight: 400; color: rgba(102, 102, 102, 1.00);font-family: 'latoregular';\">
                <strong>MON-FRI</strong>: 09:00-18:00 <strong>SAT-SUN</strong>: 10:00 - 14:00
            </div><a class=\"tp-caption hover2 tp-static-layer\" data-actions=\"\" data-endslide=\"4\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]\" data-height=\"27\" data-hoffset=\"['150','126','-6','-6']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-startslide=\"0\" data-textalign=\"['inherit','inherit','center','center']\" data-type=\"text\" data-voffset=\"['353','352','126','126']\" data-whitespace=\"nowrap\" data-width=\"['63','62','104','104']\" data-x=\"['right','right','center','center']\" data-y=\"['bottom','bottom','bottom','bottom']\" href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_services");
        echo "\" id=\"slider-1-layer-30\" style=\"z-index: 31; min-width: 63px; max-width: 63px; max-width: 27px; max-width: 27px; white-space: nowrap; font-size: 13px; line-height: 26px; font-weight: 700; color: rgba(51, 51, 51, 1.00);font-family: 'latoregular'; font-weight: 700; text-decoration: none;\" target=\"_self\">SERVICES</a> <a class=\"tp-caption hover3 tp-static-layer\" data-actions=\"\" data-endslide=\"4\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]\" data-height=\"27\" data-hoffset=\"['113','101','-4','-4']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-startslide=\"0\" data-textalign=\"['inherit','inherit','center','center']\" data-type=\"text\" data-voffset=\"['258','257','63','63']\" data-whitespace=\"nowrap\" data-width=\"['106','88','104','104']\" data-x=\"['right','right','center','center']\" data-y=\"['bottom','bottom','bottom','bottom']\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_services");
        echo "\" id=\"slider-1-layer-31\" style=\"z-index: 32; min-width: 106px; max-width: 106px; max-width: 27px; max-width: 27px; white-space: nowrap; font-size: 13px; line-height: 26px; font-weight: 700; color: rgba(51, 51, 51, 1.00);font-family: 'latoregular'; font-weight: 700; text-decoration: none;\" target=\"_self\">TEST RESULTS</a>
            <div class=\"tp-caption tp-static-layer\" data-endslide=\"4\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]\" data-height=\"['none','34','34','34']\" data-hoffset=\"['82','57','9','9']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-startslide=\"0\" data-textalign=\"['inherit','inherit','center','center']\" data-type=\"text\" data-voffset=\"['321','322','90','90']\" data-whitespace=\"['normal','normal','nowrap','nowrap']\" data-width=\"['131','131','262','262']\" data-x=\"['right','right','center','center']\" data-y=\"['bottom','bottom','bottom','bottom']\" id=\"slider-1-layer-32\" style=\"z-index: 33; min-width: 131px; max-width: 131px; white-space: normal; font-size: 13px; line-height: 16px; font-weight: 400; color: rgba(102, 102, 102, 1.00);font-family: 'latoregular';\">
                Check our list of services and prices.
            </div>
            <div class=\"tp-caption tp-static-layer\" data-endslide=\"4\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]\" data-height=\"['35','34','34','34']\" data-hoffset=\"['91','58','9','9']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-startslide=\"0\" data-textalign=\"['inherit','inherit','center','center']\" data-type=\"text\" data-voffset=\"['226','226','26','26']\" data-whitespace=\"['normal','normal','nowrap','nowrap']\" data-width=\"['124','131','262','262']\" data-x=\"['right','right','center','center']\" data-y=\"['bottom','bottom','bottom','bottom']\" id=\"slider-1-layer-33\" style=\"z-index: 34; min-width: 124px; max-width: 124px; max-width: 35px; max-width: 35px; white-space: normal; font-size: 13px; line-height: 16px; font-weight: 400; color: rgba(102, 102, 102, 1.00);font-family: 'latoregular';\">
                You can check your test results online.
            </div><!-- <div class=\"tp-caption   tp-svg-layer  arrow1 tp-static-layer\" id=\"slider-1-layer-34\" data-x=\"['right','right','center','center']\" data-hoffset=\"['56','43','162','162']\" data-y=\"['bottom','bottom','bottom','bottom']\" data-voffset=\"['432','432','181','181']\" data-width=\"24\" data-height=\"24\" data-whitespace=\"normal\" data-type=\"svg\" data-svg_src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/ic_keyboard_arrow_right_24px.svg"), "html", null, true);
        echo "\" data-svg_idle=\"sc:transparent;sw:0;sda:0;sdo:0;\" data-responsive_offset=\"off\" data-responsive=\"off\" data-startslide=\"0\" data-endslide=\"4\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]\" data-textalign=\"['inherit','inherit','inherit','inherit']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 35; min-width: 24px; max-width: 24px; color: rgb(70, 191, 0); font-family: &quot;Open Sans&quot;; visibility: inherit; transition: none; text-align: inherit; line-height: 22px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 13px; white-space: normal; min-height: 24px; max-height: 24px; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;\" src=\"images/ic_keyboard_arrow_right_24px.svg\"> <div class=\"tp-svg-innercontainer\"><svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" style=\"fill: rgb(70, 191, 0);\"><path d=\"M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z\" style=\"fill: rgb(70, 191, 0);\"></path></svg></div></div>

\t\t\t\t\t\t<div class=\"tp-caption   tp-svg-layer  arrow2 tp-static-layer\" id=\"slider-1-layer-35\" data-x=\"['right','right','center','center']\" data-hoffset=\"['56','43','162','162']\" data-y=\"['bottom','bottom','bottom','bottom']\" data-voffset=\"['347','347','111','111']\" data-width=\"24\" data-height=\"24\" data-whitespace=\"normal\" data-type=\"svg\" data-svg_src=\"images/ic_keyboard_arrow_right_24px.svg\" data-svg_idle=\"sc:transparent;sw:0;sda:0;sdo:0;\" data-responsive_offset=\"off\" data-responsive=\"off\" data-startslide=\"0\" data-endslide=\"4\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]\" data-textalign=\"['inherit','inherit','inherit','inherit']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 36; min-width: 24px; max-width: 24px; color: rgb(70, 191, 0); font-family: &quot;Open Sans&quot;; visibility: inherit; transition: none; text-align: inherit; line-height: 22px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 13px; white-space: normal; min-height: 24px; max-height: 24px; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;\" src=\"images/ic_keyboard_arrow_right_24px.svg\"> <div class=\"tp-svg-innercontainer\"><svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" style=\"fill: rgb(70, 191, 0);\"><path d=\"M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z\" style=\"fill: rgb(70, 191, 0);\"></path></svg></div></div>

\t\t\t\t\t\t<div class=\"tp-caption   tp-svg-layer  arrow3 tp-static-layer\" id=\"slider-1-layer-36\" data-x=\"['right','right','center','center']\" data-hoffset=\"['56','43','162','162']\" data-y=\"['bottom','bottom','bottom','bottom']\" data-voffset=\"['245','245','54','54']\" data-width=\"24\" data-height=\"24\" data-whitespace=\"normal\" data-type=\"svg\" data-svg_src=\"images/ic_keyboard_arrow_right_24px.svg\" data-svg_idle=\"sc:transparent;sw:0;sda:0;sdo:0;\" data-responsive_offset=\"off\" data-responsive=\"off\" data-startslide=\"0\" data-endslide=\"4\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]\" data-textalign=\"['inherit','inherit','inherit','inherit']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 37; min-width: 24px; max-width: 24px; color: rgb(70, 191, 0); font-family: &quot;Open Sans&quot;; visibility: inherit; transition: none; text-align: inherit; line-height: 22px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 13px; white-space: normal; min-height: 24px; max-height: 24px; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;\" src=\"images/ic_keyboard_arrow_right_24px.svg\"> <div class=\"tp-svg-innercontainer\"><svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" style=\"fill: rgb(70, 191, 0);\"><path d=\"M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z\" style=\"fill: rgb(70, 191, 0);\"></path></svg></div></div> -->
        </div>
    </div>
</div><!-- Slider End -->
<!-- Services-section Start -->
<div class=\"services-section\">
    <div class=\"container\">
        <div class=\"services-main-blocks\">
            <div class=\"services-box\">
                <div class=\"grid-box-inner\">
                    <a href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_locate");
        echo "\">
                        <div class=\"item-title\">
                            <div class=\"icon-wrp\"><img alt=\"\" class=\"img-responsive\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/ambulatory.png"), "html", null, true);
        echo "\"></div>
                            <div class=\"title-wrp\">
                                <h3>AMBULATORY</h3>
                            </div>
                        </div><!--/.item-title-->
                        <div class=\"description clearfix\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                        </div></a>
                </div><!--/.grid-box-inner-->
            </div><!--/.services-box-->
            <div class=\"services-box\">
                <div class=\"grid-box-inner\">
                    <a href=\"";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_timetable");
        echo "\">
                        <div class=\"item-title\">
                            <div class=\"icon-wrp\"><img alt=\"\" class=\"img-responsive\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/vaccination.png"), "html", null, true);
        echo "\"></div>
                            <div class=\"title-wrp\">
                                <h3>VACCINATION</h3>
                            </div>
                        </div><!--/.item-title-->
                        <div class=\"description clearfix\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                        </div></a>
                </div><!--/.grid-box-inner-->
            </div><!--/.services-box-->
            <div class=\"services-box\">
                <div class=\"grid-box-inner\">
                    <a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_timetable");
        echo "\">
                        <div class=\"item-title\">
                            <div class=\"icon-wrp\"><img alt=\"\" class=\"img-responsive\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/surgery.png"), "html", null, true);
        echo "\"></div>
                            <div class=\"title-wrp\">
                                <h3>GENERAL<br>
                                    SURGERY</h3>
                            </div>
                        </div>
                        <div class=\"description clearfix\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                        </div></a>
                </div><!--/.grid-box-inner-->
            </div><!--/.services-box-->
            <div class=\"services-box\">
                <div class=\"grid-box-inner\">
                    <a href=\"";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_doctors");
        echo "\">
                        <div class=\"item-title\">
                            <div class=\"icon-wrp\"><img alt=\"\" class=\"img-responsive\" src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/physician.png"), "html", null, true);
        echo "\"></div>
                            <div class=\"title-wrp\">
                                <h3>PHYSICIANS</h3>
                            </div>
                        </div><!--/.item-title-->
                        <div class=\"description clearfix\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                        </div></a>
                </div><!--/.grid-box-inner-->
            </div><!--/.services-box-->
        </div><!--/.services-main-blocks-->
    </div><!--/.container-->
</div><!-- Services-section End -->
<!-- Who-We-Are Start -->
<div class=\"who-we-are\">
    <div class=\"container\">
        <div class=\"section-title clearfix\">
            <h3>WHO WE ARE</h3>
        </div>
        <div class=\"our-health-mission clearfix\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"health-block\">
                        <div class=\"image\">
                            <img alt=\"DOCTORS\" class=\"img-responsive\" src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/doctors.jpg"), "html", null, true);
        echo "\"> <a class=\"media-container__link media-container__link--btn media-container__link--style-circle\" data-lightbox=\"iframe\" data-target=\".video-modal\" data-toggle=\"modal\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_doctors");
        echo "\">
                                <div class=\"circleanim-svg\">
                                    <svg height=\"108\" width=\"108\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <circle class=\"circleanim-svg__circle-back\" cx=\"54\" cy=\"54\" fill=\"#FFFFFF\" r=\"48\" stroke-opacity=\"0.1\" stroke-width=\"5\"></circle>
                                        <circle class=\"circleanim-svg__circle-front\" cx=\"54\" cy=\"54\" fill=\"#FFFFFF\" r=\"48\" stroke-width=\"5\" transform=\"rotate(50 54 54)\"></circle>
                                        <path d=\"M62.1556183,56.1947505 L52,62.859375 C50.6192881,63.7654672 49.5,63.1544098 49.5,61.491212 L49.5,46.508788 C49.5,44.8470803 50.6250889,44.2383396 52,45.140625 L62.1556183,51.8052495 C64.0026693,53.0173767 63.9947588,54.9878145 62.1556183,56.1947505 Z\" fill=\"#FFFFFF\"></path></svg>
                                </div></a>
                        </div><!--/.image-->
                    </div><!--/.health-block-->
                </div><!--/.col-sm-6 col-md-3-->
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"health-block\">
                        <h5>MedLife Care is the premier health care company focused on delivering the highest quality care</h5>
                        <p>to people with chronic conditions. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
                    </div>
                </div><!--/.col-sm-6 col-md-3-->
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"health-block\">
                        <!-- Accordion Start -->
                        <div class=\"panel-group\" id=\"accordion\">
                            <!-- Panel Block Start -->
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h4 class=\"panel-title\"><a class=\"accordion-toggle collapsed\" data-parent=\"#accordion\" data-toggle=\"collapse\" href=\"#collapseOne\">Why us ?</a></h4>
                                </div>
                                <div class=\"panel-collapse collapse\" id=\"collapseOne\">
                                    <div class=\"panel-body\">
                                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </div>
                                </div><!--/.panel-collapse-->
                            </div><!-- Panel Block End -->
                            <!-- Panel Block Start -->
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h4 class=\"panel-title\"><a class=\"accordion-toggle\" data-parent=\"#accordion\" data-toggle=\"collapse\" href=\"#collapseTwo\">20 Years of trusted care</a></h4>
                                </div>
                                <div class=\"panel-collapse collapse in\" id=\"collapseTwo\">
                                    <div class=\"panel-body\">
                                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </div>
                                </div><!--/.panel-collapse-->
                            </div><!-- Panel Block End -->
                            <!-- Panel Block Start -->
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h4 class=\"panel-title\"><a class=\"accordion-toggle collapsed\" data-parent=\"#accordion\" data-toggle=\"collapse\" href=\"#collapseThree\">Community</a></h4>
                                </div>
                                <div class=\"panel-collapse collapse\" id=\"collapseThree\">
                                    <div class=\"panel-body\">
                                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </div>
                                </div><!--/.panel-collapse-->
                            </div><!-- Panel Block End -->
                        </div><!-- Accordion End -->
                    </div><!--/.health-block-->
                </div><!--/.col-sm-6 col-md-3-->
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"health-block\">
                        <h5>Our mission extends beyond the clinic and into the communities that we serve.</h5>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div><!--/.col-sm-6 col-md-3-->
            </div><!--/.row-->
        </div><!--/.our-health-mission clearfix-->
    </div><!--/.container-->
</div><!-- Who-We-Are End -->
<!-- Emergency Service Start -->
<div class=\"emergency-services clearfix\">
    <div class=\"col-sm-12 col-md-12 col-lg-6 main-service-block padding\">
        <div class=\"emergency-image\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/laboratory.jpg"), "html", null, true);
        echo "\"></div>
    </div>
    <div class=\"col-sm-12 col-md-12 col-lg-6 main-service-block padding\">
        <div class=\"emergency-detail clearfix\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-md-6\">
                    <div class=\"service-block\">
                        <div class=\"image-icon\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/emergency-icon1.png"), "html", null, true);
        echo "\"></div>
                        <h6>ALLERGY / IMMUNOLOGY</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                    </div><!--/.service-block-->
                </div><!--/.col-sm-6 col-md-6-->
                <div class=\"col-sm-6 col-md-6\">
                    <div class=\"service-block\">
                        <div class=\"image-icon\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/emergency-icon2.png"), "html", null, true);
        echo "\"></div>
                        <h6>ROUTINE CARE</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                    </div><!--/.service-block-->
                </div><!--/.col-sm-6 col-md-6-->
                <div class=\"col-sm-6 col-md-6\">
                    <div class=\"service-block\">
                        <div class=\"image-icon\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/emergency-icon3.png"), "html", null, true);
        echo "\"></div>
                        <h6>EMERGENCY</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                    </div><!--/.service-block-->
                </div><!--/.col-sm-6 col-md-6-->
                <div class=\"col-sm-6 col-md-6\">
                    <div class=\"service-block\">
                        <div class=\"image-icon\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/emergency-icon4.png"), "html", null, true);
        echo "\"></div>
                        <h6>FAMILY MEDICINE</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                    </div><!--/.service-block-->
                </div><!--/.col-sm-6 col-md-6-->
            </div><!--/.row-->
        </div><!--/.emergency-detail clearfix-->
    </div><!--/.col-sm-12 col-md-12 col-lg-6 main-service-block padding-->
    <div class=\"emergency-detail clearfix\">
        <!-- Emergency Detail Start -->
        <!-- <div class=\"container\">
                    <div class=\"row\">
                            <div class=\"col-sm-6 col-md-6 col-md-offset-6\">
                                    <div class=\"service-details clearfix\">
                                            <div class=\"row\">
                                                    <div class=\"col-sm-6 col-md-6\">
                                                            <div class=\"service-block\">
                                                                    <div class=\"image-icon\">

                                                                    </div>
                                                            </div>
                                                    </div>
                                            </div>
                                    </div>
                            </div>
                    </div>
            </div> -->
        <!-- Emergency Detail End -->
    </div><!--/.emergency-detail-->
</div><!-- Emergency Service End -->
<!-- Health Service Start -->
<div class=\"health-services clearfix\">
    <!-- <div class=\"parallax-window\" data-parallax=\"scroll\" data-image-src=\"images/pattern2_lq-1.png\"></div> -->
    <div class=\"parallax-main\">
        <div class=\"parallax-window\" data-image-src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/parallex-img.jpg"), "html", null, true);
        echo "\" data-parallax=\"scroll\"></div>
    </div><!-- Health Service Detail Start -->
    <div class=\"health-services-detail\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h5>SERVICES</h5>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-6\">
                    <div class=\"health-block clearfix\">
                        <ul>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">ROUTINE MEDICAL CARE</a>
                            </li>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">ALERGY / IMMUNOLOGY</a>
                            </li>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">PHISIOTHERAPHY</a>
                            </li>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">ANESTHESIOLOGY</a>
                            </li>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">MINOR SURGERY</a>
                            </li>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">INTERNAL & FAMILY MEDICINE</a>
                            </li>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">NURSING SERVICES</a>
                            </li>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">ENDOCRINOLOGY</a>
                            </li>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">FLU VACCINATION</a>
                            </li>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">WEIGHT LOSS & WELLNESS</a>
                            </li>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">DIAGNOSTIC IMAGING</a>
                            </li>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">GASTROENTEROLOGY</a>
                            </li>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">UROLOGY</a>
                            </li>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">PEDIATRICS</a>
                            </li>
                        </ul>
                    </div><!--/.health-block-->
                </div><!--/.col-sm-12 col-md-6-->
                <div class=\"col-sm-12 col-md-6\">
                    <div class=\"health-block\">
                        <h5>Most medical physicists work in the physics of radiation oncology making sure that the desired dose is given to the cancer.</h5>
                    </div>
                </div><!--/.col-sm-12 col-md-6-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!-- Health Service Detail End -->
</div><!-- Health Service End -->
<!-- Our Work Profile Start -->
<div class=\"our-work-profile clearfix\">
    <div class=\"container\">
        <!-- Section Title Start -->
        <div class=\"section-title clearfix\">
            <h3>WHO WE ARE</h3>
        </div><!-- Section Title End -->
        <!-- Work Profile Tabing Start -->
        <div class=\"work-profile-tabing clearfix\">
            <div class=\"col-sm-5 col-md-4 col-lg-3 padding\">
                <div class=\"left-side\">
                    <!-- Nav tabs -->
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li class=\"active\">
                            <a data-toggle=\"tab\" href=\"#schedule\" role=\"tab\">Schedule Your Appointment <i aria-hidden=\"true\" class=\"fa fa-plus\"></i></a>
                        </li>
                        <li>
                            <a data-toggle=\"tab\" href=\"#medlife\" role=\"tab\">Why Medlife Care ? <i aria-hidden=\"true\" class=\"fa fa-eye\"></i></a>
                        </li>
                        <li>
                            <a data-toggle=\"tab\" href=\"#community\" role=\"tab\">Our Community <i aria-hidden=\"true\" class=\"fa fa-heart-o\"></i></a>
                        </li>
                        <li>
                            <a data-toggle=\"tab\" href=\"#trusted\" role=\"tab\">25 Years of trusted Care <i aria-hidden=\"true\" class=\"fa fa-clock-o\"></i></a>
                        </li>
                    </ul><!--/.nav nav-tabs-->
                </div><!--/.left-side-->
            </div><!--/.col-sm-5 col-md-4 col-lg-3 padding-->
            <div class=\"col-sm-7 col-md-8 col-lg-9 padding\">
                <div class=\"right-side\">
                    <!-- Tab panes -->
                    <div class=\"tab-content\">
                        <div class=\"tab-pane fade in active\" id=\"schedule\">
                            <h4>Schedule an online Appointment, if you do not see a time that is convenient for you, please call us at <a href=\"tel:888-808-6483\">888-808-6483</a>.</h4>
                            <p>Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam qua.</p>
                        </div><!--/.tab-pane-->
                        <div class=\"tab-pane fade\" id=\"medlife\">
                            <h4>Schedule an online Appointment, if you do not see a time that is convenient for you, please call us at <a href=\"tel:888-808-6483\">888-808-6483</a>.</h4>
                            <p>Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam qua.</p>
                        </div><!--/.tab-pane-->
                        <div class=\"tab-pane fade\" id=\"community\">
                            <h4>Schedule an online Appointment, if you do not see a time that is convenient for you, please call us at <a href=\"tel:888-808-6483\">888-808-6483</a>.</h4>
                            <p>Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam qua.</p>
                        </div><!--/.tab-pane-->
                        <div class=\"tab-pane fade\" id=\"trusted\">
                            <h4>Schedule an online Appointment, if you do not see a time that is convenient for you, please call us at <a href=\"tel:888-808-6483\">888-808-6483</a>.</h4>
                            <p>Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam qua.</p>
                        </div><!--/.tab-pane-->
                    </div><!--/.tab-content-->
                </div><!--/.right-side-->
            </div><!--/.col-sm-7 col-md-8 col-lg-9 padding-->
        </div><!-- Work Profile Tabing End -->
        <!-- Our Treatment Start -->
        <div class=\"our-treatment clearfix\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"treatment-block clearfix\">
                        <img alt=\"ICON\" class=\"img-responsive\" src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/emergency-icon2.png"), "html", null, true);
        echo "\">
                        <h5>Medical Treatment</h5>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div><!--/.treatment-block-->
                </div><!--/.col-sm-6 col-md-3-->
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"treatment-block clearfix\">
                        <img alt=\"ICON\" class=\"img-responsive\" src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/emergency-icon3.png"), "html", null, true);
        echo "\">
                        <h5>Emergency Help</h5>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div><!--/.treatment-block-->
                </div><!--/.col-sm-6 col-md-3-->
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"treatment-block clearfix\">
                        <img alt=\"ICON\" class=\"img-responsive\" src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/emergency-icon1.png"), "html", null, true);
        echo "\">
                        <h5>Medical professionals</h5>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div><!--/.treatment-block-->
                </div><!--/.col-sm-6 col-md-3-->
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"treatment-block clearfix\">
                        <img alt=\"ICON\" class=\"img-responsive\" src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/emergency-icon4.png"), "html", null, true);
        echo "\">
                        <h5>Qualified Doctors</h5>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div><!--/.treatment-block-->
                </div><!--/.col-sm-6 col-md-3-->
            </div><!--/.row-->
        </div><!-- Our Treatment End -->
    </div><!--/.container-->
</div><!-- Our Work Profile End -->
<!-- Plastic Surgery Start -->
<div class=\"emergency-services plastic-surgery clearfix\">
    <div class=\"col-sm-12 col-md-12 col-lg-6 main-service-block padding\">
        <div class=\"emergency-detail clearfix\">
            <h5>PLASTIC SURGERY</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupi</p><a class=\"btn btn-default\" href=\"#\" role=\"button\">FIND MORE</a>
        </div>
    </div><!--/.col-sm-12 col-md-12-->
    <div class=\"col-sm-12 col-md-12 col-lg-6 main-service-block padding\">
        <div class=\"emergency-image\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/plastic-surgery.jpg"), "html", null, true);
        echo "\"></div>
    </div>
</div><!-- Plastic Surgery End -->
<!-- Medical And Health News Start -->
<div class=\"medical-health-news clearfix\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-9 col-md-7 col-lg-6 col-centered\">
                <div class=\"section-title clearfix\">
                    <h4>Medical news and health news headlines posted throughout the day, every day.</h4>
                </div>
            </div><!--/.col-sm-9 col-md-7-->
        </div><!-- Media Health Block Start -->
        <div class=\"medical-health-blocks clearfix\">
            <div class=\"row\">
                <div class=\"col-sm-4 col-md-4\">
                    <a class=\"block\" href=\"";
        // line 475
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_services");
        echo "\">
                        <div class=\"image\">
                            <img alt=\"IMAGE\" class=\"img-responsive\" src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/media-health-img1.jpg"), "html", null, true);
        echo "\">
                            <h6>PREVENTIVE CARE</h6>
                        </div><!--/.image-->
                    </a><!--/.block-->
                    <div class=\"block-desc\">
                        <h6>Preterm, low-birth-weight babies more likely for women with hearing loss</h6>
                    </div>
                </div><!--/.col-sm-4 col-md-4-->
                <div class=\"col-sm-4 col-md-4\">
                    <a class=\"block\" href=\"";
        // line 486
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_services");
        echo "\">
                        <div class=\"image\">
                            <img alt=\"IMAGE\" class=\"img-responsive\" src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/media-health-img2.jpg"), "html", null, true);
        echo "\">
                            <h6>FLU SHOTS</h6>
                        </div><!--/.image-->
                    </a><!--/.block-->
                    <div class=\"block-desc\">
                        <h6>Nicotine has the potential to prevent brain aging, study suggests</h6>
                    </div>
                </div><!--/.col-sm-4 col-md-4-->
                <div class=\"col-sm-4 col-md-4\">
                    <a class=\"block\" href=\"";
        // line 497
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_services");
        echo "\">
                        <div class=\"image\">
                            <img alt=\"IMAGE\" class=\"img-responsive\" src=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/media-health-img3.jpg"), "html", null, true);
        echo "\">
                            <h6>LABORATORY TESTS</h6>
                        </div><!--/.image-->
                    </a><!--/.block-->
                    <div class=\"block-desc\">
                        <h6>Hormone changes during menstrual cycle alter problem-solving strategies</h6>
                    </div>
                </div><!--/.col-sm-4 col-md-4-->
            </div><!--/.row-->
        </div><!-- Media Health Block End -->
        <div class=\"find-more\">
            <a class=\"btn btn-default\" href=\"";
        // line 510
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_services");
        echo "\" role=\"button\">Find More</a>
        </div>
    </div><!--/.container-->
</div><!-- Medical And Health News End -->
<!-- Map Address Location Start -->
<div class=\"map-address-location clearfix\">
    <div class=\"col-sm-6 col-md-6 padding\">
        <iframe allowfullscreen height=\"700\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.160587394378!2d-46.66110908447823!3d-23.56267528468227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59ce5d75421f%3A0x11e5bd1fb1c64146!2sHospital+Sepaco!5e0!3m2!1sen!2sin!4v1506315663192\" style=\"border:0\"></iframe>
    </div>
    <div class=\"col-sm-6 col-md-6 padding\">
        <div class=\"right-side clearfix\">
            <div class=\"col-sm-6 col-md-6 padding\">
                <a class=\"address-block\" href=\"#\">
                    <div class=\"block-detail\">
                        <h6>LOCATION</h6>
                        <p>17 N, CHARLES STREET</p>
                        <p>BALTMORE, MD21202</p>
                    </div><!--/.block-detail-->
                </a><!--/.address-block-->
            </div><!--/.col-sm-6 col-md-6-->
            <div class=\"col-sm-6 col-md-6 padding\">
                <a class=\"address-block\" href=\"#\">
                    <div class=\"block-detail\">
                        <h6>OUR HOURS</h6>
                        <p>MON-FRI: 09:00-18:00</p>
                        <p>SAT-SUN: 10:00 - 14:00</p>
                    </div><!--/.block-detail-->
                </a><!--/.address-block-->
            </div><!--/.col-sm-6 col-md-6-->
            <div class=\"col-sm-6 col-md-6 padding\">
                <a class=\"address-block\" href=\"#\">
                    <div class=\"block-detail\">
                        <h6>CONTACT US</h6>
                        <p>+4 01800 1234</p>
                        <p><span class=\"__cf_email__\" data-cfemail=\"732a3c2621363e323a3f33343e323a3f5d303c3e\">[email&#160;protected]</span></p>
                    </div><!--/.block-detail-->
                </a><!--/.address-block-->
            </div><!--/.col-sm-6 col-md-6-->
            <div class=\"col-sm-6 col-md-6 padding\">
                <a class=\"address-block\" href=\"#\">
                    <div class=\"block-detail\">
                        <h6>FOLLOW US</h6>
                        <p>FACEBOOK</p>
                        <p>INSTAGRAM</p>
                        <p>TWITTER</p>
                    </div><!--/.block-detail-->
                </a><!--/.address-block-->
            </div><!--/.col-sm-6 col-md-6-->
        </div><!--/.right-side-->
    </div><!--/.col-sm-6 col-md--->
</div><!-- Map Address Location End -->
";
        
        $__internal_28b56ce4486fa59d8085b2624e4aff8774c4bf94a93bfad04fe0ad2fd3710cd8->leave($__internal_28b56ce4486fa59d8085b2624e4aff8774c4bf94a93bfad04fe0ad2fd3710cd8_prof);

        
        $__internal_feccb70b2c2d0c346717e4099798547cb78faf5eda45eb875efc6b5ace617175->leave($__internal_feccb70b2c2d0c346717e4099798547cb78faf5eda45eb875efc6b5ace617175_prof);

    }

    public function getTemplateName()
    {
        return "SanteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  682 => 510,  668 => 499,  663 => 497,  651 => 488,  646 => 486,  634 => 477,  629 => 475,  610 => 459,  589 => 441,  579 => 434,  569 => 427,  559 => 420,  430 => 294,  393 => 260,  383 => 253,  373 => 246,  363 => 239,  353 => 232,  279 => 163,  252 => 139,  247 => 137,  231 => 124,  226 => 122,  211 => 110,  206 => 108,  191 => 96,  186 => 94,  169 => 80,  158 => 74,  152 => 71,  148 => 70,  140 => 65,  129 => 57,  122 => 53,  111 => 45,  104 => 41,  94 => 34,  87 => 30,  76 => 22,  69 => 18,  58 => 10,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block body %}
<!-- Slider Start -->
<div class=\"main-slider clearfix\">
    <div class=\"rev_slider fullscreen\" data-version=\"5.3.0.2\" id=\"rev_slider_1_1\" style=\"display:none;\">
        <ul>
            <!-- SLIDE  -->
            <li data-description=\"\" data-easein=\"default\" data-easeout=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-index=\"rs-1\" data-masterspeed=\"300\" data-param1=\"\" data-param10=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-rotate=\"0\" data-saveperformance=\"off\" data-slotamount=\"default\" data-title=\"Slide\" data-transition=\"slotzoom-horizontal\">
                <!-- MAIN IMAGE -->
                <img alt=\"\" class=\"rev-slidebg\" data-bgfit=\"cover\" data-bgposition=\"center center\" data-bgrepeat=\"no-repeat\" data-no-retina=\"\" src=\"{{ asset('images/medibg.jpg')}}\" title=\"Home\"> <!-- LAYERS 1-->
                <div class=\"tp-caption tp-shape tp-shapewrapper tp-resizeme\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:10,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:2260,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"4000\" data-hoffset=\"['0','0','0','0']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive_offset=\"on\" data-textalign=\"['left','left','left','left']\" data-type=\"shape\" data-voffset=\"['0','0','0','0']\" data-whitespace=\"nowrap\" data-width=\"4000\" data-x=\"['center','center','center','center']\" data-y=\"['middle','middle','middle','middle']\" id=\"slide-1-layer-1\" style=\"z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0);\"></div><!-- LAYER NR. 2 -->
                <div class=\"tp-caption\" data-fontsize=\"['72','62','50','28']\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;&quot;,&quot;mask&quot;:&quot;x:[-100%];y:0;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"['81','66','61','36']\" data-hoffset=\"['29','21','-4','-3']\" data-lineheight=\"['80','65','60','34']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','left','left']\" data-type=\"text\" data-voffset=\"['392','386','-110','-64']\" data-whitespace=\"nowrap\" data-width=\"['385','333','271','152']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" id=\"slide-1-layer-2\" style=\"z-index: 6; min-width: 385px; max-width: 385px; max-width: 81px; max-width: 81px; white-space: nowrap; font-size: 72px; line-height: 80px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family: 'latoregular';\">
                    Health Care
                </div><!-- LAYER NR. 3 -->
                <div class=\"tp-caption\" data-fontsize=\"['30','26','22','16']\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"['73','none','57','41']\" data-hoffset=\"['30','24','-3','-4']\" data-lineheight=\"['36','30','28','20']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"text\" data-voffset=\"['315','315','-46','-24']\" data-whitespace=\"nowrap\" data-width=\"['422','none','307','225']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" id=\"slide-1-layer-3\" style=\"z-index: 7; min-width: 422px; max-width: 422px; max-width: 73px; max-width: 73px; white-space: nowrap; font-size: 30px; line-height: 36px; font-weight: 300; color: rgba(255, 255, 255, 1.00);font-family: 'latolight';\">
                    Renowned pediatricians work at<br>
                    MedLife Pediatric Hospital.
                </div><a class=\"tp-caption rev-btn\" data-actions=\"\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;},{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;0&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;,&quot;force&quot;:true,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgba(255, 255, 255, 1.00);bg:rgba(76, 171, 76, 1.00);bs:solid;bw:0 0 0 0;&quot;}]\" data-height=\"['53','53','54','42']\" data-hoffset=\"['31','26','-2','-2']\" data-lineheight=\"['28','28','28','16']\" data-paddingbottom=\"[12,12,12,12]\" data-paddingleft=\"[35,35,35,35]\" data-paddingright=\"[35,35,35,35]\" data-paddingtop=\"[12,12,12,12]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"button\" data-voffset=\"['241','241','27','27']\" data-whitespace=\"nowrap\" data-width=\"['148','148','210','151']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" href=\"{{ path('sante_services') }}\" id=\"slide-1-layer-4\" style=\"z-index: 8; min-width: 148px; max-width: 148px; max-width: 53px; max-width: 53px; white-space: nowrap; font-size: 14px; line-height: 28px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family: 'latoregular';background-color:rgba(102, 204, 102, 1.00);border-color:rgba(0, 0, 0, 1.00);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;\" target=\"_self\">FIND MORE</a>
            </li><!-- SLIDE  -->
            <!-- SLIDE  -->
            <li data-description=\"\" data-easein=\"default\" data-easeout=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-index=\"rs-2\" data-masterspeed=\"300\" data-param1=\"\" data-param10=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-rotate=\"0\" data-saveperformance=\"off\" data-slotamount=\"default\" data-title=\"Slide\" data-transition=\"slotzoom-horizontal\">
                <img alt=\"\" class=\"rev-slidebg\" data-bgfit=\"cover\" data-bgposition=\"center center\" data-no-retina=\"\" src=\"{{ asset('images/Comp-1-0-00-00-00.jpg')}}\" title=\"Home\"> <!-- <div class=\"rs-background-video-layer\" data-forcerewind=\"on\" data-volume=\"mute\" data-ytid=\"w0zelS2nX2E\" data-videoattributes=\"version=3&enablejsapi=1&html5=1&hd=1&wmode=opaque&showinfo=0&rel=0;;origin=https://demo.kallyas.net;\" data-videorate=\"1\" data-videowidth=\"100%\" data-videoheight=\"100%\" data-videocontrols=\"none\" data-videoloop=\"none\" data-forceCover=\"1\" data-aspectratio=\"16:9\" data-autoplay=\"true\" data-autoplayonlyfirsttime=\"false\" data-nextslideatend=\"true\"></div> -->
                <div class=\"rs-background-video-layer\" data-aspectratio=\"16:9\" data-autoplay=\"true\" data-autoplayonlyfirsttime=\"false\" data-forcecover=\"1\" data-forcerewind=\"on\" data-videoheight=\"100%\" data-videoloop=\"loopandnoslidestop\" data-videomp4=\"images/Comp 1 1.mp4\" data-videopreload=\"auto\" data-videowidth=\"100%\" data-volume=\"mute\"></div>
                <div class=\"tp-caption tp-shape tp-shapewrapper tp-resizeme\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:10,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:2260,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"4000\" data-hoffset=\"['0','0','0','0']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive_offset=\"on\" data-textalign=\"['left','left','left','left']\" data-type=\"shape\" data-voffset=\"['0','0','0','0']\" data-whitespace=\"nowrap\" data-width=\"4000\" data-x=\"['center','center','center','center']\" data-y=\"['middle','middle','middle','middle']\" id=\"slide-2-layer-1\" style=\"z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0);\"></div>
                <div class=\"tp-caption\" data-fontsize=\"['72','62','50','28']\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;&quot;,&quot;mask&quot;:&quot;x:[-100%];y:0;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"['161','131','121','69']\" data-hoffset=\"['29','22','-4','-3']\" data-lineheight=\"['80','65','60','34']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"text\" data-voffset=\"['392','386','-130','-82']\" data-whitespace=\"normal\" data-width=\"['416','352','284','168']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" id=\"slide-2-layer-2\" style=\"z-index: 6; min-width: 416px; max-width: 416px; max-width: 161px; max-width: 161px; white-space: normal; font-size: 72px; line-height: 80px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family: 'latoregular';\">
                    Medical Radiography
                </div>
                <div class=\"tp-caption\" data-fontsize=\"['30','26','22','16']\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"none\" data-hoffset=\"['30','24','-3','-4']\" data-lineheight=\"['36','30','28','20']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"text\" data-voffset=\"['315','316','-46','-24']\" data-whitespace=\"normal\" data-width=\"['423','369','308','226']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" id=\"slide-2-layer-3\" style=\"z-index: 7; min-width: 423px; max-width: 423px; white-space: normal; font-size: 30px; line-height: 36px; font-weight: 300; color: rgba(255, 255, 255, 1.00);font-family: 'latolight';\">
                    Brussels finest outpatient diagnostic imaging center
                </div><a class=\"tp-caption rev-btn\" data-actions=\"\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;},{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;0&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;,&quot;force&quot;:true,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgba(255, 255, 255, 1.00);bg:rgba(76, 171, 76, 1.00);bs:solid;bw:0 0 0 0;&quot;}]\" data-height=\"['53','53','54','42']\" data-hoffset=\"['31','26','-2','-2']\" data-lineheight=\"['28','28','28','16']\" data-paddingbottom=\"[12,12,12,12]\" data-paddingleft=\"[35,35,35,35]\" data-paddingright=\"[35,35,35,35]\" data-paddingtop=\"[12,12,12,12]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"button\" data-voffset=\"['241','241','27','27']\" data-whitespace=\"nowrap\" data-width=\"['148','148','210','151']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" href=\"{{ path('sante_services') }}\" id=\"slide-2-layer-4\" style=\"z-index: 8; min-width: 148px; max-width: 148px; max-width: 53px; max-width: 53px; white-space: nowrap; font-size: 14px; line-height: 28px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family: 'latoregular';background-color:rgba(102, 204, 102, 1.00);border-color:rgba(0, 0, 0, 1.00);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;\" target=\"_self\">FIND MORE</a>
            </li><!-- SLIDE  -->
            <!-- SLIDE  -->
            <li data-description=\"\" data-easein=\"default\" data-easeout=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-index=\"rs-3\" data-masterspeed=\"300\" data-param1=\"\" data-param10=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-rotate=\"0\" data-saveperformance=\"off\" data-slotamount=\"default\" data-title=\"Slide\" data-transition=\"slotzoom-horizontal\">
                <img alt=\"\" class=\"rev-slidebg\" data-bgfit=\"cover\" data-bgposition=\"center top\" data-bgrepeat=\"no-repeat\" data-no-retina=\"\" src=\"{{ asset('images/health-kid.jpg')}}\" title=\"Home\">
                <div class=\"tp-caption tp-shape tp-shapewrapper tp-resizeme\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:10,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:2260,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"4000\" data-hoffset=\"['0','0','0','0']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive_offset=\"on\" data-textalign=\"['left','left','left','left']\" data-type=\"shape\" data-voffset=\"['0','0','0','0']\" data-whitespace=\"nowrap\" data-width=\"4000\" data-x=\"['center','center','center','center']\" data-y=\"['middle','middle','middle','middle']\" id=\"slide-3-layer-1\" style=\"z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0);\"></div>
                <div class=\"tp-caption\" data-fontsize=\"['72','62','50','28']\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;&quot;,&quot;mask&quot;:&quot;x:[-100%];y:0;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"['243','196','182','104']\" data-hoffset=\"['27','22','-4','-3']\" data-lineheight=\"['80','65','60','34']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"text\" data-voffset=\"['330','334','-110','-64']\" data-whitespace=\"normal\" data-width=\"['530','447','370','207']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" id=\"slide-3-layer-2\" style=\"z-index: 6; min-width: 530px; max-width: 530px; max-width: 243px; max-width: 243px; white-space: normal; font-size: 72px; line-height: 80px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family: 'latoregular';\">
                    Internal & Family Medicine
                </div>
                <div class=\"tp-caption\" data-fontsize=\"['30','26','22','16']\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"['109','none','85','61']\" data-hoffset=\"['30','24','-3','-4']\" data-lineheight=\"['36','30','28','20']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"text\" data-voffset=\"['286','315','-32','-16']\" data-whitespace=\"normal\" data-width=\"['450','431','336','251']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" id=\"slide-3-layer-3\" style=\"z-index: 7; min-width: 443px; max-width: 443px; max-width: 109px; max-width: 109px; white-space: normal; font-size: 30px; line-height: 36px; font-weight: 300; color: rgba(255, 255, 255, 1.00);font-family: 'latolight';\">
                    Family doctors are the most widely skilled primary care doctors
                </div><a class=\"tp-caption rev-btn\" data-actions=\"\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;},{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;0&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;,&quot;force&quot;:true,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgba(255, 255, 255, 1.00);bg:rgba(76, 171, 76, 1.00);bs:solid;bw:0 0 0 0;&quot;}]\" data-height=\"['53','53','54','42']\" data-hoffset=\"['32','26','-2','-2']\" data-lineheight=\"['28','28','28','16']\" data-paddingbottom=\"[12,12,12,12]\" data-paddingleft=\"[35,35,35,35]\" data-paddingright=\"[35,35,35,35]\" data-paddingtop=\"[12,12,12,12]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"button\" data-voffset=\"['241','241','27','27']\" data-whitespace=\"nowrap\" data-width=\"['148','148','210','151']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" href=\"{{ path('sante_services') }}\" id=\"slide-3-layer-4\" style=\"z-index: 8; min-width: 148px; max-width: 148px; max-width: 53px; max-width: 53px; white-space: nowrap; font-size: 14px; line-height: 28px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family: 'latoregular';background-color:rgba(102, 204, 102, 1.00);border-color:rgba(0, 0, 0, 1.00);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;\" target=\"_self\">FIND MORE</a>
            </li><!-- SLIDE  -->
            <!-- SLIDE  -->
            <li data-description=\"\" data-easein=\"default\" data-easeout=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-index=\"rs-4\" data-masterspeed=\"300\" data-param1=\"\" data-param10=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-rotate=\"0\" data-saveperformance=\"off\" data-slotamount=\"default\" data-title=\"Slide\" data-transition=\"slotzoom-horizontal\">
                <img alt=\"\" class=\"rev-slidebg\" data-bgfit=\"cover\" data-bgposition=\"center center\" data-bgrepeat=\"no-repeat\" data-no-retina=\"\" src=\"{{ asset('images/medibg2.jpg')}}\" title=\"Home\">
                <div class=\"tp-caption tp-shape tp-shapewrapper tp-resizeme\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:10,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:2260,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"4000\" data-hoffset=\"['0','0','0','0']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive_offset=\"on\" data-textalign=\"['left','left','left','left']\" data-type=\"shape\" data-voffset=\"['0','0','0','0']\" data-whitespace=\"nowrap\" data-width=\"4000\" data-x=\"['center','center','center','center']\" data-y=\"['middle','middle','middle','middle']\" id=\"slide-4-layer-1\" style=\"z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0);\"></div>
                <div class=\"tp-caption\" data-fontsize=\"['72','62','50','28']\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;&quot;,&quot;mask&quot;:&quot;x:[-100%];y:0;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"['243','197','181','103']\" data-hoffset=\"['26','21','-4','-3']\" data-lineheight=\"['80','65','60','34']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"text\" data-voffset=\"['324','332','-110','-64']\" data-whitespace=\"normal\" data-width=\"['501','431','329','193']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" id=\"slide-4-layer-2\" style=\"z-index: 6; min-width: 501px; max-width: 501px; max-width: 243px; max-width: 243px; white-space: normal; font-size: 72px; line-height: 80px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family: 'latoregular';\">
                    Comprehensive Breast Center
                </div>
                <div class=\"tp-caption\" data-fontsize=\"['30','26','22','16']\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"['73','none','57','41']\" data-hoffset=\"['30','24','-3','-4']\" data-lineheight=\"['36','30','28','20']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"text\" data-voffset=\"['315','315','-46','-25']\" data-whitespace=\"nowrap\" data-width=\"['422','none','307','225']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" id=\"slide-4-layer-3\" style=\"z-index: 7; min-width: 422px; max-width: 422px; max-width: 73px; max-width: 73px; white-space: nowrap; font-size: 30px; line-height: 36px; font-weight: 300; color: rgba(255, 255, 255, 1.00);font-family: 'latolight';\">
                    We are here to help, guide<br>
                    and support you.
                </div><a class=\"tp-caption rev-btn\" data-actions=\"\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;},{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;0&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;,&quot;force&quot;:true,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgba(255, 255, 255, 1.00);bg:rgba(76, 171, 76, 1.00);bs:solid;bw:0 0 0 0;&quot;}]\" data-height=\"['53','53','54','42']\" data-hoffset=\"['31','26','-2','-2']\" data-lineheight=\"['28','28','28','16']\" data-paddingbottom=\"[12,12,12,12]\" data-paddingleft=\"[35,35,35,35]\" data-paddingright=\"[35,35,35,35]\" data-paddingtop=\"[12,12,12,12]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"button\" data-voffset=\"['241','241','27','27']\" data-whitespace=\"nowrap\" data-width=\"['148','148','210','151']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" href=\"{{ path('sante_services') }}\" id=\"slide-4-layer-4\" style=\"z-index: 8; min-width: 148px; max-width: 148px; max-width: 53px; max-width: 53px; white-space: nowrap; font-size: 14px; line-height: 28px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family: 'latoregular';background-color:rgba(102, 204, 102, 1.00);border-color:rgba(0, 0, 0, 1.00);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;\" target=\"_self\">FIND MORE</a>
            </li><!-- SLIDE  -->
            <!-- SLIDE  -->
            <li data-description=\"\" data-easein=\"default\" data-easeout=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-index=\"rs-5\" data-masterspeed=\"300\" data-param1=\"\" data-param10=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-rotate=\"0\" data-saveperformance=\"off\" data-slotamount=\"default\" data-title=\"Slide\" data-transition=\"slotzoom-horizontal\">
                <img alt=\"\" class=\"rev-slidebg\" data-bgfit=\"cover\" data-bgposition=\"center center\" data-bgrepeat=\"no-repeat\" data-no-retina=\"\" src=\"{{ asset('images/medibg3.jpg')}}\" title=\"Home\">
                <div class=\"tp-caption tp-shape tp-shapewrapper tp-resizeme\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:10,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:2260,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"4000\" data-hoffset=\"['0','0','0','0']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive_offset=\"on\" data-textalign=\"['left','left','left','left']\" data-type=\"shape\" data-voffset=\"['0','0','0','0']\" data-whitespace=\"nowrap\" data-width=\"4000\" data-x=\"['center','center','center','center']\" data-y=\"['middle','middle','middle','middle']\" id=\"slide-5-layer-1\" style=\"z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0);\"></div>
                <div class=\"tp-caption\" data-fontsize=\"['72','62','50','28']\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;&quot;,&quot;mask&quot;:&quot;x:[-100%];y:0;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"['81','66','61','36']\" data-hoffset=\"['29','21','-4','-3']\" data-lineheight=\"['80','65','60','34']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"text\" data-voffset=\"['392','386','-110','-64']\" data-whitespace=\"nowrap\" data-width=\"['385','333','271','152']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" id=\"slide-5-layer-2\" style=\"z-index: 6; min-width: 385px; max-width: 385px; max-width: 81px; max-width: 81px; white-space: nowrap; font-size: 72px; line-height: 80px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family: 'latoregular';\">
                    Pediatrics
                </div>
                <div class=\"tp-caption\" data-fontsize=\"['30','26','22','16']\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;}]\" data-height=\"['73','none','57','41']\" data-hoffset=\"['30','24','-3','-4']\" data-lineheight=\"['36','30','28','20']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"text\" data-voffset=\"['315','315','-46','-24']\" data-whitespace=\"nowrap\" data-width=\"['422','none','307','225']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" id=\"slide-5-layer-3\" style=\"z-index: 7; min-width: 422px; max-width: 422px; max-width: 73px; max-width: 73px; white-space: nowrap; font-size: 30px; line-height: 36px; font-weight: 300; color: rgba(255, 255, 255, 1.00);font-family: 'latolight';\">
                    Renowned pediatricians work at<br>
                    MedLife Pediatric Hospital.
                </div><a class=\"tp-caption rev-btn\" data-actions=\"\" data-frames=\"[{&quot;delay&quot;:500,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;nothing&quot;},{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;0&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;,&quot;force&quot;:true,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgba(255, 255, 255, 1.00);bg:rgba(76, 171, 76, 1.00);bs:solid;bw:0 0 0 0;&quot;}]\" data-height=\"['53','53','54','42']\" data-hoffset=\"['31','26','-2','-2']\" data-lineheight=\"['28','28','28','16']\" data-paddingbottom=\"[12,12,12,12]\" data-paddingleft=\"[35,35,35,35]\" data-paddingright=\"[35,35,35,35]\" data-paddingtop=\"[12,12,12,12]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-textalign=\"['left','left','center','center']\" data-type=\"button\" data-voffset=\"['241','241','27','27']\" data-whitespace=\"nowrap\" data-width=\"['148','148','210','151']\" data-x=\"['left','left','center','center']\" data-y=\"['bottom','bottom','middle','middle']\" href=\"{{ path('sante_services') }}\" id=\"slide-5-layer-4\" style=\"z-index: 8; min-width: 148px; max-width: 148px; max-width: 53px; max-width: 53px; white-space: nowrap; font-size: 14px; line-height: 28px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family: 'latoregular';background-color:rgba(102, 204, 102, 1.00);border-color:rgba(0, 0, 0, 1.00);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;\" target=\"_self\">FIND MORE</a>
            </li><!-- SLIDE  -->
        </ul>
        <div class=\"tp-static-layers\" style=\"\">
            <div class=\"tp-caption tp-shape tp-shapewrapper tp-static-layer\" data-endslide=\"4\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]\" data-height=\"['330','334','273','273']\" data-hoffset=\"['29','26','0','0']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-startslide=\"0\" data-textalign=\"['inherit','inherit','inherit','inherit']\" data-type=\"shape\" data-voffset=\"['180','180','-7','-7']\" data-whitespace=\"nowrap\" data-width=\"['296','251','697','697']\" data-x=\"['right','right','center','center']\" data-y=\"['bottom','bottom','bottom','bottom']\" id=\"slider-1-layer-24\" style=\"z-index: 25;font-family:Open Sans;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 0);\"></div>
            <div class=\"tp-caption tp-static-layer\" data-endslide=\"4\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]\" data-height=\"none\" data-hoffset=\"['244','209','-151','-151']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-startslide=\"0\" data-textalign=\"['inherit','inherit','inherit','inherit']\" data-type=\"image\" data-voffset=\"['421','421','172','172']\" data-whitespace=\"nowrap\" data-width=\"none\" data-x=\"['right','right','center','center']\" data-y=\"['bottom','bottom','bottom','bottom']\" id=\"slider-1-layer-25\" style=\"z-index: 26;\"><img alt=\"\" data-hh=\"['46px','46px','46px','46px']\" data-no-retina=\"\" data-ww=\"['46px','46px','46px','46px']\" height=\"70\" src=\"{{ asset('images/appointment.png')}}\" width=\"70\"></div>
            <div class=\"tp-caption tp-static-layer\" data-endslide=\"4\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]\" data-height=\"none\" data-hoffset=\"['242','207','-149','-149']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-startslide=\"0\" data-textalign=\"['inherit','inherit','inherit','inherit']\" data-type=\"image\" data-voffset=\"['329','329','103','103']\" data-whitespace=\"nowrap\" data-width=\"none\" data-x=\"['right','right','center','center']\" data-y=\"['bottom','bottom','bottom','bottom']\" id=\"slider-1-layer-26\" style=\"z-index: 27;\"><img alt=\"\" data-hh=\"['48px','48px','48px','48px']\" data-no-retina=\"\" data-ww=\"['48px','48px','48px','48px']\" height=\"70\" src=\"{{ asset('images/services.png')}}\" width=\"70\"></div>
            <div class=\"tp-caption tp-static-layer\" data-endslide=\"4\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]\" data-height=\"['none','none','34','34']\" data-hoffset=\"['69','44','14','14']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-startslide=\"0\" data-textalign=\"['inherit','inherit','center','center']\" data-type=\"text\" data-voffset=\"['412','412','156','156']\" data-whitespace=\"['normal','normal','nowrap','nowrap']\" data-width=\"['146','146','262','262']\" data-x=\"['right','right','center','center']\" data-y=\"['bottom','bottom','bottom','bottom']\" id=\"slider-1-layer-29\" style=\"z-index: 30; min-width: 146px; max-width: 146px; white-space: normal; font-size: 12px; line-height: 16px; font-weight: 400; color: rgba(102, 102, 102, 1.00);font-family: 'latoregular';\">
                <strong>MON-FRI</strong>: 09:00-18:00 <strong>SAT-SUN</strong>: 10:00 - 14:00
            </div><a class=\"tp-caption hover2 tp-static-layer\" data-actions=\"\" data-endslide=\"4\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]\" data-height=\"27\" data-hoffset=\"['150','126','-6','-6']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-startslide=\"0\" data-textalign=\"['inherit','inherit','center','center']\" data-type=\"text\" data-voffset=\"['353','352','126','126']\" data-whitespace=\"nowrap\" data-width=\"['63','62','104','104']\" data-x=\"['right','right','center','center']\" data-y=\"['bottom','bottom','bottom','bottom']\" href=\"{{ path('sante_services') }}\" id=\"slider-1-layer-30\" style=\"z-index: 31; min-width: 63px; max-width: 63px; max-width: 27px; max-width: 27px; white-space: nowrap; font-size: 13px; line-height: 26px; font-weight: 700; color: rgba(51, 51, 51, 1.00);font-family: 'latoregular'; font-weight: 700; text-decoration: none;\" target=\"_self\">SERVICES</a> <a class=\"tp-caption hover3 tp-static-layer\" data-actions=\"\" data-endslide=\"4\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]\" data-height=\"27\" data-hoffset=\"['113','101','-4','-4']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-startslide=\"0\" data-textalign=\"['inherit','inherit','center','center']\" data-type=\"text\" data-voffset=\"['258','257','63','63']\" data-whitespace=\"nowrap\" data-width=\"['106','88','104','104']\" data-x=\"['right','right','center','center']\" data-y=\"['bottom','bottom','bottom','bottom']\" href=\"{{ path('sante_services') }}\" id=\"slider-1-layer-31\" style=\"z-index: 32; min-width: 106px; max-width: 106px; max-width: 27px; max-width: 27px; white-space: nowrap; font-size: 13px; line-height: 26px; font-weight: 700; color: rgba(51, 51, 51, 1.00);font-family: 'latoregular'; font-weight: 700; text-decoration: none;\" target=\"_self\">TEST RESULTS</a>
            <div class=\"tp-caption tp-static-layer\" data-endslide=\"4\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]\" data-height=\"['none','34','34','34']\" data-hoffset=\"['82','57','9','9']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-startslide=\"0\" data-textalign=\"['inherit','inherit','center','center']\" data-type=\"text\" data-voffset=\"['321','322','90','90']\" data-whitespace=\"['normal','normal','nowrap','nowrap']\" data-width=\"['131','131','262','262']\" data-x=\"['right','right','center','center']\" data-y=\"['bottom','bottom','bottom','bottom']\" id=\"slider-1-layer-32\" style=\"z-index: 33; min-width: 131px; max-width: 131px; white-space: normal; font-size: 13px; line-height: 16px; font-weight: 400; color: rgba(102, 102, 102, 1.00);font-family: 'latoregular';\">
                Check our list of services and prices.
            </div>
            <div class=\"tp-caption tp-static-layer\" data-endslide=\"4\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]\" data-height=\"['35','34','34','34']\" data-hoffset=\"['91','58','9','9']\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingtop=\"[0,0,0,0]\" data-responsive=\"off\" data-responsive_offset=\"off\" data-startslide=\"0\" data-textalign=\"['inherit','inherit','center','center']\" data-type=\"text\" data-voffset=\"['226','226','26','26']\" data-whitespace=\"['normal','normal','nowrap','nowrap']\" data-width=\"['124','131','262','262']\" data-x=\"['right','right','center','center']\" data-y=\"['bottom','bottom','bottom','bottom']\" id=\"slider-1-layer-33\" style=\"z-index: 34; min-width: 124px; max-width: 124px; max-width: 35px; max-width: 35px; white-space: normal; font-size: 13px; line-height: 16px; font-weight: 400; color: rgba(102, 102, 102, 1.00);font-family: 'latoregular';\">
                You can check your test results online.
            </div><!-- <div class=\"tp-caption   tp-svg-layer  arrow1 tp-static-layer\" id=\"slider-1-layer-34\" data-x=\"['right','right','center','center']\" data-hoffset=\"['56','43','162','162']\" data-y=\"['bottom','bottom','bottom','bottom']\" data-voffset=\"['432','432','181','181']\" data-width=\"24\" data-height=\"24\" data-whitespace=\"normal\" data-type=\"svg\" data-svg_src=\"{{ asset('images/ic_keyboard_arrow_right_24px.svg')}}\" data-svg_idle=\"sc:transparent;sw:0;sda:0;sdo:0;\" data-responsive_offset=\"off\" data-responsive=\"off\" data-startslide=\"0\" data-endslide=\"4\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]\" data-textalign=\"['inherit','inherit','inherit','inherit']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 35; min-width: 24px; max-width: 24px; color: rgb(70, 191, 0); font-family: &quot;Open Sans&quot;; visibility: inherit; transition: none; text-align: inherit; line-height: 22px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 13px; white-space: normal; min-height: 24px; max-height: 24px; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;\" src=\"images/ic_keyboard_arrow_right_24px.svg\"> <div class=\"tp-svg-innercontainer\"><svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" style=\"fill: rgb(70, 191, 0);\"><path d=\"M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z\" style=\"fill: rgb(70, 191, 0);\"></path></svg></div></div>

\t\t\t\t\t\t<div class=\"tp-caption   tp-svg-layer  arrow2 tp-static-layer\" id=\"slider-1-layer-35\" data-x=\"['right','right','center','center']\" data-hoffset=\"['56','43','162','162']\" data-y=\"['bottom','bottom','bottom','bottom']\" data-voffset=\"['347','347','111','111']\" data-width=\"24\" data-height=\"24\" data-whitespace=\"normal\" data-type=\"svg\" data-svg_src=\"images/ic_keyboard_arrow_right_24px.svg\" data-svg_idle=\"sc:transparent;sw:0;sda:0;sdo:0;\" data-responsive_offset=\"off\" data-responsive=\"off\" data-startslide=\"0\" data-endslide=\"4\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]\" data-textalign=\"['inherit','inherit','inherit','inherit']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 36; min-width: 24px; max-width: 24px; color: rgb(70, 191, 0); font-family: &quot;Open Sans&quot;; visibility: inherit; transition: none; text-align: inherit; line-height: 22px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 13px; white-space: normal; min-height: 24px; max-height: 24px; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;\" src=\"images/ic_keyboard_arrow_right_24px.svg\"> <div class=\"tp-svg-innercontainer\"><svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" style=\"fill: rgb(70, 191, 0);\"><path d=\"M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z\" style=\"fill: rgb(70, 191, 0);\"></path></svg></div></div>

\t\t\t\t\t\t<div class=\"tp-caption   tp-svg-layer  arrow3 tp-static-layer\" id=\"slider-1-layer-36\" data-x=\"['right','right','center','center']\" data-hoffset=\"['56','43','162','162']\" data-y=\"['bottom','bottom','bottom','bottom']\" data-voffset=\"['245','245','54','54']\" data-width=\"24\" data-height=\"24\" data-whitespace=\"normal\" data-type=\"svg\" data-svg_src=\"images/ic_keyboard_arrow_right_24px.svg\" data-svg_idle=\"sc:transparent;sw:0;sda:0;sdo:0;\" data-responsive_offset=\"off\" data-responsive=\"off\" data-startslide=\"0\" data-endslide=\"4\" data-frames=\"[{&quot;delay&quot;:0,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]\" data-textalign=\"['inherit','inherit','inherit','inherit']\" data-paddingtop=\"[0,0,0,0]\" data-paddingright=\"[0,0,0,0]\" data-paddingbottom=\"[0,0,0,0]\" data-paddingleft=\"[0,0,0,0]\" style=\"z-index: 37; min-width: 24px; max-width: 24px; color: rgb(70, 191, 0); font-family: &quot;Open Sans&quot;; visibility: inherit; transition: none; text-align: inherit; line-height: 22px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-weight: 400; font-size: 13px; white-space: normal; min-height: 24px; max-height: 24px; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transform-origin: 50% 50% 0px;\" src=\"images/ic_keyboard_arrow_right_24px.svg\"> <div class=\"tp-svg-innercontainer\"><svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" style=\"fill: rgb(70, 191, 0);\"><path d=\"M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z\" style=\"fill: rgb(70, 191, 0);\"></path></svg></div></div> -->
        </div>
    </div>
</div><!-- Slider End -->
<!-- Services-section Start -->
<div class=\"services-section\">
    <div class=\"container\">
        <div class=\"services-main-blocks\">
            <div class=\"services-box\">
                <div class=\"grid-box-inner\">
                    <a href=\"{{ path('sante_locate') }}\">
                        <div class=\"item-title\">
                            <div class=\"icon-wrp\"><img alt=\"\" class=\"img-responsive\" src=\"{{ asset('images/ambulatory.png')}}\"></div>
                            <div class=\"title-wrp\">
                                <h3>AMBULATORY</h3>
                            </div>
                        </div><!--/.item-title-->
                        <div class=\"description clearfix\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                        </div></a>
                </div><!--/.grid-box-inner-->
            </div><!--/.services-box-->
            <div class=\"services-box\">
                <div class=\"grid-box-inner\">
                    <a href=\"{{ path('sante_timetable') }}\">
                        <div class=\"item-title\">
                            <div class=\"icon-wrp\"><img alt=\"\" class=\"img-responsive\" src=\"{{ asset('images/vaccination.png')}}\"></div>
                            <div class=\"title-wrp\">
                                <h3>VACCINATION</h3>
                            </div>
                        </div><!--/.item-title-->
                        <div class=\"description clearfix\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                        </div></a>
                </div><!--/.grid-box-inner-->
            </div><!--/.services-box-->
            <div class=\"services-box\">
                <div class=\"grid-box-inner\">
                    <a href=\"{{ path('sante_timetable') }}\">
                        <div class=\"item-title\">
                            <div class=\"icon-wrp\"><img alt=\"\" class=\"img-responsive\" src=\"{{ asset('images/surgery.png')}}\"></div>
                            <div class=\"title-wrp\">
                                <h3>GENERAL<br>
                                    SURGERY</h3>
                            </div>
                        </div>
                        <div class=\"description clearfix\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                        </div></a>
                </div><!--/.grid-box-inner-->
            </div><!--/.services-box-->
            <div class=\"services-box\">
                <div class=\"grid-box-inner\">
                    <a href=\"{{ path('sante_doctors') }}\">
                        <div class=\"item-title\">
                            <div class=\"icon-wrp\"><img alt=\"\" class=\"img-responsive\" src=\"{{ asset('images/physician.png')}}\"></div>
                            <div class=\"title-wrp\">
                                <h3>PHYSICIANS</h3>
                            </div>
                        </div><!--/.item-title-->
                        <div class=\"description clearfix\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                        </div></a>
                </div><!--/.grid-box-inner-->
            </div><!--/.services-box-->
        </div><!--/.services-main-blocks-->
    </div><!--/.container-->
</div><!-- Services-section End -->
<!-- Who-We-Are Start -->
<div class=\"who-we-are\">
    <div class=\"container\">
        <div class=\"section-title clearfix\">
            <h3>WHO WE ARE</h3>
        </div>
        <div class=\"our-health-mission clearfix\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"health-block\">
                        <div class=\"image\">
                            <img alt=\"DOCTORS\" class=\"img-responsive\" src=\"{{ asset('images/doctors.jpg')}}\"> <a class=\"media-container__link media-container__link--btn media-container__link--style-circle\" data-lightbox=\"iframe\" data-target=\".video-modal\" data-toggle=\"modal\" href=\"{{ path('sante_doctors') }}\">
                                <div class=\"circleanim-svg\">
                                    <svg height=\"108\" width=\"108\" xmlns=\"http://www.w3.org/2000/svg\">
                                        <circle class=\"circleanim-svg__circle-back\" cx=\"54\" cy=\"54\" fill=\"#FFFFFF\" r=\"48\" stroke-opacity=\"0.1\" stroke-width=\"5\"></circle>
                                        <circle class=\"circleanim-svg__circle-front\" cx=\"54\" cy=\"54\" fill=\"#FFFFFF\" r=\"48\" stroke-width=\"5\" transform=\"rotate(50 54 54)\"></circle>
                                        <path d=\"M62.1556183,56.1947505 L52,62.859375 C50.6192881,63.7654672 49.5,63.1544098 49.5,61.491212 L49.5,46.508788 C49.5,44.8470803 50.6250889,44.2383396 52,45.140625 L62.1556183,51.8052495 C64.0026693,53.0173767 63.9947588,54.9878145 62.1556183,56.1947505 Z\" fill=\"#FFFFFF\"></path></svg>
                                </div></a>
                        </div><!--/.image-->
                    </div><!--/.health-block-->
                </div><!--/.col-sm-6 col-md-3-->
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"health-block\">
                        <h5>MedLife Care is the premier health care company focused on delivering the highest quality care</h5>
                        <p>to people with chronic conditions. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
                    </div>
                </div><!--/.col-sm-6 col-md-3-->
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"health-block\">
                        <!-- Accordion Start -->
                        <div class=\"panel-group\" id=\"accordion\">
                            <!-- Panel Block Start -->
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h4 class=\"panel-title\"><a class=\"accordion-toggle collapsed\" data-parent=\"#accordion\" data-toggle=\"collapse\" href=\"#collapseOne\">Why us ?</a></h4>
                                </div>
                                <div class=\"panel-collapse collapse\" id=\"collapseOne\">
                                    <div class=\"panel-body\">
                                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </div>
                                </div><!--/.panel-collapse-->
                            </div><!-- Panel Block End -->
                            <!-- Panel Block Start -->
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h4 class=\"panel-title\"><a class=\"accordion-toggle\" data-parent=\"#accordion\" data-toggle=\"collapse\" href=\"#collapseTwo\">20 Years of trusted care</a></h4>
                                </div>
                                <div class=\"panel-collapse collapse in\" id=\"collapseTwo\">
                                    <div class=\"panel-body\">
                                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </div>
                                </div><!--/.panel-collapse-->
                            </div><!-- Panel Block End -->
                            <!-- Panel Block Start -->
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h4 class=\"panel-title\"><a class=\"accordion-toggle collapsed\" data-parent=\"#accordion\" data-toggle=\"collapse\" href=\"#collapseThree\">Community</a></h4>
                                </div>
                                <div class=\"panel-collapse collapse\" id=\"collapseThree\">
                                    <div class=\"panel-body\">
                                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </div>
                                </div><!--/.panel-collapse-->
                            </div><!-- Panel Block End -->
                        </div><!-- Accordion End -->
                    </div><!--/.health-block-->
                </div><!--/.col-sm-6 col-md-3-->
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"health-block\">
                        <h5>Our mission extends beyond the clinic and into the communities that we serve.</h5>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div><!--/.col-sm-6 col-md-3-->
            </div><!--/.row-->
        </div><!--/.our-health-mission clearfix-->
    </div><!--/.container-->
</div><!-- Who-We-Are End -->
<!-- Emergency Service Start -->
<div class=\"emergency-services clearfix\">
    <div class=\"col-sm-12 col-md-12 col-lg-6 main-service-block padding\">
        <div class=\"emergency-image\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"{{ asset('images/laboratory.jpg')}}\"></div>
    </div>
    <div class=\"col-sm-12 col-md-12 col-lg-6 main-service-block padding\">
        <div class=\"emergency-detail clearfix\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-md-6\">
                    <div class=\"service-block\">
                        <div class=\"image-icon\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"{{ asset('images/emergency-icon1.png')}}\"></div>
                        <h6>ALLERGY / IMMUNOLOGY</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                    </div><!--/.service-block-->
                </div><!--/.col-sm-6 col-md-6-->
                <div class=\"col-sm-6 col-md-6\">
                    <div class=\"service-block\">
                        <div class=\"image-icon\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"{{ asset('images/emergency-icon2.png')}}\"></div>
                        <h6>ROUTINE CARE</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                    </div><!--/.service-block-->
                </div><!--/.col-sm-6 col-md-6-->
                <div class=\"col-sm-6 col-md-6\">
                    <div class=\"service-block\">
                        <div class=\"image-icon\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"{{ asset('images/emergency-icon3.png')}}\"></div>
                        <h6>EMERGENCY</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                    </div><!--/.service-block-->
                </div><!--/.col-sm-6 col-md-6-->
                <div class=\"col-sm-6 col-md-6\">
                    <div class=\"service-block\">
                        <div class=\"image-icon\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"{{ asset('images/emergency-icon4.png')}}\"></div>
                        <h6>FAMILY MEDICINE</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                    </div><!--/.service-block-->
                </div><!--/.col-sm-6 col-md-6-->
            </div><!--/.row-->
        </div><!--/.emergency-detail clearfix-->
    </div><!--/.col-sm-12 col-md-12 col-lg-6 main-service-block padding-->
    <div class=\"emergency-detail clearfix\">
        <!-- Emergency Detail Start -->
        <!-- <div class=\"container\">
                    <div class=\"row\">
                            <div class=\"col-sm-6 col-md-6 col-md-offset-6\">
                                    <div class=\"service-details clearfix\">
                                            <div class=\"row\">
                                                    <div class=\"col-sm-6 col-md-6\">
                                                            <div class=\"service-block\">
                                                                    <div class=\"image-icon\">

                                                                    </div>
                                                            </div>
                                                    </div>
                                            </div>
                                    </div>
                            </div>
                    </div>
            </div> -->
        <!-- Emergency Detail End -->
    </div><!--/.emergency-detail-->
</div><!-- Emergency Service End -->
<!-- Health Service Start -->
<div class=\"health-services clearfix\">
    <!-- <div class=\"parallax-window\" data-parallax=\"scroll\" data-image-src=\"images/pattern2_lq-1.png\"></div> -->
    <div class=\"parallax-main\">
        <div class=\"parallax-window\" data-image-src=\"{{ asset('images/parallex-img.jpg')}}\" data-parallax=\"scroll\"></div>
    </div><!-- Health Service Detail Start -->
    <div class=\"health-services-detail\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h5>SERVICES</h5>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12 col-md-6\">
                    <div class=\"health-block clearfix\">
                        <ul>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">ROUTINE MEDICAL CARE</a>
                            </li>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">ALERGY / IMMUNOLOGY</a>
                            </li>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">PHISIOTHERAPHY</a>
                            </li>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">ANESTHESIOLOGY</a>
                            </li>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">MINOR SURGERY</a>
                            </li>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">INTERNAL & FAMILY MEDICINE</a>
                            </li>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">NURSING SERVICES</a>
                            </li>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">ENDOCRINOLOGY</a>
                            </li>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">FLU VACCINATION</a>
                            </li>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">WEIGHT LOSS & WELLNESS</a>
                            </li>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">DIAGNOSTIC IMAGING</a>
                            </li>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">GASTROENTEROLOGY</a>
                            </li>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">UROLOGY</a>
                            </li>
                            <li class=\"col-sm-6 col-md-6\">
                                <a href=\"#\">PEDIATRICS</a>
                            </li>
                        </ul>
                    </div><!--/.health-block-->
                </div><!--/.col-sm-12 col-md-6-->
                <div class=\"col-sm-12 col-md-6\">
                    <div class=\"health-block\">
                        <h5>Most medical physicists work in the physics of radiation oncology making sure that the desired dose is given to the cancer.</h5>
                    </div>
                </div><!--/.col-sm-12 col-md-6-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!-- Health Service Detail End -->
</div><!-- Health Service End -->
<!-- Our Work Profile Start -->
<div class=\"our-work-profile clearfix\">
    <div class=\"container\">
        <!-- Section Title Start -->
        <div class=\"section-title clearfix\">
            <h3>WHO WE ARE</h3>
        </div><!-- Section Title End -->
        <!-- Work Profile Tabing Start -->
        <div class=\"work-profile-tabing clearfix\">
            <div class=\"col-sm-5 col-md-4 col-lg-3 padding\">
                <div class=\"left-side\">
                    <!-- Nav tabs -->
                    <ul class=\"nav nav-tabs\" role=\"tablist\">
                        <li class=\"active\">
                            <a data-toggle=\"tab\" href=\"#schedule\" role=\"tab\">Schedule Your Appointment <i aria-hidden=\"true\" class=\"fa fa-plus\"></i></a>
                        </li>
                        <li>
                            <a data-toggle=\"tab\" href=\"#medlife\" role=\"tab\">Why Medlife Care ? <i aria-hidden=\"true\" class=\"fa fa-eye\"></i></a>
                        </li>
                        <li>
                            <a data-toggle=\"tab\" href=\"#community\" role=\"tab\">Our Community <i aria-hidden=\"true\" class=\"fa fa-heart-o\"></i></a>
                        </li>
                        <li>
                            <a data-toggle=\"tab\" href=\"#trusted\" role=\"tab\">25 Years of trusted Care <i aria-hidden=\"true\" class=\"fa fa-clock-o\"></i></a>
                        </li>
                    </ul><!--/.nav nav-tabs-->
                </div><!--/.left-side-->
            </div><!--/.col-sm-5 col-md-4 col-lg-3 padding-->
            <div class=\"col-sm-7 col-md-8 col-lg-9 padding\">
                <div class=\"right-side\">
                    <!-- Tab panes -->
                    <div class=\"tab-content\">
                        <div class=\"tab-pane fade in active\" id=\"schedule\">
                            <h4>Schedule an online Appointment, if you do not see a time that is convenient for you, please call us at <a href=\"tel:888-808-6483\">888-808-6483</a>.</h4>
                            <p>Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam qua.</p>
                        </div><!--/.tab-pane-->
                        <div class=\"tab-pane fade\" id=\"medlife\">
                            <h4>Schedule an online Appointment, if you do not see a time that is convenient for you, please call us at <a href=\"tel:888-808-6483\">888-808-6483</a>.</h4>
                            <p>Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam qua.</p>
                        </div><!--/.tab-pane-->
                        <div class=\"tab-pane fade\" id=\"community\">
                            <h4>Schedule an online Appointment, if you do not see a time that is convenient for you, please call us at <a href=\"tel:888-808-6483\">888-808-6483</a>.</h4>
                            <p>Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam qua.</p>
                        </div><!--/.tab-pane-->
                        <div class=\"tab-pane fade\" id=\"trusted\">
                            <h4>Schedule an online Appointment, if you do not see a time that is convenient for you, please call us at <a href=\"tel:888-808-6483\">888-808-6483</a>.</h4>
                            <p>Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam qua.</p>
                        </div><!--/.tab-pane-->
                    </div><!--/.tab-content-->
                </div><!--/.right-side-->
            </div><!--/.col-sm-7 col-md-8 col-lg-9 padding-->
        </div><!-- Work Profile Tabing End -->
        <!-- Our Treatment Start -->
        <div class=\"our-treatment clearfix\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"treatment-block clearfix\">
                        <img alt=\"ICON\" class=\"img-responsive\" src=\"{{ asset('images/emergency-icon2.png')}}\">
                        <h5>Medical Treatment</h5>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div><!--/.treatment-block-->
                </div><!--/.col-sm-6 col-md-3-->
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"treatment-block clearfix\">
                        <img alt=\"ICON\" class=\"img-responsive\" src=\"{{ asset('images/emergency-icon3.png')}}\">
                        <h5>Emergency Help</h5>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div><!--/.treatment-block-->
                </div><!--/.col-sm-6 col-md-3-->
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"treatment-block clearfix\">
                        <img alt=\"ICON\" class=\"img-responsive\" src=\"{{ asset('images/emergency-icon1.png')}}\">
                        <h5>Medical professionals</h5>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div><!--/.treatment-block-->
                </div><!--/.col-sm-6 col-md-3-->
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"treatment-block clearfix\">
                        <img alt=\"ICON\" class=\"img-responsive\" src=\"{{ asset('images/emergency-icon4.png')}}\">
                        <h5>Qualified Doctors</h5>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                    </div><!--/.treatment-block-->
                </div><!--/.col-sm-6 col-md-3-->
            </div><!--/.row-->
        </div><!-- Our Treatment End -->
    </div><!--/.container-->
</div><!-- Our Work Profile End -->
<!-- Plastic Surgery Start -->
<div class=\"emergency-services plastic-surgery clearfix\">
    <div class=\"col-sm-12 col-md-12 col-lg-6 main-service-block padding\">
        <div class=\"emergency-detail clearfix\">
            <h5>PLASTIC SURGERY</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupi</p><a class=\"btn btn-default\" href=\"#\" role=\"button\">FIND MORE</a>
        </div>
    </div><!--/.col-sm-12 col-md-12-->
    <div class=\"col-sm-12 col-md-12 col-lg-6 main-service-block padding\">
        <div class=\"emergency-image\"><img alt=\"IMAGE\" class=\"img-responsive\" src=\"{{ asset('images/plastic-surgery.jpg')}}\"></div>
    </div>
</div><!-- Plastic Surgery End -->
<!-- Medical And Health News Start -->
<div class=\"medical-health-news clearfix\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-9 col-md-7 col-lg-6 col-centered\">
                <div class=\"section-title clearfix\">
                    <h4>Medical news and health news headlines posted throughout the day, every day.</h4>
                </div>
            </div><!--/.col-sm-9 col-md-7-->
        </div><!-- Media Health Block Start -->
        <div class=\"medical-health-blocks clearfix\">
            <div class=\"row\">
                <div class=\"col-sm-4 col-md-4\">
                    <a class=\"block\" href=\"{{ path('sante_services') }}\">
                        <div class=\"image\">
                            <img alt=\"IMAGE\" class=\"img-responsive\" src=\"{{ asset('images/media-health-img1.jpg')}}\">
                            <h6>PREVENTIVE CARE</h6>
                        </div><!--/.image-->
                    </a><!--/.block-->
                    <div class=\"block-desc\">
                        <h6>Preterm, low-birth-weight babies more likely for women with hearing loss</h6>
                    </div>
                </div><!--/.col-sm-4 col-md-4-->
                <div class=\"col-sm-4 col-md-4\">
                    <a class=\"block\" href=\"{{ path('sante_services') }}\">
                        <div class=\"image\">
                            <img alt=\"IMAGE\" class=\"img-responsive\" src=\"{{ asset('images/media-health-img2.jpg')}}\">
                            <h6>FLU SHOTS</h6>
                        </div><!--/.image-->
                    </a><!--/.block-->
                    <div class=\"block-desc\">
                        <h6>Nicotine has the potential to prevent brain aging, study suggests</h6>
                    </div>
                </div><!--/.col-sm-4 col-md-4-->
                <div class=\"col-sm-4 col-md-4\">
                    <a class=\"block\" href=\"{{ path('sante_services') }}\">
                        <div class=\"image\">
                            <img alt=\"IMAGE\" class=\"img-responsive\" src=\"{{ asset('images/media-health-img3.jpg')}}\">
                            <h6>LABORATORY TESTS</h6>
                        </div><!--/.image-->
                    </a><!--/.block-->
                    <div class=\"block-desc\">
                        <h6>Hormone changes during menstrual cycle alter problem-solving strategies</h6>
                    </div>
                </div><!--/.col-sm-4 col-md-4-->
            </div><!--/.row-->
        </div><!-- Media Health Block End -->
        <div class=\"find-more\">
            <a class=\"btn btn-default\" href=\"{{ path('sante_services') }}\" role=\"button\">Find More</a>
        </div>
    </div><!--/.container-->
</div><!-- Medical And Health News End -->
<!-- Map Address Location Start -->
<div class=\"map-address-location clearfix\">
    <div class=\"col-sm-6 col-md-6 padding\">
        <iframe allowfullscreen height=\"700\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.160587394378!2d-46.66110908447823!3d-23.56267528468227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59ce5d75421f%3A0x11e5bd1fb1c64146!2sHospital+Sepaco!5e0!3m2!1sen!2sin!4v1506315663192\" style=\"border:0\"></iframe>
    </div>
    <div class=\"col-sm-6 col-md-6 padding\">
        <div class=\"right-side clearfix\">
            <div class=\"col-sm-6 col-md-6 padding\">
                <a class=\"address-block\" href=\"#\">
                    <div class=\"block-detail\">
                        <h6>LOCATION</h6>
                        <p>17 N, CHARLES STREET</p>
                        <p>BALTMORE, MD21202</p>
                    </div><!--/.block-detail-->
                </a><!--/.address-block-->
            </div><!--/.col-sm-6 col-md-6-->
            <div class=\"col-sm-6 col-md-6 padding\">
                <a class=\"address-block\" href=\"#\">
                    <div class=\"block-detail\">
                        <h6>OUR HOURS</h6>
                        <p>MON-FRI: 09:00-18:00</p>
                        <p>SAT-SUN: 10:00 - 14:00</p>
                    </div><!--/.block-detail-->
                </a><!--/.address-block-->
            </div><!--/.col-sm-6 col-md-6-->
            <div class=\"col-sm-6 col-md-6 padding\">
                <a class=\"address-block\" href=\"#\">
                    <div class=\"block-detail\">
                        <h6>CONTACT US</h6>
                        <p>+4 01800 1234</p>
                        <p><span class=\"__cf_email__\" data-cfemail=\"732a3c2621363e323a3f33343e323a3f5d303c3e\">[email&#160;protected]</span></p>
                    </div><!--/.block-detail-->
                </a><!--/.address-block-->
            </div><!--/.col-sm-6 col-md-6-->
            <div class=\"col-sm-6 col-md-6 padding\">
                <a class=\"address-block\" href=\"#\">
                    <div class=\"block-detail\">
                        <h6>FOLLOW US</h6>
                        <p>FACEBOOK</p>
                        <p>INSTAGRAM</p>
                        <p>TWITTER</p>
                    </div><!--/.block-detail-->
                </a><!--/.address-block-->
            </div><!--/.col-sm-6 col-md-6-->
        </div><!--/.right-side-->
    </div><!--/.col-sm-6 col-md--->
</div><!-- Map Address Location End -->
{% endblock %}
", "SanteBundle:Default:index.html.twig", "C:\\wamp64\\www\\Sante\\src\\SanteBundle/Resources/views/Default/index.html.twig");
    }
}