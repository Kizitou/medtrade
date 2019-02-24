<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="icon" href="assets/images/.jpg">
        <title>Change account data || Firstmedtrade Africa - Africa's foremost online medical platform.</title>

        <link href="assets/css/main.css" type="text/css" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="assets/css/mediaqueries.css" />
        <link rel="stylesheet" href="https://cdn.materialdesignicons.com/3.2.89/css/materialdesignicons.min.css">
    </head>
    <body>
        <div class="profilewrapper profile">
            <div class="profile-left sidebarnav-width">
                <div class="profile-sidenav">
                    <span id="exitpa"><i class="mdi mdi-close"></i></span>
                    <p><a href="./"><i class="mdi mdi-speedometer"></i>DASHBOARD</a></p>
                    <hr>
                    <p><a href="../Chat-system/"><i class="mdi mdi-chat"></i>CHAT WITH A PHYSICIAN</a></p>
                    <p><a href="./appointments.php"><i class="mdi mdi-calendar-multiselect"></i>BOOK APPOINTMENTS</a></p>
                    <p><a href="./referrals.php"><i class="mdi mdi-heart-pulse"></i>REFERRAL REQUESTS</a></p>
                    <hr>
                    <p><a href="#" class="active"><i class="mdi mdi-account"></i>PROFILE DATA</a></p>
                    <p><a href="./password.php"><i class="mdi mdi-lock-open-outline"></i>CHANGE PASSWORD</a></p>
                </div>
                <div class="sidenav-footer">
                    <div class="sidenav-footer-links">
                        <a href="#"><i class="mdi mdi-logout"></i>Logout</a>
                    </div>
                </div>
            </div>
            <div class="profile-right marginal">
                <div class="profile-nav">
                    <span id="sidenav-opener"><i class="mdi mdi-menu"></i></span>
                    <div class="profilenav-left">
                        <div id="profilenav-left-image">
                            <img src="assets/images/FMedTrademinilogo.png">
                        </div>
                        <div id="profilenav-left-text">
                            <h5>Firstmedtrade</h5>
                        </div>
                    </div>
                    <div class="profilenav-right">
                        <div class="welcome-user">
                            <div class="user-div">
                                <div class="user-img">
                                    <i class="mdi mdi-account-outline"></i>
                                </div>
                                <?php echo '<p>Ubyjude Josh</p>'?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profilebody">
                    <div class="profilepage-pagination">
                        <div class="pageNumber">
                            <p><a href="#"><i class="mdi mdi-home"></i>Home</a> / <a href="./">Dashboard</a> / Profile Data</p>
                        </div>
                    </div>
                    <div class="profilebody-body data">
                        <div class="profilebody-left">
                            <form name="updatedata" action="profile.php" method="post">
                                <h1>Patient Details</h1>
                                <div class="form-group">
                                    <h4><span>Patient ID:</span></h4>
                                    <div class="form-group-minor">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" size="20" minlength="6" maxlength="30">
                                    </div>
                                    <div class="form-group-minor">
                                        <label for="birthdate">Birth Date</label>
                                        <input type="date" name="birthdate" min="1940-01-01" max="2000-12-31" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                                    </div>
                                    <div class="form-group-minor">
                                        <label for="sex">Sex</label>
                                        <input type="text" list="sex" name="sex" minlength="4" maxlength="6">
                                        <datalist id="sex">
                                            <option value="Male">
                                            <option value="Female">
                                        </datalist>
                                    </div>
                                    <div class="form-group-minor">
                                        <label for="bloodgroup">Bloodgroup</label>
                                        <input type="text" list="bloodgroup" name="bloodgroup" minlength="9">
                                        <datalist id="bloodgroup">
                                            <option value="O-Positive">
                                            <option value="O-Negative">
                                            <option value="A-Positive">
                                            <option value="A-Negative">
                                            <option value="B-Positive">
                                            <option value="B-Negative">
                                            <option value="AB-Positive">
                                            <option value="AB-Negative">
                                        </datalist>
                                    </div>
                                    <div class="form-group-minor">
                                        <label for="genotype">Genotype</label>
                                        <input type="text" list="genotype" name="genotype" maxlength="2">
                                        <datalist id="genotype">
                                            <option value="AA">
                                            <option value="AS">
                                            <option value="SS">
                                            <option value="AC">
                                        </datalist>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="updatePatientdata"><i class="mdi mdi-content-save"></i>Save</button>
                                </div>
                            </form>
                        </div>
                        <div class="profilebody-right">
                        <form name="updatedata" action="profile.php" method="post">
                                <h1>User Details</h1>
                                <div class="form-group">
                                    <div class="form-group-minor">
                                        <div id="dp">
                                            <div id="dp-img">
                                                <div class="form-group-minute">
                                                    <label for="upimage" class="btn btn-large"><i class="mdi mdi-camera"></i>Upload</label>
                                                    <input id="upimage" name="upimage" type='file' accept="image/*"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-minor">
                                        <label for="fname">First Name</label>
                                        <input type="text" name="fname" size="20" minlength="6" maxlength="14">
                                    </div>
                                    <div class="form-group-minor">
                                        <label for="lname">Last Name</label>
                                        <input type="text" name="lname" size="20" minlength="6" maxlength="14">
                                    </div>
                                    <div class="form-group-minor">
                                        <label for="phone">Phone Number</label>
                                        <input type="tel" name="phone" size="20" minlength="6" maxlength="14">
                                    </div>
                                    <div class="form-group-minor">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" size="20" minlength="6" maxlength="40">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="updateUserdata"><i class="mdi mdi-content-save"></i>Save</button>
                                </div>
                            </form>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </body>
    <script src="assets/js/jquery-2.0.3.min.js"></script>
    <script src="assets/js/index.js"></script>
</html>