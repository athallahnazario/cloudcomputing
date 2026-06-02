<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SkyHost Cloud</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background: #020617;
      color: white;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 25px 60px;
      border-bottom: 1px solid #1e293b;
    }

    .logo h1 {
      color: #22d3ee;
      font-size: 32px;
    }

    .logo p {
      color: #94a3b8;
      margin-top: 5px;
    }

    .nav-buttons button {
      padding: 12px 22px;
      border-radius: 12px;
      border: none;
      cursor: pointer;
      font-weight: bold;
      margin-left: 10px;
      transition: 0.3s;
    }

    .login-btn {
      background: transparent;
      border: 1px solid #334155 !important;
      color: white;
    }

    .start-btn {
      background: #22d3ee;
      color: black;
    }

    .hero {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 80px 60px;
      gap: 50px;
      flex-wrap: wrap;
    }

    .hero-text {
      flex: 1;
      min-width: 300px;
    }

    .hero-text h2 {
      font-size: 60px;
      line-height: 1.2;
      margin-bottom: 25px;
    }

    .hero-text span {
      color: #22d3ee;
    }

    .hero-text p {
      color: #94a3b8;
      font-size: 18px;
      line-height: 1.8;
      margin-bottom: 30px;
    }

    .hero-buttons button {
      padding: 14px 28px;
      border-radius: 14px;
      border: none;
      font-size: 16px;
      cursor: pointer;
      margin-right: 15px;
      transition: 0.3s;
    }

    .trial-btn {
      background: #22d3ee;
      color: black;
      font-weight: bold;
    }

    .demo-btn {
      background: transparent;
      border: 1px solid #334155 !important;
      color: white;
    }

    .dashboard {
      flex: 1;
      min-width: 320px;
      background: #0f172a;
      border: 1px solid #1e293b;
      border-radius: 25px;
      padding: 35px;
    }

    .dashboard h3 {
      margin-bottom: 25px;
      font-size: 28px;
    }

    .stats-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
    }

    .stat-card {
      background: #1e293b;
      padding: 25px;
      border-radius: 18px;
    }

    .stat-card p {
      color: #94a3b8;
    }

    .stat-card h4 {
      font-size: 30px;
      margin: 12px 0;
    }

    .stat-card span {
      color: #22d3ee;
    }

    .section {
      padding: 80px 60px;
    }

    .section-title {
      text-align: center;
      margin-bottom: 60px;
    }

    .section-title h2 {
      font-size: 42px;
      margin-bottom: 15px;
    }

    .section-title p {
      color: #94a3b8;
    }

    .services {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 25px;
    }

    .service-card {
      background: #0f172a;
      border: 1px solid #1e293b;
      padding: 30px;
      border-radius: 25px;
      transition: 0.3s;
    }

    .service-card:hover {
      transform: translateY(-8px);
    }

    .icon {
      width: 60px;
      height: 60px;
      background: #22d3ee;
      border-radius: 18px;
      margin-bottom: 20px;
    }

    .service-card h3 {
      font-size: 24px;
      margin-bottom: 15px;
    }

    .service-card p {
      color: #94a3b8;
      line-height: 1.7;
    }

    .pricing {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
    }

    .price-card {
      background: #0f172a;
      border: 1px solid #1e293b;
      padding: 35px;
      border-radius: 25px;
      transition: 0.3s;
    }

    .price-card:hover {
      border-color: #22d3ee;
    }

    .price-card h3 {
      font-size: 32px;
      margin-bottom: 15px;
    }

    .price {
      font-size: 48px;
      color: #22d3ee;
      margin-bottom: 25px;
      font-weight: bold;
    }

    .price-card ul {
      list-style: none;
      margin-bottom: 30px;
    }

    .price-card li {
      margin-bottom: 12px;
      color: #cbd5e1;
    }

    .price-card button {
      width: 100%;
      padding: 14px;
      border: none;
      border-radius: 14px;
      background: #22d3ee;
      color: black;
      font-weight: bold;
      cursor: pointer;
      font-size: 16px;
    }

    footer {
      text-align: center;
      padding: 40px;
      border-top: 1px solid #1e293b;
      color: #94a3b8;
    }

    footer h2 {
      color: #22d3ee;
      margin-bottom: 10px;
    }

    @media (max-width: 768px) {
      .hero {
        flex-direction: column;
      }

      .hero-text h2 {
        font-size: 42px;
      }

      .navbar {
        flex-direction: column;
        gap: 20px;
      }
    }

    .about-content{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
  gap:25px;
}

.about-card{
  background:#0f172a;
  border:1px solid #1e293b;
  padding:35px;
  border-radius:25px;
}

.about-card h3{
  margin-bottom:15px;
  color:#22d3ee;
}

.about-card p{
  color:#94a3b8;
  line-height:1.8;
}

.company-stats{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:25px;
}

.company-stat{
  background:#0f172a;
  border:1px solid #1e293b;
  text-align:center;
  padding:40px 20px;
  border-radius:25px;
}

.company-stat h3{
  font-size:42px;
  color:#22d3ee;
  margin-bottom:10px;
}

.company-stat p{
  color:#94a3b8;
}

.cta-box{
  background:#0f172a;
  border:1px solid #22d3ee;
  border-radius:30px;
  text-align:center;
  padding:60px 30px;
}

.cta-box h2{
  font-size:42px;
  margin-bottom:20px;
}

.cta-box p{
  color:#94a3b8;
  margin-bottom:30px;
}

.cta-box button{
  padding:15px 35px;
  border:none;
  border-radius:14px;
  background:#22d3ee;
  color:black;
  font-weight:bold;
  cursor:pointer;
}
  </style>
</head>

<body>

  <nav class="navbar">
    <div class="logo">
      <h1>SkyHost Cloud</h1>
      <p>Simple Cloud Computing Platform</p>
    </div>

    <div class="nav-buttons">
      <a href="login.php">
  <button class="login-btn">Login</button>
</a>
      <a href="register.php">
  <button class="start-btn">Get Started</button>
</a>
    </div>
  </nav>

  <section class="hero">

    <div class="hero-text">
      <h2>
        Easy Cloud Computing <span>For Everyone</span>
      </h2>

      <p>
        SkyHost Cloud helps businesses, students, and startups manage cloud hosting,
        storage, and server deployment without complicated configurations.
      </p>

      <div class="hero-buttons">
        <a href="register.php">
  <button class="trial-btn">Start Free Trial</button>
</a>
        <a href="demo.php">
  <button class="demo-btn">Watch Demo</button>
</a>
      </div>
    </div>

    <div class="dashboard">

      <h3>Server Dashboard</h3>

      <div class="stats-grid">

        <div class="stat-card">
          <p>Storage Used</p>
          <h4><?php echo $storage; ?></h4>
          <span>of 500 GB</span>
        </div>

        <div class="stat-card">
          <p>Active Servers</p>
          <h4><?php echo $servers; ?></h4>
          <span>Running smoothly</span>
        </div>

        <div class="stat-card">
          <p>Monthly Traffic</p>
          <h4><?php echo $traffic; ?></h4>
          <span>This month</span>
        </div>

        <div class="stat-card">
          <p>Current Plan</p>
          <h4><?php echo $plan; ?></h4>
          <span>Renews in 12 days</span>
        </div>

      </div>
    </div>
  </section>

  <section class="section">

  <div class="section-title">
    <h2>About SkyHost Cloud</h2>
    <p>Helping businesses and students build faster in the cloud.</p>
  </div>

  <div class="about-content">

    <div class="about-card">
      <h3>Who We Are</h3>
      <p>
        SkyHost Cloud is a modern cloud platform that provides secure hosting,
        scalable storage, and easy server deployment for startups,
        developers, students, and growing businesses.
      </p>
    </div>

    <div class="about-card">
      <h3>Our Mission</h3>
      <p>
        We aim to simplify cloud computing by delivering reliable,
        affordable, and high-performance infrastructure that anyone can use.
      </p>
    </div>

  </div>

</section>

  <section class="section">

    <div class="section-title">
      <h2>Our Services</h2>
      <p>Powerful cloud solutions designed for simplicity and scalability.</p>
    </div>

    <div class="services">

      <div class="service-card">
        <div class="icon"></div>
        <h3>Cloud Storage</h3>
        <p>Upload, manage, and share files securely with automatic backup.</p>
      </div>

      <div class="service-card">
        <div class="icon"></div>
        <h3>One Click Deploy</h3>
        <p>Deploy WordPress, Laravel, Node.js, or Python instantly.</p>
      </div>

      <div class="service-card">
        <div class="icon"></div>
        <h3>Server Monitoring</h3>
        <p>Monitor CPU, RAM, uptime, and server traffic in real-time.</p>
      </div>

      <div class="service-card">
        <div class="icon"></div>
        <h3>AI Assistant</h3>
        <p>Get instant cloud recommendations using AI technology.</p>
      </div>

    </div>
  </section>

  <section class="section">

  <div class="section-title">
    <h2>Why Choose SkyHost?</h2>
    <p>Built for performance, security, and reliability.</p>
  </div>

  <div class="services">

    <div class="service-card">
      <div class="icon"></div>
      <h3>99.99% Uptime</h3>
      <p>
        Enterprise-grade infrastructure ensures your applications stay online.
      </p>
    </div>

    <div class="service-card">
      <div class="icon"></div>
      <h3>Fast Deployment</h3>
      <p>
        Deploy websites and applications in minutes with one-click setup.
      </p>
    </div>

    <div class="service-card">
      <div class="icon"></div>
      <h3>Secure Environment</h3>
      <p>
        Multiple layers of security protect your data and applications.
      </p>
    </div>

    <div class="service-card">
      <div class="icon"></div>
      <h3>24/7 Support</h3>
      <p>
        Dedicated support team available whenever you need assistance.
      </p>
    </div>

  </div>

</section>

<section class="section">

  <div class="section-title">
    <h2>Trusted By Thousands</h2>
    <p>Growing businesses choose SkyHost every day.</p>
  </div>

  <div class="company-stats">

    <div class="company-stat">
      <h3>10K+</h3>
      <p>Active Users</p>
    </div>

    <div class="company-stat">
      <h3>500+</h3>
      <p>Servers Running</p>
    </div>

    <div class="company-stat">
      <h3>99.99%</h3>
      <p>Uptime</p>
    </div>

    <div class="company-stat">
      <h3>24/7</h3>
      <p>Technical Support</p>
    </div>

  </div>

</section>

  <section class="section">

    <div class="section-title">
      <h2>Pricing Plans</h2>
      <p>Flexible pricing for students and businesses.</p>
    </div>

    <div class="pricing">

      <div class="price-card">
        <h3>Basic</h3>
        <div class="price">Rp25K</div>

        <ul>
          <li>✔ 50 GB Storage</li>
          <li>✔ 1 Website</li>
          <li>✔ Basic Support</li>
        </ul>

        <a href="basic.php">
  <button>Choose Plan</button>
</a>
      </div>

      <div class="price-card">
        <h3>Pro</h3>
        <div class="price">Rp75K</div>

        <ul>
          <li>✔ 200 GB Storage</li>
          <li>✔ 5 Websites</li>
          <li>✔ Priority Support</li>
        </ul>

        <a href="pro.php">
  <button>Choose Plan</button>
</a>
      </div>

      <div class="price-card">
        <h3>Business</h3>
        <div class="price">Rp199K</div>

        <ul>
          <li>✔ Unlimited Storage</li>
          <li>✔ Unlimited Websites</li>
          <li>✔ 24/7 Support</li>
        </ul>

        <a href="bussiness.php">
  <button>Choose Plan</button>
</a>
      </div>

    </div>
  </section>

  <section class="section">

  <div class="cta-box">

    <h2>Ready To Launch Your Project?</h2>

    <p>
      Join thousands of users who trust SkyHost Cloud for hosting,
      deployment, and cloud infrastructure.
    </p>

    <a href="register.php">
  <a href="https://wa.me/6282152003489" target="_blank">
  <button>Get Started Now</button>
</a>
</a>

  </div>

</section>

  <footer>
    <h2>SkyHost Cloud</h2>
    <p>Cloud Computing Made Simple For Indonesia</p>
  </footer>

</body>
</html>