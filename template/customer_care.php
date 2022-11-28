<?php include("header.php"); ?>

<head>
    <link rel="stylesheet" href="../static/customer_care.css">
</head>
    <!-- main -->
    <h2 class="h2_cont_new text-center">Customer Care</h2>
    <div class="container contact-form text-center w-100">
        <form method="post">
            <h3>Have any questions or concerns ? We're always ready to help! Send us an email at info@smart-fashion.com</h3>
           <div class="row w-100">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="txtName" class="form-control my-2" placeholder="Your Name *" value="" required/>
                    </div>
                    <div class="form-group">
                        <input type="email" name="txtEmail" class="form-control my-2" placeholder="Your Email *" value=""  required/>
                    </div>
                    <div class="form-group">
                        <input type="number" name="txtPhone" class="form-control my-2" placeholder="Your Phone Number *" value=""  required/>
                    </div>
                    <div class="form-group">
                        <!-- Button trigger modal -->
                        <button type="submit" class="btnContact" data-bs-toggle="modal" data-bs-target="#exampleModal">Send Message</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"  required></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>

<?php include("footer.php"); ?>