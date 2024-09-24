<?php $page = 'home'; ?>
<?php include 'sidebar.php'; ?>

<div class="content" id="content">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Custom CSS for e-learning platform */
        body {
            font-family: 'Roboto', sans-serif;
            background-color:#f1f5f9;
        }
        .section {
            padding: 20px;
            margin-top: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            
            box-shadow:rgba(151, 160, 176, 0.44) 0px 1px 2px 0px, rgba(151, 160, 176, 0.12) 0px -1px 1px 0px;
        }
        .section h4 {
            color: rgb(51, 65, 85);
            margin-bottom: 20px;
        }
        .section-content {
            padding: 20px;
            border-radius: 10px;
            background-color: rgb(255, 255, 255);
        }
        .card {
            margin-bottom: 20px;
            border-radius:8px;
        }
        .learning-report {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .learning-report h4 {
            margin-bottom: 0;
        }
        .learning-report .report-icon {
            font-size: 24px;
            color: #007bff;
        }
        .learning-report .view-report {
            color: #007bff;
            text-decoration: none;
        }
        
        .course-video {
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            max-width: 100%; /* Adjusted to fit container width */
        }
        .course-video h4 {
            margin-top: 0;
            color: #333;
        }
        .course-video video,
        .course-video iframe {
            max-width: 100%; /* Adjusted to fit container width */
            height: auto;
            border-radius: 8px;
        }
        .learning-cycle {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 40px;
        }
        .learning-cycle-step {
            text-align: center;
            flex: 1;
            padding: 20px;
            border-radius: 8px;
            background-color: #fff;
        }
        .learning-cycle-step h4 {
            margin-top: 0;
            color: #333;
        }
        .learning-cycle-step p {
            color: #666;
        }
        .learning-cycle-step i {
            font-size: 40px;
            color: #007bff;
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

        progress
        {
            display:none;
        }

        .video-title {
    border: 1px solid #ced4da;
    padding: 20px;
    margin-bottom: 10px;
    border-radius: 8px; /* Added box shadow */
    background-color: #fff; /* Added background color */
    transition: box-shadow 0.3s ease;
    cursor: pointer; /* Added transition for smoother effect */
}

.video-title:hover {
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2); /* Adjusted box shadow on hover */
}
.container
{
    max-width: 100% !important;
}
.carousel-bootstrap
{
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
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
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://res.cloudinary.com/ds2xh85dt/image/upload/v1714746630/Liceria_Co._qqalig.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://res.cloudinary.com/ds2xh85dt/image/upload/v1714747907/Liceria_Co._cbucal.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
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

    <!-- Learning Report Section -->
    <div class="section">
        <div class="learning-report" style="margin-bottom:15px;">
           
            <h4>Learning Report</h4>
            <a href="#" class="view-report"><i class="fas fa-chart-line report-icon" ></i> View Report</a>
        </div>
        <!-- Calendar for learning progress -->
        <div class="section-content">
            <div class="calendar">
                <!-- Example Calendar -->
                <!-- Replace with dynamic calendar based on user's attendance -->
                <div class="calendar-date attended">1</div>
                <div class="calendar-date attended">2</div>
                <div class="calendar-date not-attended">3</div>
                <div class="calendar-date attended">4</div>
                <div class="calendar-date attended">5</div>
                <div class="calendar-date attended">6</div>
                <div class="calendar-date">7</div>
                <!-- Add more calendar dates as needed -->
            </div>
        </div>
    </div>

    

    <!-- Learning Cycle Section -->
<div class="section">
    <h4>Learning Cycle</h4>
    
    <div class="section-content learning-cycle">
    <div class="d-flex flex-column flex-md-row">
        <div class="learning-cycle-step">
            <i class="fas fa-book-open"></i>
            <h4>Learn</h4>
            <p>Access thousands of courses taught by experts.</p>
        </div>
        <div class="learning-cycle-step">
            <i class="fas fa-laptop-code"></i>
            <h4>Practice</h4>
            <p>Hands-on practice with real-world projects.</p>
        </div>
        <div class="learning-cycle-step">
            <i class="fas fa-check-circle"></i>
            <h4>Assess</h4>
            <p>Track your progress with quizzes and assessments.</p>
        </div>
        </div>
    </div>


</div>

<!-- Videos Section -->
<div class="section video-section">
    <h4>Today's class (7th may)</h4>
    <div class="section-content course-videos">
        
        <!-- Video 1 -->
<div class="d-flex flex-column ">
    <div class="d-flex flex-column ">
        <div class="video-title" onclick="toggleVideo(1)">
            <div class="d-flex flex-row justify-content-between">1. Intro Video 
            <i class="fas fa-chevron-down"></i> <!-- Down arrow icon -->
            <i class="fas fa-chevron-up" style="display:none;"></i> <!-- Up arrow icon -->
</div>
        </div>
        
        <div class="course-video" id="video1" style="display:none;">
            <video id="normal-video" width="100%" controls>
                <source src="https://res.cloudinary.com/ds2xh85dt/video/upload/v1714765966/aiugsee.co.in_-_Google_Chrome_2024-03-17_22-58-34_fl4xnk.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
        <!-- Progress Bar -->
        <progress id="video-progress1" value="0" max="100"></progress>
        
        <!-- Video 2 (Locked until Video 1 is completed) -->
        <?php 
            $progress_threshold = 80; // Set the progress threshold to unlock the second video
            $video1_completed = false; // Placeholder for video completion status
            
            // Check if 'progress' parameter is set in the URL
            if (isset($_GET['progress']) && $_GET['progress'] >= $progress_threshold) {
                $video1_completed = true;
            }
        ?>
        <?php if ($video1_completed): ?>
            <div class="d-flex flex-column ">
        <div class="video-title" onclick="toggleVideo(2)">
            <div class="d-flex flex-row justify-content-between">
                2. Advanced Topic
                <i class="fas fa-chevron-down"></i> <!-- Down arrow icon -->
                <i class="fas fa-chevron-up" style="display:none;"></i> <!-- Up arrow icon -->
            </div>
        </div>
        <div class="course-video" id="video2" style="display:none;">
        <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/AUoNHRo8o98?si=s7-ZdSm1GNd52LHY" allowfullscreen></iframe>
</div>
        </div>
    </div>
<?php else: ?>
    <div class="video-title" onclick="toggleVideo(2)">
        <div class="d-flex flex-row justify-content-between">
            2. Advanced Topic
            <i class="fas fa-chevron-down"></i> <!-- Down arrow icon -->
            <i class="fas fa-chevron-up" style="display:none;"></i> <!-- Up arrow icon -->
        </div>
    </div>
    <div class="course-video" id="video2" style="display:none;">
        <div class="course-video locked">
            <h4>Advanced Topic (Locked)</h4>
            <p>Unlock this video after completing the previous one.</p>
        </div>
    </div>
        <?php endif; ?>
        <!-- Add more videos and their locking logic as needed -->
    </div>
</div>
</div>

<div class="section">
    <h4>My Courses</h4>
    <div class="section-content">
        <!-- Course 1 -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Digital Marketing using AI</h5>
                <p class="card-text">Master the basics of freelancing, including finding clients, setting rates, and managing projects.</p>
                <a href="#" class="btn btn-primary">Go to Course</a>
            </div>
        </div>
        <!-- Course 2 -->
        
        <!-- Add more courses as needed -->
    </div>
</div>

<script>

var video1 = document.getElementById('normal-video');
video1.addEventListener('ended', function() {
    // Mark the corresponding calendar date as attended
    document.querySelector('.calendar-date:nth-child(7)').classList.add('attended');
    // Reload the window after a short delay (for better UX)
    setTimeout(function() {
        window.location.reload();
    }, 1000); // 1000 milliseconds = 1 second
});


function toggleVideo(videoNumber) {
        var videoElement = document.getElementById('video' + videoNumber);
        var arrowDown = document.querySelector('.video-title:nth-child(' + videoNumber + ') .fa-chevron-down');
        var arrowUp = document.querySelector('.video-title:nth-child(' + videoNumber + ') .fa-chevron-up');
        
        if (videoElement.style.display === 'none' || videoElement.style.display === '') {
            // Video is currently hidden or has no inline style (initial state), so show it and toggle icons
            videoElement.style.display = 'block';
            arrowDown.style.display = 'none';
            arrowUp.style.display = 'inline';
        } else {
            // Video is currently visible, so hide it and toggle icons
            videoElement.style.display = 'none';
            arrowDown.style.display = 'inline';
            arrowUp.style.display = 'none';
        }
    }




function toggleVideo(videoNumber) {
        var videoElement = document.getElementById('video' + videoNumber);
        videoElement.style.display = (videoElement.style.display == 'none') ? 'block' : 'none';
    }

// Video 1 progress
var video1 = document.getElementById('normal-video');
video1.addEventListener('timeupdate', function() {
    var currentTime = video1.currentTime;
    var duration = video1.duration;
    var progress = (currentTime / duration) * 100;
    document.getElementById('video-progress1').value = progress;
    window.history.replaceState({}, document.title, "?progress=" + progress);
});

// Video 2 progress
var video2 = document.getElementById('advanced-video');
video2.addEventListener('timeupdate', function() {
    var currentTime = video2.currentTime;
    var duration = video2.duration;
    var progress = (currentTime / duration) * 100;
    document.getElementById('video-progress2').value = progress;
    window.history.replaceState({}, document.title, "?progress=" + progress);
});
</script>




</body>
</html>


</div>
