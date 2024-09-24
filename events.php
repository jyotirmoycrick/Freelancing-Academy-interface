<?php $page = 'events'; ?>
<?php include 'sidebar.php'; ?>

<div class="content" id="content">
<!DOCTYPE html>
<html lang="en">
<head>



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include your CSS file here -->
    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* Add your CSS styles here */
        body {
            font-family: "Roboto", sans-serif;
            font-weight: 400;
            font-style: normal;
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
            color: #435f77;
            text-align: center;
        }

        .event-list {
            display: grid;
            gap: 20px;
        }

        .event {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 20px;
            cursor: pointer;
        }

        .event-icon {
            flex: 0 0 auto;
            margin-right: 20px;
            font-size: 24px;
        }

        .event-icon:hover {
            cursor: pointer;
        }

        .event-details h2 {
            margin-top: 0;
            color: #435f77;
        }

        .event-details p {
            margin: 5px 0;
            color: #435f77;
        }

        .event-buttons {
            margin-top: 10px;
        }

        .join-button {
            border: none;
            background-color: #0b75ea;
            color: #fff;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }

        .interested-button {
            border: none;
            background-color: green;
            color: #fff;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }

        .join-button:hover {
            background-color: #2c4370;
        }

        .rank-section,
        .participation-section,
        .achievements-section,
        .bulk-examples-section,
        .featured-section,
        .top-participants-section,
        .recent-submissions-section,
        .liked-entries-section,
        .upcoming-events-section,
        .popular-categories-section,
        .recent-winners-section,
        .my-participation-section,
        .my-rank-section {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        .rank-section h5,
        .participation-section h5,
        .achievements-section h5,
        .bulk-examples-section h5,
        .featured-section h5,
        .top-participants-section h5,
        .recent-submissions-section h5,
        .liked-entries-section h5,
        .upcoming-events-section h5,
        .popular-categories-section h5,
        .recent-winners-section h5,
        .my-participation-section h5,
        .my-rank-section h5 {
            margin-top: 0;
            color: #435f77;
            display: flex;
            align-items: center;
        }

        .rank-section p,
        .participation-section p,
        .my-participation-section p,
        .my-rank-section p {
            margin: 5px 0;
            color: #435f77;
        }

        .achievements-section ul,
        .bulk-examples-section ul,
        .liked-entries-section ol,
        .top-participants-section ol,
        .recent-submissions-section ul,
        .upcoming-events-section ul,
        .popular-categories-section ul,
        .recent-winners-section ul {
            list-style: none;
            padding: 0;
        }

        .achievements-section ul li,
        .bulk-examples-section ul li,
        .liked-entries-section ol li,
        .top-participants-section ol li,
        .recent-submissions-section ul li,
        .upcoming-events-section ul li,
        .popular-categories-section ul li,
        .recent-winners-section ul li {
            margin-bottom: 5px;
        }

        .fa-trophy,
        .fa-chart-line,
        .fa-medal {
            margin-right: 10px;
        }

        .fa-star,
        .fa-users,
        .fa-clock,
        .fa-heart,
        .fa-cube {
            margin-right: 10px;
        }

        .post {
            border-radius: 8px;
            margin: 5px;
            padding: 10px;
        }

        /* Additional Styles for New Sections */

        .upcoming-events-section,
        .popular-categories-section,
        .recent-winners-section,
        .my-participation-section,
        .my-rank-section {
            text-align: center;
        }

        .upcoming-events-section .event,
        .popular-categories-section .category,
        .recent-winners-section .winner {
            margin: 10px;
            padding: 10px;
            border: 1px solid #ebeff4;
            border-radius: 8px;
            transition: transform 0.3s;
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .upcoming-events-section .event:hover,
        .popular-categories-section .category:hover,
        .recent-winners-section .winner:hover {
            transform: scale(1.05);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .upcoming-events-section h5,
        .popular-categories-section h5,
        .recent-winners-section h5,
        .my-participation-section h5,
        .my-rank-section h5 {
            margin-bottom: 20px;
        }

        .upcoming-events-section .event p,
        .popular-categories-section .category p,
        .recent-winners-section .winner p,
        .my-participation-section p,
        .my-rank-section p {
            margin: 5px 0;
        }

        .upcoming-events-section .event-date {
            font-weight: bold;
            color: #007bff;
        }

        .popular-categories-section .category-name {
            font-weight: bold;
            color: #28a745;
        }

        .recent-winners-section .winner-name {
            font-weight: bold;
            color: #6610f2;
        }

        /* Popup Styles */
        .popup {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
            overflow: auto;
        }

        .popup-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
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

  main
  {
    
    padding-left: 0px;
    padding-right: 0px;

  }

 .fa-solid
 {
    line-height:2;
 }


}


    </style>
</head>
<body>

<div class="container">

    <main>
    <div class="recent-winners-section">
                <h5><i class="fas fa-award" style="color: #6610f2;"></i>&nbsp; Recent Winners</h5>
                <div class="winner" style="padding:20px;">
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                    <div class="d-flex flex-column justify-content-center">
                        <h6 >#1</h6>
    </div>
    <div class="d-flex flex-column justify-content-center" >
    <i class="fa-solid fa-trophy fa-xl" style="color:#ebb800;"  ></i>
    </div>


    <div class="d-flex flex-row flex-md-column justify-content-center">
                        <img src="https://res.cloudinary.com/ds2xh85dt/image/upload/v1712167574/433427866_796152972399795_6014580370984360617_n_rgae6z.jpg" style="height:40px; border-radius:50%">
    </div>
    <div class="d-flex flex-column justify-content-center">
                        <h6 class="winner-name">Ritthik Ghatak</h6>
    </div>
    <div class="d-flex flex-column justify-content-center">
                        <p>Adamas University</p>
    </div>
    <div class="d-flex flex-column justify-content-center">
                    <p>Winner of the Web Development Hackathon</p>
    </div>
    </div>
                </div>
                <div class="winner" style="padding:20px;">
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                    <div class="d-flex flex-column justify-content-center">
                        <h6>#2</h6>
    </div>
    <div class="d-flex flex-column justify-content-center" >
    <i class="fa-solid fa-trophy fa-xl" style="color:#c0c0c0;"  ></i>
    </div>
    <div class="d-flex flex-row flex-md-column  justify-content-center">
                        <img src="https://res.cloudinary.com/ds2xh85dt/image/upload/v1703663383/niladri_z1hslr.jpg" style="height:40px; border-radius:50%">
    </div>
    <div class="d-flex flex-column justify-content-center">
                        <h6 class="winner-name">Ananta Ghosh</h6>
    </div>
    <div class="d-flex flex-column justify-content-center">
                        <p>Adamas University</p>
    </div>
    <div class="d-flex flex-column justify-content-center">
                    <p>Winner of the Web Development Hackathon</p>
    </div>
    </div>
                </div>

                <div class="winner" style="padding:20px;">
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                    <div class="d-flex flex-column justify-content-center">
                        <h6>#3</h6>
    </div>
    <div class="d-flex flex-column justify-content-center" >
    <i class="fa-solid fa-trophy fa-xl" style="color:#cd7f32;"  ></i>
    </div>
    <div class="d-flex flex-row flex-md-column justify-content-center">
                        <img src="https://res.cloudinary.com/ds2xh85dt/image/upload/v1703663449/img_1_f6b2ym.jpg" style="height:40px; border-radius:50%">
    </div>
    <div class="d-flex flex-column justify-content-center">
                        <h6 class="winner-name">Arindam Mondal</h6>
    </div>
    <div class="d-flex flex-column justify-content-center">
                        <p>Adamas University</p>
    </div>
    <div class="d-flex flex-column justify-content-center">
                    <p>Winner of the Web Development Hackathon</p>
    </div>
    </div>
                </div>


            </div>
            
            <div class="upcoming-events-section">
                <h5><i class="fas fa-calendar-alt" style="color: #007bff;"></i>&nbsp; Upcoming Events</h5>
                
                
                <div class="event" style="padding:20px;">
                <div class="d-flex flex-column flex-md-row  justify-content-between">
                <div class="d-flex flex-column justify-content-center">
                    <h6>#1</h6>
    </div>
                <div class="d-flex flex-column justify-content-center">
                    <h6 style="color:#435f77;">Machine Learning Workshop</h6>
    </div>
    <div class="d-flex flex-column justify-content-center">
                    <p class="event-date">Date: June 20, 2024</p>
    </div>
    
    <div class="d-flex flex-column justify-content-center">
                    <p>Learn the fundamentals of machine learning in this hands-on workshop.</p>
    </div>
    </div>
                </div>

                <div class="event" style="padding:20px;">
                <div class="d-flex flex-column flex-md-row justify-content-between">
                <div class="d-flex flex-column justify-content-center">
                    <h6>#2</h6>
    </div>
                <div class="d-flex flex-column justify-content-center">
                    <h6 style="color:#435f77;">Web Development Hackathon</h6>
    </div>
    <div class="d-flex flex-column justify-content-center">
                    <p class="event-date">Date: June 21, 2024</p>
    </div>
    
    <div class="d-flex flex-column justify-content-center">
                    <p>Learn the fundamentals of machine learning in this hands-on workshop.</p>
    </div>
    </div>
                </div>
                <div class="event" style="padding:20px;">
                <div class="d-flex flex-column flex-md-row justify-content-between">
                <div class="d-flex flex-column justify-content-center">
                    <h6>#3</h6>
    </div>
                <div class="d-flex flex-column justify-content-center">
                    <h6 style="color:#435f77;">Python Coding Compition</h6>
    </div>
    <div class="d-flex flex-column justify-content-center">
                    <p class="event-date">Date: June 22, 2024</p>
    </div>
    
    <div class="d-flex flex-column justify-content-center">
                    <p>Learn the fundamentals of machine learning in this hands-on workshop.</p>
    </div>
    </div>
                </div>

            </div>
            <div class="popular-categories-section">
                <h5><i class="fas fa-tags" style="color: #28a745;"></i>&nbsp; Popular Categories</h5>
                <div class="category" style="padding:20px;">
                    <div class="d-flex flex-column flex-md-row  justify-content-between">
                    <div class="d-flex flex-column justify-content-center">
                        <h6>#1</h6>
    </div>
                    <div class="d-flex flex-column justify-content-center">
                    <h6 class="category-name">Artificial Intelligence</h6>
    </div>

    <div class="d-flex flex-column justify-content-center">
                    <p class="new">Learn more</p>
    </div>
    <div class="d-flex flex-column justify-content-center">
                    <p>Explore the latest advancements and applications in AI technology.</p>
    </div>
    </div>
                </div>

                <div class="category" style="padding:20px;">
                    <div class="d-flex flex-column flex-md-row  justify-content-between">
                    <div class="d-flex flex-column justify-content-center">
                        <h6>#2</h6>
    </div>
                    <div class="d-flex flex-column justify-content-center">
                    <h6 class="category-name">Cybersecurity</h6>
    </div>

    <div class="d-flex flex-column justify-content-center">
                    <p class="new">Learn more</p>
    </div>


    <div class="d-flex flex-column justify-content-center">
                    <p>Learn about cybersecurity threats and how to protect against them.</p>
    </div>
    </div>
                </div>


                <div class="category" style="padding:20px;">
                    <div class="d-flex flex-column flex-md-row  justify-content-between">
                    <div class="d-flex flex-column justify-content-center">
                        <h6>#3</h6>
    </div>
                    <div class="d-flex flex-column justify-content-center">
                    <h6 class="category-name">Data Science</h6>
    </div>

    <div class="d-flex flex-column justify-content-center">
                    <p class="new">Learn more</p>
    </div>
    <div class="d-flex flex-column justify-content-center">
                    <p>Discover insights from data and drive informed decision-making.</p>
    </div>
    </div>
                </div>


                
            </div>
            
            <div class="my-participation-section">
        <h5><i class="fas fa-user-check" style="color: #28a745;"></i>&nbsp; My Participation</h5>
        <p>You haven't participated in any events yet.</p>
    </div>

    <div class="my-rank-section">
        <h5><i class="fas fa-trophy" style="color: #ffc107;"></i>&nbsp; My Rank</h5>
        <p>You haven't achieved any rank yet.</p>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="applyModalLabel">Participate Now</h5>
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
                <p style="color:red; font-style:italic;">**After registration if you are unable to perticipate or not attend. it will reflect in your virtual cv and account</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

        </section>

    </main>

    <footer>
        <!-- Footer content can be added here -->
    </footer>

    </div>

    <script>


$(document).ready(function(){
    $(".event").click(function(){
        $("#applyModal").modal('show');
    });
});




        function toggleBookmark(icon) {
            icon.querySelector('i').classList.toggle('fa-solid');
            icon.querySelector('i').classList.toggle('far');
        }
    </script>
</body>
</html>

</div>
