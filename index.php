<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Emploihunt</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/Emploihunt Logo Design_Final (1).png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
</head>

<body>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.php" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
              <img style="width: 100px;" src="img/Emploihunt Logo Design_Final (1).png">
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Jobs</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="job-list.php" class="dropdown-item">Job List</a>
                        </div>
                    </div>
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="category.html" class="dropdown-item">Job Category</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404</a>
                        </div>
                    </div> -->
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <a href="requirterlogin.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Post A Job<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Find The Perfect Job That You Deserved</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Search A Job</a>
                                    <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Find A Talent</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Find The Best Startup Job That Fit You</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Search A Job</a>
                                    <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Find A Talent</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <form name="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            
                            <div class="col-md-4">
                                
                                <select class="form-select border-0" name="vJobTitle">
                               
                                    <option value="Manager">Manager</option>
                                    <option value="Director">Director</option>
                                    <option value="CEO (Chief Executive Officer)">CEO (Chief Executive Officer)</option>
                                    <option value="CFO (Chief Financial Officer)">CFO (Chief Financial Officer)</option>
                                    <option value="CTO (Chief Technology Officer)">CTO (Chief Technology Officer)</option>
                                    <option value="COO (Chief Operating Officer)">COO (Chief Operating Officer)</option>
                                    <option value="President">President</option>
                                    <option value="Vice President">Vice President</option>
                                    <option value="General Manager">General Manager</option>
                                    <option value="Assistant Manager">Assistant Manager</option>
                                    <option value="Assistant Manager">Assistant Manager</option>
                                    <option value="Intern/CA">Intern/CA</option>
                                    <option value="Charted Accountant (CA)">Charted Accountant (CA)</option>
                                    <option value="Accountant">Accountant</option>
                                    <option value="CA Foundation">CA Foundation</option>
                                    <option value="Associate">Associate</option>
                                    <option value="Consultant">Consultant</option>
                                    <option value="Engineer">Engineer</option>
                                    <option value="Architect">Architect</option>
                                    <option value="Analyst">Analyst</option>
                                    <option value="Designer">Designer</option>
                                    <option value="Developer">Developer</option>
                                    <option value="Coordinator">Coordinator</option>
                                    <option value="Supervisor">Supervisor</option>
                                    <option value="Executive">Executive</option>
                                    <option value="Project Manager">Project Manager</option>
                                    <option value="HR Manager">HR Manager</option>
                                    <option value="Marketing Manager">Marketing Manager</option>
                                    <option value="Sales Manager">Sales Manager</option>
                                    <option value="Researcher">Researcher</option>
                                    <option value="Content Writer">Content Writer</option>
                                    <option value="Editor">Editor</option>
                                    <option value="Lawyer">Lawyer</option>
                                    <option value="Doctor">Doctor</option>
                                    <option value="Professor">Professor</option>
                                    <option value="Principal">Principal</option>
                                    <option value="Artist">Artist</option>
                                    <option value="Musician">Musician</option>
                                    <option value="Photographer">Photographer</option>
                                    <option value="Chef">Chef</option>
                                    <option value="Public Relations Manager">Public Relations Manager</option>
                                    <option value="Financial Analyst">Financial Analyst</option>
                                    <option value="IT Specialist">IT Specialist</option>
                                    <option value="Business Analyst">Business Analyst</option>
                                    <option value="Operations Manager">Operations Manager</option>
                                    <option value="Data Scientist">Data Scientist</option>
                                    <option value="Product Manager">Product Manager</option>
                                    <option value="Quality Assurance Manager">Quality Assurance Manager</option>
                                    <option value="Chief Marketing Officer (CMO)">Chief Marketing Officer (CMO)</option>
                                    <option value="Chief Human Resources Officer (CHRO)">Chief Human Resources Officer (CHRO)</option>
                                    <option value="Chief Operations Officer (COO)">Chief Operations Officer (COO)</option>
                                    <option value="Chief Strategy Officer (CSO)">Chief Strategy Officer (CSO)</option>
                                    <option value="Chief Information Officer (CIO)">Chief Information Officer (CIO)</option>
                                    <option value="Chief Data Officer (CDO)">Chief Data Officer (CDO)</option>
                                    <option value="Chief Creative Officer (CCO)">Chief Creative Officer (CCO)</option>
                                    <option value="Chief Security Officer (CSO)">Chief Security Officer (CSO)</option>
                                    <option value="Chief Legal Officer (CLO)">Chief Legal Officer (CLO)</option>
                                    <option value="Chief Communications Officer (CCO)">Chief Communications Officer (CCO)</option>
                                    <option value="Chief Diversity Officer (CDO)">Chief Diversity Officer (CDO)</option>
                                    <option value="Chief Innovation Officer (CIO)">Chief Innovation Officer (CIO)</option>
                                    <option value="Recruitment Manager">Recruitment Manager</option>
                                    <option value="Training and Development Manager">Training and Development Manager</option>
                                    <option value="Compensation and Benefits Manager">Compensation and Benefits Manager</option>
                                    <option value="Employee Relations Manager">Employee Relations Manager</option>
                                    <option value="HR Business Partner">HR Business Partner</option>
                                    <option value="Organizational Development Manager">Organizational Development Manager</option>
                                    <option value="Workforce Planning Manager">Workforce Planning Manager</option>
                                    <option value="Digital Marketing Manager">Digital Marketing Manager</option>
                                    <option value="Product Marketing Manager">Product Marketing Manager</option>
                                    <option value="Brand Management Manager">Brand Management Manager</option>
                                    <option value="Market Research Manager">Market Research Manager</option>
                                    <option value="Public Relations Manager">Public Relations Manager</option>
                                    <option value="Advertising Manager">Advertising Manager</option>
                                    <option value="Software Engineer">Software Engineer</option>
                                    <option value="Hardware Engineer">Hardware Engineer</option>
                                    <option value="Network Engineer">Network Engineer</option>
                                    <option value="Mechanical Engineer">Mechanical Engineer</option>
                                    <option value="Sumit">Electrical Engineer</option>
                                    <option value="Electrical Engineer">Civil Engineer</option>
                                    <option value="Biomedical Engineer">Biomedical Engineer</option>
                                    <option value="Environmental Engineer">Environmental Engineer</option>
                                    <option value="Interior Architect">Interior Architect</option>
                                    <option value="Landscape Architect">Landscape Architect</option>
                                    <option value="Urban Designer">Urban Designer</option>
                                    <option value="Building Architect">Building Architect</option>
                                    <option value="Industrial Designer">Industrial Designer</option>
                                    <option value="Green Architect">Green Architect</option>
                                    <option value="Renovation Architect">Renovation Architect</option>
                                    <option value="Business Analyst">Business Analyst</option>
                                    <option value="Financial Analyst">Financial Analyst</option>
                                    <option value="Data Analyst">Data Analyst</option>
                                    <option value="Market Analyst">Market Analyst</option>
                                    <option value="Research Analyst">Research Analyst</option>
                                    <option value="Systems Analyst">Systems Analyst</option>
                                    <option value="Policy Analyst">Policy Analyst</option>
                                    <option value="Quantitative Analyst">Quantitative Analyst</option>
                                    <option value="Management Consultant">Management Consultant</option>
                                    <option value="IT Consultant">IT Consultant</option>
                                    <option value="Financial Consultant">Financial Consultant</option>
                                    <option value="HR Consultant">HR Consultant</option>
                                    <option value="Strategy Consultant">Strategy Consultant</option>
                                    <option value="Healthcare Consultant">Healthcare Consultant</option>
                                    <option value="Marketing Consultant">Marketing Consultant</option>
                                    <option value="Legal Consultant">Legal Consultant</option>
                                    <option value="Software Developer">Software Developer</option>
                                    <option value="Web Developer">Web Developer</option>
                                    <option value="Front-End Developer">Front-End Developer</option>
                                    <option value="Back-End Developer">Back-End Developer</option>
                                    <option value="Full Stack Developer">Full Stack Developer</option>
                                    <option value="Mobile App Developer">Mobile App Developer</option>
                                    <option value="iOS Developer">iOS Developer</option>
                                    <option value="Android Developer">Android Developer</option>
                                    <option value="Game Developer">Game Developer</option>
                                    <option value="UI/UX Developer">UI/UX Developer</option>
                                    <option value="Embedded Systems Developer">Embedded Systems Developer</option>
                                    <option value="DevOps Engineer">DevOps Engineer</option>
                                    <option value="Database Developer">Database Developer</option>
                                    <option value="Cloud Developer">Cloud Developer</option>
                                    <option value="Blockchain Developer">Blockchain Developer</option>
                                    <option value="Machine Learning Engineer">Machine Learning Engineer</option>
                                    <option value="Artificial Intelligence Developer">Artificial Intelligence Developer</option>
                                    <option value="Robotics Developer">Robotics Developer</option>
                                    <option value="Augmented Reality Developer">Augmented Reality Developer</option>
                                    <option value="Virtual Reality Developer">Virtual Reality Developer</option>
                                    <option value="Firmware Developer">Firmware Developer</option>
                                    <option value="Automation Developer">Automation Developer</option>
                                    <option value="Scripting Developer">Scripting Developer</option>
                                    <option value="API Developer">API Developer</option>
                                    <option value="Integration Developer">Integration Developer</option>
                                    <option value="Quantum Developer">Quantum Developer</option>
                                    <option value="Security Developer">Security Developer</option>
                                    <option value="Network Developer">Network Developer</option>
                                    <option value="Mobile Game Developer">Mobile Game Developer</option>
                                    <option value="Software Architect">Software Architect</option>
                                    <option value="Computer Vision Developer">Computer Vision Developer</option>
                                    <option value="Data Engineer">Data Engineer</option>
                                    <option value="Natural Language Processing Developer">Natural Language Processing Developer</option>
                                    <option value="3D Graphics Programmer">3D Graphics Programmer</option>
                                    <option value="Wireless Communication Developer">Wireless Communication Developer</option>
                                    <option value="Embedded Software Engineer">Embedded Software Engineer</option>
                                    <option value="Real-time Systems Developer">Real-time Systems Developer</option>
                                    <option value="Automation Test Developer">Automation Test Developer</option>
                                    <option value="Automation Test Developer">GIS Developer (Geographic Information Systems)</option>
                                    <option value="Sales Representative">Sales Representative</option>
                                    <option value="Financial Analyst">Financial Analyst</option>
                                    <option value="Accountant">Accountant</option>
                                    <option value="Marketing Manager">Marketing Manager</option>
                                    <option value="Business Development Manager">Business Development Manager</option>
                                    <option value="Supply Chain Manager">Supply Chain Manager</option>
                                    <option value="E-commerce Manager">E-commerce Manager</option>
                                    <option value="Financial Manager">Financial Manager</option>
                                    <option value="Retail Store Manager">Retail Store Manager</option>
                                    <option value="Graphic Designer">Graphic Designer</option>
                                    <option value="Art Director">Art Director</option>
                                    <option value="Copywriter">Copywriter</option>
                                    <option value="Animator">Animator</option>
                                    <option value="Film Director">Film Director</option>
                                    <option value="Music Composer">Music Composer</option>
                                    <option value="Gallery Curator">Gallery Curator</option>
                                    <option value="Art Therapist">Art Therapist</option>
                                    <option value="Theater Director">Theater Director</option>
                                    <option value="Fashion Designer">Fashion Designer</option>
                                    <option value="Executive Assistant">Executive Assistant</option>
                                    <option value="Customer Service Representative">Customer Service Representative</option>
                                    <option value="Operations Coordinator">Operations Coordinator</option>
                                    <option value="Sumit">Public Relations Specialist</option>
                                    <option value="Sumit">Supply Chain Analyst</option>
                                    <option value="Sumit">Quality Control Inspector</option>
                                    <option value="Business Operations Manager">Business Operations Manager</option>
                                    <option value="Logistics Coordinator">Logistics Coordinator</option>
                                    <option value="Administrative Assistant">Administrative Assistant</option>
                                    <option value="Financial Controller">Financial Controller</option>
                                    <option value="Market Research Analyst">Market Research Analyst</option>
                                    <option value="Event Planner">Event Planner</option>
                                    <option value="Business Consultant">Business Consultant</option>
                                    <option value="Procurement Specialist">Procurement Specialist</option>
                                    <option value="Business Intelligence Analyst">Business Intelligence Analyst</option>
                                    <option value="Technical Support Specialist">Technical Support Specialist</option>
                                    <option value="Customer Success Manager">Customer Success Manager</option>
                                    <option value="Content Marketing Specialist">Content Marketing Specialist</option>
                                    <option value="Compliance Officer">Compliance Officer</option>
                                    <option value="Web Content Manager">Web Content Manager</option>
                                    <option value="SEO Specialist">SEO Specialist</option>
                                    <option value="Investment Analyst">Investment Analyst</option>
                                    <option value="Risk Analyst">Risk Analyst</option>
                                    <option value="Art Conservator">Art Conservator</option>
                                    <option value="Art Historian">Art Historian</option>
                                    <option value="Art Gallery Assistant">Art Gallery Assistant</option>
                                    <option value="Media Planner">Media Planner</option>
                                    <option value="Grant Writer">Grant Writer</option>
                                    <option value="Technical Writer">Technical Writer</option>
                                    <option value="UX/UI Designer">UX/UI Designer</option>
                                    <option value="Interior Decorator">Interior Decorator</option>
                                    <option value="Event Coordinator">Event Coordinator</option>
                                    <option value="Curator">Curator</option>
                                    <option value="Librarian">Librarian</option>
                                    <option value="Market Development Manager">Market Development Manager</option>
                                    <option value="Publicist">Publicist</option>
                                    <option value="Customer Experience Manager">Customer Experience Manager</option>
                                    <option value="Inventory Manager">Inventory Manager</option>
                                    <option value="Community Manager">Community Manager</option>
                                    <option value="Business Manager">Business Manager</option>
                                    <option value="Information Security Analyst">Information Security Analyst</option>
                                    <option value="Network Administrator">Network Administrator</option>
                                    <option value="Technical Project Manager">Technical Project Manager</option>
                                    <option value="Systems Engineer">Systems Engineer</option>
                                    <option value="UX Researcher">UX Researcher</option>
                                    <option value="Environmental Specialist">Environmental Specialist</option>
                                    <option value="Corporate Trainer">Corporate Trainer</option>
                                    <option value="Property Manager">Property Manager</option>
                                    <option value="Program Coordinator">Program Coordinator</option>
                                    <option value="Operations Analyst">Operations Analyst</option>
                                    <option value="Investment Banker">Investment Banker</option>
                                    <option value="Forensic Accountant">Forensic Accountant</option>
                                    <option value="Actuary">Actuary</option>
                                    <option value="Market Development Specialist">Market Development Specialist</option>
                        
                                </select>
                            </div>
                            <div class="col-md-4">
                                <?php

                                $url = "https://api.emploihunt.com/api/city/cities";
                                $ch = curl_init();
                                $accesstoken = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7InZGaXJzdE5hbWUiOiJEaWd2aWpheSBzaW5naCIsInZKb2JMb2NhdGlvbiI6IkFobWVkYWJhZCIsInRSZXN1bWVVcmwiOm51bGwsInZMYXN0TmFtZSI6IlNoZWtoYXdhdCIsInZEdXJhdGlvbiI6bnVsbCwidldvcmtpbmdNb2RlIjpudWxsLCJ2TW9iaWxlIjoiKzkxNzM1OTc5NjM4NyIsInZQcmVmZXJDaXR5IjpudWxsLCJ0VGFnTGluZSI6IiIsInZFbWFpbCI6ImRpZ3ZpamF5LmFtcmlzeXN0ZW1zQGdtYWlsLmNvbSIsInZQcmVmZXJKb2JUaXRsZSI6bnVsbCwiaXNCbG9jayI6MCwiaWQiOjgsInZDaXR5IjoibnVsbCIsInZRdWFsaWZpY2F0aW9uIjoiQ29tbWVyY2UiLCJpc0xvZ2luIjowLCJ2RmlyZWJhc2VJZCI6InpFTzBDRGlpWTFUdkVhZVlGa29hOEFXQ21VUTIiLCJ0QmlvIjoiSSBhbSBIUiByZWNydWl0ZXIgYW5kIGhpcmluZyBmb3IgbXVsdGlwbGUgcG9zaXRpb25zIGluIEFobWVkYWJhZCIsInRQcm9maWxlVXJsIjoiL21lZGlhL3VwbG9hZHMvdXNlcl9wcm9maWxlX3BpYy9JTUdfMjAyMjExMDdfMTkzNDIzXzIwMjMtMTAtMDYtMDcxODIwWi5qcGciLCJ0Q3JlYXRlZEF0IjoiMTY5NjU3NjQ4NyIsImlSb2xlIjoxLCJ2Q3VycmVudENvbXBhbnkiOiJBbXJpIFN5c3RlbXMiLCJ0UHJvZmlsZUJhbm5lclVybCI6bnVsbCwidFVwYWRhdGVkQXQiOiIxNjk2NTc2NDg3IiwidkRlc2lnbmF0aW9uIjoiUmVjcnVpdG1lbnQgTWFuYWdlciJ9fQ.1BCpWIjHi572skaTSWok2AqPLSB96vCVzU1ufewyY6A";
                                $headr = array();
                                
                                
                                $headr[] = 'Content-length: 0';
                                $headr[] = 'Content-type: application/json';
                                $headr[] = 'Authorization: Bearer '.$accesstoken;
                                
                                curl_setopt($ch, CURLOPT_HTTPHEADER,$headr);
                                curl_setopt($ch, CURLOPT_URL,$url);
                                curl_setopt($ch, CURLOPT_HTTPGET, 1);
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                $result=curl_exec($ch);
                                
                                
                                
                                       
                                ?><?php
                                 $dataArray = json_decode($result, true);
                                
                                          
                                $array=$dataArray['data']; 
                                
                                
                                $cnt=count($array);
                                
                                
                                ?>
                                <select name="vAddress"  class="form-control">
                                    <option value=""> please Select Address </option>
                                    <?php
                                    for ($x = 0; $x < $cnt; $x++) {
                         ?>
                        
                         
                        
                          <option value="<?php echo $dataArray['data'][$x]; ?> "> <?php echo $dataArray['data'][$x]; ?> </option>
                         
                          
                                        
                                 
                                    <?php }
                                    ?>
                                    </select> 
                            </div>
                            <div class="col-md-4">
                                
                                <select class="form-select border-0" name="vWrokingMode">
                                    <option selected>Working Mode</option>
                                    <option value="On-Site">On-Site</option>
                                    <option value="On-Site">On-Site</option>
                                    <option value="On-Site">On-Site</option>
                                </select>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-2">
                        <input type="submit" name="submit" value="Search" class="btn btn-dark border-0 w-100"></input>
                    </div>
                </div>
            </form>
            </div>
        </div>



        <?php
if($_SERVER["REQUEST_METHOD"] == "POST"){


        $vJobTitle=$_REQUEST['vJobTitle'];
        $name = str_replace(' ', '%20',$vJobTitle);

        // echo $name;
        $vAddress=$_REQUEST['vAddress'];
        // $vWrokingMode=$_GET['vWrokingMode'];


         
$url = "https://api.emploihunt.com/api/job/jobs_filter?vJobTitle=$name&current_page=1";
// echo $url;
$ch = curl_init();
$accesstoken = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7InZGaXJzdE5hbWUiOiJEaWd2aWpheSBzaW5naCIsInZKb2JMb2NhdGlvbiI6IkFobWVkYWJhZCIsInRSZXN1bWVVcmwiOm51bGwsInZMYXN0TmFtZSI6IlNoZWtoYXdhdCIsInZEdXJhdGlvbiI6bnVsbCwidldvcmtpbmdNb2RlIjpudWxsLCJ2TW9iaWxlIjoiKzkxNzM1OTc5NjM4NyIsInZQcmVmZXJDaXR5IjpudWxsLCJ0VGFnTGluZSI6IiIsInZFbWFpbCI6ImRpZ3ZpamF5LmFtcmlzeXN0ZW1zQGdtYWlsLmNvbSIsInZQcmVmZXJKb2JUaXRsZSI6bnVsbCwiaXNCbG9jayI6MCwiaWQiOjgsInZDaXR5IjoibnVsbCIsInZRdWFsaWZpY2F0aW9uIjoiQ29tbWVyY2UiLCJpc0xvZ2luIjowLCJ2RmlyZWJhc2VJZCI6InpFTzBDRGlpWTFUdkVhZVlGa29hOEFXQ21VUTIiLCJ0QmlvIjoiSSBhbSBIUiByZWNydWl0ZXIgYW5kIGhpcmluZyBmb3IgbXVsdGlwbGUgcG9zaXRpb25zIGluIEFobWVkYWJhZCIsInRQcm9maWxlVXJsIjoiL21lZGlhL3VwbG9hZHMvdXNlcl9wcm9maWxlX3BpYy9JTUdfMjAyMjExMDdfMTkzNDIzXzIwMjMtMTAtMDYtMDcxODIwWi5qcGciLCJ0Q3JlYXRlZEF0IjoiMTY5NjU3NjQ4NyIsImlSb2xlIjoxLCJ2Q3VycmVudENvbXBhbnkiOiJBbXJpIFN5c3RlbXMiLCJ0UHJvZmlsZUJhbm5lclVybCI6bnVsbCwidFVwYWRhdGVkQXQiOiIxNjk2NTc2NDg3IiwidkRlc2lnbmF0aW9uIjoiUmVjcnVpdG1lbnQgTWFuYWdlciJ9fQ.1BCpWIjHi572skaTSWok2AqPLSB96vCVzU1ufewyY6A";
$headr = array();


$headr[] = 'Content-length: 0';
$headr[] = 'Content-type: application/json';
$headr[] = 'Authorization: Bearer '.$accesstoken;

curl_setopt($ch, CURLOPT_HTTPHEADER,$headr);
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_HTTPGET, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec($ch);



       
?><?php
 $dataArray = json_decode($result, true);
 if($dataArray['status']=="500"){
    echo  "<p class='error'>There is no Job Found</p>" ;
} else{
$array=$dataArray['data']; 
$cnt=count($array);

?>
<div class="tab-content">
    <div id="tab-1" class="tab-pane fade show p-0 active">
        <?php
        for ($x = 0; $x < $cnt; $x++) {
            ?>
        <div class="job-item p-4 mb-4">
            <div class="row g-4">
              
                <div class="col-sm-12 col-md-8 d-flex align-items-center">
                    <!-- <img src="https://emploihunt.com/<?php echo $dataArray['data'][$x]['tCompanyLogoUrl'];?>"  />  -->

                    <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg" alt="" style="width: 80px; height: 80px;">
                    <div class="text-start ps-4">
                        <h5 class="mb-3"><?php echo $dataArray['data'][$x]['vJobTitle'];?></h5>
                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo $dataArray['data'][$x]['vAddress'];?>, INDIA</span>
                        <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i><?php echo $dataArray['data'][$x]['vSalaryPackage'];?> LPA</span>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                    <div class="d-flex mb-3">
                        <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                        <a class="btn btn-primary" href="https://play.google.com/store/apps/details?id=com.amri.emploihunt" target="_blank">Apply Now</a>
                    </div>
                    <!-- <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small> -->
                </div>
               
            </div>
          
        </div>
        <?php }}
            ?> 
       
    </div>
   
</div>
<?php

$error = curl_error($ch); 
echo $error; 
curl_close($ch);    
        }
?>
</div>
</div>
</div>

        <!-- Search End -->


        <!-- Category Start -->
        <!-- <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Explore By Category</h1>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                            <h6 class="mb-3">Marketing</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                            <h6 class="mb-3">Customer Service</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                            <h6 class="mb-3">Human Resource</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-tasks text-primary mb-4"></i>
                            <h6 class="mb-3">Project Management</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-chart-line text-primary mb-4"></i>
                            <h6 class="mb-3">Business Development</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-hands-helping text-primary mb-4"></i>
                            <h6 class="mb-3">Sales & Communication</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-book-reader text-primary mb-4"></i>
                            <h6 class="mb-3">Teaching & Education</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                            <h6 class="mb-3">Design & Creative</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Category End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0 about-bg rounded overflow-hidden">
                            <div class="col-6 text-start">
                                <img class="img-fluid w-100" src="img/about-1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid" src="img/about-2.jpg" style="width: 85%; margin-top: 15%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid" src="img/about-3.jpg" style="width: 85%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid w-100" src="img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">We Help To Get The Best Job And Find A Talent</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                        <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Jobs Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    <!-- <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <h6 class="mt-n1 mb-0">Featured</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <h6 class="mt-n1 mb-0">Full Time</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <h6 class="mt-n1 mb-0">Part Time</h6>
                            </a>
                        </li>
                    </ul> -->

                    <?php

                    $url = "https://api.emploihunt.com/api/job/jobs?iJobPreferenceId=0&current_page=1";
                    $ch = curl_init();
                    $accesstoken = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7InZGaXJzdE5hbWUiOiJuYW5kIiwidkpvYkxvY2F0aW9uIjoiIiwidFJlc3VtZVVybCI6Ii9tZWRpYS91cGxvYWRzL3Jlc3VtZS9WaWRoaSdzIFJlc3VtZV8yMDIzLTA5LTI5LTA0NTY1N1oucGRmIiwidkxhc3ROYW1lIjoiVmFnaGVsYSIsInZEdXJhdGlvbiI6bnVsbCwidldvcmtpbmdNb2RlIjoiT24tU2l0ZSIsInZNb2JpbGUiOiIrOTE5MDMzODAwOTI5IiwidlByZWZlckNpdHkiOiJQdW5lIiwidFRhZ0xpbmUiOiIiLCJ2RW1haWwiOiJuYW5kQGdtYWlsLmNvbSIsInZQcmVmZXJKb2JUaXRsZSI6IkVuZ2luZWVyIiwiaXNCbG9jayI6MCwiaWQiOjUsInZDaXR5IjoiQWhtZWRhYmFkIiwidlF1YWxpZmljYXRpb24iOiJCYWNoZWxvciBvZiBFbmdpbmVlcmluZyAoQkUpIiwiaXNMb2dpbiI6MCwidkZpcmViYXNlSWQiOiIyaXFyVURaWnV5U1FUOEc0NDg0NmRUdlRmbHAyIiwidEJpbyI6ImhlbGxvIEkgYW0gcHl0aG9uIGRldmVsb3BlciIsInRQcm9maWxlVXJsIjoiL21lZGlhL3VwbG9hZHMvdXNlcl9wcm9maWxlX3BpYy8xMDAwMTAwOTQ0XzIwMjMtMTEtMDMtMDc0MjA1Wi5qcGciLCJ0Q3JlYXRlZEF0IjoiMTY5NTk2MzQxNyIsImlSb2xlIjowLCJ2Q3VycmVudENvbXBhbnkiOiIiLCJ0UHJvZmlsZUJhbm5lclVybCI6bnVsbCwidFVwYWRhdGVkQXQiOiIxNjk1OTYzNDE3IiwidkRlc2lnbmF0aW9uIjoiIn19.b851EuPFlPR6C12jFNLINEI42rskGSUbfutbtUSNyrs";
                    $headr = array();
                    
                    
                    $headr[] = 'Content-length: 0';
                    $headr[] = 'Content-type: application/json';
                    $headr[] = 'Authorization: Bearer '.$accesstoken;
                    
                    curl_setopt($ch, CURLOPT_HTTPHEADER,$headr);
                    curl_setopt($ch, CURLOPT_URL,$url);
                    curl_setopt($ch, CURLOPT_HTTPGET, 1);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $result=curl_exec($ch);
                    
                    
                    
                           
                    ?><?php
                     $dataArray = json_decode($result, true);
                    
                              
                    $array=$dataArray['data']; 
                    $cnt=count($array);
                    ?>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <?php
                            for ($x = 0; $x < $cnt; $x++) {
                                ?>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                  
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <!-- <img src="https://emploihunt.com/<?php echo $dataArray['data'][$x]['tCompanyLogoUrl'];?>"  />  -->

                                        <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3"><?php echo $dataArray['data'][$x]['vJobTitle'];?></h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo $dataArray['data'][$x]['vAddress'];?>, INDIA</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i><?php echo $dataArray['data'][$x]['vSalaryPackage'];?> LPA</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                    </div>
                                   
                                </div>
                              
                            </div>
                            <?php }
                                    ?> 
                           
                        </div>
                       
                    </div>
                    <?php
        
                    $error = curl_error($ch);  
                   curl_close($ch);    
                
            ?>
                </div>
            </div>
        </div>





        <div class="container sliderdiv"> 
            <div class="slider">

                <div class="box2 box">
                    <div class="bg"></div>
                    <div class="details">
                        <h1 class="heading">I'm the first Box</h1>
                        <p class="pera">
                            Lorem ipsum dolor sit amet, consectetur adipiscing 
                            elit. Integer lacinia dui lectus. Donec scelerisque ipsum
                            diam, ac mattis orci pellentesque eget. 
                        </p>
                        <button class="slid-btn" onclick="window.open('https://play.google.com/store/apps/details?id=com.amri.emploihunt')">Apply Now</button>
                    </div>

                    <div class=""><div class="">


                        <img src="img/about-2.jpg">
                    </div></div>
                </div>
                                
                
                <div class="box2 box">
                    <div class="bg"></div>
                    <div class="details">
                        <h1 class="heading">I'm the first Box</h1>
                        <p class="pera">
                            Lorem ipsum dolor sit amet, consectetur adipiscing 
                            elit. Integer lacinia dui lectus. Donec scelerisque ipsum
                            diam, ac mattis orci pellentesque eget. 
                        </p>
                        <button class="slid-btn" onclick="window.open('https://play.google.com/store/apps/details?id=com.amri.emploihunt')">Apply Now</button>
                    </div>

                    <div class=""><div class="">


                        <img src="img/about-2.jpg">
                    </div></div>
                </div>
                                
                <div class="box2 box">
                    <div class="bg"></div>
                    <div class="details">
                        <h1 class="heading">I'm the first Box</h1>
                        <p class="pera">
                            Lorem ipsum dolor sit amet, consectetur adipiscing 
                            elit. Integer lacinia dui lectus. Donec scelerisque ipsum
                            diam, ac mattis orci pellentesque eget. 
                        </p>
                        <button class="slid-btn" onclick="window.open('https://play.google.com/store/apps/details?id=com.amri.emploihunt')">Apply Now</button>
                    </div>

                    <div class=""><div class="">


                        <img src="img/about-2.jpg">
                    </div></div>
                </div>
                                
                <div class="box2 box">
                    <div class="bg"></div>
                    <div class="details">
                        <h1 class="heading">I'm the first Box</h1>
                        <p class="pera">
                            Lorem ipsum dolor sit amet, consectetur adipiscing 
                            elit. Integer lacinia dui lectus. Donec scelerisque ipsum
                            diam, ac mattis orci pellentesque eget. 
                        </p>
                        <button class="slid-btn" onclick="window.open('https://play.google.com/store/apps/details?id=com.amri.emploihunt')">Apply Now</button>
                    </div>

                    <div class=""><div class="">


                        <img src="img/about-2.jpg">
                    </div></div>
                </div>
                                
                <div class="box2 box">
                    <div class="bg"></div>
                    <div class="details">
                        <h1 class="heading">I'm the first Box</h1>
                        <p class="pera">
                            Lorem ipsum dolor sit amet, consectetur adipiscing 
                            elit. Integer lacinia dui lectus. Donec scelerisque ipsum
                            diam, ac mattis orci pellentesque eget. 
                        </p>
                        <button class="slid-btn" onclick="window.open('https://play.google.com/store/apps/details?id=com.amri.emploihunt')">Apply Now</button>
                    </div>

                    <div class=""><div class="">


                        <img src="img/about-2.jpg">
                    </div></div>
                </div>   
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" class="prev" width="56.898" height="91" viewBox="0 0 56.898 91"><path d="M45.5,0,91,56.9,48.452,24.068,0,56.9Z" transform="translate(0 91) rotate(-90)" fill="#fff"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="next" width="56.898" height="91" viewBox="0 0 56.898 91"><path d="M45.5,0,91,56.9,48.452,24.068,0,56.9Z" transform="translate(56.898) rotate(90)" fill="#fff"/></svg>
            <div class="trail">
                    <div class="box1 active">1</div>
                    <div class="box2">2</div>
                    <div class="box3">3</div>
                    <div class="box4">4</div>
                    <div class="box5">5</div>
            </div>
        </div>  
        
        
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Company</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Contact</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="">Code By </a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
        <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/CSSRulePlugin3.min.js"></script>









        <script id="rendered-js" >
// Slider(all Slides in a container)
const slider = document.querySelector(".slider");
// All trails 
const trail = document.querySelector(".trail").querySelectorAll("div");

// Transform value
let value = 0;
// trail index number
let trailValue = 0;
// interval (Duration)
let interval = 64000;

// Function to slide forward
const slide = condition => {
  // CLear interval
  clearInterval(start);
  // update value and trailValue
  condition === "increase" ? initiateINC() : initiateDEC();
  // move slide
  move(value, trailValue);
  // Restart Animation
  animate();
  // start interal for slides back 
  start = setInterval(() => slide("increase"), interval);
};

// function for increase(forward, next) configuration
const initiateINC = () => {
  // Remove active from all trails
  trail.forEach(cur => cur.classList.remove("active"));
  // increase transform value
  value === 80 ? value = 0 : value += 20;
  // update trailValue based on value
  trailUpdate();
};

// function for decrease(backward, previous) configuration
const initiateDEC = () => {
  // Remove active from all trails
  trail.forEach(cur => cur.classList.remove("active"));
  // decrease transform value
  value === 0 ? value = 80 : value -= 20;
  // update trailValue based on value
  trailUpdate();
};

// function to transform slide 
const move = (S, T) => {
  // transform slider
  slider.style.transform = `translateX(-${S}%)`;
  //add active class to the current trail
  trail[T].classList.add("active");
};

const tl = gsap.timeline({ defaults: { duration: 0.6, ease: "power2.inOut" } });
tl.from(".bg", { x: "-100%", opacity: 0 }).
from(".pera", { opacity: 0 }, "-=0.3").
from(".heading", { opacity: 0, y: "30px" }, "-=0.3").
from(".slid-btn", { opacity: 1, y: "-10px" }, "-=0.8");

// function to restart animation
const animate = () => tl.restart();

// function to update trailValue based on slide value
const trailUpdate = () => {
  if (value === 0) {
    trailValue = 0;
  } else if (value === 20) {
    trailValue = 1;
  } else if (value === 40) {
    trailValue = 2;
  } else if (value === 60) {
    trailValue = 3;
  } else {
    trailValue = 4;
  }
};

// Start interval for slides
let start = setInterval(() => slide("increase"), interval);

// Next  and  Previous button function (SVG icon with different classes)
document.querySelectorAll("svg").forEach(cur => {
  // Assign function based on the class Name("next" and "prev")
  cur.addEventListener("click", () => cur.classList.contains("next") ? slide("increase") : slide("decrease"));
});

// function to slide when trail is clicked
const clickCheck = e => {
  // CLear interval
  clearInterval(start);
  // remove active class from all trails
  trail.forEach(cur => cur.classList.remove("active"));
  // Get selected trail
  const check = e.target;
  // add active class
  check.classList.add("active");

  // Update slide value based on the selected trail
  if (check.classList.contains("box1")) {
    value = 0;
  } else if (check.classList.contains("box2")) {
    value = 20;
  } else if (check.classList.contains("box3")) {
    value = 40;
  } else if (check.classList.contains("box4")) {
    value = 60;
  } else {
    value = 80;
  }
  // update trail based on value
  trailUpdate();
  // transfrom slide
  move(value, trailValue);
  // start animation
  animate();
  // start interval
  start = setInterval(() => slide("increase"), interval);
};

// Add function to all trails
trail.forEach(cur => cur.addEventListener("click", ev => clickCheck(ev)));

// Mobile touch Slide Section
const touchSlide = (() => {
  let start, move, change, sliderWidth;

  // Do this on initial touch on screen
  slider.addEventListener("touchstart", e => {
    // get the touche position of X on the screen
    start = e.touches[0].clientX;
    // (each slide with) the width of the slider container divided by the number of slides
    sliderWidth = slider.clientWidth / trail.length;
  });

  // Do this on touchDrag on screen
  slider.addEventListener("touchmove", e => {
    // prevent default function
    e.preventDefault();
    // get the touche position of X on the screen when dragging stops
    move = e.touches[0].clientX;
    // Subtract initial position from end position and save to change variabla
    change = start - move;
  });

  const mobile = e => {
    // if change is greater than a quarter of sliderWidth, next else Do NOTHING
    change > sliderWidth / 4 ? slide("increase") : null;
    // if change * -1 is greater than a quarter of sliderWidth, prev else Do NOTHING
    change * -1 > sliderWidth / 4 ? slide("decrease") : null;
    // reset all variable to 0
    [start, move, change, sliderWidth] = [0, 0, 0, 0];
  };
  // call mobile on touch end
  slider.addEventListener("touchend", mobile);
})();
//# sourceURL=pen.js
    </script>


        
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>