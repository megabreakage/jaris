
        <!-- Header-Slider -->
        <div class="bgImages">
            <div class="swiper-container" data-loop="1">
               <div class="arrowWrapper">
                    <div class="swiper-button-prev hidden-xs hidden-sm spin spin2">
                        <img class="arrowShortcode" src="img/left-hover-arrow.png" alt="">
                    </div>
                    <div class="swiper-button-next hidden-xs hidden-sm spin spin2">
                        <img class="arrowShortcode" src="img/right-hover-arrow.png" alt="">
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <?php foreach ($b_slides as $slide): ?>
                      <div class="swiper-slide opacityLayer" style="background-image: url('<?php echo $slide['b_image']; ?>'); background-position: 50% 50%; background-size: cover;">
                          <div class="container">
                              <div class="cell-view tableCellVH">
                                  <div class="emptySpace150"></div>
                                  <div class="emptySpace95 emptySpace-xs35"></div>
                                  <div class="row">
                                      <div class="col-md-8 col-md-offset-2">
                                          <div class="big titleShortcode">
                                              <!-- <h3 class="h3">The Taste Of Our</h3> -->
                                              <h2 class="h1">Amazing <span>Cakes</span></h2>
                                              <div class="emptySpace5"></div>
                                              <p> Welcome to Jaris Bakers. You have found your way to a world of sweet and delicious cake
                                                selection. Our wide varieties will leave you spoiled for a choice!</p>
                                              <div class="emptySpace55 emptySpace-xs25"></div>
                                              <a href="cakes" class="button">View our delicious products</a>
                                          </div>
                                     </div>
                                  </div>
                                  <div class="emptySpace60"></div>
                                    <style media="screen">
                                      .swiperContacts{
                                        font-size: 25px;
                                        font-family: Philosopher;
                                      }
                                      .swiperContacts a{
                                        color: yellow !important;
                                      }
                                      .swiperContacts a:hover{
                                        color: #EF6C00 !important;
                                      }
                                      .swiperContacts i{
                                        color: #fff !important;
                                      }
                                    </style>
                                  <div class="row text-center swiperContacts">
                                    <div class="col-sm-4 pt pb divBorder">
                                      <p><i class="fa fa-phone"></i> <a href="tel:+254717623487">(+254)717 623-487</a> </p>
                                    </div>
                                    <div class="col-sm-4 pt pb swiperContacts">
                                      <p><i class="fa fa-envelope"> <a href="mailto:orders@jarisbakers.co.ke">orders@jarisbakers.co.ke</a> </i></p>
                                    </div>
                                    <div class="col-sm-4 pt pb swiperContacts">
                                      <p><i class="fa fa-envelope"> <a href="mailto:enquiries@jarisbakers.co.ke"> enquiries@jarisbakers.co.ke </a> </i></p>
                                    </div>
                                  </div>
                                  <div class="emptySpace150"></div>
                              </div>
                          </div>
                      </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination swiper-pagination-white"></div>
            </div>
        </div>
        <!-- <div class="emptySpace-xs60 emptySpace120"></div> -->

        <!-- Goodies -->
        <div class="bgWhite">
          <div class="emptySpace75 emptySpace-xs30"></div>
            <div class="container">
                <div class="row">
                    <!-- Goodies-Title -->
                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                       <div class="big titleShortcode">
                            <h5 class="h5">The Sweetest Choice Of</h5>
                            <div class="emptySpace15"></div>
                            <h2 class="h3 bottomLine">Goodies That We Do</h2>
                            <div class="emptySpace75 emptySpace-xs30"></div>
                       </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Swiper -->
                    <div class="swiper-container" data-breakpoints="1" data-xs-slides="1" data-sm-slides="2" data-md-slides="3" data-slides-per-view="4" data-space="23">
                        <div class="swiper-wrapper">
                            <!-- Slide-1 -->
                            <?php foreach ($goodies as $goody): ?>
                              <div class="swiper-slide">
                                  <div class="normall goodiesShortcode">
                                      <a href="product"><h4 class="h4"><?php echo $goody['title']; ?></h4></a>
                                      <div class="emptySpace25"></div>
                                      <a class="imgLayer" href="cakes"><img class="imgShortcode" src="<?php echo $goody['image']; ?>" alt=""> <span></span><span></span></a>
                                      <div class="emptySpace5"></div>
                                      <!-- <p><?php echo $goody['tag']; ?></p> -->
                                  </div>
                              </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- Swiper-Arrow -->
                        <div class="arrowWrapper">
                            <div class="swiper-button-prev hidden-xs hidden-sm spin spin2">
                                <img class="arrowShortcode" src="img/left-hover-arrow.png" alt="">
                            </div>
                            <div class="swiper-button-next hidden-xs hidden-sm spin spin2">
                                <img class="arrowShortcode" src="img/right-hover-arrow.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination relative-pagination swiper-pagination-black visible-xs visible-sm"></div>
                    </div>
                </div>
                <div class="emptySpace55 emptySpace-sm20"></div>
                <!-- Button -->
                <div class="btnAlign">
                    <a href="cakes" class="button">Look for more</a>
                </div>
              </div>
              <div class="emptySpace75 emptySpace-xs30"></div>
            </div>

        <!-- Product -->
        <div class="bgImages">
            <!-- Swiper -->
            <div class="swiper-container" data-loop="1">
                <!-- Swiper-Arrow -->
                <div class="arrowWrapper">
                    <div class="swiper-button-prev hidden-xs hidden-sm spin spin2">
                        <img class="arrowShortcode" src="img/left-hover-arrow.png" alt="">
                    </div>
                    <div class="swiper-button-next hidden-xs hidden-sm spin spin2">
                        <img class="arrowShortcode" src="img/right-hover-arrow.png" alt="">
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <!-- Slide-1 -->
                    <?php foreach ($swiper_prods as $product): ?>
                      <div class="swiper-slide opacityLayer" style="background-image: url(<?php echo $product['bg_image1']; ?>); background-position: 50% 50%; background-size: cover;">
                          <div class="container">
                              <div class="cell-view tableCellVH">
                                  <div class="emptySpace25 emptySpace-md75"></div>
                                  <div class="productWrapper">
                                      <div class="row">
                                          <div class="product" style="background: url(<?php echo $product['bg_image2']; ?>); background-position: 50% 50%; background-size: cover;"></div>
                                          <div class="col-md-7 col-md-push-5">
                                              <div class="productBg">
                                                  <div class="emptySpace85 emptySpace-md50 emptySpace-xs30"></div>
                                                  <div class="big contentShortcode5">
                                                      <h2 class="h2"><?php echo $product['title']; ?></h2>
                                                      <div class="emptySpace20"></div>
                                                      <p><?php echo $product['tag']; ?></p>
                                                  </div>
                                                  <div class="emptySpace50 emptySpace-xs30"></div>
                                                  <div class="normall ingShortcode2">
                                                      <h6 class="h6">Ingredients:</h6>
                                                      <p><?php echo $product['ingredients']; ?></p>
                                                      <div class="emptySpace55 emptySpace-md30"></div>
                                                      <a class="sweetPrice2 spin spin2">Ksh. <?php echo $product['price']; ?></a>
                                                  </div>
                                                  <div class="emptySpace95 emptySpace-md60"></div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="emptySpace25 emptySpace-md75"></div>
                              </div>
                          </div>
                      </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination swiper-pagination-white visible-xs visible-sm"></div>
            </div>
        </div>

        <!-- Sweet-Selection -->
        <div class="bgWhite">
          <div class="emptySpace75 emptySpace-xs30"></div>
            <div class="container">
               <div class="row">
                    <!-- Sweet-Selection-Title -->
                   <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                        <div class="big titleShortcode">
                            <h5 class="h5 bottomLine">Discover More</h5>
                            <div class="emptySpace20"></div>
                            <!-- <h2 class="h2 bottomLine">Our Sweet Selection</h2> -->
                            <div class="emptySpace75 emptySpace-xs30"></div>
                        </div>
                   </div>
               </div>
                <div class="row tumbmailClearFix">
                    <?php foreach ($products as $product): ?>
                      <div class="col-sm-6 col-lg-3">
                         <div class="normall contentShortcode">
                              <a href="cakes"><h4 class="h4"><?php echo $product['product']; ?></h4></a>
                              <div class="emptySpace-xs15 emptySpace25"></div>
                              <a class="imgLayer" href="cakes"><img class="imgShortcode" src="img/<?php echo $product['photo_link']; ?>" alt=""><span></span><span></span></a>
                              <div class="emptySpace5"></div>
                              <!-- <p><?php echo $product['description']; ?></p> -->
                              <!-- <div class="sweetPrice">Ksh. <?php echo $product['price']; ?></div> -->
                          </div>
                      </div>
                    <?php endforeach; ?>
                </div>
                <div class="emptySpace55 emptySpace-xs30"></div>
                <div class="btnAlign"><a href="cakes" class="button">Look for more</a></div>
            </div>
            <div class="emptySpace75 emptySpace-xs30"></div>
        </div>

        <!-- Services -->
        <div class="bgWhite">
            <div class="container">
                <div class="row">
                    <!-- Services-Title -->
                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                        <div class="big titleShortcode">
                            <div class="emptySpace20"></div>
                            <h2 class="h2 bottomLine">Our Services</h2>
                            <div class="emptySpace30"></div>
                            <p>Our team is ready to cater your customized requirements.</p>
                            Our Services include the following;
                            <div class="emptySpace80 emptySpace-xs30"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Services-1 -->
                    <?php foreach ($services as $service): ?>
                      <div class="col-sm-4">
                          <div class="normall servicesShortcode">
                              <a class="services serviceIcon spin spin2"> <img src="<?php echo $service['icon_link']; ?>" alt=""></a>
                              <div class="emptySpace20"></div>
                              <a href="#"><h4 class="h4"><?php echo $service['service']; ?></h4></a>
                              <div class="emptySpace15"></div>
                          </div>
                      </div>
                    <?php endforeach; ?>
                </div>
                <div class="emptySpace55 emptySpace-xs30"></div>
                <!-- Button -->
                <div class="btnAlign"><a href="gallery" class="button">View All Services</a></div>
            </div>
            <div class="emptySpace-xs60 emptySpace60"></div>
        </div>

        <div class="bgWhite">
          <div class="emptySpace">
            <div class="container">
              <div class="row">
                  <!-- About-Us-Title -->
                  <div class="col-sm-12">
                      <div class="big titleShortcode">
                          <div class="emptySpace120 emptySpace-xs60"></div>
                          <div class="emptySpace15"></div>
                          <h2 class="h2 bottomLine">About Us</h2>
                          <div class="emptySpace55"></div>
                          <div class="col-sm-12 text-center">
                            <p>Jaris Bakers Ltd was established in Naivasha, Nakuru County in the year 2015.</p>
                            <br>
                            <p>The vision of Jaris Bakery is shared by a dedicated quality control team that undertakes research on continuous improvement as well as ensuring full compliance with all regulatory bodies i.e KEBS, Ministry of Health and others.</p>
                            <div class="emptySpace55"></div>

                            <h4 class="h4">Our Values</h4>
                            <p>We believe in openness honesty and respect to all.</p>
                            <div class="emptySpace85"></div>

                            <div class="col-sm-6">
                              <h3 class="h3">Our Mission</h3>
                              <p>Offering Cakes and Bread that meet satisfaction of our Customers.</p>
                            </div>
                            <div class="col-sm-6">
                              <h3 class="h3">Our Vision</h3>
                              <p>To become the market leader of the bakery industry in Kenya.</p>
                            </div>
                            <div class="emptySpace120 emptySpace-xs60"></div>
                            <div class="emptySpace130 emptySpace-xs60"></div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>

        <!-- About-Us -->
        <div class="bgImages opacityLayer" style="background-image: url(img/about-us.jpg); background-position: 50% 50%; background-size: cover">
            <div class="container">
                <div class="row">
                    <!-- About-Us-Title -->
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="big titleShortcode">
                            <div class="emptySpace120 emptySpace-xs60"></div>
                            <h5 class="h5">Our Clients</h5>
                      <div class="emptySpace35"></div>
                  </div>
                  <div class="emptySpace80 emptySpace-xs30"></div>
              </div>
          </div>
      </div>
      <!-- Swiper -->
      <div class="swiper-container" data-loop="1">
          <div class="swiper-wrapper">
              <!-- Slide-1 -->
              <div class="swiper-slide">
                  <div class="container">
                      <div class="row">
          						    <div class="col-sm-4">
          								<div class="cell-view cvHeight">
          									<img class="aboutUsImg" src="img/client-image.png" alt="">
          								</div>
          						    </div>
          							<div class="col-sm-8">
          							   <div class="cell-view cvHeight">
          									<div class="aboutUsBox">
          										<div class="normall aboutUsShortcode">
          											<div class="emptySpace40"></div>
          											<h4 class="h4">“Outstanding quality & taste. Totally recommend!”</h4>
          											<div class="emptySpace15"></div>
          											<p>I loved the service.. A very excited, friendly and professional team who are ready to take you through
                                  the catalogue and your order. Their cakes are delicious and they are timely on delivery.</p>
          											<div class="emptySpace10"></div>
          											<a class="personeName" href="#">Mwangi David</a>
          											<p>Entrepreneur</p>
          											<div class="emptySpace45"></div>
          										</div>
          									</div>
          							   </div>
          							</div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Swiper-Arrow -->
          <div class="arrowWrapper">
              <div class="swiper-button-prev hidden-xs hidden-sm spin spin2 arrowPosition">
                  <img class="arrowShortcode" src="img/left-hover-arrow.png" alt="">
              </div>
              <div class="swiper-button-next hidden-xs hidden-sm spin spin2 arrowPosition">
                  <img class="arrowShortcode" src="img/right-hover-arrow.png" alt="">
              </div>
          </div>
          <div class="swiper-pagination relative-pagination swiper-pagination-white pagiPosition"></div>
      </div>
  <div class="emptySpace80 emptySpace-xs40"></div>
  </div>
