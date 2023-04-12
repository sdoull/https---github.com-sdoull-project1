<?php include 'header.php'; ?>

<body class="emailbody">
    


<form class="emailform" role="form" name="contactform" id="contactform" method="POST" action="send.php" enctype="multipart/form-data">
    <div class="emailform" class="row">
       <div class="col-md-6">
            <div class="input-text form-group">
                     <input type="text" name="contact_name" class="input-name form-control" placeholder="Full Name" />
                                    </div>
                                    <div class="input-text form-group">
                                    <input type="email" name="email" class="input-name form-control" placeholder="Enter Email-ID" />
                                    </div>
                                    <div class="input-text form-group">
                                        <input type="text" name="contact_phone" class="input-name form-control" placeholder="Phone Number" />
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="input-text form-group">
                                        <input type="text" name="contact_sub" class="input-name form-control" placeholder="Subject:Lost Password" />
                                    </div>
                                    <div class="textarea-message form-group">
                                        <textarea name="contact_message" class="textarea-message hight-82 form-control" placeholder="Message" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">

                                   <input type="submit" class="btn btn-default top-margin-10 hblack" name="Submit" value="Submit" />
                                </div>
                            </div>
                        </form>


</body>



<?php include 'footer.php'; ?>
