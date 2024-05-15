<?php
    include "../backend/utilities.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Electronics</title>
    <link rel="stylesheet" href="../css/pages.css" />
    <style>

    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    </style>
</head>
  <body class="body_container">
    <form action="../backend/electronics.php" method="post">

        <div class="container">
            <header class="header_container">
                <h1 class="header_title">Electronics</h1>
                <p class="header_desc">
                    Utilize this space to incorporate a captivating subheading crafted by
                    ChatGPT, adding depth and intrigue to your blog.
                </p>
            </header>
            
            <main class="main_container">
                <!-- card 1 start -->
                <div class="card_container">
                    <a href="#" class="card_image_container">
                        <img
                        src="../images/electronics/E-PROD001.jpg"
                        alt="card 1 image"
                        class="card_image"
                        loading="lazy"
                        />
                    </a>
                    
                    <div class="card_title_container">
                        <a href="#" class="card_title_link">
                            <h2 class="card_title">
                                <?php
                                    echo  fetch_product(0)['product_name'];
                                ?>
                            </h2>
                        </a>
                        <p class="card_desc">
                            <?php
                                echo  fetch_product(0)['product_description'];
                            ?>
                        </p>
                    </div>
                    
                    <div class="card_footer_container">
                        <div class="author_container">
                            <div class="author_info_container">
                            <span style="color: white;">

                                <?php
                                echo "Price: ".fetch_product(0)['price'];
                                ?>
                                </span>
                                <label for="quantity" style = "color : white">Quantity</label>
                                <input type="number" name="quantity1" id="quantity" min="0">
                            </div>
                        </div>
                        
                        <div class="card_tag_container">

                                <span><input type="submit" name ="one" value="Buy Now"></span>
                        </div>
                    </div>
                </div>
                
                <!-- card 1 ends here -->
                
                <!-- card 2 start -->
                <div class="card_container">
                    <a href="#" class="card_image_container">
                        <img
                        src="../images/electronics/E-PROD002.jpg"
                        alt="card 2 image"
                        class="card_image"
                        loading="lazy"
                        />
                    </a>
                    
                    <div class="card_title_container">
                        <a href="#" class="card_title_link">
                            <h2 class="card_title">
                            <?php
                                echo  fetch_product(1)['product_name'];
                            ?>
                            </h2>
            </a>
            <p class="card_desc">
                <?php
                    echo  fetch_product(1)['product_description'];
                ?>
            </p>
        </div>
        
          <div class="card_footer_container">
            <div class="author_container">
            <div class="author_info_container">
                <span style="color: white;">

                    <?php
                    echo "Price: ".fetch_product(1)['price'];
                    ?>
                </span>
                <label for="quantity" style = "color : white">Quantity</label>
                <input type="number" name="quantity2" id="quantity2" min="0">
              </div>
            </div>
            
            <div class="card_tag_container">
                <span><input type="submit" name ="two" value="Buy Now"></span>
            </div>
        </div>
    </div>
    
    <!-- card 2 ends here -->
    
        <!-- card 3 start -->
        <div class="card_container">
          <a href="#" class="card_image_container">
            <img
              src="../images/electronics/E-PROD003.jpg"
              alt="card 3 image"
              class="card_image"
              loading="lazy"
            />
          </a>

          <div class="card_title_container">
            <a href="#" class="card_title_link">
                <h2 class="card_title">
                    <?php
                        echo  fetch_product(2)['product_name'];
                    ?>
                </h2>
            </a>
            <p class="card_desc">
                <?php
                    echo  fetch_product(2)['product_description'];
                ?>
            </p>
        </div>
        
          <div class="card_footer_container">
            <div class="author_container">
                <div class="author_info_container">
                <span style="color: white;">

                    <?php
                    echo "Price: ".fetch_product(2)['price'];
                    ?>
                    </span>
                    <label for="quantity" style = "color : white">Quantity</label>
                    <input type="number" name="quantity3" id="quantity3" min="0">
              </div>
            </div>

            <div class="card_tag_container">
                <span><input type="submit" name ="three" value="Buy Now"></span>
            </div>
          </div>
        </div>
        
        <!-- card 3 ends here -->
        
        <!-- card 4 start -->
        <div class="card_container">
            <a href="#" class="card_image_container">
                <img
                src="../images/electronics/E-PROD004.jpg"
                alt="card 4 image"
                class="card_image"
                loading="lazy"
                />
            </a>
            
            <div class="card_title_container">
                <a href="#" class="card_title_link">
                    <h2 class="card_title">
                        <?php
                            echo  fetch_product(3)['product_name'];
                        ?>
                    </h2>
                </a>
                <p class="card_desc">
                    <?php
                        echo  fetch_product(3)['product_description'];
                    ?>
                </p>
            </div>
            
            <div class="card_footer_container">
                <div class="author_container">
                    <div class="author_info_container">
                    <span style="color: white;">

                        <?php
                        echo "Price: ".fetch_product(3)['price'];
                        ?>
                        </span>
              <label for="quantity" style = "color : white">Quantity</label>
              <input type="number" name="quantity4" id="quantity4" min="0">
            </div>
            </div>

            <div class="card_tag_container">
                <span><input type="submit" name ="four" value="Buy Now"></span>
            </div>
          </div>
        </div>

        <!-- card 4 ends here -->
        
        <!-- card 5 start -->
        <div class="card_container">
            <a href="#" class="card_image_container">
                <img
                src="../images/electronics/E-PROD005.jpg"
                alt="card 5 image"
                class="card_image"
                loading="lazy"
                />
            </a>
            
            <div class="card_title_container">
                <a href="#" class="card_title_link">
                    <h2 class="card_title">
                        <?php
                            echo  fetch_product(4)['product_name'];
                        ?>
                    </h2>
                </a>
                <p class="card_desc">
                <?php
                    echo  fetch_product(4)['product_description'];
                ?>
                </p>
            </div>
            
            <div class="card_footer_container">
                <div class="author_container">
                    <div class="author_info_container">
                    <span style="color: white;">

                    <?php
                    echo "Price: ".fetch_product(4)['price'];
                    ?>
                    </span>
                        <label for="quantity" style = "color : white">Quantity</label>
                        <input type="number" name="quantity5" id="quantity5" min="0">
                    </div>
                </div>
                
                <div class="card_tag_container">
                    <span><input type="submit" name ="five" value="Buy Now"></span>
                </div>
          </div>
        </div>

        <!-- card 5 ends here -->
        
        <!-- card 6 start -->
        <div class="card_container">
            <a href="#" class="card_image_container">
                <img
              src="../images/electronics/E-PROD006.jpg"
              alt="card 6 image"
              class="card_image"
              loading="lazy"
            />
          </a>

          <div class="card_title_container">
            <a href="#" class="card_title_link">
              <h2 class="card_title">
                    <?php
                        echo  fetch_product(5)['product_name'];
                    ?>
              </h2>
            </a>
            <p class="card_desc">
                <?php
                    echo  fetch_product(5)['product_description'];
                ?>
            </p>
        </div>
        
          <div class="card_footer_container">
            <div class="author_container">
                <div class="author_info_container">
                <span style="color: white;">

                <?php
                echo "Price: ".fetch_product(5)['price'];
                ?>
                </span>
              <label for="quantity" style = "color : white">Quantity</label>
              <input type="number" name="quantity6" id="quantity6" min="0">
              </div>
            </div>
            
            <div class="card_tag_container">
                <span><input type="submit" name ="six" value="Buy Now"></span>
            </div>
        </div>
    </div>
    
        <!-- card 6 ends here -->

        <!-- card 7 start -->
        <div class="card_container">
            <a href="#" class="card_image_container">
                <img
                src="../images/electronics/E-PROD007.jpg"
                alt="card 7 image"
                class="card_image"
                loading="lazy"
                />
            </a>
            
            <div class="card_title_container">
                <a href="#" class="card_title_link">
                    <h2 class="card_title">
                        <?php
                            echo  fetch_product(6)['product_name'];
                        ?>
                    </h2>
                </a>
                <p class="card_desc">
                    <?php
                        echo  fetch_product(6)['product_description'];
                    ?>
                </p>
          </div>
          
          <div class="card_footer_container">
              <div class="author_container">
                  <div class="author_info_container">
                  <span style="color: white;">

                    <?php
                    echo "Price: ".fetch_product(7)['price'];
                    ?>
                    </span>
                      <label for="quantity" style = "color : white">Quantity</label>
                      <input type="number" name="quantity7" id="quantity7" min="0">
                    </div>
                </div>
                
                <div class="card_tag_container">
                    <span><input type="submit" name ="seven" value="Buy Now"></span>
                </div>
          </div>
        </div>

        <!-- card 7 ends here -->
        
        <!-- card 8 start -->
        <div class="card_container">
            <a href="#" class="card_image_container">
                <img
              src="../images/electronics/E-PROD008.jpg"
              alt="card 8 image"
              class="card_image"
              loading="lazy"
              />
          </a>
          
          <div class="card_title_container">
              <a href="#" class="card_title_link">
                  <h2 class="card_title">
                    <?php
                        echo  fetch_product(7)['product_name'];
                    ?>
                  </h2>
                </a>
            <p class="card_desc">
                <?php
                    echo  fetch_product(7)['product_description'];
                ?>
            </p>
          </div>

          <div class="card_footer_container">
            <div class="author_container">
            <div class="author_info_container">
            <span style="color: white;">

            <?php
            echo "Price: ".fetch_product(7)['price'];
            ?>
            </span>
              <label for="quantity" style = "color : white">Quantity</label>
              <input type="number" name="quantity8" id="quantity8" min="0">
              </div>
            </div>

            <div class="card_tag_container">
                <span><input type="submit" name ="eight" value="Buy Now"></span>
            </div>
        </div>
    </div>
    
        <!-- card 8 ends here -->
        
    </main>
</div>
</form>
</body>
</html>
