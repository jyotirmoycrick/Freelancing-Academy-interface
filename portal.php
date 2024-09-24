<?php  $page = 'portal'; ?>
<?php include 'sidebar.php'; ?>


<div class="content" id="content">
   
    <!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include your CSS file here -->
    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
      body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    
    background-color: #f1f5f9;
}


header h1 {
    margin: 0;
}

main {
    padding: 20px;
}

h1 {
    color: #333;
    text-align: center;
}

.posts {
    display: grid;
    gap: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    margin-bottom: 20px;
    padding: 20px;
    width: calc(70% - 30px);
}


.post {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.2);
    padding: 20px !important;
}

.post-header {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.post-header img {
    border-radius: 50%;
    margin-right: 10px;
    width: 40px;
    height: 40px;
}

.post-header h3 {
    margin: 0;
    font-size: 16px;
    color: #333;
}

.post-header p {
    margin: 0;
    font-size: 12px;
    color: #777;
}

.post-content {
    margin-bottom: 10px;
}

.post-actions button {
    background-color: transparent;
    border: none;
    color: #777;
    cursor: pointer;
    margin-right: 10px;
    padding: 5px 10px;
}

.post-actions button:hover {
    color: #333;
}

/* Verified badge style */
.verified-badge {/* Facebook blue color */
    font-size: 13px;
    margin-left: 5px;
}

.rank-section,
.participation-section,.achievements-section {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    margin-left:20px;
    margin-bottom:5px;
    margin-right:10px;
}

.rank-section h3,
.participation-section h3,
.achievements-section h3 {
    margin-top: 0;
    color: #333;
    display: flex;
    align-items: center;
}

.rank-section p,
.participation-section p {
    margin: 5px 0;
    color: #777;
}

.achievements-section ul {
    list-style: none;
    padding: 0;
}

.achievements-section ul li {
    margin-bottom: 5px;
}

.fa-trophy,
.fa-chart-line,
.fa-medal {
    margin-right: 10px;
}

.post {
    border-radius: 8px;
    margin: 5px;
    padding: 10px;
}

.container
{
    max-width:100%;
}

@media screen and (max-width: 768px) {
  /* Override padding for mobile view */
  .container {
    padding-left: 0px !important;
    padding-right: 0px !important;
  }

  .user-info
  {
    margin:0px;
  }

  .posts
  {
    width:auto;
  }

  .rank-section
  {
    margin:0px;
  }

  main{
    display:block;
    margin:0px;
    padding:0px;
  }

}


        </style>
</head>
<body>
 
<div class="container">
<main>
        
        <div class="d-flex flex-md-row flex-column">
            <section class="posts">
                <!-- Example posts from different users -->
                <!-- Post 1 -->
                <div class="post">
                    <div class="post-header">
                        <img src="https://res.cloudinary.com/ds2xh85dt/image/upload/v1703685536/Untitled_design_30_zeqjiv.png" alt="Profile Picture">
                        <div class="post-info">
                            <h3>Webdesert<span class="verified-badge"><i class="fas fa-check-circle"></i></span></h3>
                            <p>2 hours ago (India)</p>
                        </div>
                    </div>
                    <div class="post-content">
                        <p>Need a e-commarce website for my business.</p>
                        <p>XYZ Corporation is seeking an experienced e-commerce website developer to join our team. The ideal candidate will have expertise in building and maintaining e-commerce platforms, including but not limited to online storefronts, payment processing systems, and order management.</p>
                        
                        <p>Skills: HTML, CSS, JavaScript, PHP, MySQL, e-commerce platforms (e.g., Shopify, WooCommerce), responsive web design</p>
                        <!-- Additional content like images, videos, etc., can be added here -->
                        <p><strong>Budget: ₹ 10,000</strong></p>
                    </div>
                    <div class="post-actions">
                        <button><i class="far fa-thumbs-up"></i> Like</button>
                        <button class="apply-button"><i class="far fa-comment"></i> Apply</button>
                        <button><i class="far fa-share-square"></i> Share</button>
                    </div>
                </div>
                <!-- Post 2 -->
                <div class="post">
                    <div class="post-header">
                        <img src="https://res.cloudinary.com/ds2xh85dt/image/upload/v1714679646/images_3_zgrhnf.jpg" alt="Profile Picture">
                        <div class="post-info">
                            <h3>John mack<span class="verified-badge"><i class="fas fa-check-circle"></i></span></h3>
                            <p>1 day ago (USA)</p>
                        </div>
                    </div>
                    <div class="post-content">
                    
                <p>XYZ Corporation is seeking a talented logo designer to create a brand identity for our company. The ideal candidate will have a strong portfolio showcasing creative and innovative logo designs.</p>
                
                
                <p>Skills: Adobe Illustrator, Adobe Photoshop, branding, typography, creative thinking</p>
                <p><strong>Budget: ₹ 500 - ₹ 1000</strong></p>
                
                        <!-- Additional content like images, videos, etc., can be added here -->
                    </div>
                    <div class="post-actions">
                        <button><i class="far fa-thumbs-up"></i> Like</button>
                        <button class="apply-button"><i class="far fa-comment"></i> Apply</button>
                        <button><i class="far fa-share-square"></i> Share</button>
                    </div>
                </div>
    
    
                <div class="post">
                    <div class="post-header">
                        <img src="https://res.cloudinary.com/ds2xh85dt/image/upload/v1714680011/1668007341661_pxtdrq.jpg" alt="Profile Picture">
                        <div class="post-info">
                            <h3>Amit mishra<span class="verified-badge"><i class="fas fa-check-circle"></i></span></h3>
                            <p>8 day ago (India)</p>
                        </div>
                    </div>
                    <div class="post-content">
                    
                <p>XYZ Corporation is looking for a skilled banner designer to create visually appealing banners for our online campaigns and advertisements. The ideal candidate should have a strong understanding of design principles and be proficient in graphic design software.</p>
                
                
                <p>Skills: Adobe Photoshop, Adobe Illustrator, graphic design, typography, creativity</p>
                <p><strong>Budget: ₹ 4050 - ₹ 9000</strong></p>
                <!-- Mention budget in bold -->
                <!-- Additional information like deadline, dimensions, target audience, etc., can be added here -->
                        <!-- Additional content like images, videos, etc., can be added here -->
                    </div>
                    <div class="post-actions">
                        <button><i class="far fa-thumbs-up"></i> Like</button>
                        <button class="apply-button"><i class="far fa-comment"></i> Apply</button>
                        <button><i class="far fa-share-square"></i> Share</button>
                    </div>
                </div>



                <div class="post">
                    <div class="post-header">
                        <img src="https://static9.depositphotos.com/1093689/1159/i/450/depositphotos_11594175-stock-photo-photo-of-handsome-middle-aged.jpg" alt="Profile Picture">
                        <div class="post-info">
                            <h3>Samrat Ghosh<span class="verified-badge"><i class="fas fa-check-circle"></i></span></h3>
                            <p>8 day ago (India)</p>
                        </div>
                    </div>
                    <div class="post-content">
                    
                <p>XYZ Corporation is looking for a skilled banner designer to create visually appealing banners for our online campaigns and advertisements. The ideal candidate should have a strong understanding of design principles and be proficient in graphic design software.</p>
                
                
                <p>Skills: Adobe Photoshop, Adobe Illustrator, graphic design, typography, creativity</p>
                <p><strong>Budget: ₹ 400 - ₹ 900</strong></p>
                <!-- Mention budget in bold -->
                <!-- Additional information like deadline, dimensions, target audience, etc., can be added here -->
                        <!-- Additional content like images, videos, etc., can be added here -->
                    </div>
                    <div class="post-actions">
                        <button><i class="far fa-thumbs-up"></i> Like</button>
                        <button class="apply-button"><i class="far fa-comment"></i> Apply</button>
                        <button><i class="far fa-share-square"></i> Share</button>
                    </div>
                </div>




                <div class="post">
                    <div class="post-header">
                        <img src="https://png.pngtree.com/png-vector/20230928/ourmid/pngtree-young-indian-man-png-image_10149661.png" alt="Profile Picture">
                        <div class="post-info">
                            <h3>Sujoy biswas<span class="verified-badge"><i class="fas fa-check-circle"></i></span></h3>
                            <p>8 day ago (India)</p>
                        </div>
                    </div>
                    <div class="post-content">
                    
                <p>XYZ Corporation is looking for a skilled banner designer to create visually appealing banners for our online campaigns and advertisements. The ideal candidate should have a strong understanding of design principles and be proficient in graphic design software.</p>
                
                
                <p>Skills: Adobe Photoshop, Adobe Illustrator, graphic design, typography, creativity</p>
                <p><strong>Budget: ₹ 500 - ₹ 1900</strong></p>
                <!-- Mention budget in bold -->
                <!-- Additional information like deadline, dimensions, target audience, etc., can be added here -->
                        <!-- Additional content like images, videos, etc., can be added here -->
                    </div>
                    <div class="post-actions">
                        <button><i class="far fa-thumbs-up"></i> Like</button>
                        <button class="apply-button"><i class="far fa-comment"></i> Apply</button>
                        <button><i class="far fa-share-square"></i> Share</button>
                    </div>
                </div>



                <div class="post">
                    <div class="post-header">
                        <img src="https://res.cloudinary.com/ds2xh85dt/image/upload/v1714924369/istockphoto-181062211-612x612_nszu3i.jpg" alt="Profile Picture">
                        <div class="post-info">
                            <h3>mc Harry<span class="verified-badge"><i class="fas fa-check-circle"></i></span></h3>
                            <p>8 day ago (UK)</p>
                        </div>
                    </div>
                    <div class="post-content">
                    
                <p>XYZ Corporation is looking for a skilled banner designer to create visually appealing banners for our online campaigns and advertisements. The ideal candidate should have a strong understanding of design principles and be proficient in graphic design software.</p>
                
                
                <p>Skills: Adobe Photoshop, Adobe Illustrator, graphic design, typography, creativity</p>
                <p><strong>Budget: ₹ 1500 - ₹ 1900</strong></p>
                <!-- Mention budget in bold -->
                <!-- Additional information like deadline, dimensions, target audience, etc., can be added here -->
                        <!-- Additional content like images, videos, etc., can be added here -->
                    </div>
                    <div class="post-actions">
                        <button><i class="far fa-thumbs-up"></i> Like</button>
                        <button class="apply-button"><i class="far fa-comment"></i> Apply</button>
                        <button><i class="far fa-share-square"></i> Share</button>
                    </div>
                </div>


                <div class="post">
                    <div class="post-header">
                        <img src="https://res.cloudinary.com/ds2xh85dt/image/upload/v1714924378/images_4_vphpr8.jpg" alt="Profile Picture">
                        <div class="post-info">
                            <h3>Phillips Disusa<span class="verified-badge"><i class="fas fa-check-circle"></i></span></h3>
                            <p>8 day ago (USA)</p>
                        </div>
                    </div>
                    <div class="post-content">
                    
                <p>XYZ Corporation is looking for a skilled banner designer to create visually appealing banners for our online campaigns and advertisements. The ideal candidate should have a strong understanding of design principles and be proficient in graphic design software.</p>
                
                
                <p>Skills: Adobe Photoshop, Adobe Illustrator, graphic design, typography, creativity</p>
                <p><strong>Budget: ₹ 400 - ₹ 400</strong></p>
                <!-- Mention budget in bold -->
                <!-- Additional information like deadline, dimensions, target audience, etc., can be added here -->
                        <!-- Additional content like images, videos, etc., can be added here -->
                    </div>
                    <div class="post-actions">
                        <button><i class="far fa-thumbs-up"></i> Like</button>
                        <button class="apply-button"><i class="far fa-comment"></i> Apply</button>
                        <button><i class="far fa-share-square"></i> Share</button>
                    </div>
                </div>




                <div class="post">
                    <div class="post-header">
                        <img src="https://img.kwcdn.com/product/fancy/3db57539-3b9a-4ee1-aa3b-a55f40b66308.jpg?imageView2/2/w/500/q/60/format/webp" alt="Profile Picture">
                        <div class="post-info">
                            <h3>Sk Ali<span class="verified-badge"><i class="fas fa-check-circle"></i></span></h3>
                            <p>8 day ago (Dubai)</p>
                        </div>
                    </div>
                    <div class="post-content">
                    
                <p>XYZ Corporation is looking for a skilled banner designer to create visually appealing banners for our online campaigns and advertisements. The ideal candidate should have a strong understanding of design principles and be proficient in graphic design software.</p>
                
                
                <p>Skills: Adobe Photoshop, Adobe Illustrator, graphic design, typography, creativity</p>
                <p><strong>Budget: ₹ 700 - ₹ 1700</strong></p>
                <!-- Mention budget in bold -->
                <!-- Additional information like deadline, dimensions, target audience, etc., can be added here -->
                        <!-- Additional content like images, videos, etc., can be added here -->
                    </div>
                    <div class="post-actions">
                        <button><i class="far fa-thumbs-up"></i> Like</button>
                        <button class="apply-button"><i class="far fa-comment"></i> Apply</button>
                        <button><i class="far fa-share-square"></i> Share</button>
                    </div>
                </div>




                <div class="post">
                    <div class="post-header">
                        <img src="https://i.pinimg.com/736x/61/51/a7/6151a7b6ddde40ae58424c7e3b65f7ac.jpg" alt="Profile Picture">
                        <div class="post-info">
                            <h3>Hridoy Chattapadhay<span class="verified-badge"><i class="fas fa-check-circle"></i></span></h3>
                            <p>8 day ago (India)</p>
                        </div>
                    </div>
                    <div class="post-content">
                    
                <p>XYZ Corporation is looking for a skilled banner designer to create visually appealing banners for our online campaigns and advertisements. The ideal candidate should have a strong understanding of design principles and be proficient in graphic design software.</p>
                
                
                <p>Skills: Adobe Photoshop, Adobe Illustrator, graphic design, typography, creativity</p>
                <p><strong>Budget: ₹ 5000 - ₹ 10,000</strong></p>
                <!-- Mention budget in bold -->
                <!-- Additional information like deadline, dimensions, target audience, etc., can be added here -->
                        <!-- Additional content like images, videos, etc., can be added here -->
                    </div>
                    <div class="post-actions">
                        <button><i class="far fa-thumbs-up"></i> Like</button>
                        <button class="apply-button"><i class="far fa-comment"></i> Apply</button>
                        <button><i class="far fa-share-square"></i> Share</button>
                    </div>
                </div>



                <div class="post">
                    <div class="post-header">
                        <img src="https://res.cloudinary.com/ds2xh85dt/image/upload/v1714924791/images_6_ktqivi.jpg" alt="Profile Picture">
                        <div class="post-info">
                            <h3>Sufia Khatun<span class="verified-badge"><i class="fas fa-check-circle"></i></span></h3>
                            <p>8 day ago (India)</p>
                        </div>
                    </div>
                    <div class="post-content">
                    
                <p>XYZ Corporation is looking for a skilled banner designer to create visually appealing banners for our online campaigns and advertisements. The ideal candidate should have a strong understanding of design principles and be proficient in graphic design software.</p>
                
                
                <p>Skills: Adobe Photoshop, Adobe Illustrator, graphic design, typography, creativity</p>
                <p><strong>Budget: ₹ 500 - ₹ 1000</strong></p>
                <!-- Mention budget in bold -->
                <!-- Additional information like deadline, dimensions, target audience, etc., can be added here -->
                        <!-- Additional content like images, videos, etc., can be added here -->
                    </div>
                    <div class="post-actions">
                        <button><i class="far fa-thumbs-up"></i> Like</button>
                        <button class="apply-button"><i class="far fa-comment"></i> Apply</button>
                        <button><i class="far fa-share-square"></i> Share</button>
                    </div>
                </div>



                <div class="post">
                    <div class="post-header">
                        <img src="https://res.cloudinary.com/ds2xh85dt/image/upload/v1714924785/images_5_cgp3vu.jpg" alt="Profile Picture">
                        <div class="post-info">
                            <h3>Akari mia<span class="verified-badge"><i class="fas fa-check-circle"></i></span></h3>
                            <p>8 day ago (Japan)</p>
                        </div>
                    </div>
                    <div class="post-content">
                    
                <p>XYZ Corporation is looking for a skilled banner designer to create visually appealing banners for our online campaigns and advertisements. The ideal candidate should have a strong understanding of design principles and be proficient in graphic design software.</p>
                
                
                <p>Skills: Adobe Photoshop, Adobe Illustrator, graphic design, typography, creativity</p>
                <p><strong>Budget: ₹ 10,000 - ₹ 12,000</strong></p>
                <!-- Mention budget in bold -->
                <!-- Additional information like deadline, dimensions, target audience, etc., can be added here -->
                        <!-- Additional content like images, videos, etc., can be added here -->
                    </div>
                    <div class="post-actions">
                        <button><i class="far fa-thumbs-up"></i> Like</button>
                        <button class="apply-button"><i class="far fa-comment"></i> Apply</button>
                        <button><i class="far fa-share-square"></i> Share</button>
                    </div>
                </div>


                </section>
                
                <section class="user-info d-flex flex-column">
        <div class="rank-section achievements-section">
            <div class="post">
                <h3><i class="fas fa-trophy" style="color: #ebb800;"></i> User Rank</h3>
                <p style="color: green; margin-bottom:30px;">#789</p><hr>
                <h3><i class="fas fa-chart-line" style="color: green;"></i> Project Completed</h3>
                <p style="color: green; margin-bottom:30px;">#5</p><hr>
                <h3 style="margin-bottom:20px;"><i class="fas fa-medal" style="color: purple;"></i> Achievements</h3>
                <ul>
                    <li><i class="fas fa-trophy" style="color: gold;"></i> Gold Medal - Coding Competition</li>
                    <li><i class="fas fa-medal" style="color: silver;"></i> Silver Medal - Logo Design Competition</li>
                </ul>
            </div>
        </div>
        
    </section>
    
    </div>
    
                <!-- More posts can be added similarly -->

                <!-- Modal -->
                <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="applyModalLabel">Apply for Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add your form fields here -->
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="message">Mobile number</label>
                        <input class="form-control" id="message" rows="3" placeholder="Enter your mobile number"></input>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send Application</button>
            </div>
        </div>
    </div>
</div>

</div>
            
        </main>
    
        
    
        <script>
            // JavaScript to trigger the modal
            $(document).ready(function(){
                $(".apply-button").click(function(){
                    $("#applyModal").modal('show');
                });
            });
        </script>
</body>
</html>

</div>