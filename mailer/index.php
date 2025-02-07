
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Email Sender</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

             
                <div class="card shadow">
                    <div class="card-header text-center bg-primary text-white">
                        <h3>Send an Email</h3>
                    </div>
                    <div class="card-body">
                        <form id="emailForm" action="send_email.php" method="POST">
                            <div class="mb-3">
                                <label for="emailTo" class="form-label">To</label>
                                <input type="email" class="form-control" id="emailTo" name="emailTo" placeholder="Recipient's email" required>
                            </div>
                            <!-- <div class="mb-3">
                                <label for="emailSubject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="emailSubject" name="Subject" placeholder="Subject" required>
                            </div>

                            <div class="mb-3">
                                <label for="emailMessage" class="form-label">Message</label>
                                <textarea class="form-control" id="emailMessage" name="Message" rows="5" placeholder="Write your message here..." required></textarea>
                            </div> -->
                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-primary w-100">Send Email</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>