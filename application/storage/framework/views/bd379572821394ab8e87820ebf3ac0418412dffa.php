



<?php $__env->startSection('content'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Proxies</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
              <li class="breadcrumb-item active">Proxies</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
    <?php echo $__env->make('notify.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('notify.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">List of Proxies</h3>
                <div style="float:right;">
                <a href="<?php echo e(route('proxy.add')); ?>" class="btn btn-primary btn-block">Add</a>

                </div>

            </div>
            <!-- /.card-header -->
            <div class="card-body">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
<table class="table table-bordered data-table" style="    width: 100%;">
        <thead>
            <tr>
                <th></th>
                <th>No</th>
                <th>Type</th>
                <th>Ip</th>
                <th>Port</th>
                <th>Software</th>
                <th>Status</th>
                <th width="20%">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      </div>
      </div>

    </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
</section>
    <!-- /.content -->

<?php $__env->startSection('endfooter'); ?>

<style>

    #DataTables_Table_0_wrapper{
        width:100%;
    }
</style>
<script type="text/javascript">
  $(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        "info": true,
        "paging": true,
        "lengthChange": false,
        "autoWidth": false,
        ajax: "<?php echo e(route('proxies')); ?>",
        'select': {
         'style': 'multi'
      },
      dom: 'Bfrtip',
        buttons: [
            {
                text: 'Delete',
                className: 'btn btn-danger',
                action: function ( e, dt, node, config ) {
                    if(confirm( 'Are you sure do you want to delete selected items ?' )){
                      var rows_selected = table.column(0).checkboxes.selected();
                      $form = $("<form action='<?php echo e(route('proxy.bulk_delete')); ?>' method='post'></form>");
                      $form.append('<?php echo csrf_field(); ?>');
                      $.each(rows_selected, function(index, rowId){
                        $form.append(
             $('<input>')
                .attr('type', 'hidden')
                .attr('name', 'id[]')
                .val(rowId)
         );

                      });
                      $('body').append($form);
                      $form.submit();

                    }
                }
            },
            {
                text: 'Disable',
                className: 'btn btn-secondary',
                action: function ( e, dt, node, config ) {
                  if(confirm( 'Are you sure do you want to disable selected items ?' )){
                    var rows_selected = table.column(0).checkboxes.selected();
                      $form = $("<form action='<?php echo e(route('proxy.bulk_disable')); ?>' method='post'></form>");
                      $form.append('<?php echo csrf_field(); ?>');
                      $.each(rows_selected, function(index, rowId){
                        $form.append(
             $('<input>')
                .attr('type', 'hidden')
                .attr('name', 'id[]')
                .val(rowId)
         );

                      });
                      $('body').append($form);
                      $form.submit();
}                }
            },
            {
                text: 'Active',
                className: 'btn btn-primary',
                action: function ( e, dt, node, config ) {
                  if(confirm( 'Are you sure do you want to Activate selected items ?' )){
                    var rows_selected = table.column(0).checkboxes.selected();
                      $form = $("<form action='<?php echo e(route('proxy.bulk_activate')); ?>' method='post'></form>");
                      $form.append('<?php echo csrf_field(); ?>');
                      $.each(rows_selected, function(index, rowId){
                        $form.append(
             $('<input>')
                .attr('type', 'hidden')
                .attr('name', 'id[]')
                .val(rowId)
         );

                      });
                      $('body').append($form);
                      $form.submit();
} 
                }
            }
        ],

      select: true,
      'order': [[1, 'asc']],
        columns: [
            {
     "data": 'id',
     name: 'id',
            },
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'type', name: 'type'},
            {data: 'ip', name: 'ip'},
            {data: 'port', name: 'port'},
            {data: 'software', name: 'software'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
        'columnDefs': [
         {
            'targets': 0,
            'checkboxes': {
               'selectRow': true
            }
         }
      ],
    });
    
  });
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/licensems/api.license.ms/application/resources/views/proxies.blade.php ENDPATH**/ ?>