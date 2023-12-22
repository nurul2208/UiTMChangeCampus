<?php include('header.php'); ?>

<!-- Starts Here -->
<div class="fun-facts">
    <div class="container">
        <div class="more-info-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-image">
                        <img src="assets/images/me.jpg" class="oval" alt="">
                        <audio id="backgroundAudio" controls>
                            <source src="/ict600/CCampus/assets/music/2.mp3" type="audio/mp3">
                            <source src="/ict600/CCampus/assets/music/1.mp3" type="audio/mp3">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="right-content">
                        <span>About Me </span>
                        <h2>Hello, I'm <em> Nurul Qistina!</em></h2>
                        <p>Welcome to my corner of the internet! I'm thrilled to have you here. Let me tell you a bit
                            about myself. My name is Nurul Qistina Binti Osman Talib, matric number 2021816376 currently
                            pursuing a degree at UiTM Cawangan Arau.<br><br>Let's Connect!<br> I love connecting with
                            like-minded individuals! Feel free to reach out if you share an interest in coding. I believe
                            in the power of collaboration and the wonderful things that can happen when we connect.
                            <br><br>Thank you for stopping by, and I hope you enjoy exploring this space as much as I
                            enjoy creating it!</p>
                        <a href="form.php" class="filled-button">Apply Change Campus </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        setTimeout(function () {
            var audio = document.getElementById('backgroundAudio');
            audio.play();
        }, 4000); // 4000 milliseconds = 4 seconds
    });
</script>
