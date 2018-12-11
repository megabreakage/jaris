
       	<!-- Our-Product-Page -->
        <div class="bgImages opacityLayer" style="background-image: url(img/cake-slice2.jpg); background-position: 50% 50%; background-size: cover">
            <div class="container">
                <div class="cell-view tableCellVH2">
                    <div class="emptySpace100 emptySpace-md50"></div>
                    <div class="emptySpace55 emptySpace-md100"></div>
                    <div class="row">
                        <!-- Our-Prodicts-Title -->
                        <div class="col-sm-8 col-sm-offset-2">
                          <div class="emptySpace50 emptySpace-md30"></div>
                            <div class="big titleShortcode">
                                <h2 class="h1">Place your Order</h2>
                                <div class="emptySpace5"></div>
                                <p>Why wait any more? Go ahead place an order for your favorite cake now and it will be ready for collection or delivered right at your door step.</p>
                            </div>
                            <div class="emptySpace50 emptySpace-md30"></div>
                        </div>
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
                    </div>
                    <div class="emptySpace10"></div>
                </div>
            </div>
        </div>
        <div class="bgWhite" id="placeOrder">
          <div class="emptySpace20 emptySpace-xs40"></div>
            <div class="container">

              <form class="" action="place_order" method="post" id="placeOrder">
                <!-- Order Information -->
                <div class="row">
                  <!-- Order Details -->
                  <div class="col-sm-6 pb">
                    <h4 class="h4">Order Details</h4>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6 pt">
                        <select class="contactsInput" name="product" id="product" placeholder="Select Product" required>
                          <option value="">  Select your Order - -</option>
                          <option value="102">Bread</option>
                          <option value="Cookies" disabled>Cookies</option>
                          <option value="Cupcakes" disabled>Cupcakes</option><br>
                          <?php foreach ($products as $product): ?>
                            <option value="<?php echo $product['product_id']; ?>"><?php echo $product['product']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="col-sm-6 pt" id="kgsDiv">
                        <select class="contactsInput" name="kgs" id="kgs" required>
                          <option value="half">0.5 Kgs</option>
                          <option value="half">1 Kg</option>
                          <option value="one_half">1.5 Kgs</option>
                          <option value="two">2 Kgs</option>
                          <option value="two_half">2.5 Kgs</option>
                          <option value="three">3 Kgs</option>
                          <option value="three_half">3.5 Kgs</option>
                          <option value="four">4 Kgs</option>
                          <option value="four_half">4.5 Kgs</option>
                          <option value="five">5 Kgs</option>
                        </select>
                      </div>
                      <div class="col-sm-6 pt" id="color">
                        <input type="name" name="color" class="contactsInput" placeholder="Cake Color (e.g Red)">
                      </div>
                      <div class="col-sm-6 pt" id="icing">
                        <select class="contactsInput" name="icing" id='icing' required>
                           <option value="None">No Icing</option>
                           <option value="Hard icing">Hard icing</option>
                           <option value="Soft Icing">Soft icing</option>
                           <option value="Fresh cream">Fresh Cream</option>
                           <option value="Fresh Cream & Chocolate(dark) Shavings">Fresh Cream & Chocolate(dark) Shavings</option>
                           <option value="Fresh Cream & Chocolate(white) Shavings">Fresh Cream & Chocolate(white) Shavings</option>
                        </select>
                      </div>
                      <div class="col-sm-12 pt" id="inscriptions">
                        <textarea name="inscriptions" rows="6" cols="80" class="contactsInput" placeholder="Inscriptions on the cake or additional information (Optional)"></textarea>
                      </div>
                      <div class="col-sm-6 pt" id="breadtype">
                        <select class="contactsInput" name="breadtype" id="breadtype" placeholder="Type of Bread">
                          <option value="Brown">Brown</option>
                          <option value="Brown">White</option>
                          <option value="Brown">Sweet(Yellow)</option>
                        </select>
                      </div>
                      <div class="col-sm-6 pt" id="breadWeightDiv">
                        <select class="contactsInput" name="breadWeight" id="breadWeight" placeholder="Weight of Bread">
                          <option value="">Select size - -</option>
                          <option value="b_weight1">200 gms</option>
                          <option value="b_weight2">400 gms</option>
                          <option value="b_weight3">600 gms</option>
                        </select>
                      </div>
                      <div class="col-sm-6 pt" id="cookietype">
                        <select class="contactsInput" name="cookietype" placeholder="Type of Cookies" required>
                          <option value="Amish Sugar">Amish Sugar</option>
                          <option value="Banana & Chocolate Chips">Banana & Chocolate Chips</option>
                          <option value="Butter">Butter</option>
                          <option value="Chocolate">Chocolate</option>
                          <option value="Chocolate Oatmeal">Chocolate Oatmeal</option>
                          <option value="Coconut">Coconut</option>
                          <option value="Fudge & Mint">Fudge & Mint</option>
                          <option value="Ginger">Ginger</option>
                          <option value="Lemon Tea">Lemon Tea</option>
                          <option value="Mimosa Butter">Mimosa Butter</option>
                          <option value="Peanut Butter and Chocolate">Peanut Butter and Chocolate</option>
                          <option value="Thumbprint Butter">Thumbprint Butter</option>
                          <option value="Vanilla Sandwich">Vanilla Sandwich</option>
                        </select>
                      </div>
                      <div class="col-sm-6 pt" id="cookiesWeight">
                        <select class="contactsInput" name="cookiesWeight" placeholder="Weight of Cookies">
                          <option value="50">50 gms</option>
                          <option value="100">100 gms</option>
                          <option value="150">150 gms</option>
                          <option value="200">200 gms</option>
                          <option value="250">250 gms</option>
                          <option value="500">500 gms</option>
                          <option value="1000"> 1 Kg</option>
                        </select>
                      </div>
                      <div class="col-sm-6 pt" id="cupcaketype">
                        <select class="contactsInput" name="cupcaketype" placeholder="Type of Cupcakes">
                          <option value="">Chocolate Cupcakes</option>
                          <option value="Coconut Cupdakes"> Coconut Cupdakes</option>
                          <option value="Egless Cupcakes"> Egless Cupcakes</option>
                          <option value="Fruit Cupcakes"> Fruit Cupcakes</option>
                          <option value="Funfetti Cupcakes"> Funfetti Cupcakes</option>
                          <option value="Mocha Cupcakes"> Mocha Cupcakes</option>
                          <option value="Peanut Butter and Chocolate"> Peanut Butter and Chocolate</option>
                          <option value="Pumpkin Cupcakes"> Pumpkin Cupcakes</option>
                          <option value="Red Velvet"> Red Velvet</option>
                          <option value="Simple White Cupcakes"> Simple White Cupcakes</option>
                        </select>
                      </div>
                      <div class="col-sm-6 pt" id="quantityDiv">
                        <input type="number" class="contactsInput" name="quantity" id="quantity" value="4" placeholder="Quantity (atleast 4)">
                      </div>
                      <div class="col-sm-12 pt" id="add_info">
                        <textarea name="additional_info" rows="5" cols="80" class="contactsInput" placeholder="Additional information (Optional)"></textarea>
                      </div>
                    </div>
                  </div>
                  <!-- Customer Info -->
                  <div class="col-sm-6 pb">
                    <h4 class="h4 text-right">Customer Information</h4>
                    <hr>
                    <div class="row">
                      <div class="col-sm-6 pt">
                        <input type="text" name="name" placeholder="Full Name*" class="contactsInput" required>
                      </div>
                      <div class="col-sm-6 pt">
                        <input type="text" name="email" placeholder="Email*" class="contactsInput" required>
                      </div>
                      <div class="col-sm-6 pt">
                         <input class="contactsInput" type="number" name="phone" placeholder="Phone Number*" required>
                       </div>
                       <div class="col-sm-12 pt">
                         <input class="contactsInput" type="address" name="address" value="" placeholder="Delivery Address*" required>
                       </div>
                       <div class="col-sm-6">
                         <br><br>
                         <label>Expected Delivery Date</label>
                       </div>
                       <div class="col-sm-6 pt">
                         <input class="contactsInput" type="date" name="deliveryDate" value="" placeholder="Delivery Address" required>
                       </div>
                     </div>
                    <div class="col-sm-12 text-center" id="response"> </div>
                    </div>

                    <div class="col-sm-12 text-center pt pb totals">
                      <div class="col-sm-6 col-sm-offset-3 pb">
                        <div class="row">
                          <div class="col-sm-6">
                            <br> <strong>Total Amount:</strong>
                          </div>
                          <div class="col-sm-6 total">
                            <input type="contactsInput" class="contactsInput text-right total" id="subtotal" name="subtotal" value="0.00" readonly>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-12 text-center pt">
                      <h4 class="h4">Payment</h4>
                      <hr>
                    </div>

                    <div class="col-sm-6 payment">
                      <h6 class="h6">M-Pesa Payment Procedure</h6>
                      <br><p><i class="fa fa-arrow-circle-right"></i> Go to "<span>M-Pesa</span>" on your phone </p>
                      <br> <p> <i class="fa fa-arrow-circle-right"></i> On the Mpesa Menu Go to  "<span>Lipa na Mpesa</span>" then "<span>Buy Goods and Services</span>"</p>
                      <br><p><i class="fa fa-arrow-circle-right"></i> Enter the following Till Number </p>
                      <div class="row">
                        <div class="col-sm-12 tillNumber text-center pt pb">
                          <h3 class="text-center">613679</h3>
                        </div>
                      </div>
                      <br><p><i class="fa fa-arrow-circle-right"></i> Press "<span>OK</span>" then Enter the 50% Deposit of <span id="deposit"></span></p>
                      <br><p><i class="fa fa-arrow-circle-right"></i> Enter your Mpesa "<span>PIN</span>"</p>
                      <br><p><i class="fa fa-arrow-circle-right"></i> Press "<span>OK</span>" and Confirm Payment Details.</p><br><br>
                    </div>

                    <div class="col-sm-6 pb">
                      <h6 class="h6">Complete the order</h6>
                      <br>
                      <label> <i class="fa fa-check-circle"></i> You will receive an M-Pesa message, Copy the Tranaction Reference Code here</label><br><br>
                   <div class="row text-center">
                     <div class="col-sm-6 pt">
                       <input class="contactsInput" type="text" name="mpesa_code" placeholder="M-Pesa Code (e.g MJ451MXF6N)*" required>
                     </div>
                     <div class="col-sm-6 pt">
                       <input class="contactsInput" type="number" name="amount" placeholder="Amount Paid (0.00)*" id="amount" required>
                     </div>
                     <div class="col-sm-12 pt">
                       <p id="notice"></p>
                     </div>
                  </div>

                 <div class="emptySpace50 emptySpace-xs30"> </div>
                 </div>
                 <div class="col-sm-6 text-right">
                   <button class="button style-2 size-2" type="submit"> <i class="fa fa-paper-plane"></i> Submit Order</button>
                 </div>
                </div>
              </form>

              <div class="emptySpace40 emptySpace-xs20"></div>

              <!-- Response -->
              <div class="col-sm-8 col-sm-offset-2 pt pb text-center alert" id="orderResponse">

                <?php if (isset($_SESSION['success'])): ?>
                  <div class="alert alert-success text-center pt pb">
                    <?php echo $_SESSION['success']; ?>
                  </div>
                <?php endif; ?>
                <?php if (isset($_SESSION['error'])): ?>
                  <div class="alert alert-danger text-center pt pb">
                    <?php echo $_SESSION['error']; ?>
                  </div>
                <?php endif; ?>
                <?php if (isset($_SESSION['email_error'])): ?>
                  <div class="alert alert-danger text-center pt pb">
                    <?php echo $_SESSION['email_error']; ?>
                  </div>
                <?php endif; ?>
              </div>

            </div>
            <div class="emptySpace130 emptySpace-xs40"></div>
        </div>


        <div class="footerSeparator"></div>
