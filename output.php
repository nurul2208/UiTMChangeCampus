<?php include('header.php'); ?>


    <div class="container">
        <div class="more-info1 about-info1">
            <div class="container">
                <div class="more-info-content1">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        $signature = $_POST["signature"] ?? "";

                        // Retrieve date data

                        $date = $_POST["date"] ?? "";

                        echo "<div class='row'>";
                        echo "<div class='section'><h1>Section A</h1></div><br>";
                        echo "<div class='col-md-6'>";
                        echo "<div class='form-group2'>";
                        echo "<label>Name: " . htmlspecialchars($_POST["name"]) . "</label><br>";
                        echo "</div>";

                        echo "<div class='form-group2'>";
                        echo "<label>I.C No/Passport No.: " . htmlspecialchars($_POST["ic"]) . "</label><br>";
                        echo "</div>";

                        echo "<div class='form-group2'>";
                        echo "<label>Student ID No.: " . htmlspecialchars($_POST["student_id"]) . "</label><br>";
                        echo "</div>";

                        echo "<div class='form-group2'>";
                        echo "<label>Gender: " . htmlspecialchars($_POST["gender"]) . "</label>";
                        echo "</div>";

                        echo "<div class='form-group2'>";
                        echo "<label>Semester: " . htmlspecialchars($_POST["semester"]) . "</label>";
                        echo "</div>";

                        echo "<div class='form-group2'>";
                        echo "<label>Program Code: " . htmlspecialchars($_POST["program_code"]) . "</label>";
                        echo "</div>";

                        echo "<div class='form-group2'>";
                        echo "<label>Faculty Code:  " . htmlspecialchars($_POST["faculty_code"]) . "</label>";
                        echo "</div>";

                        $Campus = htmlspecialchars($_POST["Campus"]);
                        echo "<div class='form-group2' >";
                        echo "<label>Campus:  ". $Campus ."</label>";
                        echo "</div>";
                        echo "</div>";



                        echo "<div class='col-md-6'>";
                        echo "<div class='form-group2'>";
                        echo "<label>Level of Study:  " . htmlspecialchars($_POST["level_of_study"]) . "</label>";
                        echo "</div>";

                        echo "<div class='form-group2'>";
                        echo "<label>Mode of Study:  " . htmlspecialchars($_POST["mode_of_study"]) . "</label>";
                        echo "</div>";
                        
                        
                        echo "<label>Address: ";
                        echo "<div style='width: 90% ; margin:2px; word-wrap: break-word;'>";
                        echo htmlspecialchars($_POST["address"]);
                        echo "</div></label>";

                        echo "<div class='form-group2'>";
                        echo "<label>Postcode:  " . htmlspecialchars($_POST["postcode"]) . "</label>";
                        echo "</div>";

                        echo "<div class='form-group2'>";
                        echo "<label>Tel No:  " . htmlspecialchars($_POST["tel_no"]) . "</label>";
                        echo "</div>";

                        echo "<div class='form-group2'>";
                        echo "<label>Mobile Phone No:  " . htmlspecialchars($_POST["mobile_no"]) . "</label>";
                        echo "</div>";

                        echo "<div class='form-group2'>";
                        echo "<label>Email:  " . htmlspecialchars($_POST["email"]) . "</label><br>";
                        echo "</div>";

                        echo "<div class='form-group2'>";
                        echo "<label>Scholarship /Funding (if any):  " . htmlspecialchars($_POST["scholarship"]) . "</label>";
                        echo "</div>";
                        echo "</div>";

                        echo "<br><br><div class='section'><h1>Section II(Please Complete)</h1></div>";
                        echo "<br><div class='col-md-6'>";
                        echo "<label>I would like to change:</label>";
                        echo "<div class='form-group2'>";
                        echo "<label>Change from Campus:  " . htmlspecialchars($_POST["fromCampus"]) . "</label>";
                        echo "</div>";
                        echo "<div class='form-group2'>";
                        echo "<label>Change to Campus:  " . htmlspecialchars($_POST["toCampus"]) . "</label>";
                        echo "</div>";
                        echo "</div>";

                        echo "<div class='col-md-6'>";
                        echo "<div class='form-group2'>";
                        echo "<label>starting from semester:  " . htmlspecialchars($_POST["start"]) . "</label>";
                        echo "</div>";
                        echo "<div class='form-group2'>";
                        echo "<label>Year:  " . htmlspecialchars($_POST["year"]) . "</label>";
                        echo "</div>";
                        echo "</div>";

                        echo "<label>Reasons to change campus:";
                        echo "<div style='width: 80% ; margin:20px; word-wrap: break-word;'>";
                        echo htmlspecialchars($_POST["reasons"]);
                        echo "</div></label>";



                        echo "<div class='text-end'>";
                        echo "<br><br><input type='back' class='btn btn-info' value='Back' onclick='history.back()'>";
                        echo "<input type='submit' class='btn btn-success' value='Confrim' onclick='showConfirmation()'>";
                        echo "</div>";
                        echo "</div>";
                    } else {
                        echo "No form submission detected.";
                    }
                    ?>

                    <!-- Submission Confirmation Message -->
                    <div id='submissionConfirmation' style='display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: #fff; padding: 20px; border: 1px solid #ccc; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);'>
                        <h2>Application Submitted!</h2>
                        <p>Your application has been submitted successfully.</p>
                    </div>

                    <!-- JavaScript to show the confirmation message -->
                    <script>
                        function showConfirmation() {
                            document.getElementById('submissionConfirmation').style.display = 'block';
                            setTimeout(function() {
                                window.location.href = 'index.php';
                            }, 1000); // 10000 milliseconds = 10 seconds
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include('footer.php'); ?>