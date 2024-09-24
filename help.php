<?php $page = 'help'; ?>
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
    <title>Help Section</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Custom CSS -->
    <style>
        body
        {
            background-color:#f1f5f9;
        }
        .help-option {
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 20px;
            border: 1px solid rgb(204, 227, 255);
            border-radius: 8px;
            box-shadow:rgba(151, 160, 176, 0.44) 0px 1px 2px 0px, rgba(151, 160, 176, 0.12) 0px -1px 1px 0px;
        }

        .help-option h4 {
            color: #435f77;
        }

        .help-option p {
            color: #435f77;
            margin-bottom: 10px;
        }

        .btn-primary {
            background-color: #0b75ea;
            border-color: #0b75ea;
        }

        .btn-primary:hover {
            background-color: #2c4370;
            border-color: #2c4370;
        }

        .faq-item {
            background-color: #f1f5f9;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .faq-item h5 {
            color: #435f77;
            cursor: pointer;
        }

        .faq-item .faq-answer {
            color: #435f77;
            display: none; /* Initially hide the answer */
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
    <div class="container mt-4">
        <!-- Call Option -->
        <div class="help-option">
            <h4>Call Us</h4>
            <p>Speak directly with one of our support representatives.</p>
            <p>Call: +1-800-123-4567</p>
            <button class="btn btn-primary">Call Now</button>
        </div>
        <!-- Email Option -->
        <div class="help-option">
            <h4>Email Us</h4>
            <p>Send us an email with your query and we'll get back to you promptly.</p>
            <p>Email: support@example.com</p>
            <button class="btn btn-primary btn-email">Send Email</button>
        </div>
        <!-- FAQ Section -->
        <div class="help-option">
        <div class="container mt-4">
        <h4>Frequently Asked Questions (FAQ)</h4><br>
        <!-- FAQ Section -->
        <div class="faq-item">
            <h5 class="faq-question">How do I reset my password?</h5>
            <p class="faq-answer">To reset your password, go to the login page and click on the "Forgot Password" link.</p>
        </div>
        <div class="faq-item">
            <h5 class="faq-question">What payment methods do you accept?</h5>
            <p class="faq-answer">We accept Visa, Mastercard, American Express, and PayPal.</p>
        </div>
        <div class="faq-item">
            <h5 class="faq-question">How do I track my order?</h5>
            <p class="faq-answer">You can track your order by logging into your account and going to the order history page.</p>
        </div>
        <!-- Add more FAQ items as needed -->
    </div>
            <!-- Add more FAQ items as needed -->
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="applyModalLabel">Send your query</h5>
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
                <button type="button" class="btn btn-primary">Send</button>
            </div>
        </div>
    </div>
</div>

    </div>


    <script>
        // JavaScript to toggle mentor reply visibility
        document.querySelectorAll('.faq-question').forEach(btn => {
            btn.addEventListener('click', () => {
                const reply = btn.parentNode.querySelector('.faq-answer');
                reply.style.display = (reply.style.display === 'none') ? 'block' : 'none';
            });
        });


         // JavaScript to trigger the modal
         $(document).ready(function(){
                $(".btn-email").click(function(){
                    $("#applyModal").modal('show');
                });
            });



    </script>


    
    <!-- Include Bootstrap JS -->
    
</body>
</html>

    </div>