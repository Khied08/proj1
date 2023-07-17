<!-- Main Content -->
<div id="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <center>
                <h2 class="h3 mb-2 text-gray-800"> Manage Officials</h2>
</center>
                <br>
                <form method="POST">
                    <div class="form-group">
                        <label for="position"><br>Position:</<br></label>
                        <input type="text" name="position" id="position" class="form-control" required>
                        
                        <span class="text-danger"><?= form_error('position') ?></span>
                    </div>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control"  placeholder="Lastname, Firstname Middlename"  required>
                        <span class="text-danger"><?= form_error('name') ?></span>
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact#:</label>
                        <input type="text" name="contact" id="contact" class="form-control" required>
                        <span class="text-danger"><?= form_error('contact') ?></span>
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" name="address" id="address" class="form-control" required>
                        <span class="text-danger"><?= form_error('address') ?></span>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="start_term">Start Term:</label>
                            <input type="date" name="start_term" id="start_term" class="form-control" required>
                            <span class="text-danger"><?= form_error('start_term') ?></span>
                        </div>
                        <div class="form-group col">
                            <label for="end_term">End Term:</label>
                            <input type="date" name="end_term" id="end_term" class="form-control" required>
                            <span class="text-danger"><?= form_error('end_term') ?></span>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary">Add Officials</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function showPopup() {
        var modal = document.getElementById("popupModal");
        modal.style.display = "block";
    }

    function closePopup() {
        var modal = document.getElementById("popupModal");
        modal.style.display = "none";
    }

    function addOfficials() {
        // Code to add officials to your system/database
        closePopup(); // Close the popup after adding officials
    }
</script>