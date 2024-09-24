<?php $page = 'community'; ?>
<?php include 'sidebar.php'; ?>


<div class="content" id="content">



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Clone</title>
    <link rel="stylesheet" href="styles.css">
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
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px;
}

section {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    margin-bottom: 20px;
    padding: 20px;
    width: calc(50% - 30px);
}

h2 {
    color: #3b5998;
    font-size: 20px;
    margin-top: 0;
}

textarea, input[type="text"], input[type="file"], input[type="date"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.post {
    background-color: #f2f7f9;
    border-radius: 8px;
    margin-bottom: 20px;
    padding: 10px;
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

.post-actions button i {
    margin-right: 5px;
}


.container
{
    max-width:100%;
}
       
       

@media screen and (max-width: 768px) {
  /* Override padding for mobile view */
  .container {
    padding-left: 0px;
    padding-right: 0px;
  }

  main{
    display:block;
    margin:0px;
    padding:0px;
  }
section
{
    width:auto;
}

}




       
       
       </style>
</head>
<body>
<div class="container">
    

    <main>
        <!-- Create sections for adding photos, writing articles, sharing events, and writing posts -->
        <section class="add-photos">
            <!-- Add photo upload functionality here -->
            <h2>Share Photos</h2>
            <input type="file" accept="image/*">
            <!-- Additional features can be added here -->
        </section>

        <section class="write-article">
            <!-- Add article writing functionality here -->
            <h2>Write Article</h2>
            <textarea placeholder="Write your article..."></textarea>
            <!-- Additional features can be added here -->
        </section>

        <section class="share-event">
            <!-- Add event sharing functionality here -->
            <h2>Share Event</h2>
            <input type="text" placeholder="Event name">
            <input type="date" placeholder="Event date">
            <textarea placeholder="Event description..."></textarea>
            <!-- Additional features can be added here -->
        </section>

        <section class="write-post">
            <!-- Add post writing functionality here -->
            <h2>Write a Post</h2>
            <textarea placeholder="What's on your mind?"></textarea>
            <!-- Additional features can be added here -->
        </section>

        <!-- News Feed Section -->
        <section class="news-feed">
            <h2>News Feed</h2>
            <!-- Posts from friends and followed pages can be displayed here -->
            <!-- Example post -->
            <div class="post">
                <div class="post-header">
                    <img src="https://res.cloudinary.com/ds2xh85dt/image/upload/v1703685536/Untitled_design_30_zeqjiv.png" alt="Profile Picture">
                    <div class="post-info">
                        <h3>Webdesert</h3>
                        <p>2 hours ago</p>
                    </div>
                </div>
                <div class="post-content">
                    <p>We are hiring some urgent web developers from Academy as a internship in bangalore</p>
                    <!-- Additional content like images, videos, etc., can be added here -->
                </div>
                <div class="post-actions">
                    <button><i class="far fa-thumbs-up"></i> Like</button>
                    <button><i class="far fa-comment"></i> Comment</button>
                    <button><i class="far fa-share-square"></i> Share</button>
                </div>
            </div>

            <div class="post">
                <div class="post-header">
                    <img src="https://steelbluemedia.com/wp-content/uploads/2019/06/new-google-favicon-512.png" alt="Profile Picture">
                    <div class="post-info">
                        <h3>Google</h3>
                        <p>3 hours ago</p>
                    </div>
                </div>
                <div class="post-content">
                    <p>We are hiring some urgent web developers from Academy as a internship in bangalore</p>
                    <img src="https://www.zdnet.com/a/img/resize/4d812c16bb08710a12b4802db6789c9969ab8137/2020/04/30/120ce3e8-a4c8-4d15-baaf-75335c8da183/istock-1154834209.jpg?auto=webp&width=1280" style="width:100%">
                </div>
                <div class="post-actions">
                    <button><i class="far fa-thumbs-up"></i> Like</button>
                    <button><i class="far fa-comment"></i> Comment</button>
                    <button><i class="far fa-share-square"></i> Share</button>
                </div>
            </div>

            <div class="post">
                <div class="post-header">
                    <img src="https://res.cloudinary.com/ds2xh85dt/image/upload/v1714710314/amazon-logo-on-transparent-background-free-vector_rlprlf.jpg" alt="Profile Picture">
                    <div class="post-info">
                        <h3>Amazon</h3>
                        <p>3 Weeks ago</p>
                    </div>
                </div>
                <div class="post-content">
                    <p>We are hiring some urgent web developers from Academy as a internship in bangalore</p>
                    <img src="https://res.cloudinary.com/ds2xh85dt/image/upload/v1714710292/merlin_175989213_eb0e728c-de14-4adf-8c0a-60c461c08a1f-superJumbo_zlbiv5.jpg" style="width:100%">
                </div>
                <div class="post-actions">
                    <button><i class="far fa-thumbs-up"></i> Like</button>
                    <button><i class="far fa-comment"></i> Comment</button>
                    <button><i class="far fa-share-square"></i> Share</button>
                </div>
            </div>

            <div class="post">
                <div class="post-header">
                    <img src="https://res.cloudinary.com/ds2xh85dt/image/upload/v1703685536/Untitled_design_30_zeqjiv.png" alt="Profile Picture">
                    <div class="post-info">
                        <h3>Webdesert</h3>
                        <p>1 Weeks ago</p>
                    </div>
                </div>
                <div class="post-content">
                    <p>Join workshop for creating your own</p>
                    <img src="https://res.cloudinary.com/ds2xh85dt/image/upload/v1713964708/WhatsApp_Image_2024-04-24_at_13.45.02_90aca5fb_xeboid.jpg" style="width:100%">
                </div>
                <div class="post-actions">
                    <button><i class="far fa-thumbs-up"></i> Like</button>
                    <button><i class="far fa-comment"></i> Comment</button>
                    <button><i class="far fa-share-square"></i> Share</button>
                </div>
            </div>


            <!-- More posts can be added dynamically or fetched from a server -->
        </section>
    </main>

    <footer>
        <!-- Footer content can be added here -->
    </footer>
</div>
</body>
</html>

</div>