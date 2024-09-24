<?php $page = 'notification'; ?>
<?php include 'sidebar.php'; ?>

<div class="content" id="content">


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f1f5f9;
        }

        .notification-list {
            margin-top: 20px;
        }

        .notification-item {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .notification-item h5 {
            color: #435f77;
            margin-bottom: 10px;
        }

        .notification-item p {
            color: #435f77;
            margin-bottom: 0;
        }

        .notification-item .timestamp {
            color: #888;
            font-size: 14px;
        }

        .container
        {
            max-width:100%;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="container">
        <h2 class="mt-4">Notifications</h2>
        <div class="notification-list">
            <!-- Notification Item -->
            <div class="notification-item">
                <h5>New Reply</h5>
                <p>You have received a new message from your mentor.</p>
                <p class="timestamp">3 minutes ago</p>
            </div>
            <!-- Notification Item -->
            <div class="notification-item">
                <h5>New Event Alert</h5>
                <p>Participate in new workshop of machine learning</p>
                <p class="timestamp">1 hour ago</p>
            </div>
            <!-- Notification Item -->
            <div class="notification-item">
                <h5>Payment Received</h5>
                <p>A payment of ₹5500 has been received for Successfully completed your task</p>
                <p class="timestamp">1 day ago</p>
            </div>
            <!-- Add more notification items as needed -->
        </div>
    </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
    </div>