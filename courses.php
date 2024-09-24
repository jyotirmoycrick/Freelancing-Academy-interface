<?php $page = 'courses'; ?>
<?php include 'sidebar.php'; ?>

<div class="content" id="content">

<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />




<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body
        {
            font-family: "Roboto", sans-serif;
  font-weight: 500;
  font-style: normal;
  
  background-color: #f1f5f9;
  color:#334155;
        }
        /* Custom CSS for courses */
        .course-section {
            padding: 20px;
            margin-top: 20px;
            background-color: #ffffff;
            border: 1px solid #ebeff4;
            
            box-shadow:rgba(151, 160, 176, 0.44) 0px 1px 2px 0px, rgba(151, 160, 176, 0.12) 0px -1px 1px 0px;
            border-radius:8px;
        }
        .course-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
        .course {
            background-color: #ffffff;
            padding: 15px;
            border-radius: 8px;
            box-shadow:rgba(151, 160, 176, 0.44) 0px 1px 2px 0px, rgba(151, 160, 176, 0.12) 0px -1px 1px 0px;
        }

        .course:hover
        {
            box-shadow: 0 2px 4px rgba(0,0,0,0.4);
        }
        .course h3 {
            margin-top: 0;
            font-size: 20px;
            font-weight:600;
        }

        .course p {
            font-size: 13px;
            font-weight:400;
        }
        .course img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .course-calendar {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }
        .course-calendar-icon {
            margin-right: 10px;
            color: #28a745; /* Green color for attended classes */
        }
        .course-calendar-icon.not-attended {
            color: #dc3545; /* Red color for not attended classes */
        }
        .course-calendar-text {
            font-size: 14px;
            color: #777;
        }

        .calendar {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
        }
        .calendar-date {
            text-align: center;
            padding: 10px;
            background-color: #f1f1f1;
            border-radius: 8px;
        }
        .attended {
            background-color: #28a745; /* Green color for attended classes */
            color: #fff;
        }
        .not-attended {
            background-color: #dc3545; /* Red color for not attended classes */
            color: #fff;
        }

        .course h3
        {
            margin-top: 10px;
        }
.carousel-bootstrap
{
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
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



    <div class="carousel-bootstrap">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item ">
                    <img class="d-block w-100" src="https://res.cloudinary.com/ds2xh85dt/image/upload/v1714807682/Liceria_Co._3_lw0bka.jpg" alt="First slide">
                </div>
                <div class="carousel-item active">
                    <img class="d-block w-100 " src="https://res.cloudinary.com/ds2xh85dt/image/upload/v1714808480/Liceria_Co._4_pdj0xt.jpg" alt="Second slide">
                </div>
                <div class="carousel-item ">
                    <img class="d-block w-100" src="https://res.cloudinary.com/ds2xh85dt/image/upload/v1714748245/Liceria_Co._2_hcdpfj.jpg" alt="Third slide">
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="course-section">
        
    <h4>My Progress (Weekly Basis)</h4><br>
        <!-- My Courses Section -->
        <div class="calendar">
            <!-- Example Calendar -->
            <!-- Replace with dynamic calendar based on user's attendance -->
            <div class="calendar-date attended">1</div>
            <div class="calendar-date attended">2</div>
            <div class="calendar-date attended">3</div>
            <div class="calendar-date attended">4</div>
            <div class="calendar-date attended ">5</div>
            <div class="calendar-date">6</div>
            <div class="calendar-date">7</div>
            <!-- Add more calendar dates as needed -->
        </div>
    </div>


    



    <!-- Courses List Section -->
    <div class="course-section">
        <h4>All Courses</h4><br>
        <div class="course-list">
            <!-- Example Courses -->
            <div class="course">
                <img src="https://www.reliablesoft.net/wp-content/uploads/2023/03/digital-marketing-definition-new.png" alt="Course Image">
                <h3>Digital Marketing using AI</h3>
                <p>Master the basics of freelancing, including finding clients, setting rates, and managing projects.</p>
                <p>Price: ₹5000</p>
                <button class="btn btn-primary">Enroll Now</button>
            </div>
            <div class="course">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6qZPij8SXriqld30dxxb-UzYwdEM0sF03YYkcG0JS0Q&s" alt="Course Image">
                <h3>Website design</h3>
                <p>Take your freelancing career to the next level with advanced strategies for client acquisition and project management.</p>
                <p>Price: ₹1000</p>
                <button class="btn btn-primary">Enroll Now</button>
            </div>
            <div class="course">
                <img src="https://res.cloudinary.com/ds2xh85dt/image/upload/v1714750627/Start-Freelancing-As-A-Design-Student_r05dwc.jpg" alt="Course Image">
                <h3>Effective Communication for Freelancers</h3>
                <p>Learn how to communicate effectively with clients and collaborators to ensure successful project outcomes. setting rates, and managing setting rates, and managing setting rates, and managing</p>
                <p>Price: ₹2000</p>
                <button class="btn btn-primary">Enroll Now</button>
            </div>
            <div class="course">
                <img src="https://d2ms8rpfqc4h24.cloudfront.net/mobile_application_development_ad3f711b7d.jpg" alt="Course Image">
                <h3>Application Development</h3>
                <p>Learn how to communicate effectively with clients and collaborators to ensure successful project outcomes. successful project outcomes.successful.ensure successful project outcomes. setting rates, and managing setting rates, and managing setting rates</p>
                <p>Price: ₹4000</p>
                <button class="btn btn-primary">Enroll Now</button>
            </div>
            <div class="course">
                <img src="https://miro.medium.com/v2/resize:fit:1400/0*TSAWo_AmOa4oP_yh.png" alt="Course Image">
                <h3>UI/UX design using AI</h3>
                <p>Learn how to communicate effectively with clients and collaborators to ensure successful project outcomes.</p>
                <p>Price: ₹2000</p>
                <button class="btn btn-primary">Enroll Now</button>
            </div>
            <div class="course">
                <img src="https://verticalresponse.com/wp-content/uploads/2022/10/seo.jpeg" alt="Course Image">
                <h3>Advanced SEO trick using AI</h3>
                <p>Learn how to communicate effectively with clients and collaborators to ensure successful project outcomes.  successful project outcomes.successful.</p>
                <p>Price: ₹2000</p>
                <button class="btn btn-primary">Enroll Now</button>
            </div>
            <div class="course">
                <img src="https://support.content.office.net/en-us/media/c429ccb4-9845-43fb-af91-281a50160366.png" alt="Course Image">
                <h3>Video editing using AI</h3>
                <p>Learn how to communicate effectively with clients and collaborators to ensure successful project outcomes. successful project outcomes.successful.</p>
                <p>Price: ₹2000</p>
                <button class="btn btn-primary">Enroll Now</button>
            </div>
            <div class="course">
                <img src="https://3danimation.in/wp-content/uploads/2020/12/Explainer-Video-Marketing-Agency.jpg" alt="Course Image">
                <h3>Marketing video making Using AI (animation)</h3>
                <p>Learn how to communicate effectively with clients and collaborators to ensure successful project outcomes.</p>
                <p>Price: ₹2000</p>
                <button class="btn btn-primary">Enroll Now</button>
            </div>
            <!-- Add more courses here -->
        </div>
    </div>


    <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <div class="d-flex flex-row justify-content-center">
                <h5 class="modal-title" id="applyModalLabel">Alert</h5>&nbsp;
                <div class="d-flex flex-column justify-content-center">
                <i class="fa-solid fa-triangle-exclamation"></i>
                </div>
            </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add your form fields here -->
                <p style="color:red; font-style:italic;">**Please complete your current running course then purchase another</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<script>
            // JavaScript to trigger the modal
            $(document).ready(function(){
                $(".btn").click(function(){
                    $("#applyModal").modal('show');
                });
            });
        </script>

</body>
</html>

</div>
