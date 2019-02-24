<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="icon" href="assets/images/.jpg">
        <title>My Dashboard || Firstmedtrade Africa - Africa's foremost online medical platform.</title>

        <link href="assets/css/main.css" type="text/css" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="assets/css/mediaqueries.css" />
        <link rel="stylesheet" href="https://cdn.materialdesignicons.com/3.2.89/css/materialdesignicons.min.css">
    </head>
    <body>
        <div class="profilewrapper">
            <div class="profile-left sidebarnav-width">
                <div class="profile-sidenav">
                    <span id="exitpa"><i class="mdi mdi-close"></i></span>
                    <p><a href="#" class="active"><i class="mdi mdi-speedometer"></i>DASHBOARD</a></p>
                    <hr>
                    <p><a href="../Chat-system/"><i class="mdi mdi-chat"></i>CHAT WITH A PHYSICIAN</a></p>
                    <p><a href="./appointments.php"><i class="mdi mdi-calendar-multiselect"></i>BOOK APPOINTMENTS</a></p>
                    <p><a href="./referrals.php"><i class="mdi mdi-heart-pulse"></i>REFERRAL REQUESTS</a></p>
                    <hr>
                    <p><a href="./profile.php"><i class="mdi mdi-account"></i>PROFILE DATA</a></p>
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
                            <?php echo '<h5>Welcome, Ubyjude</h5>'; ?>
                            <p><a href="#"><i class="mdi mdi-home"></i>Home</a> / Dashboard</p>
                        </div>
                    </div>
                    <div class="profilebody-body">
                        <div class="profilebody-left">
                            <div class="row">
                                <div class="profile-card">
                                    <div class="profile-card-body">
                                        <div class="profile-card-title-options">
                                            <div id="profile-card-title-options-body">
                                                <div id="dp">
                                                    <div id="dp-img"></div>
                                                </div>
                                                <ul id="profile-details">
                                                    <li><p>Ubyjude Joshua</p></li>
                                                    <li><p>Officialuby@gmail.com</p></li>
                                                    <li><p>08119334926</p></li>
                                                </ul>
                                                <a href="./profile.php">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profilebody-right">
                            <div class="row">
                                <div class="profile-card">
                                    <div class="profile-card-body">
                                        <div class="profile-card-title-options">
                                            <div id="profile-card-title-options-body">
                                                <i class="mdi mdi-chat"></i>
                                                <a href="../Chat-system/">Chat with a Physician</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-card">
                                    <div class="profile-card-body">
                                        <div class="profile-card-title-options">
                                            <div id="profile-card-title-options-body">
                                                <i class="mdi mdi-calendar-multiselect"></i>
                                                <div class="profile-card-title">
                                                    <div class="profile-card-title-text">
                                                        <h1>Appointments</h1>
                                                    </div>
                                                </div>
                                                <div id="link-hold"><a href="./appointments.php">View</a></div>
                                                <div id="link-hold"><a href="./appointments.php">Add New</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-card">
                                    <div class="profile-card-body">
                                        <div class="profile-card-title-options">
                                            <div id="profile-card-title-options-body">
                                                <i class="mdi mdi-heart-pulse"></i>
                                                <div class="profile-card-title">
                                                    <div class="profile-card-title-text">
                                                        <h1>Referrals</h1>
                                                    </div>
                                                </div>
                                                <div id="link-hold"><a href="./referrals.php">View</a></div>
                                                <div id="link-hold"><a href="./referrals.php">Add New</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row search">
                                <div class="profile-card">
                                    <div class="profile-card-body">
                                        <div class="profile-card-title-options">
                                            <div id="profile-card-title-options-body">
                                                <h1 id="patient_id"><span>Patient ID:</span> firstmf_245678</h1>
                                                <ul id="id-details">
                                                    <li><span>Birth-date:</span></li>
                                                    <li><span>Sex:</span></li>
                                                    <li><span>Blood-group:</span></li>
                                                    <li><span>Genotype:</span></li>
                                                </ul>
                                                <a href="./profile.php">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-card">
                                    <div class="profile-card-body">
                                        <div class="profile-card-title-options">
                                            <div id="profile-card-title-options-body">
                                                <form method="POST" action="index.php" name="search">
                                                    <div class="form-group">
                                                        <h1 id="patient_id"><span><i class="mdi mdi-magnify"></i>Find doctors around you</span></h1>
                                                        <div class="form-group-minor">
                                                            <label for="dname">Doctors' Name</label>
                                                            <input type="text" name="dname" size="20" minlength="6" maxlength="30">
                                                        </div>
                                                        <div class="form-group-minor">
                                                            <label for="specialty">Specialty</label>
                                                            <input type="text" list="specialty" name="specialty" minlength="4">
                                                            <datalist id ="specialty">
                                                                <option value="Accident and emergency medicine">
                                                                <option value="Allergology">
                                                                <option value="Anaesthetics">
                                                                <option value="Biological hematology">
                                                                <option value="Cardiology">
                                                                <option value="Child psychiatry">
                                                                <option value="Clinical biology">
                                                                <option value="Clinical chemistry">
                                                                <option value="Clinical neurophysiology">
                                                                <option value="Craniofacial surgery">
                                                                <option value="Dental">
                                                                <option value="Dermato-venereology">
                                                                <option value="Dermatology">
                                                                <option value="Endocrinology">
                                                                <option value="Gastro-enterologic surgery">
                                                                <option value="Gastroenterology">
                                                                <option value="General hematology">
                                                                <option value="General Practice">
                                                                <option value="General surgery">
                                                                <option value="Geriatrics">
                                                                <option value="Immunology">
                                                                <option value="Infectious diseases">
                                                                <option value="Internal medicine">
                                                                <option value="Laboratory medicine">
                                                                <option value="Maxillo-facial surgery">
                                                                <option value="Microbiology">
                                                                <option value="Nephrology">
                                                                <option value="Neuro-psychiatry">
                                                                <option value="Neurology">
                                                                <option value="Neurosurgery">
                                                                <option value="Nuclear medicine">
                                                                <option value="Obstetrics and gynecology">
                                                                <option value="Occupational medicine">
                                                                <option value="Ophthalmology">
                                                                <option value="Orthopaedics">
                                                                <option value="Otorhinolaryngology">
                                                                <option value="Paediatric surgery">
                                                                <option value="Paediatrics">
                                                                <option value="Pathology">
                                                                <option value="Pharmacology">
                                                                <option value="Physical medicine and rehabilitation">
                                                                <option value="Plastic surgery">
                                                                <option value="Podiatric Surgery">
                                                                <option value="Psychiatry">
                                                                <option value="Public health and Preventive Medicine">
                                                                <option value="Radiation Oncology">
                                                                <option value="Radiology">
                                                                <option value="Respiratory medicine">
                                                                <option value="Rheumatology">
                                                                <option value="Stomatology">
                                                                <option value="Thoracic surgery">
                                                                <option value="Tropical medicine">
                                                                <option value="Urology">
                                                                <option value="Vascular surgery">
                                                                <option value="Venereology">
                                                            </datalist>
                                                        </div>
                                                        <div class="form-group-minor">
                                                            <label for="location">Location</label>
                                                            <input id="location" type="text" name="location" size="20" minlength="6" maxlength="30">
                                                        </div>
                                                        <div class="form-group-minor">
                                                            <button name="submitsearch">Search</button>    
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="assets/js/jquery-2.0.3.min.js"></script>
    <script src="assets/js/index.js"></script>
</html>