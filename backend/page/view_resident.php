<div class="container-fluid">
   <!-- Page Heading -->
   <h1 class="h3 mb-2 text-gray-800">Resident List</h1>
   <p class="mb-4">
      <a class="btn btn-primary" href="<?= base_url('index.php/dashboard/add-resident') ?>"> Add Resident </a>
   </p>
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">List</h6>
      </div>
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Fullname</th>
                     <th scope="col">Sex</th>
                     <th scope="col">Birth Date</th>
                     <th scope="col">Contact</th>
                     <th scope="col">Email</th>
                     <th scope="col">Civil Status</th>
                     <th scope="col">Address</th>
                    
                     <th scope="col">Actions</th>
                  </tr>
               </thead>
               <tbody>
                  
               <?php $counter =1; ?>
                  <?php foreach ($resident_list as $resident) : ?>
                     <tr>
                        <th scope="row"><?= $resident->resident_id ?></th>
                        <td><?= $resident->first_name ?> <?= $resident->middlename ?> <?= $resident->last_name ?>  <?= $resident->extension ?>  </td>
                        <td><?= $resident->sex ?></td>
                        <td><?= date('Y-m-d', strtotime($resident->birth_date)) ?></td>
                        <td><?= $resident->contact ?></td>
                        <td><?= $resident->email ?></td>
                        <td><?= $resident->civil ?></td>
                        <td><?= $resident->purok ?> <?= $resident->barangay ?> <?= $resident->municipality ?>  <?= $resident->province ?>    </td>
                       
                        <td>
                        <button type="button" class="btn btn-primary edit-resident-btn" data-resident="<?= $resident->resident_id; ?>">Update</button> 
                        <button type="button" class="btn btn-danger delete-resident-btn" data-resident="<?= $resident->resident_id; ?>">Delete</button> 
                        </td>
                     </tr>
                     <?php $counter++; ?>
                  <?php endforeach; ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>

<script>

   /* AJAX  */

    $(document).on('click','.edit-resident-btn',function(){

      var residentId = this.dataset.resident;

      $.ajax({
          url:'<?= base_url('index.php/dashboard/ajax-update-resident-form') ?>',
          method:'POST',
          data:{
            resident_id: residentId
          },
          success:function(response){
         
                bootbox.dialog({
                  title: 'Edit Resident',
                  message:' ',
                  size: 'extra-large'
                }).find('.bootbox-body').html(response);
          }

        });

    });

    $(document).on('click','.delete-resident-btn',function(e){

      var residentId = this.dataset.resident;

      bootbox.confirm('Are you sure you want to delete this resident',function(answer){

            if(answer==true){

               window.location = '<?= base_url('index.php/dashboard/delete-resident/') ?>'+residentId;
               
            }

      });


   });

    

</script>
