<?php  $page = 'discussion'; ?>
<?php include 'sidebar.php'; ?>
<div class="content" id="content">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussion</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Include your custom CSS file -->
    <link rel="stylesheet" href="styles.css">
    <style>
        body
        {
            background-color:#f1f5f9;
        }
        .card {
            background-color: rgb(255, 255, 255);
            margin-bottom: 20px;
            border: 1px solid rgb(204, 227, 255);
            border-radius: 8px;
            box-shadow:rgba(151, 160, 176, 0.44) 0px 1px 2px 0px, rgba(151, 160, 176, 0.12) 0px -1px 1px 0px;
        }

        .card .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #ced4da;
        }

        .card .card-body {
            padding: 20px;
        }

        .card .card-body p {
            margin-bottom: 10px;
        }

        .card .mentor-reply {
            margin-top: 20px;
            padding: 10px;
            background-color: #edf1fa;
            border-left: 5px solid #007bff;
            display: none;
            border-radius:10px;
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
    <!-- Navbar -->
    <div class="container mt-4">
        <!-- Discussion Board -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Discussion Board</h5>
            </div>
            <div class="card-body">
                <!-- List of discussions -->
                <div class="list">
                    <!-- Example discussion item -->
                    <div class="discussion">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-0">How to center image in card?</h6>
                            <small>Posted by Jyotirmoy Malo</small>
                        </div>
                        <p class="mb-0">Actually, my code was deleted so I can't able to show the exact code.</p>
                        <small class="text-muted">04/04/2023</small>
                        <!-- Mentor Reply -->
                        <div class="mentor-reply" style="display: none;">
                            <hr>
                            <p><strong>Mentor:</strong> Here is how you can center an image in a card:</p>
                            <code>
                                &lt;div class="card"&gt;<br>
                                &nbsp;&nbsp;&lt;img src="your_image.jpg" class="card-img-top mx-auto d-block" alt="..."/&gt;<br>
                                &nbsp;&nbsp;&lt;div class="card-body"&gt;<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&lt;h5 class="card-title"&gt;Card title&lt;/h5&gt;<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&lt;p class="card-text"&gt;Some example text.&lt;/p&gt;<br>
                                &nbsp;&nbsp;&lt;/div&gt;<br>
                                &lt;/div&gt;
                            </code>
                        </div>
                        <!-- Button to show/hide mentor reply -->
                        <button class="btn btn-link mentor-reply-btn">Mentor Reply</button>
                    </div>
                    <!-- End of example discussion item -->
                    <!-- More discussion items can be added dynamically or through backend integration -->
                </div>
            </div>
        </div>
         <!-- List of discussions -->
         <div class="list">
                    <?php
                    // Handle form submission
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Retrieve form data
                        $discussionTitle = $_POST['discussionTitle'];
                        $discussionContent = $_POST['discussionContent'];

                        // Display new discussion card
                        echo '<div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">New Discussion</h5>
                        </div>
                        <div class="card-body">
                            <!-- List of discussions -->
                            <div class="list">
                                <!-- Example discussion item -->
                                <div class="discussion">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="mb-0">'.$discussionTitle.'</h6>
                                        <small>Posted by Jyotirmoy Malo</small>
                                    </div>
                                    <p class="mb-0">'.$discussionContent.'</p>
                                    <small class="text-muted">Just Now</small>
                                    
                                <!-- End of example discussion item -->
                                <!-- More discussion items can be added dynamically or through backend integration -->
                            </div>
                        </div>
                    </div>';
                    }
                    ?>
                </div><!-- New Discussion Form -->
        

    <div class="card mt-4">
            <div class="card-header">
                <h5 class="mb-0">Create New Discussion</h5>
            </div>
            <div class="card-body">
                <!-- New discussion form -->
                <form id="newDiscussionForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label for="discussionTitle">Title</label>
                        <input type="text" class="form-control" id="discussionTitle" name="discussionTitle" required>
                    </div>
                    <div class="form-group">
                        <label for="discussionContent">Content</label>
                        <textarea class="form-control" id="discussionContent" name="discussionContent" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Post Discussion</button>
                </form>
            </div>
        </div>


        
</div>
    </div>
    <!-- Include your Bootstrap and custom JavaScript files -->
    <!-- Add your JavaScript code below -->
    <script>
        // JavaScript to toggle mentor reply visibility
        document.querySelectorAll('.mentor-reply-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const reply = btn.parentNode.querySelector('.mentor-reply');
                reply.style.display = (reply.style.display === 'none') ? 'block' : 'none';
            });
        });
    </script>
    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- Include your custom JavaScript file -->
</body>
</html>
</div>
