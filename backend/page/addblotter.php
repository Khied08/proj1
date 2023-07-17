<div id="content">
   <div class="container">
      <br>
      <br>
      <br>
      <center>
      <h1 class="h3 mb-2 text-gray-800">MANAGE BLOTTER</h1>
</center>
      <br>
      <br>

      <form method="POST">
         <div class="form-row">
            <div class="form-group col-md-3">
               <label for="complainant">Name of Complainant</label>
               <input type="text" name="complainant" id="complainant" class="form-control" required />
               <span class="text-danger"><?= form_error('complainant') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="age1">Age</label>
               <input type="text" name="age1" id="age1" class="form-control" required />
               <span class="text-danger"><?= form_error('age1') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="address">Address</label>
               <input type="text" name="address" id="address" class="form-control" required />
               <span class="text-danger"><?= form_error('address') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="number">Contact Number</label>
               <input type="text" name="number" id="number" class="form-control" />
               <span class="text-danger"><?= form_error('number') ?></span>
            </div>
         </div>
         <div class="form-row">
            <div class="form-group col-md-3">
               <label for="complainee">Name of Complainee</label>
               <input type="text" name="complainee" id="complainee" class="form-control" required />
               <span class="text-danger"><?= form_error('complainee') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="age2">Age</label>
               <input type="text" name="age2" id="age2" class="form-control" required />
               <span class="text-danger"><?= form_error('age2') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="address_complainee">Address</label>
               <input type="text" name="add_complainee" id="add_complainee" class="form-control" required />
               <span class="text-danger"><?= form_error('add_complainee') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="num_complainee">Contact Number</label>
               <input type="text" name="num_complainee" id="num_complainee" class="form-control" />
               <span class="text-danger"><?= form_error('num_complainee') ?></span>
            </div>
         </div>
         <div class="form-row">
            <div class="form-group col-md-4">
               <label for="complaint">Complaint</label>
               <input type="text" name="complaint" id="complaint" class="form-control" required />
               <span class="text-danger"><?= form_error('complaint') ?></span>
            </div>
            <div class="form-group col-md-4">
               <label for="action">Action</label>
               <select name="action" id="action" class="form-control" required>
                  <option value="first">1st Option</option>
                  <option value="second">2nd Option</option>
               </select>
               <span class="text-danger"><?= form_error('action') ?></span>
            </div>
            <div class="form-group col-md-4">
               <label for="status">Status</label>
               <select name="status" id="status" class="form-control" required>
                  <option value="solved">Solved</option>
                  <option value="unsolved">Unsolved</option>
               </select>
               <span class="text-danger"><?= form_error('status') ?></span>
            </div>
            <div class="form-group col-md-4">
               <label for="incidence">Incidence</label>
               <input type="text" name="incidence" id="incidence" class="form-control" required />
               <span class="text-danger"><?= form_error('incidence') ?></span>
            </div>
         </div>
         <div class="form-row">
            <div class="form-group col-md-6">
               <button class="btn btn-primary">Add Blotter</button>
               <button class="btn btn-primary">Cancel</button>
            </div>
         </div>
      </form>
   </div>
</div>


