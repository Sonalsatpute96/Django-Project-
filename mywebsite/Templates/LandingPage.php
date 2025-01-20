{% load static %}
{% include "header.html" %}
    <div class="container-fluid bg-body-dark text-body-dark" id="Home">
        <div class="row">
            <!-- Left Content section -->
            <div class="col-lg-7 col-md-6 col-12 d-flex flex-column justify-content-start px-3 px-md-5 ">
                <a href="#" class="text-light display-3 fw-normal text-decoration-none text-start mt-5">
                    LEAP - Certified Holistic Leadership Coach (CHLC) Program
                </a>


                <p class="mb-4 mt-3  text-light fs-5">Transforming Leaders, Elevating Impact – Empowering the Future
                    of Leadership</p>
                <div class="d-flex flex-column flex-md-row  gap-3 mt-2 "> <!-- Use d-flex for horizontal alignment -->
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSc9oS6lBDCTqY3EySHImXKOSwO8weUIqfVs0JN7vUD3wST1Xg/viewform" class="btn btn-secondary btn-lg text-light me-3">Register Now</a>
                    <a href="https://j99ll23953d.typeform.com/to/SfOprTuD" class="btn btn-secondary btn-lg text-light me-3">Leadership Compass Assessment Link</a>
                    <a href="<?php echo ROOT_URL; ?>/assets/LEAD FROM WITHIN.pptx.pdf" class="btn btn-secondary btn-lg text-light me-3">Download Booklet</a>
                </div>
            </div>

            <!-- Right image section  -->
            <div class="col-lg-5 col-md-6 col-12">
                <img src="{% static '/images/LEAP IMAGE INFINITY LOOP.png' %}" alt="LEAP IMAGE INFINITY LOOP" class="img-fluid"
                    style="height: 90%; width: 100%;object-fit: cover;">
            </div>
        </div>
    </div>


    <div class="container-fluid py-3 text-light" id="Overview" style="
    background-image: url('<?php echo ROOT_URL; ?>/images/LEAP IMAGE 14.png');
    background-size: cover;
    background-position: center;
    position: relative;
    color: white;
    ">
        <!-- Overlay for blur effect -->
        <div class="overlay" style="
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5); /* semi-transparent overlay */
        backdrop-filter: blur(8px); /* adjust blur level */
        z-index: 1;
    "></div>

        <!-- Content to highlight -->
        <div class="content" style="position: relative; z-index: 2;">
            <div class="row mt-5 mb-5">
                <div class="col-12 mb-2 text-opacity text-center px-3 px-md-5">
                    <h1 class="text-light text-start display-5">Program Overview</h1>
                </div>
                <div class="row mt-2">
                    <div class="col-12 px-3 px-md-5">
                        <div class="d-flex align-items-center mb-3">
                            <span class="bg-primary fs-4 rounded-1 me-2 d-flex align-items-center justify-content-center"
                                style="width: 45px; height: 45px;">
                                1
                            </span>
                            <h4 class="mb-0">LEAP Framework</h3>
                        </div>
                        <div class="ps-4">
                            <p class="ms-4"> Master the innovative LEAP approach, integrating Rational, Emotional, and
                                Spiritual Intelligence for holistic leadership.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-2 ">
                    <div class="col-12 px-3 px-md-5">
                        <div class="d-flex align-items-center mb-3">
                            <span class="bg-primary fs-4 rounded-1 me-2 d-flex align-items-center justify-content-center"
                                style="width: 45px; height: 45px;">
                                2
                            </span>
                            <h4 class="mb-0">Leadership Mastery</h3>
                        </div>
                        <div class="ps-4">
                            <p class="ms-4">Develop essential leadership skills through immersive experiences and cutting-edge
                                methodologies.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12 px-3 px-md-5">
                        <div class="d-flex align-items-center mb-3">
                            <span class="bg-primary fs-4 rounded-1 me-2 d-flex align-items-center justify-content-center"
                                style="width: 45px; height: 45px;">
                                3
                            </span>
                            <h4 class="mb-0">Certification Journey</h3>
                        </div>
                        <div class="ps-4">
                            <p class="ms-4">Become a certified coach, equipped to guide others towards transformative
                                leadership success.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-body-tertiary text-body-tertiary" id="Holistic">
        <div class="row">
            <!-- Text Content Area -->
            <div class="col-lg-7 col-md-6 col-12 d-flex flex-column justify-content-center p-0">
                <div class="row text-center mb-4">
                    <div class="col-12 px-3 px-md-5">
                        <h1 class="text-start display-5">Why Holistic Leadership is Critical Today</h1>
                    </div>
                </div>
                <div class="row px-3 px-md-5">
                    <!-- Adjusted column size for smaller screens -->
                    <div class="col-12 col-sm-6 mt-3">
                        <div class="d-flex align-items-center mb-2">
                            <span class="bg-primary text-light fs-5 rounded-1 d-flex align-items-center justify-content-center me-2"
                                style="width: 45px; height: 45px;">
                                1
                            </span>
                            <h4 class="mb-0">Global Complexity</h4>
                        </div>
                        <p>Navigate intricate global challenges with a comprehensive leadership approach.</p>
                    </div>

                    <div class="col-12 col-sm-6 mt-3">
                        <div class="d-flex align-items-center mb-2">
                            <span class="bg-primary text-light fs-5 rounded-1 d-flex align-items-center justify-content-center me-2"
                                style="width: 45px; height: 45px;">
                                2
                            </span>
                            <h4 class="mb-0">Rapid Change</h4>
                        </div>
                        <p>Adapt swiftly to technological and societal shifts with holistic decision-making skills.</p>
                    </div>
                </div>

                <div class="row mt-4 px-3 px-md-5">
                    <div class="col-12 col-sm-6 mt-3">
                        <div class="d-flex align-items-center mb-2">
                            <span class="bg-primary text-light fs-5 rounded-1 d-flex align-items-center justify-content-center me-2"
                                style="width: 45px; height: 45px;">
                                3
                            </span>
                            <h4 class="mb-0">Human-Centric Leadership</h4>
                        </div>
                        <p>Foster empathy and connection in an increasingly digital world.</p>
                    </div>

                    <div class="col-12 col-sm-6 mt-3">
                        <div class="d-flex align-items-center mb-2">
                            <span class="bg-primary text-light fs-5 rounded-1 d-flex align-items-center justify-content-center me-2"
                                style="width: 45px; height: 45px;">
                                4
                            </span>
                            <h4 class="mb-0">Sustainable Impact</h4>
                        </div>
                        <p>Drive long-term success by balancing profit, people, and planet.</p>
                    </div>
                </div>
            </div>

            <!-- Image Area -->
            <div class="col-lg-5 col-md-6 col-12 d-flex align-items-stretch">
                <img src="{% static '/images/LEAP IMAGE 7.png' %}" alt="LEAP-IMAGE" class="img-fluid w-100 h-100 p-0"
                    style="object-fit: cover; height: 100%; width: 100%;">
            </div>
        </div>
    </div>


    <div class="container-fluid bg-body-dark text-body-dark" id="Leadership">
        <div class="row mt-5 mb-5">
            <!-- Content Section -->
            <div class="col-lg-7 col-md-6 col-12 d-flex flex-column justify-content-center p-4 px-3 px-md-5">
                <h1 class="text-light text-start display-5 mb-2">The Eight Essential Elements of Leadership</h1>

                <!-- List of Leadership Elements with rectangle bullets using Bootstrap classes -->
                <div class="d-flex align-items-center mb-3 mt-2">
                    <span class="bg-primary rounded-1 me-2" style="width: 30px; height: 30px;"></span>
                    <h4 class="mb-0">Resilient Leadership</h4>
                </div>
                <div class="ps-3">
                    <p class="ms-4">Research shows that teams led by resilient leaders have 15% higher retention rates.
                        <a href="#" class="text-secondary">Harvard Business Review</a>
                    </p>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <span class="bg-primary rounded-1 me-2" style="width: 30px; height: 30px;"></span>
                    <h4 class="mb-0">Creative Leadership</h4>
                </div>
                <div class="ps-3">
                    <p class="ms-4">Companies with a strong creative leadership culture experience a 20% increase in
                        innovation. <a href="#" class="text-secondary">Forbes</a></p>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <span class="bg-primary rounded-1 me-2" style="width: 30px; height: 30px;"></span>
                    <h4 class="mb-0">Empowered Leadership</h4>
                </div>
                <div class="ps-3">
                    <p class="ms-4">Organizations with high levels of employee empowerment report a 10% higher
                        productivity rate. <a href="#" class="text-secondary">McKinsey & Company</a></p>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <span class="bg-primary rounded-1 me-2" style="width: 30px; height: 30px;"></span>
                    <h4 class="mb-0">Compassionate Leadership</h4>
                </div>
                <div class="ps-3">
                    <p class="ms-4">Studies have shown that compassionate leadership leads to 30% lower employee stress
                        levels. <a href="#" class="text-secondary">Psychology Today</a></p>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <span class="bg-primary rounded-1 me-2" style="width: 30px; height: 30px;"></span>
                    <h4 class="mb-0">Authentic Leadership</h4>
                </div>
                <div class="ps-3">
                    <p class="ms-4">Authentic leaders are 25% more likely to have a positive impact on employee
                        engagement. <a href="#" class="text-secondary">Forbes</a></p>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <span class="bg-primary rounded-1 me-2" style="width: 30px; height: 30px;"></span>
                    <h4 class="mb-0">Visionary Leadership</h4>
                </div>
                <div class="ps-3">
                    <p class="ms-4">Companies with clear visionary leadership achieve a 15% higher growth rate. <a
                            href="#" class="text-secondary">Inc.com</a></p>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <span class="bg-primary rounded-1 me-2" style="width: 30px; height: 30px;"></span>
                    <h4 class="mb-0">Purpose-Driven Leadership</h4>
                </div>
                <div class="ps-3">
                    <p class="ms-4">Organizations with a strong sense of purpose experience a 20% increase in employee
                        satisfaction. <a href="#" class="text-secondary">Forbes</a></p>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <span class="bg-primary rounded-1 me-2" style="width: 30px; height: 30px;"></span>
                    <h4 class="mb-0">Integrated Leadership</h4>
                </div>
                <div class="ps-3">
                    <p class="ms-4">Integrated leadership teams have a 10% higher success rate in achieving strategic
                        goals. <a href="#" class="text-secondary">Leadership IQ</a></p>
                </div>
            </div>

            <!-- Image Section -->
            <div class="col-lg-5 col-md-6 col-12 d-flex align-items-stretch">
                <img src="{% static '/images/LEAP INFINITY LOOP IMAGE.png' %}" alt="LEAP INFINITY LOOP IMAGE" class="img-fluid rounded"
                    style="object-fit: cover; height: 100%; width: 100%;">
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 bg-body-secondary text-body-secondary" id="Compass">
        <!-- Heading -->
        <div class="row text-center mb-4">
            <div class="col-12 px-3 px-md-5">
                <h1 class="text-start display-5">Level 1: Practitioner – Leadership Compass</h1>
            </div>
        </div>

        <!-- Content Row with 3 Columns -->
        <div class="row text-center">
            <div class="col-lg-4 col-md-6 mb-4 px-3 px-md-5">
                <div class="p-3 rounded shadow-sm h-100">
                    <h4>Self-Discovery</h4>
                    <p class="fs-5">Uncover your unique leadership strengths and areas for growth.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="p-3 rounded shadow-sm h-100">
                    <h4>Foundational Skills</h4>
                    <p class="fs-5">Master essential leadership techniques and communication strategies.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="p-3 rounded shadow-sm h-100">
                    <h4>Practical Application</h4>
                    <p class="fs-5">Apply new skills in real-world scenarios and case studies.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-3 bg-body-tertiary text-body-tertiary" id="Master">
        <div class="row align-items-center">
            <!-- Text Content Section -->
            <div class="col-lg-7 col-md-6 col-12 px-3 px-md-5">
                <h1 class="text-start mb-4 display-5">Level 2: Master – Leadership Blueprint & Alter Ego Techniques</h1>

                <p class="mb-4">This level delves into creating a personalized leadership strategy that maximizes
                    impact. Participants will craft their leadership blueprint, drawing upon their unique strengths and
                    skills. They will also develop a powerful leadership persona – an "alter ego" – to overcome
                    challenges and inspire their teams.</p>

                <p class="mb-4">Learn sophisticated coaching techniques to guide others towards leadership excellence.
                    By mastering these advanced skills, you'll become a more impactful and confident leader.</p>
            </div>

            <!-- Image Section-->
            <div class="col-lg-5 col-md-6 col-12 d-flex align-items-stretch">
                <img src="{% static '/images/LEAP IMAGE - ALTER EGO.png' %}" alt="LEAP Image" class="img-fluid"
                    style="object-fit: cover; height: 100%; width: 100%;">
            </div>
        </div>
    </div>


    <div class="container-fluid py-3 bg-body-secondary text-body-secondary" id="Initiator">
        <div class="row align-items-center">
            <!-- Text Content Section  -->
            <div class="col-lg-7 col-md-6 col-12 px-3 px-md-5">
                <h1 class="text-start mb-4 display-5">Level 3: Initiator - Akasha Retreat – Unlock Infinite Possibilities</h1>

                <!-- Arrow Bullet Points -->
                <div class="mb-4">
                    <div class="d-flex align-items-start mb-3">
                        <span class="text-primary me-2" style="font-size: 1.2rem;">&#x25B6;</span>
                        <div>
                            <h4>Immersive Experience</h4>
                            <p class="ps-1 mb-0">Experience a profound transformation through Merkaba meditation and
                                Three Minds Integration practices.</p>
                            <p class="ps-1">Merkaba Meditation is a powerful technique that connects you to your
                                divine essence.</p>

                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-3">
                        <span class="text-primary me-2" style="font-size: 1.2rem;">&#x25B6;</span>
                        <div>
                            <h4>Sacred Geometry & Universal Language</h4>
                            <p class="ps-1">Explore the powerful symbolism and universal principles of sacred geometry
                                to amplify your leadership impact.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start">
                        <span class="text-primary me-2" style="font-size: 1.2rem;">&#x25B6;</span>
                        <div>
                            <h4>Quantum Leadership</h4>
                            <p class="ps-1">Learn cutting-edge techniques to lead in an interconnected, rapidly changing
                                world.</p>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Image Section  -->
            <div class="col-lg-5 col-md-6 col-12 d-flex align-items-stretch">
                <img src="{% static '/images/LEAP IMAGE 9.png' %}" alt="LEAP Image" class="img-fluid"
                    style="object-fit: cover; height: 100%; width: 100%;">
            </div>
        </div>
    </div>

    <div class="container-fluid bg-body-dark text-body-dark" id="CHLC">
        <!-- Heading Section -->
        <div class="row text-center mb-5 mt-5">
            <div class="col-12 px-3 px-md-5">
                <h1 class="text-light text-start mt-3 mb-4 display-5">Level 4: One-on-One Coaching Mastery & Final Credential - CHLC</h1>
            </div>

            <!-- Arrows and Content Section -->
            <div class="row text-center justify-content-center mb-4 mt-3">
                <!-- Arrow and Coaching Practicum Content -->
                <div class="col-lg-4 col-md-6 col-12 order-1 order-lg-1 mb-4 px-3 px-md-5">
                    <div class="arrow-box bg-primary text-body-dark">
                        <span class="arrow-number">1</span>
                    </div>
                    <div class="p-3 border rounded shadow-sm bg-primary text-body-dark mt-3">
                        <h4>Coaching Practicum</h4>
                        <p>Apply advanced coaching techniques with real clients under expert supervision.</p>
                    </div>
                </div>

                <!-- Arrow and Leadership Integration Content -->
                <div class="col-lg-4 col-md-6 col-12 order-3 order-lg-2 mb-4 px-3 px-md-5">
                    <div class="arrow-box bg-primary text-body-dark">
                        <span class="arrow-number">2</span>
                    </div>
                    <div class="p-3 border rounded shadow-sm bg-primary text-body-dark mt-3">
                        <h4>Leadership Integration</h4>
                        <p>Synthesize all learned elements into a cohesive leadership coaching approach.</p>
                    </div>
                </div>

                <!-- Arrow and Final Assessment Content -->
                <div class="col-lg-4 col-md-6 col-12 order-5 order-lg-3 mb-4 px-3 px-md-5">
                    <div class="arrow-box bg-primary text-body-dark">
                        <span class="arrow-number">3</span>
                    </div>
                    <div class="p-3 border rounded shadow-sm bg-primary text-body-dark mt-3">
                        <h4>Final Assessment</h4>
                        <p>Demonstrate mastery through a comprehensive evaluation of skills and knowledge.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid py-5 bg-body-secondary text-body-secondary" id="Certification">
        <!-- Heading Section -->
        <div class="row text-center">
            <div class="col-12 px-3 px-md-5 mb-5">
                <h1 class="text-start display-5">Certification Ceremony & Recognition</h1>
            </div>

            <!-- First Row of Cards -->
            <div class="row text-center mb-1 px-3 px-md-5">
                <!-- Official CHLC Credential Card -->
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="card shadow-sm h-100">
                        <img src="{% static '/images/LEAP IMAGE CERTIFICATE.png' %}" class="LEAP IMAGE CERTIFICATE" alt="Official CHLC Credential">
                        <div class="card-body">
                            <h4 class="card-title">Official CHLC Credential</h4>
                            <p class="card-text">Receive your official CHLC credential, a tangible symbol of your mastery of holistic leadership, signifying your commitment to developing your personal and professional potential.</p>
                        </div>
                    </div>
                </div>

                <!-- Global Leadership Network Access Card -->
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="card shadow-sm h-100">
                        <img src="{% static '/images/LEAP IMAGE 11.png' %}" class="card-img-top" alt="Global Leadership Network Access">
                        <div class="card-body">
                            <h4 class="card-title">Global Leadership Network Access</h4>
                            <p class="card-text">Gain access to a global network of like-minded leaders who share a commitment to holistic leadership. This network provides an invaluable platform for ongoing collaboration, knowledge sharing, and professional growth.</p>
                        </div>
                    </div>
                </div>

                <!-- Digital Badge for Online Profiles Card -->
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="card shadow-sm h-100">
                        <img src="{% static '/images/LEAP IMAGE 4.png' %}" class="card-img-top" alt="Digital Badge for Online Profiles">
                        <div class="card-body">
                            <h4 class="card-title">Digital Badge for Online Profiles</h4>
                            <p class="card-text">Showcase your achievement with a digital badge for your online profiles, demonstrating your commitment to holistic leadership and setting you apart as a leader committed to personal and organizational transformation.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Row of Cards -->
            <div class="row text-center px-3 px-md-5">
                <!-- Featured in Leadership Publications Card -->
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="card shadow-sm h-100">
                        <img src="{% static '/images/LEAP IMAGE 15.png' %}" class="card-img-top" alt="Featured in Leadership Publications">
                        <div class="card-body">
                            <h4 class="card-title">Featured in Leadership Publications</h4>
                            <p class="card-text">Be featured in prestigious leadership publications, sharing your expertise and inspiring others to embrace a more holistic approach to leadership. This recognition will elevate your leadership profile and extend your reach within the global leadership community.</p>
                        </div>
                    </div>
                </div>

                <!-- Exclusive Alumni Events Card -->
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="card shadow-sm h-100">
                        <img src="{% static '/images/LEAP IMAGE 18.png' %}" class="card-img-top" alt="Exclusive Alumni Events">
                        <div class="card-body">
                            <h4 class="card-title">Exclusive Alumni Events</h4>
                            <p class="card-text">Attend exclusive alumni events, connecting with fellow CHLC graduates and sharing insights. These events foster a sense of community and provide valuable opportunities for networking, mentorship, and ongoing learning.</p>
                        </div>
                    </div>
                </div>

                <!-- Ongoing Professional Development Card -->
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="card shadow-sm h-100">
                        <img src="{% static '/images/LEAP IMAGE 20.png' %}" class="card-img-top" alt="Ongoing Professional Development">
                        <div class="card-body">
                            <h4 class="card-title">Ongoing Professional Development</h4>
                            <p class="card-text">Benefit from ongoing professional development opportunities tailored to enhance your leadership skills and keep you at the forefront of the holistic leadership movement.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-body-dark text-body-dark" id="Enroll">
        <div class="row align-items-center">
            <!-- Content Section -->
            <div class="col-lg-7 col-md-6 col-12 px-3 px-md-5 mt-md-0 mt-5">
                <h1 class="text-light text-start mb-5 display-5">
                    Enroll Today and
                    <span class="d-block">Transform Your</span>
                    <span class="d-block">Leadership</span>
                </h1>
                <!-- Buttons -->
                <div class="d-flex flex-column flex-md-row  gap-3 mt-3 "> <!-- Use d-flex for horizontal alignment -->
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSc9oS6lBDCTqY3EySHImXKOSwO8weUIqfVs0JN7vUD3wST1Xg/viewform" class="btn btn-secondary btn-lg text-light me-3">Register Now</a>
                    <a href="https://j99ll23953d.typeform.com/to/SfOprTuD" class="btn btn-secondary btn-lg text-light me-3">Leadership Compass Assessment Link</a>
                    <a href="<?php echo ROOT_URL; ?>/assets/LEAD FROM WITHIN.pptx.pdf" class="btn btn-secondary btn-lg text-light me-3">Download Booklet</a>
                </div>
                <!-- Paragraph -->
                <p class="mt-3">Take the first step towards becoming a certified holistic leadership coach. Join a global community of visionary leaders shaping the future.</p>
            </div>

            <!-- Image Section  -->
            <div class="col-lg-5 col-md-6 col-12 d-flex align-items-stretch">
                <img src="{% static '/images/LEAP IMAGE 5.png' %}" alt="LEAP Image" class="img-fluid rounded"
                    style="object-fit: cover; height: 100%; width: 100%;">
            </div>
        </div>
    </div>

    <!-- Contact Us Section -->
    <div class="container-fluid py-5 bg-body-secondary text-body-secondary" id="contact">
        <div class="row text-center">
            <div class="col-12 px-3 px-md-5 mb-3">
                <h1 class="text-start display-5">Contact Us</h1>
            </div>
        </div>
        <div class="row g-4 px-3 px-md-5 mb-3">
            <!-- Website -->
            <div class="col-md-4 text-center">
                <div class="p-4 border rounded shadow-sm h-100">
                    <h4>Website</h4>
                    <p><a href="www.leap-ictaglobal.com" target="_blank" class="text-decoration-none">www.leap-ictaglobal.com</a></p>
                </div>
            </div>

            <!-- Email -->
            <div class="col-md-4 text-center">
                <div class="p-4 border rounded shadow-sm h-100">
                    <h4>Emails</h4>
                    <p class="mb-0"><a href="info@leap-ictaglobal.com " class="text-decoration-none">info@leap-ictaglobal.com </a></p>
                    <p class="mb-0"><a href="kusum@leap-ictaglobal.com" class="text-decoration-none">kusum@leap-ictaglobal.com</a></p>
                    <p class="mb-0"><a href="preetha@leap-ictaglobal.com" class="text-decoration-none">preetha@leap-ictaglobal.com</a></p>
                </div>
            </div>

            <!-- Phone Number -->
            <div class="col-md-4 text-center">
                <div class="p-4 border rounded shadow-sm h-100">
                    <h4>Phone Numbers</h4>
                    <p><a href="tel:+1234567890" class="text-decoration-none">+91 9823770352 <br> +91 9952963332</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<?php
// USER-CODE-BLOCK END -- Do not modify anything outside this block or this comment line.
?>