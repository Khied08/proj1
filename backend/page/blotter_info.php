<div class="container-fluid">
   <!-- Page Heading -->
   <h1 class="h3 mb-2 text-gray-800">Blotter List</h1>
   <p class="mb-4">
   <a class="btn btn-primary" href="<?= base_url('index.php/dashboard/add-blotter') ?>"> Add Blotter </a>
<a class="btn btn-danger" href="<?= base_url('index.php/dashboard/delete-blotter') ?>">Cancel</a>

   </p>
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
   <div class="card-header py-3">
      <div class="row">
         <div class="col-6">
            <h6 class="m-0 font-weight-bold text-primary">List</h6>
         </div>
         <div class="col-6 text-right">
            <form class="form-inline">
               <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
               </div>
               <button type="submit" class="btn btn-primary ml-2">Search</button>
            </form>
         </div>
      </div>
   </div>
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-bordered table-striped">
            <thead>
               <tr>
                  <th scope="col">#</th>
                  <th scope="col">Date Recorded</th>
                  <th scope="col">Name of Complainant</th>
                  <th scope="col">Age</th>
                  <th scope="col">Address</th>
                  <th scope="col">Contact Number</th>
                  <th scope="col">Name of Complainee</th>
                  <th scope="col">Action Taken</th>
                  <th scope="col">Status</th>
                  <th scope="col">Incidence</th>
                  <th scope="col">ACTION</th>
               </tr>
            </thead>
            <tbody>
               <?php $counter =1; ?>
               <?php foreach ($blotter_list as $blotter) : ?>
                  <tr>
                    <td><?=$counter?></td>
                     <td><?= $blotter->date ?></td>
                     <td><?= $blotter->complainant ?></td>
                     <td><?= $blotter->age1 ?></td>
                     <td><?= $blotter->address ?></td>
                     <td><?= $blotter->number ?></td>
                     <td><?= $blotter->complainee ?></td>
                     <td><?= $blotter->action ?></td>
                     <td><?= $blotter->status ?></td>
                     <td><?= $blotter->incidence ?></td>
                     <td> 

                     
                     <button type="button" class="btn btn-primary edit-blotter-btn" data-blotter="<?= $blotter->blotter_id ?>">
                           Edit
                        </button>
                        
                        <button class="btn btn-danger delete-blotter-btn" data-blotter="<?= $blotter->blotter_id ?>">Delete</button>
                        </tr>
 
       
                     </td>
                  </tr> 
                  <?php $counter++; ?>
               <?php endforeach; ?>
            </tbody>
         </table>
      </div>
   </div>
</div>

<script>

   /* AJAX  */
   
   //blotter

    $(document).on('click','.edit-blotter-btn',function(){

      var blotterId = this.dataset.blotter;

      $.ajax({
          url:'<?= base_url('index.php/dashboard/ajax-update-blotter-form') ?>',
          method:'POST',
          data:{
            blotter_id: blotterId
          },
          success:function(response){
         
                bootbox.dialog({
                  title: 'Edit blotter',
                  message:' ',
                  size: 'extra-large'
                }).find('.bootbox-body').html(response);
          }

        });

    });

    $(document).on('click','.delete-blotter-btn',function(e){

      var blotterId = this.dataset.blotter;

      bootbox.confirm('Are you sure you want to delete this official?',function(answer){

            if(answer==true){

               window.location = '<?= base_url('index.php/dashboard/delete-blotter/') ?>'+blotterId;
               
            }

      });


   });

//residents

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

    

</script>