<!DOCTYPE html>
<html lang="en">

<head>
<?php
session_start();
    if(!($_SESSION['tAuthToken'])) {
        header("Location: demo3.php");
    }
    ?>
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
    <div class="container-xxl bg-white p-0">
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
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link active">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Jobs</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="job-list.html" class="dropdown-item">Job List</a>
                      
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
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <a href="insertjob.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Post A Job<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Header End -->
        <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Update Job</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Update Job</a></li>
                        <!-- <li class="breadcrumb-item text-white active" aria-current="page">About</li> -->
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Header End -->

 <?php


$id =$_GET['id'];
$currentpage =$_GET['currentpage'];



        $url = "https://api.emploihunt.com/api/job/jobs_by_id?jobId=$id";
        // echo $url;
        $ch = curl_init();
        $accesstoken = $_SESSION['tAuthToken'];
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

<div class="container-xxl py-5">
    
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Update Job</h1>
        <form action="updatejob.php">
        <div class="row g-4">
        <input type="number" class="form-control"  id="company_name" name="iJobId"placeholder="Company Name" value="<?php echo $dataArray['data']['id'];?>">

           <div class="col-lg-4">
                <select name="vJobTitle" class="form-control" >  
                    <option value="<?php echo $dataArray['data']['vJobTitle'];?>"><?php echo $dataArray['data']['vJobTitle'];?></option>  
                   
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

                          <div class="col-lg-4">
            <input type="text" class="form-control" id="company_name" name="vCompanyName"placeholder="Company Name" value="<?php echo $dataArray['data']['vCompanyName'];?>">

        </div>

                                      
        <div class="col-lg-4">
            <textarea name="tDes" id="" cols="30" rows="1" class="form-control"  placeholder="Job Description" value="<?php echo $dataArray['data']['tDes'];?>"></textarea>
            </div> 
            <div class="col-lg-4">
               <input type="text" id="company_name" class="form-control"  name="vJobLevel"placeholder="Job Level" value="<?php echo $dataArray['data']['vJobLevel'];?>">
                 
            </div>
                                      
            <div class="col-lg-4">
                        <input type="number" class="form-control"  id="company_name" name="vExperience"placeholder="Reuired Experiences"  value="<?php echo $dataArray['data']['vExperience'];?>">
                    </div>  
                    
                    <div class="col-lg-4">
                        <input type="number" class="form-control" id="company_name" name="iNumberOfVacancy"placeholder="Reuired Experiences" value="<?php echo $dataArray['data']['iNumberOfVacancy'];?>">
                    </div>


                    <div class="col-lg-4">
<textarea name="vJobRoleResponsbility" id="" class="form-control"  cols="30" rows="1" placeholder="Job Roles & Responsbility" value="<?php echo $dataArray['data']['vJobRoleResponsbility'];?>"></textarea>
</div>   

<div class="col-lg-4">
    <div class="d-flex">
                        <input type="text" class="name-input form-control   clear" name="tTechnicalSkill"placeholder="Technical Skill" value="<?php echo $dataArray['data']['tTechnicalSkill'];?>"/>
                        <button class="alert-btn btn btn-primary border-1" type="button"><?xml version="1.0" encoding="UTF-8" standalone="no"?>
                            <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                            <svg width="20px" height="20px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                
                                <title>plus</title>
                                <desc>Created with Sketch Beta.</desc>
                                <defs>
                            
                            </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                    <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-362.000000, -1037.000000)" fill="#ffff">
                                        <path d="M390,1049 L382,1049 L382,1041 C382,1038.79 380.209,1037 378,1037 C375.791,1037 374,1038.79 374,1041 L374,1049 L366,1049 C363.791,1049 362,1050.79 362,1053 C362,1055.21 363.791,1057 366,1057 L374,1057 L374,1065 C374,1067.21 375.791,1069 378,1069 C380.209,1069 382,1067.21 382,1065 L382,1057 L390,1057 C392.209,1057 394,1055.21 394,1053 C394,1050.79 392.209,1049 390,1049" id="plus" sketch:type="MSShapeGroup">
                            
                            </path>
                                    </g>
                                </g>
                            </svg></button>
                            </div>
                        <span id="a" class="pic1"></span>
</div>

                        <div class="col-lg-4">
                            <div class="d-flex">
                        <input type="text" class="name-input1 form-control clear" name="tSoftSkill"placeholder="Soft Skill" value="<?php echo $dataArray['data']['tSoftSkill'];?>"/>
                        <button class="alert-btn1 btn btn-primary border-1" type="button"><?xml version="1.0" encoding="UTF-8" standalone="no"?>
                            <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                            <svg width="20px" height="20px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                
                                <title>plus</title>
                                <desc>Created with Sketch Beta.</desc>
                                <defs>
                            
                            </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                                    <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-362.000000, -1037.000000)" fill="#ffff">
                                        <path d="M390,1049 L382,1049 L382,1041 C382,1038.79 380.209,1037 378,1037 C375.791,1037 374,1038.79 374,1041 L374,1049 L366,1049 C363.791,1049 362,1050.79 362,1053 C362,1055.21 363.791,1057 366,1057 L374,1057 L374,1065 C374,1067.21 375.791,1069 378,1069 C380.209,1069 382,1067.21 382,1065 L382,1057 L390,1057 C392.209,1057 394,1055.21 394,1053 C394,1050.79 392.209,1049 390,1049" id="plus" sketch:type="MSShapeGroup">
                            
                            </path>
                                    </g>
                                </g>
                            </svg></button>
                        </div>
                        <span id="b" class="pic1">
       </span>
       </div>
       <div class="col-lg-4">
       <select name="vEducation" class="form-control">  
                    <option value="<?php echo $dataArray['data']['vEducation'];?>"><?php echo $dataArray['data']['vEducation'];?></option>  
                    <option value="10th">10th</option>
        <option value="12th">12th</option>
        <option value="Diploma">Diploma</option>
        <option value="Bachelor of Arts (BA)">Bachelor of Arts (BA)</option>
        <option value="Bachelor of Science (BSc)">Bachelor of Science (BSc)</option>
        <option value="Bachelor of Commerce (BCom)">Bachelor of Commerce (BCom)</option>
        <option value="Bachelor of Engineering (BE)">Bachelor of Engineering (BE)</option>
        <option value="Bachelor of Technology (B.Tech)">Bachelor of Technology (B.Tech)</option>
        <option value="Bachelor of Business Administration (BBA)">Bachelor of Business Administration (BBA)</option>
        <option value="Bachelor of Computer Applications (BCA)">Bachelor of Computer Applications (BCA)</option>
        <option value="Bachelor of Architecture (B.Arch)">Bachelor of Architecture (B.Arch)</option>
        <option value="Bachelor of Pharmacy (B.Pharm)">Bachelor of Pharmacy (B.Pharm)</option>
        <option value="Bachelor of Fine Arts (BFA)">Bachelor of Fine Arts (BFA)</option>
        <option value="Bachelor of Hotel Management (BHM)">Bachelor of Hotel Management (BHM)</option>
        <option value="Bachelor of Science in Nursing (BSc Nursing)">Bachelor of Science in Nursing (BSc Nursing)</option>
        <option value="Bachelor of Design (B.Des)">Bachelor of Design (B.Des)</option>
        <option value="Bachelor of Commerce (Honours) (BCom Hons)">Bachelor of Commerce (Honours) (BCom Hons)</option>
        <option value="Bachelor of Economics (B.Econ)">Bachelor of Economics (B.Econ)</option>
        <option value="Bachelor of Business Studies (BBS)">Bachelor of Business Studies (BBS)</option>
        <option value="Bachelor of Science in Agriculture (BSc Agriculture)">Bachelor of Science in Agriculture (BSc Agriculture)</option>
        <option value="Bachelor of Physiotherapy (BPT)">Bachelor of Physiotherapy (BPT)</option>
        <option value="Bachelor of Education (B.Ed)">Bachelor of Education (B.Ed)</option>
        <option value="Bachelor of Social Work (BSW)">Bachelor of Social Work (BSW)</option>
        <option value="Master of Arts (MA)">Master of Arts (MA)</option>
        <option value="Master of Science (MSc)">Master of Science (MSc)</option>
        <option value="Master of Commerce (MCom)">Master of Commerce (MCom)</option>
        <option value="Master of Business Administration (MBA)">Master of Business Administration (MBA)</option>
        <option value="Master of Engineering (ME)">Master of Engineering (ME)</option>
        <option value="Master of Technology (M.Tech)">Master of Technology (M.Tech)</option>
        <option value="Master of Computer Applications (MCA)">Master of Computer Applications (MCA)</option>
        <option value="Master of Architecture (M.Arch)">Master of Architecture (M.Arch)</option>
        <option value="Master of Pharmacy (M.Pharm)">Master of Pharmacy (M.Pharm)</option>
        <option value="Master of Fine Arts (MFA)">Master of Fine Arts (MFA)</option>
        <option value="Master of Social Work (MSW)">Master of Social Work (MSW)</option>
        <option value="Master of Laws (LLM)">Master of Laws (LLM)</option>
        <option value="Master of Education (M.Ed)">Master of Education (M.Ed)</option>
        <option value="Master of Design (M.Des)">Master of Design (M.Des)</option>
        <option value="Master of Public Administration (MPA)">Master of Public Administration (MPA)</option>
        <option value="Master of Science in Nursing (MSc Nursing)">Master of Science in Nursing (MSc Nursing)</option>
        <option value="Master of Economics (M.Econ)">Master of Economics (M.Econ)</option>
        <option value="Master of Physiotherapy (MPT)">Master of Physiotherapy (MPT)</option>
        <option value="Master of Journalism and Mass Communication (MJMC)">Master of Journalism and Mass Communication (MJMC)</option>
        <option value="Master of Library and Information Science (MLIS)">Master of Library and Information Science (MLIS)</option>
        <option value="Arts">Arts</option>
        <option value="Science">Science</option>
        <option value="Commerce">Commerce</option>
        <option value="Engineering">Engineering</option>
        <option value="Technology">Technology</option>
        <option value="Business Administration">Business Administration</option>
        <option value="Computer Applications">Computer Applications</option>
        <option value="Architecture">Architecture</option>
        <option value="Fine Arts">Fine Arts</option>
        <option value="Design">Design</option>
        <option value="Hotel Management">Hotel Management</option>
        <option value="Nursing">Nursing</option>
        <option value="Pharmacy">Pharmacy</option>
        <option value="Physiotherapy">Physiotherapy</option>
        <option value="Education">Education</option>
        <option value="Social Work">Social Work</option>
        <option value="Economics">Economics</option>
        <option value="Agriculture">Agriculture</option>

             
    </select>  
       </div>
       <div class="col-lg-4">
        <select name="vAddress" class="form-control" >



  <option value="<?php echo $dataArray['data']['vAddress']; ?>"><?php echo $dataArray['data']['vAddress']; ?> </option>
 
  
                
         
           
            </select> 
        </div>
        <div class="col-lg-4">
        <select name="vSalaryPackage" class="form-control">  
                    <option value="<?php echo $dataArray['data']['vSalaryPackage'];?>"><?php echo $dataArray['data']['vSalaryPackage'];?></option>  
                    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>  
                  </select>              </div>
            <div class="col-lg-4">
            <select name="vWrokingMode" class="form-control">  
                    <option value="<?php echo $dataArray['data']['vWrokingMode'];?>"><?php echo $dataArray['data']['vWrokingMode'];?></option>  
                    <option value="on site">on site</option>  
                    <option value="on site"> on site</option>  
                    
                  </select>            
                  </div>
                  <div class="d-flex justify-content-center">
            <button class="click btn btn-primary border-1 m-1 " onclick="location.href = 'updatebtn.php?id=<?php echo $id;?>&currentpage=1';" id="search-button"> Update Post</button>

        </div>
        </form>
        

                         </div>

                        </div>

                        
                       
                    </div>
                   
                </div>
                <?php
                
                $error = curl_error($ch);  
                curl_close($ch);    
                
                ?>
                                <div class="d-flex justify-content-end">
        <button  id="" class="btn btn-danger border-1  m-1" onclick="location.href = 'requirter.php'" value="">Cancel Post</button>

</div>
                </div>

                </div>
                </div>

                           
                  
       
               <!-- <input type="file" id="img" name="img" accept="image/*"> -->
                  

                  
                        <!-- <textarea id="" name="vJobRoleResponsbility" rows="4" cols="10" placeholder="Job Roles & Responsbility"> -->
                           

                      
      
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <script>
        $('.alert-btn').click(function() {
            var name = $('.name-input').val();
            var txt = name.charAt(0).toUpperCase() + name.slice(1);
            $('.clear').val('');
            if (name == "") {
                // alert("plz enter value");
                false;

            } else {
                $('#a').prepend(txt + "</br>");
            }
            $("#a").toggleClass("bck");

        })
        </script>
            <script>
        $('.alert-btn1').click(function() {
            var name = $('.name-input1').val();
            var txt = name.charAt(0).toUpperCase() + name.slice(1);
            $('.clear').val('');
            if (name == "") {
                // alert("plz enter value");
                false;

            } else {
                $('#b').prepend(txt + "</br>");
            }
            $("#a").toggleClass("bck");

        })
        </script>
          
            


        <!-- About Start -->
        <!-- <div class="container-xxl py-5">
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
        </div> -->
        <!-- About End -->

        <!-- Footer Start -->
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
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

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