@extends('layouts.front.master')
@section('content')
    <!-- navbar end -->

    <!-- page title start -->
    <div class="breadcrumb-area bg-black bg-relative">
        <div class="banner-bg-img" style="background-image: url('assets/img/bg/1.webp');"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="page-title">Posh Act</h2>
                        <ul class="page-list">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Posh Act</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title end -->

    <!-- about area start -->
    <div class="about-area pd-top-100">
        <div class="container pt-0 mt-0">
        <div class="media-container-row">
            <div class="col-md-12 col-sm-12 wow slideInLeft">
                <div class="text text-center section-title">
                    <h1 class="sub-title double-line">Awareness About POSH ACT</h1>
                    <h3>Sexual Harassment of Women at Workplace Act (Prevention, Prohibition and Redressal) Act, 2013</h3>
                </div>
                <p class="pt-3">The POSH Act is enforceable across the entirety of India, ensuring all workplaces are legally required to provide a safe and secure environment free from sexual harassment for women.</p>

                <ul class="list-type:disk">
                    <li><b><u>Objective:</u></b> The core objective of the POSH Act is encapsulated in three key principles:</li>
                    <li><b><u>Prevention: </u> </b> Establishing measures to prevent instances of sexual harassment.</li>
                    <li><b><u>Prohibition: </u> </b> Enforcing strict prohibitions against sexual harassment at the workplace.</li>
                    <li><b><u>Redressal: </u> </b> Facilitating a mechanism for the redressal of complaints related to sexual harassment.</li>
                </ul>
                <div class="col-md-12 row">
                    <div class="col-md-6">
                        <img src="{{ asset('posh/sexual harrasment.jpg')}}" class="img-fluid rounded" />
                    </div>
                    <div class="col-md-6">
                        <div class="text mt-5">
                            <h3><b>What is Sexual Harassment?</b></h3>
                            <p>Sexual harassment includes any unwelcome behavior of a sexual nature that creates a hostile or intimidating environment. Sexual harassment does not always have to be specifically about sexual behavior or directed at a specific person. For example, negative comments about women as a group may be a form of sexual harassment. This can manifest in several forms:</p>
                        </div>
                    </div>
                </div>
                <br>
                <h5><b>Types of Sexual Harassment :</b> Here are some common types of sexual harassment:</h5>
                <br>
                <br>

                <div class="row">
                    <div class="col-md-4 rounded w-400">
                        <div class="container">
                            <img class="card-img-top img-responsive rounded imgheight" src="{{ asset('posh/verbal-harrassment.jpg') }}" alt="Card image" style="width:100%">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">1. Verbal Harassment</h4>
                            <ul class="card-text">
                                <li>Offensive comments, jokes, or remarks of a sexual nature.</li>
                                <li>Sexual innuendos or suggestive comments.</li>
                                <li>Unwanted sexual advances or requests for sexual favors.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 rounded w-400">
                        <div class="container">
                            <img class="card-img-top img-responsive rounded imgheight" src="{{ asset('posh/non-verbal-harrassment.jpg') }}" alt="Card image" style="width:100%">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">2. Non-Verbal Harassment</h4>
                            <ul class="card-text">
                                <li>Inappropriate gestures or facial expressions.</li>
                                <li>Displaying sexually suggestive images or materials.</li>
                                <li>Unwanted staring or leering.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 rounded w-400">
                        <div class="container">
                            <img class="card-img-top img-responsive rounded imgheight" src="{{ asset('posh/physical-harrassment.jpg') }}" alt="Card image" style="width:100%">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">3. Physical Harassment</h4>
                            <ul class="card-text">
                                <li>Unwanted touching, fondling, or groping.</li>
                                <li>Blocking someone’s path or intentionally sexually brushing against them.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 rounded w-400">
                        <div class="container">
                            <img class="card-img-top img-responsive rounded imgheight" src="{{ asset('posh/visual-harrassment.jpg') }}" alt="Card image" style="width:100%">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">4. Visual Harassment</h4>
                            <ul class="card-text">
                                <li>Exhibitionism or exposing one’s private parts.</li>
                                <li>Sending explicit images or videos without consent.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 rounded w-400">
                        <div class="container">
                            <img class="card-img-top img-responsive rounded imgheight" src="{{ asset('posh/cyber-harrasment.png') }}" alt="Card image" style="width:100%">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">5. Cyber Harassment</h4>
                            <ul class="card-text">
                                <li>Unwanted sexual advances, comments, or messages through digital communication channels, such as email, social media, or messaging apps.</li>
                                <li>Online stalking or sharing intimate images without consent.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row jumbotron">
                    <div class="col-md-2">
                        <div class="d-flex">

                            <img class="img-fluid w-25 rounded" src="assets/images/stars-color-icon.svg" alt="">
                            <h4 class="text-right"><b>Note:</b></h4>
                        </div>
                    </div>
                    <div class="col-md-10 bg-success text-white">
                        <p class="text-white p-3"><b class="text-white">It’s important to note that Sexual Harassment is not about the intent of the person engaging in the behavior but rather the impact it has on the recipient.</b>
                            What one person may find acceptable, another may find offensive. The perception of unwelcomeness and the impact on the victim are crucial factors in determining whether an action constitutes sexual harassment.
                        </p>
                    </div>
                </div>

                <br>
                <br>
                <h4 class="mt-2"><b>Q. Who is covered?</b></h4>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body card employee-height">
                            <h5 class="card-title">Employees</h5>
                            <p class="card-text">
                            <ul>
                                <li>Regular, temporary, ad hoc employees</li>
                                <li>Directly/through an agent/contract</li>
                                <li>With or without remuneration/voluntary</li>
                                <li>Express/implied terms of employment
                                <li>Probationer/apprentice…</li>
                            </ul>
                            </p>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body card">
                            <h5 class="card-title">Aggrieved Woman</h5>
                            <p class="card-text">
                            <ul>
                                <li>The Act recognizes the right of every woman to a safe and secure workplace environment irrespective of her age or employment/work status.</li>
                                <li>It includes all women whether engaged directly or through an agent including a contractor, with or without the knowledge of the principal employer.</li>
                                <li>The Act also covers a woman, who is working in a dwelling place or house.</li>

                            </ul>
                            </p>

                        </div>
                    </div>
                </div>
             
                <h4><b>Q. What Constitutes a Workplace?</b></h4>
                <br>
                <div class="row">
                    <div class="col-md-4 rounded w-400">
                        <div class="container">
                            <img class="card-img-top img-responsive rounded imgheight" src="{{ asset('posh/govt-owned.jpeg') }}" alt="Card image" style="width:100%">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Government owned/controlled establishment</h6>
                        </div>
                    </div>

                    <div class="col-md-4 rounded w-400">
                        <div class="container">
                            <img class="card-img-top img-responsive rounded imgheight" src="{{ asset('posh/hospital nursing.jpg') }}" alt="Card image" style="width:100%">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Hospitals/ Nursing homes</h6>
                        </div>
                    </div>

                    <div class="col-md-4 rounded w-400">
                        <div class="container">
                            <img class="card-img-top img-responsive rounded imgheight" src="{{ asset('posh/domestic.png') }}" alt="Card image" style="width:100%">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Dwelling place in case of a domestic worker</h6>
                        </div>
                    </div>

                    <div class="col-md-4 rounded w-400">
                        <div class="container">
                            <img class="card-img-top img-responsive rounded imgheight" src="{{ asset('posh/sport institute.jpg') }}" alt="Card image" style="width:100%">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Sports institutes, stadiums, training institutions</h6>
                        </div>
                    </div>

                    <div class="col-md-4 rounded w-400">
                        <div class="container">
                            <img class="card-img-top img-responsive rounded imgheight" src="{{ asset('posh/private sector.jpg') }}" alt="Card image" style="width:100%">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Private sector Organization</h6>
                        </div>
                    </div>

                    <div class="col-md-4 rounded w-400">
                        <div class="container">
                            <img class="card-img-top img-responsive rounded imgheight" src="{{ asset('posh/education institute.jpg') }}" alt="Card image" style="width:100%">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Vocational/ Education Institutions</h6>
                        </div>
                    </div>


                </div>

                <h4><b><u>Preventions :-</u></b></h4>
                <div class="row">
                    <div class="w-18 col-md-6">
                        <div class="card-body card">
                            <h5 class="card-title">Recognition</h5>
                            <p class="card-text">
                            <ul>
                                <li>Workplace Sexual Harassment is UNWELCOME behaviour</li>
                                <li>SEXUAL in nature</li>
                                <li>A SUBJECTIVE Experience</li>
                                <li>IMPACT not intent is what matters</li>
                                <li>Often occurs in a matrix of POWER</li>
                            </ul>
                            </p>

                        </div>
                    </div>

                    <div class="w-18 col-md-6">
                        <div class="card-body card">
                            <h5 class="card-title">Welcome & Un-welcome Behaviour</h5>
                            <p class="card-text">
                            <ul>
                                <li>UN-WELCOME vs WELCOME</li>
                                <li>Feels bad -Feels good</li>
                                <li>One-sided -Reciprocal</li>
                                <li>Feels powerless- In-control</li>
                                <li>Power-based -Equality</li>

                            </ul>
                            </p>
                        </div>
                    </div>

                </div>

                <h4><b><u>Impacts :-</u></b></h4>
                <div class="row">
                    <div class="col-md-6 rounded w-400">
                        <div class="container">
                            <img class="card-img-top img-responsive rounded imgheight" src="{{ asset('posh/professional-impact.jpg') }}" alt="Card image" style="width:100%">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Professional impact</h6>
                            <ul class="card-text">
                                <li>Decreased work performance</li>
                                <li>Increased absenteeism, loss of pay</li>
                                <li>Loss of promotional opportunities</li>
                                <li>Retaliation from the respondent, or colleagues/ friends of the respondent</li>
                                <li>Subjected to gossip and scrutiny at work</li>
                                <li>Being objectified</li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 rounded w-400">
                        <div class="container">
                            <img class="card-img-top img-responsive rounded imgheight" src="{{ asset('posh/personal-impact.jpg') }}" alt="Card image" style="width:100%">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Personal impact:</h6>
                            <ul class="card-text">
                                <li>Depression</li>
                                <li>Anxiety, panic attacks</li>
                                <li>Traumatic stress</li>
                                <li>Sleeplessness</li>
                                <li>Shame, guilt, self-blame</li>
                                <li>Difficulty in concentrating</li>
                                <li>Headaches</li>

                            </ul>
                        </div>
                    </div>

                </div>

                <h4><b><u>How to deal with Sexual Harassment:-</u></b></h4>
                <div class="col-md-12 row">
                    <div class="col-md-6">
                        <img src="{{ asset('posh/deal-with-harrasment.png') }}" class="img-fluid rounded" />
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p class="mt-5">
                            <ul>
                                <li>Immediately inform the alleged harasser that the behavior is unwelcome.</li>
                                <li>Do not pretend it did not happen.</li>
                                <li>Demand that the harassment be stopped.</li>
                                <li>Reinforce your statements with a firm tone and professional body language.</li>
                                <li>Report to the ICC within 3 months.</li>

                            </ul>
                            </p>
                        </div>
                    </div>
                </div>


                <h4 class="mt-5 mb-2"><b><u>Rights of the Complainant & Respondent :-</u></b></h4>

                <div class="row">
                <div class="col-md-6 rounded w-400">
                        <div class="container">
                            <img class="card-img-top rounded img-responsive imgheight" src="{{ asset('posh/complinant_image.png') }}" alt="Card image" style="width:100%">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Rights of the Complainant</h6>
                            <ul class="card-text">
                                <li>An empathetic attitude from the Complaints Committee so that she can state her grievance in a fearless environment.</li>
                                <li>Keeping her identity confidential throughout the process.</li>
                                <li>Support, in lodging FIR in case she chooses to lodge criminal proceedings.</li>
                                <li>A copy of the statement along with all the evidence and a list of witnesses submitted by the Respondent.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 rounded w-400">
                        <div class="container">
                            <img class="card-img-top img-responsive rounded imgheight" src="{{ asset('posh/respondent-image.jpg') }}" alt="Card image" style="width:100%">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Rights of the Respondent</h6>
                            <ul class="card-text">
                                <li>A patient hearing to present his case in a non-biased manner.</li>
                                <li>Keeping his identity confidential throughout the process.</li>
                                <li>Right to appeal in case not satisfied with the recommendations/findings of the Complaints Committee.</li>
                                <li>A copy of the statement along with all the evidence and a list of witnesses submitted by the complainant.</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <h4><b><u>Responsibilities of IC:-</u></b></h4>
                <div class="col-md-12 row">
                    <div class="col-md-6">
                        <img src="{{ asset('posh/responsibility-of-IC.JPG') }}" class="img-fluid rounded" />
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p class="mt-2">
                            <ul>
                                <li>Be thoroughly prepared.</li>
                                <li>Know the Act, Policy and/or relevant Service Rules.</li>
                                <li>Gather and record all relevant information.</li>
                                <li>Determine the main issues in the complaint.</li>
                                <li>Prepare relevant interview questions.</li>
                                <li>Conduct necessary interviews.</li>
                                <li>Ensure parties are made aware of the process and their rights/responsibilities within it Analyse information gathered.</li>
                                <li>Prepare the report with findings/recommendations.</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <h4><b><u>The Sexual Harassment Complaint Process:-</u></b></h4>
                <div class="text-center>
                  <img src="{{ asset('posh/complaint-process.jpg') }}" alt="" class="imgwidth rounded img-responsive">
                </div>

                <h4 class="mt-3"><b><u>The Sexual Harassment Report:-</u></b></h4>
                <div class="col-md-12 row">
                    <div class="col-md-6">
                        <img src="{{ asset('posh/report-image.jpg') }}" class="img-fluid rounded" />
                    </div>
                    <div class="col-md-6">
                        <div>
                            <p class="mt-2">
                                The Complaints Committee will prepare a final report that contains the following elements-

                            <ul>
                                <li> A description of the different aspects of the complaint.</li>
                                <li>A description of the process followed.</li>
                                <li>A description of the background information and documents that support or refute each aspect of the complaint.</li>
                                <li>An analysis of the information obtained.
                                <li>Findings as stated above.</li>

                            </ul>
                            </p>
                        </div>
                    </div>
                </div>

                <h4 class="mt-3"><b><u>Important dates for Complainant/Respondent/ICC</u></b></h4>
                <div class="text-center">
                    <img src="{{ asset('posh/important-dates.jpg') }}" alt="" class="imgwidth rounded img-responsive">
                </div>

                <h4 class="mt-3"><b><u>COMPLAINTS COMMITTEE</u></b></h4>
                <p>You can reach out to ICC (Internal Complaints Committee) at <b>Prakhar Software Solutions Pvt Ltd,</b> comprising of: </p>
                <p><b><u>Presiding Officer:</u></b> Hemlata Gupta, Senior Manager – hemlata.gupta@prakharsoftwares.com, 8826665843</p>
                <p>
                    <b><u>Internal Members:</u></b><br>
                    Mr. Ashish Mishra  - Talent Acquisition Specialist<br>
                    ashish.mishra@prakharsoftwares.com,7827486668 <br>
                    Ritesh Mittal  - Assistant Manager, Accounts, ritesh.mittal@prakharsoftwares.com, 8826660311<br>
                    Littil Kumari – Team Lead - Talent Acquisition, littil.kumari@prakharsoftwares.com, 8789566314<br>
                </p>

                <p><b><u>External Member</u></b><br>
                Ms. Lalita Rani, Advocate, lalitaadv1975@gmail.com, 9313126076</p>
            </div>


        </div>
    </div>
    </div>
 
    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
@endsection