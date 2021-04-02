<?php require_once "header.php"; 
$settingname=explode(" ",$setting_query['name']);
$settingname = end($settingname);
?>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center"> 
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am <?=$settingname?> </h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s">I'm Will <?=$settingname?>, <?=" ".$setting_query['tagline']?>.</p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                        <?php foreach ($social_query as $key => $value) :
                                         if (++$key<=4):?>
                                           <? break;?>
                                                <li><a target="_blank" href="<?=$value['link']?>"><i class="<?=$value['icon']?>"></i></a></li>
                                        <?php endif; endforeach; ?>
                                    </ul>
                                </div>
                                <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img src="dashboard/upload/<?=$setting_query['image']?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="front/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="front/img/banner/banner_img2.png" title="me-01" alt="me-01">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                                <h2>About Me</h2>
                            </div>
                            <div class="about-content">
                                <p><?=nl2br($setting_query['about'])?>!</p>
                                <h3>Education:</h3>
                            </div>
                            <!-- Education Item -->
                        <?php foreach ($education_query as $key => $value): ?>
                                                          
                            <div class="education">
                                <div class="year"><?=$value['year']?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?=$value['degree']?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width:<?=$value['percentage']?>%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->
            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT WE DO</span>
                                <h2>Services and Solutions</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">
                        <?php foreach ($service_query as $key => $value) :?>
                               <?php if(++$key<=6):?> <? break;?> 
                        <div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="<?=$value['icon']?>"></i>
								<h3><?=$value['name']?></h3>
								<p><?=substr($value['summery'],0,90)."..."?></p>
							</div>
						</div>
                    <?php endif; endforeach; ?>
						<!-- <div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.4s">
								<i class="fab fa-free-code-camp"></i>
								<h3>Unlimited Features</h3>
								<p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.6s">
                                <i class="fal fa-desktop"></i>
								<h3>Ultra Responsive</h3>
								<p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="fal fa-lightbulb-on"></i>
								<h3>Creative Ideas</h3>
								<p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.4s">
                                <i class="fal fa-edit"></i>
								<h3>Easy Customization</h3>
								<p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.6s">
                                <i class="fal fa-headset"></i>
								<h3>Supper Support</h3>
								<p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.
								</p>
							</div>
						</div> -->
					</div>
				</div>
			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach ($portfolio_query as $key => $value): ?>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="dashboard/image/<?=$value['thumbnail']?>" alt="img">
								</div>
								<div class="speaker-overlay">
									<span><?=$value['category']?></span>
									<h4><a target="_blank" href="portfolio-single.php?id=<?=$value['id']?>"><?=$value['title']?></a></h4>
									<a target="_blank" href="portfolio-single.php?id=<?=$value['id']?>" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
                         <?php endforeach ?>
                        <!-- <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="front/img/images/2.jpg" alt="img">
								</div>
								<div class="speaker-overlay">
									<span>Video</span>
									<h4><a href="portfolio-single.html">Dark Beauty</a></h4>
									<a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="front/img/images/3.jpg" alt="img">
								</div>
								<div class="speaker-overlay">
									<span>Audio</span>
									<h4><a href="portfolio-single.html">Gilroy Limbo.</a></h4>
									<a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
						<div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="front/img/images/4.jpg" alt="img">
								</div>
								<div class="speaker-overlay">
									<span>Design</span>
									<h4><a href="portfolio-single.html">Ipsum which</a></h4>
									<a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
                        <div class="col-lg-4 col-md-6 pitem"> -->
                           <!--  <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="front/img/images/5.jpg" alt="img">
								</div>
								<div class="speaker-overlay">
									<span>Creative</span>
									<h4><a href="portfolio-single.html">Eiusmod tempor</a></h4>
									<a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="front/img/images/6.jpg" alt="img">
								</div>
								<div class="speaker-overlay">
									<span>UX/UI</span>
									<h4><a href="portfolio-single.html">again there</a></h4>
									<a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
								</div>
							</div>
                        </div> -->
                    </div>
                </div>
            </section>
            <!-- services-area-end -->


            <!-- fact-area -->
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                        <div class="row justify-content-between">
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-award"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count">245</span></h2>
                                        <span>Feature Item</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-like"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count">345</span></h2>
                                        <span>Active Products</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-event"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count">39</span></h2>
                                        <span>Year Experience</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="flaticon-woman"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count">3</span>k</h2>
                                        <span>Our Clients</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img src="front/img/images/testi_avatar.png" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span> An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result <span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5>tonoy jakson</h5>
                                            <span>head of idea</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img src="front/img/images/testi_avatar.png" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span> An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result <span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5>tonoy jakson</h5>
                                            <span>head of idea</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->

                
            
            <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">
                         <?php foreach ($partners_query as $key => $value): ?>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="dashboard/image/brand/<?=$value['logo']?>" width="150" height="70" alt="<?=$value['name']."image"?>">
                            </div>
                        </div>
                        <?php endforeach ?>
                        <!-- <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="front/img/brand/brand_img02.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="front/img/brand/brand_img03.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="front/img/brand/brand_img04.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="front/img/brand/brand_img05.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="front/img/brand/brand_img03.png" alt="img">
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">
                                <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.</p>
                                <h5>OFFICE IN <span>NEW YORK</span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span>Event Center park WT 22 New York</li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span>+9 125 645 8654</li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span>info@exemple.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form action="#">
                                    <input type="text" placeholder="your name *">
                                    <input type="email" placeholder="your email *">
                                    <textarea name="message" id="message" placeholder="your message *"></textarea>
                                    <button class="btn">SEND</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        
<?php require_once "footer.php"; ?>