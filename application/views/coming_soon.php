<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coming Soon</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>
<style>.coming-soon-section {
    min-height: 100vh;
    background: linear-gradient(135deg, #0d6efd, #003a8f);
    color: #fff;
}

.logo-box {
    background: rgba(255,255,255,0.15);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    border-radius: 16px;
}

.logo-box img {
    max-height: 60px;
}

h1 {
    font-size: 48px;
    font-weight: 700;
}

.countdown .time-box {
    background: rgba(255,255,255,0.15);
    border-radius: 16px;
    padding: 25px 10px;
    margin-top: 20px;
}

.countdown span {
    display: block;
    font-size: 36px;
    font-weight: 700;
}

.countdown small {
    font-size: 14px;
    opacity: 0.9;
}
</style>
<section class="coming-soon-section d-flex align-items-center">
    <div class="container text-center">

        <!-- Logo -->
        <div class="logo-box mb-4">
            <!-- <img src="img/logo.png" alt="Company Logo"> -->
        </div>

        <h1 class="mb-3">Coming Soon</h1>
        <p class="lead text-light mb-5">
            We are working hard to launch something amazing.
        </p>

        <!-- Countdown -->
        <div class="row justify-content-center countdown">

            <div class="col-6 col-md-3">
                <div class="time-box">
                    <span id="days">00</span>
                    <small>Days</small>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="time-box">
                    <span id="hours">00</span>
                    <small>Hours</small>
                </div>
            </div>

            <div class="col-6 col-md-3 mt-3 mt-md-0">
                <div class="time-box">
                    <span id="minutes">00</span>
                    <small>Minutes</small>
                </div>
            </div>

            <div class="col-6 col-md-3 mt-3 mt-md-0">
                <div class="time-box">
                    <span id="seconds">00</span>
                    <small>Seconds</small>
                </div>
            </div>

        </div>

    </div>
</section>

<script src="script.js"></script>
<script>
const launchDate = new Date("Dec 31, 2025 00:00:00").getTime();

setInterval(() => {
    const now = new Date().getTime();
    const distance = launchDate - now;

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("days").innerText = days;
    document.getElementById("hours").innerText = hours;
    document.getElementById("minutes").innerText = minutes;
    document.getElementById("seconds").innerText = seconds;
}, 1000);
</script>

</body>
</html>
