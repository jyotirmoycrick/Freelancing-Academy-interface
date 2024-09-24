<!DOCTYPE html>
<html lang="en">
<head>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal Dashboard</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Roboto, sans-serif;
            background-color: #edeff3;
        }
        header {
            background-color: #ffffff;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            z-index: 99999999999;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
        }
        
        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .sidebar ul li {
            padding: 20px 40px;
            border-bottom: 1px solid #ccc;
            cursor: pointer;
        }
        .sidebar ul li a {
            text-decoration: none;
            color: #333;
            display: block; /* Make the entire list item clickable */
        }
        .sidebar ul li:hover {
            background-color: #f0f0f0;
        }
        .sidebar ul li.active {
            /* background-color: #1a94d0;  */
            background: linear-gradient(90deg, rgba(0,126,255,1) 0%, rgba(33,33,33,1) 100%);
        }

        .sidebar ul li.active a{
           color:white !important;
            
             /* Make the active link bold */
        }

        .sidebar ul li.active i{
           color:white;
             /* Make the active link bold */
        }

        .sidebar ul li i{
          /* color: #7a7a7a; */
             /* Make the active link bold */
        }


        .content {
            margin-left: 0px; /* Initially, content starts from the left */
            padding: 20px;
            padding-left: 250px;
            padding-right: 20px;
            transition: margin-left 0.3s ease; /* Add transition for smoother animation */
            margin-top: 20px; /* Add top margin to accommodate for fixed header */
            margin-bottom:20px;
        }
        .menu-icon {
            font-size: 24px;
            cursor: pointer;
        }
        .menu-icon:hover {
            color: #999;
        }
        .header-content {
            display: flex;
            align-items: center;
        }
        /* Media Query for mobile devices */
        @media screen and (max-width: 768px) {
            .sidebar {
                width: 200px;
            }
            .content {
                margin-left: 0; /* Content always starts from the left on mobile */
            }

            .content {
                margin-left: 0px; /* Initially, content starts from the left */
                padding: 20px;
                padding-left: 20px;
                padding-right: 20px;
                transition: margin-left 0.3s ease; /* Add transition for smoother animation */
                margin-top: 20px; /* Add top margin to accommodate for fixed header */
                margin-bottom:20px;
            }

            .sidebar {
                margin-top: 30px;
                width: 250px;
                height: 100%;
                background-color: #ffffff;
                position: fixed;
                top: 0;
                z-index: 999;
                left: -250px;
                transition: left 0.3s ease;
                box-shadow: 2px 0 4px rgba(0,0,0,0.1);
                padding-top: 60px; /* Add padding to accommodate for header */
            }

        }

        /* Styles for desktop view only */
        @media screen and (min-width: 769px) {
            /* Add your desktop-specific styles here */
            .sidebar {
                margin-top: 30px;
                width: 250px;
                height: 100%;
                background-color: #ffffff;
                position: fixed;
                top: 0;
                z-index: 999;
                left: 0px;
                transition: left 0.3s ease;
                box-shadow: 2px 0 4px rgba(0,0,0,0.1);
                padding-top: 60px; /* Add padding to accommodate for header */
            }
            .content {
                /* Adjust content padding for desktop */
                padding-left: 270px;
            }
        }

      

        /* Styles for overlay */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black color */
            display: none; /* Initially hide overlay */
            z-index: 998; /* Ensure overlay is below sidebar but above content */
        }

        /* Add this CSS to style the wallet option */
.wallet-option {
    display: flex;
    align-items: center;
    margin-left: 10px; /* Adjust the margin as needed */
}

.wallet-option span {
    margin-left: 5px; /* Adjust the spacing between icon and amount */
}

@media screen and (min-width: 769px) {
    .navbar-nav {
        display: none !important;
    }
}

/* Adjusted CSS for computer view */
@media screen and (min-width: 769px) {
    .navbar-brand {
        margin-right: auto; /* Pushes the brand logo to the left */
    }
    .profile-section {
        margin-left: auto; /* Pushes the profile section to the right */
    }
    .profile-section img {
        margin-right: 0px; /* Adjust as needed */
    }
}

@media screen and (max-width: 768px) {
  /* Override padding for mobile view */
  .content {
    padding-left: 0px;
    padding-right: 0px;
  }

  


}






    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between" style="background-color:#ffffff !important">
        <div class="container">
            <div class="navbar-brand">
                <img src="https://res.cloudinary.com/ds2xh85dt/image/upload/v1714658937/IMG_20240502_193815_akvjbr.png" style="height:35px;">
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="courses.php">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="podcast.php">Podcast</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="portal.php">Job Portal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="community.php">Community</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="events.php">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="discussion.php">Discussion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="help.php">Help</a>
                    </li>
                </ul>
                <div class="profile-section justify-content-between">

                <div class="d-flex flex-row">
                <i class="fa-solid fa-crown" style="color: #ebb800;"></i>
                    <img src="https://res.cloudinary.com/ds2xh85dt/image/upload/v1712167592/346794491_1664525717325461_1721827434449835098_n_vvoh5g.jpg" style="height:50px; border-radius:50%;">
                   
                    

                    <div class="d-flex flex-column justify-content-center">

                    <div class="d-flex flex-column justify-content-center">
                        <h6 style="text-align:left;">Jyotirmoy Malo</h6>
                    </div>
                    
                    <div class="d-flex flex-column justify-content-center">
                        <!-- Add wallet option -->
                        <div class="wallet-option" data-toggle="modal" data-target="#withdrawModal" style="cursor:pointer;text-align:left;">
                            <i class="fa-solid fa-wallet" style="color: #2ecc71;"></i>
                            <span>₹5500</span> <!-- Display the amount of money -->
                        </div>

                    
                    </div>




                </div>
            </div>
        </div>
    </nav>
</header>


<div class="sidebar" id="sidebar">
    <ul>
        <li <?php if($page == 'home') echo 'class="active"'; ?>><a href="index.php"><i class="fa-solid fa-house fa-lg"></i>  &nbsp;Home </a></li>
        
        <li <?php if($page == 'courses') echo 'class="active"'; ?>><a href="courses.php"><i class="fa-solid fa-book-open-reader fa-lg"></i> &nbsp; Courses</a></li>
        
        <li <?php if($page == 'podcast') echo 'class="active"'; ?>><a href="podcast.php"><i class="fa-solid fa-microphone fa-lg"></i> &nbsp; Podcast</a></li>
        <li <?php if($page == 'portal') echo 'class="active"'; ?>><a href="portal.php"><i class="fa-solid fa-briefcase fa-lg"></i> &nbsp; Job Portal</a></li>
        <li <?php if($page == 'community') echo 'class="active"'; ?>><a href="community.php"><i class="fa-solid fa-user-group fa-lg"></i> &nbsp; Community</a></li>
        
        <li <?php if($page == 'events') echo 'class="active"'; ?>><a href="events.php"><i class="fa-solid fa-calendar fa-lg"></i> &nbsp;Events</a></li>
        <li <?php if($page == 'discussion') echo 'class="active"'; ?>><a href="discussion.php"><i class="fa-solid fa-comment fa-lg"></i> &nbsp;Discussion</a></li>

        <li <?php if($page == 'help') echo 'class="active"'; ?>><a href="help.php"><i class="fa-solid fa-circle-info fa-lg"></i> &nbsp;Help</a></li>

        <li <?php if($page == 'notification') echo 'class="active"'; ?>>
    <a href="notification.php">

    <i class="fa-solid fa-bell fa-lg"></i>
        &nbsp;Notification
        <!-- Notification badge -->
    </a>
</li>

        
    </ul>
</div>
<div class="content" id="content">
    <!-- Your content goes here -->
</div>
<div class="overlay" id="overlay" onclick="toggleSidebar()"></div> <!-- Add overlay element -->












<!--modal-->

<div class="modal fade" id="applyModal2" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <div class="d-flex flex-row justify-content-center">
                <h5 class="modal-title" id="applyModalLabel">Withdraw Amount</h5>
                
            </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add your form fields here -->
                <form>
                <div class="form-group">
                        <label for="name">Withdraw Money</label>
                        <input type="number" class="form-control" id="name" placeholder="Enter The Amount">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Withdraw</button>
            
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>










<script>

document.addEventListener('DOMContentLoaded', function() {
        const walletOption = document.querySelector('.wallet-option');
        const withdrawSection = document.querySelector('.withdraw-section');

        // Initially hide the withdraw section
        withdrawSection.style.display = 'none';

        // Toggle visibility of withdraw section on wallet option click
        walletOption.addEventListener('click', function() {
            if (withdrawSection.style.display === 'none') {
                withdrawSection.style.display = 'block';
            } else {
                withdrawSection.style.display = 'none';
            }
        });
    });



    // Function to detect if the device is a mobile device
    function isMobileDevice() {
        return window.innerWidth <= 768; // Adjust the width threshold as needed
    }

    // Function to toggle the sidebar
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const icon = document.querySelector('.menu-icon');
        const content = document.getElementById('content');
        const overlay = document.getElementById('overlay');

        if (isMobileDevice()) {
            if (sidebar.style.left === '0px') {
                sidebar.style.left = "-250px";
                icon.innerHTML = '&#9776;';
                content.style.paddingLeft = '0px';
                overlay.style.display = 'none';
            } else {
                sidebar.style.left = '0px';
                content.style.paddingLeft = "-250px";
                icon.innerHTML = '&times;';
                overlay.style.display = 'block';
            }
        } else {
            if (sidebar.style.left === '0px') {
                sidebar.style.left = "-250px"; 
                content.style.paddingLeft = '0px';
            } else {
                sidebar.style.left = '0px';
                content.style.paddingLeft = "250px"; 
                
            }
        }
    }




// JavaScript to trigger the modal
$(document).ready(function(){
                $(".wallet-option").click(function(){
                    $("#applyModal2").modal('show');
                });
            });




</script>
</body>
</html>
