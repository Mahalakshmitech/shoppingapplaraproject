{{-- resources/views/contact.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toy Treasure - Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .content {
            margin-top: 80px; /* Adjust margin to prevent overlap with fixed navbar */
        }
        .background {
            background-image: url('https://www.shutterstock.com/image-illustration/web-contact-us-internet-connection-600nw-284271641.jpg');
            height: 100vh;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column; /* Center children vertically */
        }
        .transparent-container {
            background-color: rgba(0, 0, 0, 0.5); /* Higher transparency */
            padding: 20px; /* Reduced padding for a smaller look */
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
            max-width: 800px; /* Smaller max-width */
            width: 90%; /* Adjusted width */
            border: 1px solid rgba(0, 0, 0, 0.5); /* Light border for definition */
            margin-top: 20px; /* Space between heading and container */
        }
        .contact-form, .contact-details {
            width: 45%; /* Width for each section */
            color: white; /* Changed to white for readability */
        }
        .contact-form h2 {
            color: white; /* Ensure heading is visible */
        }
        .btn-submit {
            background-color: green; /* Green submit button */
            color: white; /* White text */
        }
        .contact-details p {
            margin: 0;
        }
        .contact-details i {
            color: white; /* Change icon color to white for better visibility */
        }
    </style>
</head>
<body>
    <!-- Include the navbar here if needed -->
    @include('navbar') <!-- Include your navigation bar here -->


    <div class="background">
        <h1 class="text-center" style="color: white; margin-bottom: 20px;">Contact Us</h1>
        
        <!-- Display success message if present -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Display error message if present -->
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <div class="transparent-container">
            <!-- Contact Form -->
            <div class="contact-form">
                <form action="{{ route('send.contact.form') }}" method="POST">
                    @csrf {{-- CSRF protection for form submission --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-submit">Submit</button>
                </form>
            </div>

            <!-- Contact Details -->
            <div class="contact-details">
                <h2>Contact Details</h2>
                <p><i class="fas fa-phone"></i> 9385842118</p>
                <p><i class="fas fa-envelope"></i> smahalakshmi1927@gmail.com</p>
                <p><i class="fas fa-map-marker-alt"></i> 77A/1 Poobalarayerpuram 5th street Thoothukudi-1</p>
                <h2>About</h2>
                <p>We are dedicated to providing the best toys for children of all ages. Offers and discounts are also provided. The orders will be delivered on time as soon as possible.</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
