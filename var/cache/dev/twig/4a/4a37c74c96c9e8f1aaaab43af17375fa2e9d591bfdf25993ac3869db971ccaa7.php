<?php

/* SanteBundle:Default:services.html.twig */
class __TwigTemplate_e2ab47640fe4839e9dcc5efc288981f06da9d29768e17bdd2c497bd867b6d205 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SanteBundle:Default:services.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a39826d150935ab8ea4a45e29b8f101de4a2289ea1cc2a0dab656499018519b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a39826d150935ab8ea4a45e29b8f101de4a2289ea1cc2a0dab656499018519b2->enter($__internal_a39826d150935ab8ea4a45e29b8f101de4a2289ea1cc2a0dab656499018519b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SanteBundle:Default:services.html.twig"));

        $__internal_922ddfe49a035d10911e8546b2c07e3d0f5623ee92ccb0a28109ca57ad9045c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_922ddfe49a035d10911e8546b2c07e3d0f5623ee92ccb0a28109ca57ad9045c7->enter($__internal_922ddfe49a035d10911e8546b2c07e3d0f5623ee92ccb0a28109ca57ad9045c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SanteBundle:Default:services.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a39826d150935ab8ea4a45e29b8f101de4a2289ea1cc2a0dab656499018519b2->leave($__internal_a39826d150935ab8ea4a45e29b8f101de4a2289ea1cc2a0dab656499018519b2_prof);

        
        $__internal_922ddfe49a035d10911e8546b2c07e3d0f5623ee92ccb0a28109ca57ad9045c7->leave($__internal_922ddfe49a035d10911e8546b2c07e3d0f5623ee92ccb0a28109ca57ad9045c7_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_73b236a64543c7b82c2ed8a84108114c11fb21bd225e5f4b44265be95f6a667e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73b236a64543c7b82c2ed8a84108114c11fb21bd225e5f4b44265be95f6a667e->enter($__internal_73b236a64543c7b82c2ed8a84108114c11fb21bd225e5f4b44265be95f6a667e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ab0fdc6d0c026883188d686b22b17afca0cf39828eba804078c9dc2b876c72e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0fdc6d0c026883188d686b22b17afca0cf39828eba804078c9dc2b876c72e1->enter($__internal_ab0fdc6d0c026883188d686b22b17afca0cf39828eba804078c9dc2b876c72e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "<meta charset=\"utf-8\">
<meta content=\"IE=edge\" http-equiv=\"X-UA-Compatible\">
<meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
<title>Service</title><!-- Favicon -->
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\" type=\"image/x-icon\"><!-- Font Awesome -->
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Bootstrap -->
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!--=== Add By Designer ===-->
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/fonts.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Yamm Megamenu -->
<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/yamm.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Animation -->
<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Animation -->
<!-- Flat Icon -->
<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/flaticon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Flat Icon -->
<!-- Jquery Ui Date Picker -->
<!-- Range Slider Start -->
<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-ui-slider-pips.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Range Slider End -->
<!-- Jquery Ui Date Picker -->
<!-- Boostrap Time Picker -->
<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery.timepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Boostrap Time Picker -->
<!-- Selectric Start -->
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/selectric.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"><!-- Selectric End -->
<!-- Multi Level Push Menu -->
<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/component.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.custom.js"), "html", null, true);
        echo "\">
</script><!-- Multi Level Push Menu -->
";
        
        $__internal_ab0fdc6d0c026883188d686b22b17afca0cf39828eba804078c9dc2b876c72e1->leave($__internal_ab0fdc6d0c026883188d686b22b17afca0cf39828eba804078c9dc2b876c72e1_prof);

        
        $__internal_73b236a64543c7b82c2ed8a84108114c11fb21bd225e5f4b44265be95f6a667e->leave($__internal_73b236a64543c7b82c2ed8a84108114c11fb21bd225e5f4b44265be95f6a667e_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cf4750714327c97322aed057b6d464a80922cc5b34dc845fd04ae526b9a292e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cf4750714327c97322aed057b6d464a80922cc5b34dc845fd04ae526b9a292e->enter($__internal_4cf4750714327c97322aed057b6d464a80922cc5b34dc845fd04ae526b9a292e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e9628952c542b94c0e16390dd611e060741260b0a6c013bc244f401f3b52c27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9628952c542b94c0e16390dd611e060741260b0a6c013bc244f401f3b52c27f->enter($__internal_e9628952c542b94c0e16390dd611e060741260b0a6c013bc244f401f3b52c27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "    <!-- Content Start -->
    <section class=\"content inner-pg service-pg clearfix\">
        <!-- Breadcrumb Start -->
        <div class=\"breadcrumb-title clearfix\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-6\">
                        <div class=\"breadcrumb-left\">
                            <ol class=\"breadcrumb\">
                                <li>
                                    <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sante_home");
        echo "\">HOME</a>
                                </li>
                                <li class=\"active\">SERVICES</li>
                            </ol><!--/.breadcrumb-->
                        </div><!--/.breadcrumb-left-->
                    </div><!--/.col-sm-6 col-md-6-->
                    <div class=\"col-sm-6 col-md-6\">
                        <div class=\"breadcrumb-right\">
                            <h5>Services</h5>
                        </div>
                    </div><!--/.col-sm-6 col-md-6-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!-- Breadcrumb End -->
        <div class=\"container\">
            <!-- Inner Pages Start -->
            <div class=\"inner-content clearfix\">
                <div class=\"row\">
                    <div class=\"col-sm-12 col-md-8 col-lg-9\">
                        <!-- Content Description Start -->
                        <div class=\"content-desc clearfix\">
                            <!-- Banner Start -->
                            <div class=\"banner clearfix\">
                                <img alt=\"BANNER\" class=\"img-responsive\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/medibg.jpg"), "html", null, true);
        echo "\">
                                <div class=\"banner-overlay\"></div><!-- Banner Detail Start -->
                                <div class=\"banner-desc clearfix\">
                                    <h4><span>Providing Total</span> Health Care Solution</h4><a class=\"btn btn-default\" href=\"#\" role=\"button\">Make an Appointment</a>
                                </div><!-- Banner Detail End -->
                            </div><!-- Banner End -->
                            <!-- Service Detail Block Start -->
                            <div class=\"service-detail-block white-bg clearfix\">
                                <h4>Surgery</h4>
                                <p>Phasellus velit risus, euismod a lacus et, mattis condimentum augue. Vivamus fermentum ex quis imperdiet sodales. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum massa vel enim feugiat gravida euismod a lacus et, mattis condimentum augue.</p>
                            </div><!-- Service Detail Block End -->
                            <!-- Human Body Parts Start -->
                            <div class=\"human-body-parts clearfix\">
                                <div class=\"row\">
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <div class=\"body-parts-block\">
                                            <div class=\"icon purple-txt\">
                                                <i class=\"flaticon-human-lungs\"></i>
                                            </div>
                                            <h6>Pulmonary</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div><!--/.body-parts-block-->
                                    </div><!--/.col-xs-6 col-sm-6 col-md-6 col-lg-4-->
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <div class=\"body-parts-block\">
                                            <div class=\"icon red-txt\">
                                                <i class=\"flaticon-human-heart\"></i>
                                            </div>
                                            <h6>Cardiology</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div><!--/.body-parts-block-->
                                    </div><!--/.col-xs-6 col-sm-6 col-md-6 col-lg-4-->
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <div class=\"body-parts-block\">
                                            <div class=\"icon red-txt\">
                                                <i class=\"flaticon-human-head\"></i>
                                            </div>
                                            <h6>Cosmetic Solutions</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div><!--/.body-parts-block-->
                                    </div><!--/.col-xs-6 col-sm-6 col-md-6 col-lg-4-->
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <div class=\"body-parts-block\">
                                            <div class=\"icon green-txt\">
                                                <i class=\"flaticon-eyeball-structure\"></i>
                                            </div>
                                            <h6>Eye</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div><!--/.body-parts-block-->
                                    </div><!--/.col-xs-6 col-sm-6 col-md-6 col-lg-4-->
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <div class=\"body-parts-block\">
                                            <div class=\"icon sky-txt\">
                                                <i class=\"flaticon-tooth-and-gums\"></i>
                                            </div>
                                            <h6>Dental care</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div><!--/.body-parts-block-->
                                    </div><!--/.col-xs-6 col-sm-6 col-md-6 col-lg-4-->
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <div class=\"body-parts-block\">
                                            <div class=\"icon orange-txt\">
                                                <i class=\"flaticon-human-ear\"></i>
                                            </div>
                                            <h6>Ear treatment</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div><!--/.body-parts-block-->
                                    </div><!--/.col-xs-6 col-sm-6 col-md-6 col-lg-4-->
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <div class=\"body-parts-block\">
                                            <div class=\"icon dark-green-txt\">
                                                <i class=\"flaticon-basophil\"></i>
                                            </div>
                                            <h6>Urology</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div><!--/.body-parts-block-->
                                    </div><!--/.col-xs-6 col-sm-6 col-md-6 col-lg-4-->
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <div class=\"body-parts-block\">
                                            <div class=\"icon maroon-txt\">
                                                <i class=\"flaticon-spine-bone\"></i>
                                            </div>
                                            <h6>X-ray</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div><!--/.body-parts-block-->
                                    </div><!--/.col-xs-6 col-sm-6 col-md-6 col-lg-4-->
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <div class=\"body-parts-block\">
                                            <div class=\"icon violet-txt\">
                                                <i class=\"flaticon-neuron\"></i>
                                            </div>
                                            <h6>Neurology</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div><!--/.body-parts-block-->
                                    </div><!--/.col-xs-6 col-sm-6 col-md-6 col-lg-4-->
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <div class=\"body-parts-block\">
                                            <div class=\"icon violet-txt\">
                                                <i class=\"flaticon-fertilization\"></i>
                                            </div>
                                            <h6>Fertility</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div><!--/.body-parts-block-->
                                    </div><!--/.col-xs-6 col-sm-6 col-md-6 col-lg-4-->
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <div class=\"body-parts-block\">
                                            <div class=\"icon violet-txt\">
                                                <i class=\"flaticon-small-intestine\"></i>
                                            </div>
                                            <h6>Gastroenterology</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div><!--/.body-parts-block-->
                                    </div><!--/.col-xs-6 col-sm-6 col-md-6 col-lg-4-->
                                </div><!--/.row-->
                            </div><!-- Human Body Parts End -->
                            <!-- Appointment Form Start -->
                            <div class=\"appointment-form white-bg clearfix\">
                                <h6>Make an Appointment</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <div class=\"row\">
                                    <form action=\"https://demos.hogash.com/medlife-html/contactForm.php\" class=\"md__contactForm\" method=\"post\">
                                        <div class=\"col-sm-6 col-md-6 select-box\">
                                            <div class=\"form-group\">
                                                <label for=\"exampleInputtext1\">Select Clinic</label> <select class=\"form-control md__input\" name=\"clinic\">
                                                    <option>
                                                        Medlife Annapolis
                                                    </option>
                                                    <option>
                                                        Medlife Germantown
                                                    </option>
                                                    <option>
                                                        Medlife Columbia
                                                    </option>
                                                    <option>
                                                        Medlife Olney
                                                    </option>
                                                    <option>
                                                        Medlife Pasadena
                                                    </option>
                                                    <option>
                                                        Medlife Pikesville
                                                    </option>
                                                    <option>
                                                        Medlife Waldorf
                                                    </option>
                                                </select>
                                            </div><!--/.form-group-->
                                        </div><!--/.col-sm-6 col-md-6 select-box-->
                                        <div class=\"col-sm-6 col-md-6 select-box\">
                                            <div class=\"form-group\">
                                                <label>Service</label> <select class=\"form-control md__input\" name=\"service\">
                                                    <option>
                                                        General &amp; Preventive Care
                                                    </option>
                                                    <option>
                                                        Cosmetic Solutions
                                                    </option>
                                                    <option>
                                                        Restorative Solutions
                                                    </option>
                                                    <option>
                                                        Additional Treatments
                                                    </option>
                                                    <option>
                                                        Orthodontics
                                                    </option>
                                                    <option>
                                                        Dentures &amp; Denture Repair
                                                    </option>
                                                    <option>
                                                        Diagnostic &amp; Preventive
                                                    </option>
                                                    <option>
                                                        Diagnostic &amp; Preventive
                                                    </option>
                                                    <option>
                                                        Pediatric Dentistry
                                                    </option>
                                                </select>
                                            </div><!--/.form-group-->
                                        </div><!--/.col-sm-6 col-md-6 select-box-->
                                        <div class=\"col-sm-6 col-md-6\">
                                            <div class=\"form-group\">
                                                <label>Name</label> <input class=\" md__input form-control\" id=\"exampleInputtext3\" name=\"name\" type=\"text\">
                                            </div>
                                        </div><!--/.col-sm-6 col-md-6-->
                                        <div class=\"col-sm-6 col-md-6\">
                                            <div class=\"form-group\">
                                                <label for=\"exampleInputtext4\">Phone</label> <input class=\" md__input form-control\" id=\"exampleInputtext4\" name=\"phone\" type=\"text\">
                                            </div>
                                        </div><!--/.col-sm-6 col-md-6-->
                                        <div class=\"col-sm-6 col-md-6\">
                                            <div class=\"form-group\">
                                                <label for=\"exampleInputEmail1\">Email</label> <input class=\" md__input form-control\" id=\"exampleInputEmail1\" name=\"email\" type=\"email\">
                                            </div>
                                        </div><!--/.col-sm-6 col-md-6-->
                                        <div class=\"col-sm-6 col-md-6\">
                                            <div class=\"form-group date\">
                                                <label class=\"date\">Date</label> <input class=\" md__input form-control\" id=\"datepicker\" name=\"date\" type=\"text\">
                                            </div>
                                            <div class=\"form-group time\">
                                                <label class=\"time\">Pick Time</label> <input class=\" md__input form-control\" id=\"time\" name=\"time\" type=\"text\">
                                            </div>
                                        </div><!--/.col-sm-6 col-md-6-->
                                        <div class=\"col-sm-12\">
                                            <div class=\"js-cf-message\"></div><input name=\"cf_type\" type=\"hidden\" value=\"cf_1\"> <input class=\"md__redirect-to\" type=\"hidden\" value=\"http://localhost/medlife-india/app\">
                                        </div><!--/.col-sm-12-->
                                        <button class=\"btn btn-default appointment-button md__submitBtn\" type=\"submit\">Make an Appointment</button>
                                    </form>
                                </div><!--/.row-->
                            </div><!-- Appointment Form End -->
                        </div><!-- Content Description End -->
                    </div><!--/.col-sm-12 col-md-8 col-lg-9-->
                    <div class=\"col-sm-12 col-md-4 col-lg-3\">
                        <!-- Sidebar Widget Start -->
                        <div class=\"sidebar-widget clearfix\">
                            <!-- Widget Block Start -->
                            <div class=\"widget-block\">
                                <!-- Medlife Service Start -->
                                <div class=\"medlife-service blue-bg\">
                                    <!-- Widget Title Start -->
                                    <div class=\"widget-title clearfix\">
                                        <h6>Medlife Services</h6>
                                    </div><!-- Widget Title End -->
                                    <ul>
                                        <li>
                                            <a href=\"general-service.html\">General and Preventive Care</a>
                                        </li>
                                        <li>
                                            <a href=\"cosmetic-solutions-service.html\">Cosmetic Solutions</a>
                                        </li>
                                        <li>
                                            <a href=\"restorative-service.html\">Restorative Solutions</a>
                                        </li>
                                        <li>
                                            <a href=\"additional-service.html\">Additional Treatments</a>
                                        </li>
                                        <li>
                                            <a href=\"orthodontics-service.html\">Orthodontics</a>
                                        </li>
                                        <li>
                                            <a href=\"dentures-service.html\">Dentures & Denture Repair</a>
                                        </li>
                                        <li>
                                            <a href=\"diagnostic-service.html\">Diagnostic & Preventive</a>
                                        </li>
                                        <li>
                                            <a href=\"pediatric-service.html\">Pediatric Dentistry</a>
                                        </li>
                                    </ul>
                                </div><!-- Medlife Service End -->
                                <!-- Opening Hover Start -->
                                <div class=\"opening-hours light-green-bg\">
                                    <!-- Widget Title Start -->
                                    <div class=\"widget-title clearfix\">
                                        <h6>Opening Hours</h6>
                                    </div><!-- Widget Title End -->
                                    <table class=\"table\">
                                        <tbody>
                                        <tr>
                                            <td>Monday - Friday:</td>
                                            <td>8.30 - 18.30</td>
                                        </tr>
                                        <tr>
                                            <td>Saturday:</td>
                                            <td>10.30 - 16.30</td>
                                        </tr>
                                        <tr>
                                            <td>Sunday:</td>
                                            <td>10.30 - 16:30</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div><!-- Opening Hover End -->
                            </div><!-- Widget Block End -->
                            <!-- Widget Block Start -->
                            <div class=\"widget-block\">
                                <!-- News Letter Start -->
                                <div class=\"news-letter gray-bg\">
                                    <!-- Widget Title Start -->
                                    <div class=\"widget-title clearfix\">
                                        <h6>News Letters</h6>
                                    </div><!-- Widget Title End -->
                                    <form action=\"http://your_username.dataserver.list-manage.com/subscribe/post?u=YOUR_API_KEY&amp;id=LIST_ID\" class=\"md__newsletter-form\" id=\"mc-embedded-subscribe-form\" method=\"post\" name=\"mc-embedded-subscribe-form\" novalidate=\"\" target=\"_blank\">
                                        <div>
                                            <input class=\"email form-control\" name=\"EMAIL\" placeholder=\"Email address\" required=\"\" type=\"email\" value=\"\">
                                            <div aria-hidden=\"true\" style=\"position: absolute; left: -5000px;\">
                                                <input name=\"b_78185f3823fef6dc6a261e0df_2ebd195299\" tabindex=\"-1\" type=\"text\" value=\"\">
                                            </div><button class=\"btn btn-default\" id=\"mc-embedded-subscribe1\" name=\"SEND\" type=\"submit\">Subscribe</button>
                                        </div>
                                        <div class=\"md__newsletter-message\"></div>
                                    </form>
                                </div><!-- News Letter End -->
                            </div><!-- Widget Block End -->
                            <!-- Widget Block Start -->
                            <div class=\"widget-block\">
                                <!-- Recent News Start -->
                                <div class=\"recent-news white-bg\">
                                    <!-- Widget Title Start -->
                                    <div class=\"widget-title clearfix\">
                                        <h6>Recent Newss</h6>
                                    </div><!-- Widget Title End -->
                                    <a href=\"#\">VIEW ALL</a>
                                    <div class=\"recent-block\">
                                        <a href=\"#\">Ultrasmall nanoparticles kill cancer cells in unusual way</a>
                                        <p><i aria-hidden=\"true\" class=\"fa fa-clock-o\"></i> September 30, 2016</p>
                                    </div>
                                    <div class=\"recent-block\">
                                        <a href=\"#\">Eye lens regeneration from own stem cells</a>
                                        <p><i aria-hidden=\"true\" class=\"fa fa-clock-o\"></i> September 30, 2016</p>
                                    </div>
                                </div><!-- Recent News End -->
                            </div><!-- Widget Block End -->
                        </div><!-- Sidebar Widget End -->
                    </div><!--/.col-sm-12 col-md-4 col-lg-3-->
                </div><!--/.row-->
            </div><!-- Inner Pages End -->
        </div><!--/.container-->
    </section><!-- Content End -->
";
        
        $__internal_e9628952c542b94c0e16390dd611e060741260b0a6c013bc244f401f3b52c27f->leave($__internal_e9628952c542b94c0e16390dd611e060741260b0a6c013bc244f401f3b52c27f_prof);

        
        $__internal_4cf4750714327c97322aed057b6d464a80922cc5b34dc845fd04ae526b9a292e->leave($__internal_4cf4750714327c97322aed057b6d464a80922cc5b34dc845fd04ae526b9a292e_prof);

    }

    public function getTemplateName()
    {
        return "SanteBundle:Default:services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 65,  153 => 42,  141 => 32,  132 => 31,  119 => 28,  115 => 27,  111 => 26,  106 => 24,  101 => 22,  95 => 19,  91 => 18,  85 => 15,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  50 => 3,  41 => 2,  11 => 1,);
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
{% block head %}
<meta charset=\"utf-8\">
<meta content=\"IE=edge\" http-equiv=\"X-UA-Compatible\">
<meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
<title>Service</title><!-- Favicon -->
<link href=\"{{ asset('images/favicon.ico')}}\" rel=\"icon\" type=\"image/x-icon\"><!-- Font Awesome -->
<link href=\"{{ asset('fonts/font-awesome.min.css')}}\" rel=\"stylesheet\"><!-- Bootstrap -->
<link href=\"{{ asset('css/bootstrap.css')}}\" rel=\"stylesheet\"><!--=== Add By Designer ===-->
<link href=\"{{ asset('css/style.css')}}\" rel=\"stylesheet\">
<link href=\"{{ asset('fonts/fonts.css')}}\" rel=\"stylesheet\"><!-- Yamm Megamenu -->
<link href=\"{{ asset('css/yamm.css')}}\" rel=\"stylesheet\"><!-- Animation -->
<link href=\"{{ asset('css/animate.css')}}\" rel=\"stylesheet\"><!-- Animation -->
<!-- Flat Icon -->
<link href=\"{{ asset('fonts/flaticon.css')}}\" rel=\"stylesheet\"><!-- Flat Icon -->
<!-- Jquery Ui Date Picker -->
<!-- Range Slider Start -->
<link href=\"{{ asset('css/jquery-ui.css')}}\" rel=\"stylesheet\">
<link href=\"{{ asset('css/jquery-ui-slider-pips.css')}}\" rel=\"stylesheet\"><!-- Range Slider End -->
<!-- Jquery Ui Date Picker -->
<!-- Boostrap Time Picker -->
<link href=\"{{ asset('css/jquery.timepicker.css')}}\" rel=\"stylesheet\"><!-- Boostrap Time Picker -->
<!-- Selectric Start -->
<link href=\"{{ asset('css/selectric.css')}}\" rel=\"stylesheet\"><!-- Selectric End -->
<!-- Multi Level Push Menu -->
<link href=\"{{ asset('css/normalize.css')}}\" rel=\"stylesheet\">
<link href=\"{{ asset('css/component.css')}}\" rel=\"stylesheet\">
<script src=\"{{ asset('js/modernizr.custom.js')}}\">
</script><!-- Multi Level Push Menu -->
{% endblock %}
{% block body %}
    <!-- Content Start -->
    <section class=\"content inner-pg service-pg clearfix\">
        <!-- Breadcrumb Start -->
        <div class=\"breadcrumb-title clearfix\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-6\">
                        <div class=\"breadcrumb-left\">
                            <ol class=\"breadcrumb\">
                                <li>
                                    <a href=\"{{ path('sante_home') }}\">HOME</a>
                                </li>
                                <li class=\"active\">SERVICES</li>
                            </ol><!--/.breadcrumb-->
                        </div><!--/.breadcrumb-left-->
                    </div><!--/.col-sm-6 col-md-6-->
                    <div class=\"col-sm-6 col-md-6\">
                        <div class=\"breadcrumb-right\">
                            <h5>Services</h5>
                        </div>
                    </div><!--/.col-sm-6 col-md-6-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!-- Breadcrumb End -->
        <div class=\"container\">
            <!-- Inner Pages Start -->
            <div class=\"inner-content clearfix\">
                <div class=\"row\">
                    <div class=\"col-sm-12 col-md-8 col-lg-9\">
                        <!-- Content Description Start -->
                        <div class=\"content-desc clearfix\">
                            <!-- Banner Start -->
                            <div class=\"banner clearfix\">
                                <img alt=\"BANNER\" class=\"img-responsive\" src=\"{{ asset('images/medibg.jpg')}}\">
                                <div class=\"banner-overlay\"></div><!-- Banner Detail Start -->
                                <div class=\"banner-desc clearfix\">
                                    <h4><span>Providing Total</span> Health Care Solution</h4><a class=\"btn btn-default\" href=\"#\" role=\"button\">Make an Appointment</a>
                                </div><!-- Banner Detail End -->
                            </div><!-- Banner End -->
                            <!-- Service Detail Block Start -->
                            <div class=\"service-detail-block white-bg clearfix\">
                                <h4>Surgery</h4>
                                <p>Phasellus velit risus, euismod a lacus et, mattis condimentum augue. Vivamus fermentum ex quis imperdiet sodales. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum massa vel enim feugiat gravida euismod a lacus et, mattis condimentum augue.</p>
                            </div><!-- Service Detail Block End -->
                            <!-- Human Body Parts Start -->
                            <div class=\"human-body-parts clearfix\">
                                <div class=\"row\">
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <div class=\"body-parts-block\">
                                            <div class=\"icon purple-txt\">
                                                <i class=\"flaticon-human-lungs\"></i>
                                            </div>
                                            <h6>Pulmonary</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div><!--/.body-parts-block-->
                                    </div><!--/.col-xs-6 col-sm-6 col-md-6 col-lg-4-->
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <div class=\"body-parts-block\">
                                            <div class=\"icon red-txt\">
                                                <i class=\"flaticon-human-heart\"></i>
                                            </div>
                                            <h6>Cardiology</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div><!--/.body-parts-block-->
                                    </div><!--/.col-xs-6 col-sm-6 col-md-6 col-lg-4-->
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <div class=\"body-parts-block\">
                                            <div class=\"icon red-txt\">
                                                <i class=\"flaticon-human-head\"></i>
                                            </div>
                                            <h6>Cosmetic Solutions</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div><!--/.body-parts-block-->
                                    </div><!--/.col-xs-6 col-sm-6 col-md-6 col-lg-4-->
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <div class=\"body-parts-block\">
                                            <div class=\"icon green-txt\">
                                                <i class=\"flaticon-eyeball-structure\"></i>
                                            </div>
                                            <h6>Eye</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div><!--/.body-parts-block-->
                                    </div><!--/.col-xs-6 col-sm-6 col-md-6 col-lg-4-->
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <div class=\"body-parts-block\">
                                            <div class=\"icon sky-txt\">
                                                <i class=\"flaticon-tooth-and-gums\"></i>
                                            </div>
                                            <h6>Dental care</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div><!--/.body-parts-block-->
                                    </div><!--/.col-xs-6 col-sm-6 col-md-6 col-lg-4-->
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <div class=\"body-parts-block\">
                                            <div class=\"icon orange-txt\">
                                                <i class=\"flaticon-human-ear\"></i>
                                            </div>
                                            <h6>Ear treatment</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div><!--/.body-parts-block-->
                                    </div><!--/.col-xs-6 col-sm-6 col-md-6 col-lg-4-->
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <div class=\"body-parts-block\">
                                            <div class=\"icon dark-green-txt\">
                                                <i class=\"flaticon-basophil\"></i>
                                            </div>
                                            <h6>Urology</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div><!--/.body-parts-block-->
                                    </div><!--/.col-xs-6 col-sm-6 col-md-6 col-lg-4-->
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <div class=\"body-parts-block\">
                                            <div class=\"icon maroon-txt\">
                                                <i class=\"flaticon-spine-bone\"></i>
                                            </div>
                                            <h6>X-ray</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div><!--/.body-parts-block-->
                                    </div><!--/.col-xs-6 col-sm-6 col-md-6 col-lg-4-->
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <div class=\"body-parts-block\">
                                            <div class=\"icon violet-txt\">
                                                <i class=\"flaticon-neuron\"></i>
                                            </div>
                                            <h6>Neurology</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div><!--/.body-parts-block-->
                                    </div><!--/.col-xs-6 col-sm-6 col-md-6 col-lg-4-->
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <div class=\"body-parts-block\">
                                            <div class=\"icon violet-txt\">
                                                <i class=\"flaticon-fertilization\"></i>
                                            </div>
                                            <h6>Fertility</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div><!--/.body-parts-block-->
                                    </div><!--/.col-xs-6 col-sm-6 col-md-6 col-lg-4-->
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <div class=\"body-parts-block\">
                                            <div class=\"icon violet-txt\">
                                                <i class=\"flaticon-small-intestine\"></i>
                                            </div>
                                            <h6>Gastroenterology</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div><!--/.body-parts-block-->
                                    </div><!--/.col-xs-6 col-sm-6 col-md-6 col-lg-4-->
                                </div><!--/.row-->
                            </div><!-- Human Body Parts End -->
                            <!-- Appointment Form Start -->
                            <div class=\"appointment-form white-bg clearfix\">
                                <h6>Make an Appointment</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <div class=\"row\">
                                    <form action=\"https://demos.hogash.com/medlife-html/contactForm.php\" class=\"md__contactForm\" method=\"post\">
                                        <div class=\"col-sm-6 col-md-6 select-box\">
                                            <div class=\"form-group\">
                                                <label for=\"exampleInputtext1\">Select Clinic</label> <select class=\"form-control md__input\" name=\"clinic\">
                                                    <option>
                                                        Medlife Annapolis
                                                    </option>
                                                    <option>
                                                        Medlife Germantown
                                                    </option>
                                                    <option>
                                                        Medlife Columbia
                                                    </option>
                                                    <option>
                                                        Medlife Olney
                                                    </option>
                                                    <option>
                                                        Medlife Pasadena
                                                    </option>
                                                    <option>
                                                        Medlife Pikesville
                                                    </option>
                                                    <option>
                                                        Medlife Waldorf
                                                    </option>
                                                </select>
                                            </div><!--/.form-group-->
                                        </div><!--/.col-sm-6 col-md-6 select-box-->
                                        <div class=\"col-sm-6 col-md-6 select-box\">
                                            <div class=\"form-group\">
                                                <label>Service</label> <select class=\"form-control md__input\" name=\"service\">
                                                    <option>
                                                        General &amp; Preventive Care
                                                    </option>
                                                    <option>
                                                        Cosmetic Solutions
                                                    </option>
                                                    <option>
                                                        Restorative Solutions
                                                    </option>
                                                    <option>
                                                        Additional Treatments
                                                    </option>
                                                    <option>
                                                        Orthodontics
                                                    </option>
                                                    <option>
                                                        Dentures &amp; Denture Repair
                                                    </option>
                                                    <option>
                                                        Diagnostic &amp; Preventive
                                                    </option>
                                                    <option>
                                                        Diagnostic &amp; Preventive
                                                    </option>
                                                    <option>
                                                        Pediatric Dentistry
                                                    </option>
                                                </select>
                                            </div><!--/.form-group-->
                                        </div><!--/.col-sm-6 col-md-6 select-box-->
                                        <div class=\"col-sm-6 col-md-6\">
                                            <div class=\"form-group\">
                                                <label>Name</label> <input class=\" md__input form-control\" id=\"exampleInputtext3\" name=\"name\" type=\"text\">
                                            </div>
                                        </div><!--/.col-sm-6 col-md-6-->
                                        <div class=\"col-sm-6 col-md-6\">
                                            <div class=\"form-group\">
                                                <label for=\"exampleInputtext4\">Phone</label> <input class=\" md__input form-control\" id=\"exampleInputtext4\" name=\"phone\" type=\"text\">
                                            </div>
                                        </div><!--/.col-sm-6 col-md-6-->
                                        <div class=\"col-sm-6 col-md-6\">
                                            <div class=\"form-group\">
                                                <label for=\"exampleInputEmail1\">Email</label> <input class=\" md__input form-control\" id=\"exampleInputEmail1\" name=\"email\" type=\"email\">
                                            </div>
                                        </div><!--/.col-sm-6 col-md-6-->
                                        <div class=\"col-sm-6 col-md-6\">
                                            <div class=\"form-group date\">
                                                <label class=\"date\">Date</label> <input class=\" md__input form-control\" id=\"datepicker\" name=\"date\" type=\"text\">
                                            </div>
                                            <div class=\"form-group time\">
                                                <label class=\"time\">Pick Time</label> <input class=\" md__input form-control\" id=\"time\" name=\"time\" type=\"text\">
                                            </div>
                                        </div><!--/.col-sm-6 col-md-6-->
                                        <div class=\"col-sm-12\">
                                            <div class=\"js-cf-message\"></div><input name=\"cf_type\" type=\"hidden\" value=\"cf_1\"> <input class=\"md__redirect-to\" type=\"hidden\" value=\"http://localhost/medlife-india/app\">
                                        </div><!--/.col-sm-12-->
                                        <button class=\"btn btn-default appointment-button md__submitBtn\" type=\"submit\">Make an Appointment</button>
                                    </form>
                                </div><!--/.row-->
                            </div><!-- Appointment Form End -->
                        </div><!-- Content Description End -->
                    </div><!--/.col-sm-12 col-md-8 col-lg-9-->
                    <div class=\"col-sm-12 col-md-4 col-lg-3\">
                        <!-- Sidebar Widget Start -->
                        <div class=\"sidebar-widget clearfix\">
                            <!-- Widget Block Start -->
                            <div class=\"widget-block\">
                                <!-- Medlife Service Start -->
                                <div class=\"medlife-service blue-bg\">
                                    <!-- Widget Title Start -->
                                    <div class=\"widget-title clearfix\">
                                        <h6>Medlife Services</h6>
                                    </div><!-- Widget Title End -->
                                    <ul>
                                        <li>
                                            <a href=\"general-service.html\">General and Preventive Care</a>
                                        </li>
                                        <li>
                                            <a href=\"cosmetic-solutions-service.html\">Cosmetic Solutions</a>
                                        </li>
                                        <li>
                                            <a href=\"restorative-service.html\">Restorative Solutions</a>
                                        </li>
                                        <li>
                                            <a href=\"additional-service.html\">Additional Treatments</a>
                                        </li>
                                        <li>
                                            <a href=\"orthodontics-service.html\">Orthodontics</a>
                                        </li>
                                        <li>
                                            <a href=\"dentures-service.html\">Dentures & Denture Repair</a>
                                        </li>
                                        <li>
                                            <a href=\"diagnostic-service.html\">Diagnostic & Preventive</a>
                                        </li>
                                        <li>
                                            <a href=\"pediatric-service.html\">Pediatric Dentistry</a>
                                        </li>
                                    </ul>
                                </div><!-- Medlife Service End -->
                                <!-- Opening Hover Start -->
                                <div class=\"opening-hours light-green-bg\">
                                    <!-- Widget Title Start -->
                                    <div class=\"widget-title clearfix\">
                                        <h6>Opening Hours</h6>
                                    </div><!-- Widget Title End -->
                                    <table class=\"table\">
                                        <tbody>
                                        <tr>
                                            <td>Monday - Friday:</td>
                                            <td>8.30 - 18.30</td>
                                        </tr>
                                        <tr>
                                            <td>Saturday:</td>
                                            <td>10.30 - 16.30</td>
                                        </tr>
                                        <tr>
                                            <td>Sunday:</td>
                                            <td>10.30 - 16:30</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div><!-- Opening Hover End -->
                            </div><!-- Widget Block End -->
                            <!-- Widget Block Start -->
                            <div class=\"widget-block\">
                                <!-- News Letter Start -->
                                <div class=\"news-letter gray-bg\">
                                    <!-- Widget Title Start -->
                                    <div class=\"widget-title clearfix\">
                                        <h6>News Letters</h6>
                                    </div><!-- Widget Title End -->
                                    <form action=\"http://your_username.dataserver.list-manage.com/subscribe/post?u=YOUR_API_KEY&amp;id=LIST_ID\" class=\"md__newsletter-form\" id=\"mc-embedded-subscribe-form\" method=\"post\" name=\"mc-embedded-subscribe-form\" novalidate=\"\" target=\"_blank\">
                                        <div>
                                            <input class=\"email form-control\" name=\"EMAIL\" placeholder=\"Email address\" required=\"\" type=\"email\" value=\"\">
                                            <div aria-hidden=\"true\" style=\"position: absolute; left: -5000px;\">
                                                <input name=\"b_78185f3823fef6dc6a261e0df_2ebd195299\" tabindex=\"-1\" type=\"text\" value=\"\">
                                            </div><button class=\"btn btn-default\" id=\"mc-embedded-subscribe1\" name=\"SEND\" type=\"submit\">Subscribe</button>
                                        </div>
                                        <div class=\"md__newsletter-message\"></div>
                                    </form>
                                </div><!-- News Letter End -->
                            </div><!-- Widget Block End -->
                            <!-- Widget Block Start -->
                            <div class=\"widget-block\">
                                <!-- Recent News Start -->
                                <div class=\"recent-news white-bg\">
                                    <!-- Widget Title Start -->
                                    <div class=\"widget-title clearfix\">
                                        <h6>Recent Newss</h6>
                                    </div><!-- Widget Title End -->
                                    <a href=\"#\">VIEW ALL</a>
                                    <div class=\"recent-block\">
                                        <a href=\"#\">Ultrasmall nanoparticles kill cancer cells in unusual way</a>
                                        <p><i aria-hidden=\"true\" class=\"fa fa-clock-o\"></i> September 30, 2016</p>
                                    </div>
                                    <div class=\"recent-block\">
                                        <a href=\"#\">Eye lens regeneration from own stem cells</a>
                                        <p><i aria-hidden=\"true\" class=\"fa fa-clock-o\"></i> September 30, 2016</p>
                                    </div>
                                </div><!-- Recent News End -->
                            </div><!-- Widget Block End -->
                        </div><!-- Sidebar Widget End -->
                    </div><!--/.col-sm-12 col-md-4 col-lg-3-->
                </div><!--/.row-->
            </div><!-- Inner Pages End -->
        </div><!--/.container-->
    </section><!-- Content End -->
{% endblock %}
", "SanteBundle:Default:services.html.twig", "C:\\wamp64\\www\\Sante\\src\\SanteBundle/Resources/views/Default/services.html.twig");
    }
}
