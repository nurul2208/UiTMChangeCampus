
<?php include('header.php'); ?>

 <!-- Page Content -->
   <div class="container">
   </div>
<div class="more-info1 about-info1">
      <div class="container">
        <div class="more-info-content1">                     
  <form action="output.php" method="post">
    <div class="row">
          <div class="section"><h1>SECTION I (To be filled by student in CAPITAL LETTERS)</h1></div><br>
         <div class="col-md-6">
                <!-- Name -->
                <label for="name">Name  </label>
                <input type="text" name="name" pattern="[A-Za-z ]+" title="Alphabets only" placeholder="Name" required>
                <br>
                
                <!-- IC -->
                <label for="ic">I.C No/Passport No. </label>
                <input type="text" name="ic" pattern="[0-9]+" title="Numbers only" placeholder="01082208664" required>
                <br>

                <!-- Student ID -->
                <label for="student_id">Student ID No.</label>
                <input type="text" name="student_id" pattern="[0-9]+" title="Numbers only" placeholder="2025789685" required>
                <br>

              <div class="form-group">
                <!-- Gender -->
                <label for="gender">Gender</label>
                <select name="gender" required>
                  <option value="" disabled selected>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
              </div>
                
              <div class="form-group">
                <!-- Semester -->
                <label for="semester">Semester</label>
                <select name="semester" required>
                  <option value="" disabled selected>Select Semester</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
              </div>

                <br>

                <!-- Program Code -->
                <div class="form-group1">
                <label for="program_code">Program Code</label>
                <input type="text" name="program_code"  placeholder="AS250"required>
            </div>
                <br>

                <!-- Faculty Code -->
                <div class="form-group1">
                <label for="faculty_code">Faculty Code</label>
                <input type="text" name="faculty_code" pattern="[A-Za-z]+" title="Alphabets only" placeholder="AS" required>
            </div>
                <br>

                <!-- Campus -->
                <div class="form-group">
                <label for="Campus">Campus</label>
                <select name="Campus" style="text-transform: uppercase" required>
                    <option value="" disabled selected>Select Campus</option>
                    <optgroup label="UiTM Selangor">
                        <option value="Shah Alam">Shah Alam</option>
                        <option value="Puncak Alam">Puncak Alam</option>
                        <option value="Puncak Perdana">Puncak Perdana</option>
                        <option value="Dengkil">Dengkil</option>
                        <option value="Selayang">Selayang</option>
                        <option value="Sungai Buloh">Sungai Buloh</option>
                    </optgroup>
                    <optgroup label="UiTM Perak">
                        <option value="Seri Iskandar">Seri Iskandar</option>
                        <option value="Tapah">Tapah</option>
                        <option value="Teluk Intan">Teluk Intan</option>
                    </optgroup>

                    <optgroup label="UiTM Melaka">
                        <option value="Alor Gajah">Alor Gajah</option>
                        <option value="Bandaraya Melaka">Bandaraya Melaka</option>
                        <option value="Jasin">Jasin</option>
                    </optgroup>

                    <optgroup label="UiTM Negeri Sembilan">
                        <option value="Kuala Pilah">Kuala Pilah</option>
                        <option value="Seremban">Seremban</option>
                        <option value="Rembau">Rembau</option>
                    </optgroup>

                    <optgroup label="UiTM Johor">
                        <option value="Segamat">Segamat</option>
                        <option value="Pasir Gudang">Pasir Gudang</option>
                    </optgroup>

                    <optgroup label="UiTM Pahang">
                        <option value="Jengka">Jengka</option>
                        <option value="Raub">Raub</option>
                        <option value="Kuantan">Kuantan</option>
                    </optgroup>

                    <optgroup label="UiTM Terengganu">
                        <option value="Dungun">Dungun</option>
                        <option value="Kuala Terengganu">Kuala Terengganu</option>
                        <option value="Bukit Besi">Bukit Besi</option>
                    </optgroup>

                    <optgroup label="UiTM Kelantan">
                        <option value="Machang">Machang</option>
                        <option value="Kota Bharu">Kota Bharu</option>
                    </optgroup>

                    <optgroup label="UiTM Pulau Pinang">
                        <option value="Permatang Pauh">Permatang Pauh</option>
                        <option value="Bertam">Bertam</option>
                    </optgroup>

                    <optgroup label="UiTM Perlis">
                        <option value="Arau">Arau</option>
                    </optgroup>

                    <optgroup label="UiTM Kedah">
                        <option value="Sungai Petani">Sungai Petani</option>
                    </optgroup>

                    <optgroup label="UiTM Sarawak">
                        <option value="Samarahan">Samarahan</option>
                    </optgroup>

                    <optgroup label="UiTM Sabah">
                        <option value="Kota Kinabalu">Kota Kinabalu</option>
                        <option value="Tawau">Tawau</option>
                    </optgroup>
                    </select>
                    </div>

                <!-- Level of Study -->
                <div class="form-group">
                <label for="level_of_study">Level of Study</label>
                <select name="level_of_study" style="text-transform: uppercase" required>
                  <option value="" disabled selected>Select Level of Study</option>
                    <option value="MASTER">Master</option>
                    <option value="PHD">PhD</option>
                </select>
                </div>

                <!-- Mode of Study -------->
                  <div class="form-group">
                <label for="mode_of_study">Mode of Study</label>
                <select name="mode_of_study"style="text-transform: uppercase"  required>
                  <option value="" disabled selected>Select Mode of Study</option>
                    <option value="FULLTIME">Full-time</option>
                    <option value="PART-TIME">Part-time</option>
                    <option value="FLP">FLP</option>
                            </select>
                </div>
            </div>
                <br>
                

                <!-- Address ---------------------------------->
                <div class="col-md-6">
                <label for="address">Address</label>
                <textarea  type="Addtext" name="address" rows="3" cols="4" required></textarea>
                <br>

                <!-- Poscode -->
                <div class="form-group1">
                <label for="postcode">Postcode</label>
                <input type="text" name="postcode" pattern="[0-9]+" title="Numbers only" required>
            </div>
                <br>

                <!-- Tel No -->
                <div class="form-group1">
                <label for="tel_no">Tel No.</label>
                <input type="text" name="tel_no" pattern="[0-9]+" title="Numbers only" placeholder="05685462">
            </div>
                <br>

                <!-- Mobile No -->
                <div class="form-group1">
                <label for="mobile_no">Mobile Phone No.</label>
                <input type="text" name="mobile_no" pattern="[0-9]+" title="Numbers only" placeholder="0124567893" required>
            </div>
                <br>

                <!-- Email -->
                <label for="email">E-mail</label>
                <input type="email" name="email" required>
                <br>

                <!-- Scholarship -->
                <label for="scholarship">Scholarship /Funding (if any)</label>
                <input type="text" name="scholarship">
                </div>












                <br><br><div class="section">
                  <h1>Section II(Please Complete)</h1>
                </div><br>
         <div class="col-md-6">
            <!-- Campus -->
                  <label>I whould like to change : </label>                  
                    <div class="form-group">
                        <label for="fromCampus">from Campus</label>
                      <select name="fromCampus" style="text-transform: uppercase" required>
                    <option value="" disabled selected>Select Campus</option>
                    <optgroup label="UiTM Selangor">
                        <option value="Shah Alam">Shah Alam</option>
                        <option value="Puncak Alam">Puncak Alam</option>
                        <option value="Puncak Perdana">Puncak Perdana</option>
                        <option value="Dengkil">Dengkil</option>
                        <option value="Selayang">Selayang</option>
                        <option value="Sungai Buloh">Sungai Buloh</option>
                    </optgroup>
                    <optgroup label="UiTM Perak">
                        <option value="Seri Iskandar">Seri Iskandar</option>
                        <option value="Tapah">Tapah</option>
                        <option value="Teluk Intan">Teluk Intan</option>
                    </optgroup>

                    <optgroup label="UiTM Melaka">
                        <option value="Alor Gajah">Alor Gajah</option>
                        <option value="Bandaraya Melaka">Bandaraya Melaka</option>
                        <option value="Jasin">Jasin</option>
                    </optgroup>

                    <optgroup label="UiTM Negeri Sembilan">
                        <option value="Kuala Pilah">Kuala Pilah</option>
                        <option value="Seremban">Seremban</option>
                        <option value="Rembau">Rembau</option>
                    </optgroup>

                    <optgroup label="UiTM Johor">
                        <option value="Segamat">Segamat</option>
                        <option value="Pasir Gudang">Pasir Gudang</option>
                    </optgroup>

                    <optgroup label="UiTM Pahang">
                        <option value="Jengka">Jengka</option>
                        <option value="Raub">Raub</option>
                        <option value="Kuantan">Kuantan</option>
                    </optgroup>

                    <optgroup label="UiTM Terengganu">
                        <option value="Dungun">Dungun</option>
                        <option value="Kuala Terengganu">Kuala Terengganu</option>
                        <option value="Bukit Besi">Bukit Besi</option>
                    </optgroup>

                    <optgroup label="UiTM Kelantan">
                        <option value="Machang">Machang</option>
                        <option value="Kota Bharu">Kota Bharu</option>
                    </optgroup>

                    <optgroup label="UiTM Pulau Pinang">
                        <option value="Permatang Pauh">Permatang Pauh</option>
                        <option value="Bertam">Bertam</option>
                    </optgroup>

                    <optgroup label="UiTM Perlis">
                        <option value="Arau">Arau</option>
                    </optgroup>

                    <optgroup label="UiTM Kedah">
                        <option value="Sungai Petani">Sungai Petani</option>
                    </optgroup>

                    <optgroup label="UiTM Sarawak">
                        <option value="Samarahan">Samarahan</option>
                    </optgroup>

                    <optgroup label="UiTM Sabah">
                        <option value="Kota Kinabalu">Kota Kinabalu</option>
                        <option value="Tawau">Tawau</option>
                    </optgroup>
                    </select>
                </div>

                    <!-- Campus -->
                    <div class="form-group">
                    <label for="toCampus">to Campus</label>
                    <select name="toCampus"  style="text-transform: uppercase" required>
                    <option value="" disabled selected>Select Campus</option>
                    <optgroup label="UiTM Selangor">
                        <option value="Shah Alam">Shah Alam</option>
                        <option value="Puncak Alam">Puncak Alam</option>
                        <option value="Puncak Perdana">Puncak Perdana</option>
                        <option value="Dengkil">Dengkil</option>
                        <option value="Selayang">Selayang</option>
                        <option value="Sungai Buloh">Sungai Buloh</option>
                    </optgroup>
                    <optgroup label="UiTM Perak">
                        <option value="Seri Iskandar">Seri Iskandar</option>
                        <option value="Tapah">Tapah</option>
                        <option value="Teluk Intan">Teluk Intan</option>
                    </optgroup>

                    <optgroup label="UiTM Melaka">
                        <option value="Alor Gajah">Alor Gajah</option>
                        <option value="Bandaraya Melaka">Bandaraya Melaka</option>
                        <option value="Jasin">Jasin</option>
                    </optgroup>

                    <optgroup label="UiTM Negeri Sembilan">
                        <option value="Kuala Pilah">Kuala Pilah</option>
                        <option value="Seremban">Seremban</option>
                        <option value="Rembau">Rembau</option>
                    </optgroup>

                    <optgroup label="UiTM Johor">
                        <option value="Segamat">Segamat</option>
                        <option value="Pasir Gudang">Pasir Gudang</option>
                    </optgroup>

                    <optgroup label="UiTM Pahang">
                        <option value="Jengka">Jengka</option>
                        <option value="Raub">Raub</option>
                        <option value="Kuantan">Kuantan</option>
                    </optgroup>

                    <optgroup label="UiTM Terengganu">
                        <option value="Dungun">Dungun</option>
                        <option value="Kuala Terengganu">Kuala Terengganu</option>
                        <option value="Bukit Besi">Bukit Besi</option>
                    </optgroup>

                    <optgroup label="UiTM Kelantan">
                        <option value="Machang">Machang</option>
                        <option value="Kota Bharu">Kota Bharu</option>
                    </optgroup>

                    <optgroup label="UiTM Pulau Pinang">
                        <option value="Permatang Pauh">Permatang Pauh</option>
                        <option value="Bertam">Bertam</option>
                    </optgroup>

                    <optgroup label="UiTM Perlis">
                        <option value="Arau">Arau</option>
                    </optgroup>

                    <optgroup label="UiTM Kedah">
                        <option value="Sungai Petani">Sungai Petani</option>
                    </optgroup>

                    <optgroup label="UiTM Sarawak">
                        <option value="Samarahan">Samarahan</option>
                    </optgroup>

                    <optgroup label="UiTM Sabah">
                        <option value="Kota Kinabalu">Kota Kinabalu</option>
                        <option value="Tawau">Tawau</option>
                    </optgroup>
                    </select>
                </div>
              </div>
                <div class="col-md-6">
                  <div class="form-group">
                <label class="form-label">starting from semester</label>
                <div class="form-check form-check-inline" >
                    <input class="form-check-input" type="radio" name="start" id="startMarch" value="March" required>
                    <label class="form-check-label" for="startMarch">March</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="start" id="startSeptember" value="September" required>
                    <label class="form-check-label" for="startSeptember">September</label>
                        </div>
                    </div>
                

                
                    <div class="form-group1">
                        <label for="year" class="form-label">Year</label>
                        <input type="text" class="form-control" id="year" name="year" pattern="[0-9]+" title="Numbers only" placeholder="2024" required>
                    </div>
                </div>



                <label for="reasons" class="form-label">Reasons to change campus:</label>
                <textarea  type ="Retext" name="reasons" rows="5"required></textarea>


                <!-- Hidden input field for the date -->
                <input type="hidden" name="date" id="currentDate">

                <!-- No error pop-up for optional field -->
                <div class="text-end">
                    <br><br><input type="reset" class="btn btn-danger" value="Reset">
                    <input type="submit" class="btn btn-success" value="Submit">
                </div>
            </div>
             
     </form>
 </div>
</div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelector("form").addEventListener("submit", function (event) {
            var isValid = true;


            var inputs = this.querySelectorAll("input, select");
            for (var i = 0; i < inputs.length; i++) {
                var errorSpan = inputs[i].nextElementSibling;
                if (errorSpan && errorSpan.classList.contains("error")) {
                    errorSpan.style.display = "none";
                    if (inputs[i].value.trim() === "") {
                        isValid = false;
                        errorSpan.style.display = "block";
                        inputs[i].style.borderColor = "red";
                    } else {
                        inputs[i].style.borderColor = "";
                    }
                }
            }

            if (isValid) {

            } else {
                setTimeout(function () {
                    var errorSpans = document.querySelectorAll(".error");
                    for (var i = 0; i < errorSpans.length; i++) {
                        errorSpans[i].style.display = "none";
                    }
                }, 20000);
                
                event.preventDefault();
            }

        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {

            document.getElementById("currentDate").value = currentDate;

    });
</script>

</body>

<?php include('footer.php'); ?>
