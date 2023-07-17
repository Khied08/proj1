<!-- Main Content -->
<div id="content">
   <div class="container">
   <br>
        <br>
        <br>
        <center>
        <h1 class="h3 mb-2 text-gray-800">BARANGAY RESIDENT INFORMATION</h1>
</center>
        <br>
        <br>

      <form method="POST">
         <div class="form-row">
            <div class="form-group col-md-3">
               <label for="firstname">First Name</label>
               <input type="text" name="firstname" class="form-control" required />
               <span class="text-danger"><?= form_error('firstname') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="middlename">Middle Name</label>
               <input type="text" name="middlename" class="form-control" required />
               <span class="text-danger"><?= form_error('middlename') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="lastname">Last Name</label>
               <input type="text" name="lastname" class="form-control" required />
               <span class="text-danger"><?= form_error('lastname') ?></span>
            </div>
            <div class="form-group col-md-2">
               <label for="extension">Name Extension</label>
               <input type="text" name="extension" class="form-control"  />
               <span class="text-danger"><?= form_error('extension') ?></span>
            </div>
         </div>
         <div class="form-row">
            <div class="form-group col-md-3">
               <label for="sex">Sex</label>
               <select name="sex" class="form-control" required>
               <option value="">--Select Gender--</option>
                  <option value="Female">Female</option>
                  <option value="Male">Male</option>
               </select>
               <span class="text-danger"><?= form_error('sex') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="height">Height (m)</label>
               <input type="text" name="height" class="form-control" required />
               <span class="text-danger"><?= form_error('height') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="weight">Weight (kg)</label>
               <input type="text" name="weight" class="form-control" required />
               <span class="text-danger"><?= form_error('weight') ?></span>
            </div>
            <div class="form-group col-md-2">
               <label for="bloodType">Blood Type</label>
               <input type="text" name="bloodType" class="form-control" required />
               <span class="text-danger"><?= form_error('bloodType') ?></span>
            </div>

            <div class="form-group col-md-3">
               <label for="birth_date">Birth Date</label>
               <input type="date" name="birth_date" class="form-control" required />
               <span class="text-danger"><?= form_error('birth_date') ?></span>
            </div>
            <div class="form-group col-md-4">
               <label for="birthplace">Birth Place</label>
               <input type="text" name="birthplace" class="form-control" required />
               <span class="text-danger"><?= form_error('birthplace') ?></span>
            </div>
            <div class="form-group col-md-4">
               <label for="nationality">Nationality</label>
               <input type="text" name="nationality" class="form-control" required />
               <span class="text-danger"><?= form_error('nationality') ?></span>
            </div>
         </div>
         <div class="form-row">
            <div class="form-group col-md-2">
               <label for="purok">Purok</label>
               <select name="purok" class="form-control" required>
               <option value="">--Select Purok--</option>
                  <option value="Purok">Purok 1</option>
                  <option value="Purok">Purok 2</option>
                  <option value="Purok">Purok 3</option>
                  <option value="Purok">Purok 4</option>
                  <option value="Purok">Purok 5</option>
                  <option value="Purok">Purok 6</option>
                  <option value="Purok">Purok 7</option>
               </select>
               <span class="text-danger"><?= form_error('purok') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="barangay">Barangay</label>
               <input type="text" name="barangay" class="form-control" required />
               <span class="text-danger"><?= form_error('barangay') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="municipality">Municipality</label>
               <input type="text" name="municipality" class="form-control" required />
               <span class="text-danger"><?= form_error('municipality') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="province">Province</label>
               <input type="text" name="province" class="form-control" required />
               <span class="text-danger"><?= form_error('province') ?></span>
            </div>     
         </div>
         <div class="form-row">
            <div class="form-group col-md-4">
               <label for="contact">Contact</label>
               <input type="text" name="contact" class="form-control" required />
               <span class="text-danger"><?= form_error('contact') ?></span>
            </div>
            <div class="form-group col-md-4">
               <label for="email">Email</label>
               <input type="email" name="email" class="form-control" required />
               <span class="text-danger"><?= form_error('email') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="civil">Civil Status</label>
               <select name="civil" class="form-control" required>
               <option value="">--Select Status--</option>
                  <option value="single">Single</option>
                  <option value="married">Married</option>
                  <option value="widowed">Widowed</option>
                  <option value="separated">Separated</option>
               </select>
               <span class="text-danger"><?= form_error('civil') ?></span>
            </div>
         </div>
         <div class="form-row">
            <div class="form-group col-md-3">
               <label for="religion">Religion</label>
               <input type="text" name="religion" class="form-control" required />
               <span class="text-danger"><?= form_error('religion') ?></span>
            </div>
            
            <div class="form-group col-md-3">
               <label for="educational">Educational Attainment</label>
               <select name="educational" id="educational" class="form-control" required>
               <option value="">--Select Attainment--</option>
               <option value="noSchooling">No schooling completed</option>
               <option value="elemGrad">Elementary Graduate</option>
               <option value="elemUndergrad">Elementary Undergraduate</option>
               <option value="highGrad">High School Graduate</option>
               <option value="highUndergrad">HighSchool Undergraduate</option>
               <option value="colUnderGrad">College UnGraduate</option>
               <option value="voc">Vocational</option>
               <option value="bachelor">Bachelor's Degree</option>
               <option value="master">Master Degree</option>
               <option value="doctorate">Doctorate Degree</option>
            </select>
               <span class="text-danger"><?= form_error('educational') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="occupation">Occupation</label>
               <input type="text" name="occupation" class="form-control" required />
               <span class="text-danger"><?= form_error('occupation') ?></span>
            </div>
            <div class="form-group col-md-2">
               <label for="monthlyIncome">Monthly Income</label>
               <input type="text" name="monthlyIncome" class="form-control" required />
               <span class="text-danger"><?= form_error('monthlyIncome') ?></span>
            </div>
         </div>

         <div class="form-row">
            <div class="form-group col-md-3">
               <label for="householdmember">Total Household Member</label>
               <input type="text" name="householdmember" class="form-control" required />
               <span class="text-danger"><?= form_error('householdmember') ?></span>
            </div>
           
            <div class="form-group col-md-4">
               <label for="landownnership">Land Ownership Status</label>
               <select name="landownnership" class="form-control" required>
               <option value="">--Select Ownership--</option>
                  <option value="owned">Owned</option>
                  <option value="landless">Landless</option>
                  <option value="tenant">Tenant</option>
                  <option value="caretaker">Caretaker</option>
               </select>
               <span class="text-danger"><?= form_error('landownnership') ?></span>
            </div>
            <div class="form-group col-md-4">
               <label for="houseownership">House Ownership</label>
               <select name="houseownership" class="form-control" required>
               <option value="">--Select Ownership--</option>
                  <option value="own house">Own House</option>
                  <option value="renting">Renting</option>
                  <option value="Living with Parents">Living with Parents</option>
               </select>
               <span class="text-danger"><?= form_error('houseownership') ?></span>
            </div>


         </div>



         <div class="form-group">
            <button class="btn btn-primary">Add Resident</button>
         </div>
      </form>
   </div>
</div>
