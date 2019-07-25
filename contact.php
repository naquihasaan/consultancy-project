<?php include_once 'inc/head.php';?>

    <?php include_once 'inc/header.php';?>

        <section class="container contactus">
            <h1 class="text-center my-5">Contact Us</h1>
            <div class="row my-3">
                <div class="col-md">
                    <img src="images/about.jpg" class="img-fluid">
                </div>
                <div class="col-md">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" data-toggle="tooltip" data-placement="top" title="click on HOURS to open/close hours details" id="headingOne">
                                <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          HOURS
                        </button>
                      </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <table class="table table-hover py-3 px-3">
                                        <tbody>
                                            <tr>
                                                <th>MONDAY 8:00 AM – 5:00 PM</th>
                                            </tr>
                                            <tr>
                                                <th>TUESDAY 8:00 AM – 6:00 PM</th>
                                            </tr>
                                            <tr>
                                                <th>WEDNESDAY 8:00 AM – 5:00 PM</th>
                                            </tr>
                                            <tr>
                                                <th>THURSDAY 8:00 AM – 6:00 PM</th>
                                            </tr>
                                            <tr>
                                                <th>FRIDAY 8:00 AM – 2:00 PM</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" data-toggle="tooltip" data-placement="top" title="click on CONTACT DETAILS to contact details" id="headingTwo">
                                <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          CONTACT DETAILS
                        </button>
                      </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <table class="table table-hover py-3 px-3">
                                        <tbody>
                                            <tr>
                                                <th><i class="fas fa-map-marker fa-2x"></i><b>&nbsp;&nbsp; 116 East High St london,Oh 110025</b></th>
                                            </tr>
                                            <tr>
                                                <th><i class="fas fa-envelope-square fa-2x"></i><b>&nbsp;&nbsp; dentalcare@gmail.com</b></th>
                                            </tr>
                                            <tr>
                                                <th><i class="fas fa-phone fa-2x"></i><b>&nbsp;&nbsp; 740-313-4390</b></th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include_once 'inc/footer.php';  ?>