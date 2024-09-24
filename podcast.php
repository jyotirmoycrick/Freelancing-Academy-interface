<?php $page = 'podcast'; ?>
<?php include 'sidebar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podcast Page</title>
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

.podcast-videos {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}

.podcast-video {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.podcast-video iframe {
    width: 100%;
    height: 200px;
    border: none;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}

.podcast-info {
    padding: 10px;
}

.podcast-info h2 {
    color: #333;
    font-size: 18px;
    margin-top: 0;
}

.podcast-info p {
    color: #777;
    font-size: 14px;
    margin-bottom: 0;
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

  


}

        </style>
</head>
<body>
<div class="container">
    <main>
    <div class="content" id="content">
        <section class="podcast-videos">
            <!-- Example podcast videos with different names and titles -->
            <!-- Podcast video 1 -->
            <div class="podcast-video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_1" title="Podcast Video 1" frameborder="0" allowfullscreen></iframe>
                <div class="podcast-info">
                    <h2>Podcast Title 1</h2>
                    <p>Description of the podcast video 1</p>
                    <!-- Additional information like duration, upload date, etc., can be added here -->
                </div>
            </div>
            <!-- Podcast video 2 -->
            <div class="podcast-video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID_2" title="Podcast Video 2" frameborder="0" allowfullscreen></iframe>
                <div class="podcast-info">
                    <h2>Podcast Title 2</h2>
                    <p>Description of the podcast video 2</p>
                    <!-- Additional information like duration, upload date, etc., can be added here -->
                </div>
            </div>
            <!-- More podcast videos can be added similarly -->
        </section>
    </main>

    <footer>
        <!-- Footer content can be added here -->
    </footer>
                </div>
</body>
</html>

</div>