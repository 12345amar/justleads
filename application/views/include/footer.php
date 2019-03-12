 
 <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2019 Design & Develope  by ZeltisInfotech.com
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/popper/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url(); ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url(); ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
    
    <!-- This is data table -->
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/datatables.min.js"></script>
    
    <script src="<?php echo base_url(); ?>assets/plugins/jsgrid/db.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jsgrid/jsgrid.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jsgrid-init.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="<?php echo base_url(); ?>assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/d3/d3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/c3-master/c3.min.js"></script>
    <!-- Vector map JavaScript -->
    <script src="<?php echo base_url(); ?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/dashboard2.js"></script>
    <!--Date 11/03/2019 -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/plugins/switchery/dist/switchery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/dff/dff.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/multiselect/js/jquery.multi-select.js"></script>
    <script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

   <script>
    $(function() {
        $('#myTable').DataTable();
        $(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    
    $('').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    
    
    $(document).ready(function() {
    $('#example23').DataTable( {
        columnDefs: [ {
            orderable: true,
            className: 'select-checkbox',
            targets:   0
        } ],
        select: {
            style:    'multi',
            selector: 'td:first-child'
        },
        order: [[ 0, 'asc' ]]
    } );
} );

    </script>
    
    
    <script>
                // Listen for click on toggle checkbox
         $('#minimal-checkbox-1').click(function(event) {
           if(this.checked) {
               // Iterate each checkbox
               $(':checkbox').each(function() {
                   this.checked = true;
               });
           }
           else {
             $(':checkbox').each(function() {
                   this.checked = false;
               });
           }
         });
    </script>
    
<script type="text/javascript">
    $(document).ready(function() {
        $("#tta").click(function(){ 
            //alert("tester");
            var lead_id = [];
            $.each($("input[name='check[]']:checked"), function(){ 
             lead_id.push($(this).val());
            })
          if (lead_id.length <= 0) {
             alert('data is blank');
            }
            else {
                  $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>telecaller/transfer_admin",
                    data: {'lead_id': lead_id},
                    cache: false,
                    success: function(result){
                        if (result.status == 'success')
                        {
                            alert(result.message); 
                        }
                        
                        setTimeout(function(){ window.location.reload(); }, 3000);
                     
                        //alert("Lead Value is: " + data.join(", "));
                  }
                        
                    });
   
            }
               

    });
    });
    
  </script>
            

    <script>    
                $("#uploadLeads").change(function(){   
                   $("#uploadLeadsForm").submit();
                });
    </script>
    
    <script>
    $(".manage_leads").click(function(){
        
       $("#lead_id").val($(this).attr('id'));
        $("#responsive-modal").modal('show');
    })
    </script>
    
    
    
 <script>
    $(function() {
        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });
        // For select 2
        $(".select2").select2();
        $('.selectpicker').selectpicker();
        //Bootstrap-TouchSpin
        $(".vertical-spin").TouchSpin({
            verticalbuttons: true
        });
        var vspinTrue = $(".vertical-spin").TouchSpin({
            verticalbuttons: true
        });
        if (vspinTrue) {
            $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
        }
        $("input[name='tch1']").TouchSpin({
            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10,
            postfix: '%'
        });
        $("input[name='tch2']").TouchSpin({
            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$'
        });
        $("input[name='tch3']").TouchSpin();
        $("input[name='tch3_22']").TouchSpin({
            initval: 40
        });
        $("input[name='tch5']").TouchSpin({
            prefix: "pre",
            postfix: "post"
        });
        // For multiselect
        $('#pre-selected-options').multiSelect();
        $('#optgroup').multiSelect({
            selectableOptgroup: true
        });
        $('#public-methods').multiSelect();
        $('#select-all').click(function() {
            $('#public-methods').multiSelect('select_all');
            return false;
        });
        $('#deselect-all').click(function() {
            $('#public-methods').multiSelect('deselect_all');
            return false;
        });
        $('#refresh').on('click', function() {
            $('#public-methods').multiSelect('refresh');
            return false;
        });
        $('#add-option').on('click', function() {
            $('#public-methods').multiSelect('addOption', {
                value: 42,
                text: 'test 42',
                index: 0
            });
            return false;
        });
        $(".ajax").select2({
            ajax: {
                url: "https://api.github.com/search/repositories",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data, params) {
                    // parse the results into the format expected by Select2
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data, except to indicate that infinite
                    // scrolling can be used
                    params.page = params.page || 1;
                    return {
                        results: data.items,
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                },
                cache: true
            },
            escapeMarkup: function(markup) {
                return markup;
            }, // let our custom formatter work
            minimumInputLength: 1,
            //templateResult: formatRepo, // omitted for brevity, see the source of this page
            //templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
        });
    });
    </script>
    
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <!--<script src="<?php //echo base_url(); ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>-->
    
</body>
<!-- Mirrored from wrappixel.com/demos/admin-templates/material-pro/material/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Dec 2018 09:06:36 GMT -->
</html>