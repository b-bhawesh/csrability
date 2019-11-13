<?php include("header.php"); ?>

         <!-- Content Area Starts Here -->

         <main id="content">
            <div class="container mt-5">
              <div class="row">
                <div class="col-md-8 px-5">                  

                  <div class="row personal-section mt-0">
                    <div class="col-md-8 text-left">
                      <h5> Email Addresses </h5>
                    </div>
                    <div class="col-md-4 text-right">
                      <button class="btn btn-preview"> Add alternate Email </button>
                    </div>
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-12">
                          <h2>Primary Email</h2>
                          <p>bhawesh.ctd@gmail.com</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row personal-section">
                    <div class="col-md-12">
                      <h5> Privacy </h5>
                    </div>
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-7">
                          <p>Allow other users to see your Profile : </p>
                        </div>
                        <div class="col-md-5">
                          <label class="radio-inline mr-3">
                            <input type="radio" name="privacy" value="yes" checked>Yes
                          </label>
                          <label class="radio-inline mr-3">
                            <input type="radio" name="privacy" value="no">No
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row personal-section">
                    <div class="col-md-12">
                      <h5> Reset Password </h5>
                    </div>
                    <div class="col-md-12">
                      <form method="POST" action="#" enctype="multipart/form-data">
                        <div class="row">
                          <div class="col-md-7">
                            <div class="form-group">
                              <input type="text" class="form-control mt-3" name="password" placeholder="Current Password">
                              <input type="text" class="form-control mt-3" name="password" placeholder="Enter New Password">
                              <input type="text" class="form-control mt-3" name="password" placeholder="Confirm New Password">
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="form-group text-center mt-5">
                              <button class="btn btn-preview"> Reset Password </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>

                  <div class="row personal-section mb-5">
                    <div class="col-md-12">
                      <h5> Manage Email Preferences </h5>
                      <p class="email-caption"> As someone looking to make an impact on the world, we know how important it is for you to be connected to the right information at the right time. Make sure your inbox is keeping you up to date on the most important things happening acrosss global develpoment.</p>
                    </div>
                    <div class="col-md-12 mt-3">
                      <div class="row">
                        <div class="col-md-12">
                          <form method="POST" action="#" enctype="multipart/form-data">
                            <div class="form-group">
                              <input name="email" type="checkbox" value="Email from our Partners"> Email from our Partners <br>
                              <input name="email" type="checkbox" value="Invitations to our Events"> Invitations to our Events <br>
                              <input name="email" type="checkbox" value="Notifications"> Notifications <br>
                              <input name="email" type="checkbox" value="I only want to receive Newsletters & Custom Alerts"> I only want to receive Newsletters & Custom Alerts <br>
                              <input name="email" type="checkbox" value="Do not send me any emails"> Do not send me any emails 
                            </div>
                            <div class="form-group">
                              <button class="btn btn-preview"> Reset Password </button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="col-md-4">
                  <div class="sidebar-area">
                    <h5> Email Addresses </h5>
                    <a href="#"> <p> Privacy </p> </a>
                    <a href="#"> <p> Reset Password </p> </a>
                    <a href="#"> <p> Email Verifications </p> </a>
                  </div>
                </div>
              </div>
            </div>
         </main>

         <!-- Content Area Ends Here -->

<?php include("footer.php"); ?>