<!DOCTYPE html>
<html lang="ur" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <title>نور کلینک و میٹرنٹی سینٹر - G-11 مرکز</title>

    <style>
        :root { --primary: #007bff; --secondary: #00d2ff; --dark-bg: #1a1a2e; }
        body { background-color: #f4f7f6; font-family: 'Segoe UI', sans-serif; overflow-x: hidden; }

        /* Advanced Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white; padding: 120px 0 180px; position: relative;
            clip-path: ellipse(150% 100% at 50% 0%);
        }
        
        .badge-gov { background: rgba(255,255,255,0.2); border-radius: 50px; padding: 8px 20px; font-size: 0.9rem; margin-bottom: 20px; display: inline-block; }

        /* Glassmorphism Info Cards */
        .info-card {
            background: white; border: none; border-radius: 20px; padding: 30px;
            transition: 0.4s; box-shadow: 0 15px 35px rgba(0,0,0,0.05); height: 100%;
        }
        .info-card:hover { transform: translateY(-10px); box-shadow: 0 20px 40px rgba(0,0,0,0.1); }
        .info-icon { font-size: 40px; color: var(--primary); margin-bottom: 20px; }

        /* Advanced Doctor Card */
        .doctor-card {
            border: none; border-radius: 30px; background: white; transition: 0.5s;
            position: relative; overflow: hidden; padding: 40px 20px; text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
        }
        .doctor-card:hover { transform: scale(1.03); box-shadow: 0 25px 50px rgba(0,0,0,0.1); }
        .doctor-img-wrapper {
            width: 130px; height: 130px; margin: 0 auto 20px; border-radius: 50%;
            padding: 5px; background: linear-gradient(var(--primary), var(--secondary));
        }
        .doctor-img-wrapper img { width: 100%; height: 100%; border-radius: 50%; background: white; object-fit: cover; }

        .admin-badge {
            background: #e1f5fe; color: #0288d1; border-radius: 50px;
            padding: 5px 15px; font-size: 0.85rem; font-weight: 600; display: inline-block; margin-top: 10px;
        }

        /* Floating WhatsApp Button (Corrected Mobile Number) */
        .whatsapp-btn {
            position: fixed; bottom: 30px; left: 30px; background: #25d366; color: white;
            padding: 15px 25px; border-radius: 50px; font-weight: bold; text-decoration: none;
            z-index: 1000; box-shadow: 0 10px 25px rgba(37, 211, 102, 0.4); transition: 0.3s;
        }
        .whatsapp-btn:hover { transform: translateY(-5px) scale(1.05); color: white; }

        /* Services Grid */
        .service-item { background: white; border-radius: 20px; padding: 25px; transition: 0.3s; border: 1px solid #eee; }
        .service-item:hover { background: #f8f9fa; border-color: var(--primary); }
        .service-item i { font-size: 30px; color: var(--primary); margin-bottom: 15px; display: block; }

        .section-title { font-weight: 800; margin-bottom: 50px; position: relative; padding-bottom: 15px; }
        .section-title::after { content: ""; position: absolute; bottom: 0; right: 45%; width: 10%; height: 4px; background: var(--primary); border-radius: 10px; }
    </style>
</head>
<body>

    <section class="hero-section text-center animate__animated animate__fadeIn">
        <div class="container">
            <div class="badge-gov animate__animated animate__zoomIn">
                <i class="fas fa-check-circle me-1"></i> Government-approved medical complex
            </div>
            <h1 class="display-2 fw-bold mb-3">Noor Clinic and Maternity Center</h1>
            <p class="h4 opacity-90 mb-5">G-11 Center, Islamabad</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="tel:+92512362908" class="btn btn-primary btn-lg rounded-pill px-5 shadow fw-bold border-2">Emergency call</a>
                <a href="#doctors" class="btn btn-light btn-lg rounded-pill px-5 shadow fw-bold">List of doctors</a>
            </div>
        </div>
    </section>

    <div class="container" style="margin-top: -100px;">
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="info-card text-center animate__animated animate__fadeInUp" style="animation-delay: 0.1s;">
                    <i class="fas fa-phone-alt info-icon"></i>
                    <h5 class="fw-bold">Landline connection</h5>
                    <p class="text-muted fw-bold" dir="ltr">+92 51 2362908</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-card text-center animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
                    <i class="fas fa-user-shield info-icon"></i>
                    <h5 class="fw-bold">Chief Administrator</h5>
                    <p class="text-muted small">Dr. Fatima Mashal (Senior Administrator NIRMS)</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-card text-center animate__animated animate__fadeInUp" style="animation-delay: 0.3s;">
                    <i class="fas fa-map-marker-alt info-icon"></i>
                    <h5 class="fw-bold">Address</h5>
                    <p class="text-muted small">MX8X+R34, Mustafa Pharmacy, G-11 Markaz, Islamabad</p>
                </div>
            </div>
        </div>

        <section class="py-5 text-center">
            <h2 class="section-title">Our modern medical facilities</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="service-item shadow-sm">
                        <i class="fas fa-clock"></i>
                        <h6 class="fw-bold">24/7 Emergency</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service-item shadow-sm">
                        <i class="fas fa-microscope"></i>
                        <h6 class="fw-bold">Digital Lab</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service-item shadow-sm">
                        <i class="fas fa-pills"></i>
                        <h6 class="fw-bold">Mustafa Pharmacy</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service-item shadow-sm">
                        <i class="fas fa-baby-carriage"></i>
                        <h6 class="fw-bold">Maternity Center</h6>
                    </div>
                </div>
            </div>
        </section>

        <section id="doctors" class="py-5">
            <h2 class="text-center section-title">Our experienced experts</h2>
            
            @foreach($groups as $spec => $doctors)
                <div class="d-flex align-items-center mb-4 mt-5">
                    <h4 class="text-primary fw-bold mb-0">{{ $spec }}</h4>
                    <i class="fas fa-plus-square ms-2 text-primary"></i>
                </div>
                <div class="row g-4">
                    @foreach($doctors as $doctor)
                    <div class="col-md-4">
                        <div class="card doctor-card animate__animated animate__zoomIn">
                            <div class="doctor-img-wrapper">
                                <img src="https://cdn-icons-png.flaticon.com/512/3774/3774299.png" alt="Doctor">
                            </div>
                            <h4 class="fw-bold mb-1">{{ $doctor->name }}</h4>
                            <p class="text-primary small fw-bold mb-3">Specialist {{ $spec }}</p>

                            @if(Str::contains(strtolower($doctor->name), 'fatima'))
                                <div class="admin-badge mb-3">
                                    <i class="fas fa-star me-1 text-warning"></i> Senior Administrator NIRMS ⭐
                                </div>
                            @endif

                            <div class="d-grid mt-4">
                                <a href="https://wa.me/923335371687" class="btn btn-primary rounded-pill py-2 shadow-sm fw-bold">
                                    Book an appointment <i class="fab fa-whatsapp ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endforeach
        </section>
    </div>

    <a href="https://wa.me/923335371687" class="whatsapp-btn" target="_blank">
        <i class="fab fa-whatsapp me-2" style="font-size: 25px;"></i> WhatsApp contact
    </a>

    <footer class="bg-dark text-white py-5 mt-5">
        <div class="container text-center">
            <h4 class="fw-bold mb-4">Noor Clinic and Maternity Center G-11</h4>
            <div class="mb-4">
                <i class="fab fa-twitter mx-2 fa-lg opacity-75"></i>
                <i class="fab fa-instagram mx-2 fa-lg opacity-75"></i>
                <i class="fab fa-facebook mx-2 fa-lg opacity-75"></i>
            </div>
            <p class="mb-0 small opacity-50">© 2026 All Rights Reserved | Design by Administration</p>
        </div>
    </footer>

</body>
</html>