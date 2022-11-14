<?php include 'header.php';
include '../dbcon.php';
?>
<style>
.services-section-three {
    position: relative;
    padding: 29px 0 0px;
}
</style>
<div id="home">
    <nav id="navbar-float" class="floating-menu">
        <div class="main-menu">
            <div class="vertical-bar">
                <div class="animated-bar"></div>
            </div>
            <div class="ripple">
                <a href="#about-raichand" class="active">
                    <span>
                        About Us
                    </span>
                </a>
            </div>
            <div class="ripple">
                <a href="#services" class="">
                    <span>
                        Services
                    </span>
                </a>
            </div>
             <div class="ripple">
                <a href="#coreteam" class="">
                    <span>
                        Core Team
                    </span>
                </a>
            </div>
            <div class="ripple">
                <a href="#whyus" class="">
                    <span>
                        Why Us?
                    </span>
                </a>
            </div>
            <div class="ripple">
                <a href="#contact" class="">
                    <span>
                        Contact Us
                    </span>
                </a>
            </div>
        </div>
    </nav>
</div>
<div>
    <section class="page-title" style="background-image: url(../assets/images/breadcrum/management.png);">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Raichand Management</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?php echo SITE_URL;?>l">Home</a></li>
                        <li><a href="<?php echo SITE_URL;?>business.php">Our Businesses</a></li>
                        <li>Raichand Management</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="about-section bg-gray" id="about-raichand">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sec-title">
                        <h2>About Us</h2>
                        <div class="text-decoration">
                            <span class="left"></span>
                            <span class="right"></span>
                        </div>
                        <div class="text">
                            We specialise in creating brand value and implementing practical
                            strategies that achieve real and sustainable results. Our domain area
                            expertise is in Customer Experience, Strategy, Business Transformation,
                            and Operational Excellence. Our specialised service offering is
                            customised for each client based on their circumstances. Whether its
                            strategy design, roadmap creation, or full digital transformation, we are
                            well resourced to implement the most effective solution to differentiate
                            your organization in the marketplace.<br>
                            We help companies to boost revenue by making strategic, cost effective,
                            highly productive road map. We unlock the new unexplored channel of
                            businesses which help companies to reach more customers, expansion,
                            and control expenses.<br>
                            Our members are expert in their own field, proven history of work
                            experience, explored different profiles and industries, familiar with multi
                            geographies. Our team work on behalf of clients on their vision as a team
                            to help them accomplish their goals without wasting time, cost and risk
                            involve in finding right and expert workforce for that specific task.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image-block">
                        <div class="image-one wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                            <div class="image-box">
                                <img class="lazy-image owl-lazy loaded" src="../assets/images/resource/image-5.jpg"
                                    data-src="../assets/images/resource/image-5.jpg" alt="" data-was-processed="true">
                            </div>
                        </div>
                        <div class="image-two wow fadeInLeft animated" data-wow-delay="300ms" data-wow-duration="1500ms"
                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInLeft;">
                            <div class="image-box">
                                <img class="lazy-image owl-lazy loaded" src="../assets/images/resource/image-4.jpg"
                                    data-src="../assets/images/resource/image-4.jpg" alt="" data-was-processed="true">
                            </div>
                        </div>
                        <div class="logo"><img src="../assets/images/logo/11-logo.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
    
<section class="services-details" id="benifit&value">
    <div class="auto-container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <ul class="nav nav-tabs nav-justified sub_cat" role="tablist">
                    <?php
// if( isset($_POST['id']) ){
//     echo $_POST['id'];
//     exit;
//   }
                    $query =  $con->query("SELECT * FROM  cat WHERE parent_id = 1 ORDER BY id ASC");
                    if ($query->num_rows > 0) {
                        // print_r($query); exit;
                        while ($row = $query->fetch_assoc()) {
                    ?>
                    <li class="nav-item" id="li_<?php echo $row['id'];?>">
                        
                        <a class="nav-link" data-toggle="tab" id="<?php echo $row['id'];?>" role="tab" aria-controls="one" aria-selected="true"><?php echo $row['categories'];?></a>
                    </li>   
                    <?php } // if closing  
                          } // while closing
                    ?>
                    <!-- <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#two" role="tab" aria-controls="two" aria-selected="false"> Strategy & Growth</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#three" role="tab" aria-controls="three" aria-selected="false"> Customer Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#four" role="tab" aria-controls="four" aria-selected="false"> Business Restructuring </a>
                    </li> -->
                </ul>
                <div class="tab-content mt-3" style="" style="margin-top:-100px">
                    <div class="tab-pane active" id="one" role="tabpanel" aria-labelledby="one-tab">
                        <div class="col-lg-12 col-md-12">
                            <section class="services-section-three" id="services">
                                <div class="auto-container">
                                    <div class="row" id="custom_html_row">
                                    
                                        <div class="theme_carousel owl-theme owl-carousel" id="services_response"
                                            data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "2" } , "1075":{ "items" : "3" }, "1200":{ "items" : "3" }}}'> 
                                            <?php //echo SITE_URL; ?> 
                                             <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image">
                                                        <div class="image"><img
                                                                src="../assets/images/services/Digital-Transformation1.jpg" alt=""></div>
                                                    </div>
                                                    <div class="content">
                                                        <div class="icon"><span
                                                                class="flaticon-question"></span></div>
                                                        <h5>Digital Transformation</h5>
                                                        <a href="/services/digital-transformation.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Digital <br> Transformation</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">Businesses may take use of these services in order to help them transition to a more digitally oriented future...
                                                                </div>
                                                                <a href="/services/digital-transformation.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/sustainble.jpg"
                                                            alt=""></div>
                                                    <div class="content">
                                                        <h5>Sustainable Business Model</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/sustainable-business-model.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Sustainable <br>Business Model</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">We help organizations in building sustainable business model. This is the best way to express the strategy of a company...
                                                                </div>
                                                                <a href="/services/sustainable-business-model.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/enging.jpg"
                                                            alt=""></div>
                                                    <div class="content">
                                                        <h5>Engaging Content & Campaigns to drive Continuous Growth</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/engaging-Content-Campaigns-to-drive-Continuous-Growth.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Engaging Content &<br> Campaigns to drive<br> Continuous Growth</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">Creative, technology, and data science are all combined in this our cloud-based marketing solution...
                                                                </div>
                                                                <a href="/services/engaging-Content-Campaigns-to-drive-Continuous-Growth.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/operations_consulting_masthead1.jpg"
                                                            alt=""></div>
                                                    <div class="content">
                                                        <h5>Operations Consultancy</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/operations-consultancy.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Operations<br> Consultancy</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">he operations department serves as a vital connection between your company's longterm plan and its long-term success. In today's environment, organizations who can utilize...
                                                                </div>
                                                                <a href="/services/operations-consultancy.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Financial_Resource_on.png"
                                                            alt=""></div>
                                                    <div class="content">
                                                        <h5>Financial Resources Consultancy</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/financial-resources-consultancy.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Financial Resources<br> Consultancy</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">In order to better manage and grow your money and assets, single clients and small  businesses can get help from the counsel...
                                                                </div>
                                                                <a href="/services/financial-resources-consultancy.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Support-Services1.jpg"
                                                            alt=""></div>
                                                    <div class="content">
                                                        <h5>Support Services</h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/support-services.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Support<br> Services</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">Our business support services will enable you to achieve significant cost, quality, and customer service savings while also improving...
                                                                </div>
                                                                <a href="/services/support-services.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/web-Development1.jpg"
                                                            alt=""></div>
                                                    <div class="content">
                                                        <h5>Website Development </h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/website-development.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Website<br> Development</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">With the assistance of Web development services, any kind of web-based software may be developed, produced, maintained, and upgraded...
                                                                </div>
                                                                <a href="/services/website-development.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Application-Developmnet.jpg"
                                                            alt=""></div>
                                                    <div class="content">
                                                        <h5>Application Development </h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/application-devlopment.phpp" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Application<br> Development </h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">Our application software developers have developed into industry-specific technology specialists as a result of their many...
                                                                </div>
                                                                <a href="/services/application-devlopment.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Future-potential1.jpg"
                                                            alt=""></div>
                                                    <div class="content">
                                                        <h5>Future Potential Discovery </h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/future-potential-discovery.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Future Potential<br> Discovery</h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">Our multi-year strategy to assisting our clients reached its conclusion in the second phase, when we completed the integration of numerous...
                                                                </div>
                                                                <a href="/services/future-potential-discovery.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-block-three">
                                                <div class="inner-box">
                                                    <div class="image"><img src="../assets/images/services/Board add.jpg"
                                                            alt=""></div>
                                                    <div class="content">
                                                        <h5>Board Advisory </h5>
                                                        <div class="icon"><span class="flaticon-question"></span></div>
                                                        <a href="/services/board-advisory.php" class="read-more-link">Read More <i
                                                                class="fa fa-caret-right"></i></a>
                                                    </div>
                                                    <div class="overlay-content">
                                                        <div class="content-wrapper">
                                                            <div class="icon-box">
                                                                <div class="icon"><span
                                                                        class="flaticon-question"></span></div>
                                                                <h4>Board<br> Advisory </h4>
                                                            </div>
                                                            <div class="outer-box">
                                                                <div class="text">To help executives acquire insight and assess business operations, and to increase the knowledge base of your loyal team members...
                                                                </div>
                                                                <a href="/services/board-advisory.php" class="read-more-link">Read
                                                                    More <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="tab-pane" id="two" role="tabpanel" aria-labelledby="two-tab">
                        <div class="col-lg-12 col-md-12">
                            <section class="services-section-three" id="services">
                             
                            </section>
                        </div>
                    </div>
                    <div class="tab-pane" id="three" role="tabpanel" aria-labelledby="three-tab">
                        <div class="col-lg-12 col-md-12">
                            <section class="services-section-three" id="services">
                                
                            </section>
                        </div>
                    </div>
                    <div class="tab-pane" id="four" role="tabpanel" aria-labelledby="four-tab">
                        <div class="col-lg-12 col-md-12">
                            <section class="services-section-three" id="services">
                                
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="team-section-two" id="coreteam" style="background:#eceff1;margin-top:-200px">
    <div class="auto-container">
        <div class="sec-title text-center" style="margin-bottom:40px">
            <h2>Core Team</h2>
            <div class="text-decoration">
                <span class="left"></span>
                <span class="right"></span>
            </div>
        </div>
        <div class="row">
             <div class="team-block-one col-lg-3 col-md-6">
                <div class="inner-box">
                    <div class="image"><img src="../assets/images/resource/vacant.png" alt=""></div>
                    <div class="lower-content">
                        <div class="designation">CEO</div>
                        <h4>We are hiring.</h4>
                    </div>
                </div>
            </div><br><br>
            <div class="team-block-one col-lg-3 col-md-6">
                <div class="inner-box">
                    <div class="image"><img src="../assets/images/resource/vacant.png" alt=""></div>
                    <div class="lower-content">
                        <div class="designation">COO</div>
                        <h4>We are hiring.</h4>
                    </div>
                </div>
            </div><br><br>
            <div class="team-block-one col-lg-3 col-md-6">
                <div class="inner-box">
                    <div class="image"><img src="../assets/images/resource/vacant.png" alt=""></div>
                    <div class="lower-content">
                        <div class="designation">CFO</div>
                        <h4>We are hiring.</h4>
                    </div>
                </div>
            </div>
           
            <div class="team-block-one col-lg-3 col-md-6">
                <div class="inner-box">
                    <div class="image"><img src="../assets/images/resource/vacant.png" alt=""></div>
                    <div class="lower-content">
                        <div class="designation">CHRO</div>
                        <h4>We are hiring.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <section class="process-section-three" id="whyus">
        <div class="pattern" style="background-image: url(../assets/images/shape/pattern-12.png);"></div>
        <div class="auto-container">
            <div class="">
                <div class="sec-title text-center">
                    <h2>Why Us?</h2>
                    <span class="text-decoration-two"></span>
                </div>
                <p>We help companies to reach more customers using our expertise, by saving time and without unnecessary
                    expenditure which directly help to earn more and spend less. We market products/services using our
                    channels to add brand value by acquiring more market share. We work closely with client to find
                    solutions what they are lacking with, through current business model analysis, intensive market
                    research and productive business plan with implementation roadmap. In whatever ways we are linked to
                    revenue addition to company.</p>
            </div>

            <div class="process-wrapper" style="margin-top: 30px;">
                <div class="row">
                    <div class="col-lg-4 col-md-6 process-block-three">
                        <div class="inner-box">
                            <div class="icon"><img src="../assets/images/icons/icon-23.png" alt="">
                            </div>
                            <h4>Vision</h4>
                            <div class="text">Provide turnkey solutions to businesses.</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 process-block-three">
                        <div class="inner-box">
                            <div class="icon"><img src="../assets/images/icons/icon-24.png" alt=""></div>
                            <h4>Mission</h4>
                            <div class="text">Help clients to acquire more market share and increase profitability.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 process-block-three">
                        <div class="inner-box">
                            <div class="icon"><img src="../assets/images/icons/icon-25.png" alt=""></div>
                            <h4>Goal</h4>
                            <div class="text">Reach as many possible geographies.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-details-section" id="contact" style="background-image: url(../assets/images/background/contact.png);">
        <div class="auto-container">
            <div class="text-decoration">
                <span class="left"></span>
                <span class="right"></span>
            </div>
            <div class="sec-title text-center">
                <h2 class="text-white">Get in touch with us</h2>
                <div class="text"><h3><strong>Need help of reaching more customers, boost-up revenue, start new
                    levers?</strong></h3><br>
                    <p>Our customer experience consultants can help you take your business to
                        the next level, achieving all your goals in an effective and sustainable
                        way. With a professional team of staff dedicated to the growth of your
                        organization,<br> Raichand Management is committed to your success.</p>
                    <br>
                    <!--<span>Write Us at <strong> management@raichandgroup.com </strong>or Leave your Message at-->
                    <!--    <a href="contact-us.php">here</a>.</span>-->
                </div>

                <div class="text-decoration">
                    <span class="left"></span>
                    <span class="right"></span>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-section-two bg-oliver mail-section">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-1"></div>
                 <div class="col-lg-1 sm-text-center" > <i class="fa fa-envelope" aria-hidden="true" style="font-size: 57px;"></i>
                </div>
                <div class="col-lg-5 sm-text-center">
                    <h5>Write Us at </h5>
                     <div class="typewriter" style="text-align:left;">
                          <h4>management@raichandgroup.com</h4>
                        </div>
                    <!--<h4 class="email-texts">management@raichandgroup.com</h4>-->
                </div>
                <div class="col-lg-5">
                    <div class="wrapper-box">
                        <div class="contact-info">
                            <!--<div class="icon"><span class="flaticon-call-1"></span></div>-->
                            <!--<h4>(555) 890 1234 </h4>--><br>
                        <a href="<?php echo SITE_URL;?>contact.php" class="theme-btn blink"><span class="btn-title">Contact Us</span></a>

                    </div>                        
                </div>
            </div>
        </div>
    </section>
</div>
<?php //print_r($_POST);?>
<?php include 'footer.php';?>

<script>
$(document).ready(function(){

    // $('li:first').addClass('active');
    $cat_id = $('.services-details ul.sub_cat li.nav-item:first-child a').attr('id');
    //alert($cat_id); 
    // $('.services-details ul.sub_cat li.nav-item:first-child').addClass('active');
    $(".services-details ul.sub_cat li.nav-item:first-child a").addClass("active");
    get_services($cat_id);



//   var id = 23; 
$('ul.sub_cat li.nav-item').on('click', function () {
    $cat_id = $(this).find('a').attr('id');
    $("p:first").addClass("intro");

    // alert($cat_id);
    // $.post("management.php", {"cat_id": catid});
    get_services($cat_id);
//   $.ajax({
//             type: 'POST',
//             url:'management_service.php',
//             data:{id:cat_id},
//         });
//   $.post("B.php",
//  {
//      id1: id,

//   } );
//   return false;
});

// $("#submit").click(function(){
//  $.post("B.php",
//  {
//      id1: id,

//   } );      
//    });
function get_services($cat_id){
$.ajax({
    type: "POST",
    url: 'management_service.php',
    dataType: 'html',
    data: {id:$cat_id},
    success: function(data){
        $('#custom_html_row').html(data);
        //$('#custom_html_row .owl-nav').removeClass('disabled');
    }
 });
}
  });
 </script>