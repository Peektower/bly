<!-- Jquery Core Js -->
<script src="{{asset('admin/bundles/libscripts.bundle.js')}}"></script>

<!-- Plugin Js -->
<script src="{{asset('admin/bundles/apexcharts.bundle.js')}}"></script>
<script src="{{asset('admin/bundles/dataTables.bundle.js')}}"></script>

<!-- Jquery Page Js -->
<script src="{{asset('admin/js/template.js')}}"></script>
<script src="{{asset('admin/js/page/index.js')}}"></script>


<!-- Jquery Plugin -->
<script src="../../../../../cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
<script src="{{asset('admin/plugin/multi-select/js/jquery.multi-select.js')}}"></script>
<script src="{{asset('admin/plugin/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
<script src="{{asset('admin/plugin/cropper/cropper.min.js')}}"></script>
<script src="{{asset('admin/plugin/cropper/cropper-init.js')}}"></script>
<script src="{{asset('admin/bundles/dropify.bundle.js')}}"></script>
<script src="{{asset('admin/bundles/dataTables.bundle.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1Jr7axGGkwvHRnNfoOzoVRFV3yOPHJEU&amp;callback=myMap"></script>

<script>
    $(document).ready(function() {
        //Ch-editer
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
        //Datatable
        $('#myCartTable')
            .addClass( 'nowrap' )
            .dataTable( {
                responsive: true,
                columnDefs: [
                    { targets: [-1, -3], className: 'dt-body-right' }
                ]
            });
        $('.deleterow').on('click',function(){
            var tablename = $(this).closest('table').DataTable();
            tablename
                .row( $(this)
                    .parents('tr') )
                .remove()
                .draw();

        } );
        //Multiselect
        $('#optgroup').multiSelect({ selectableOptgroup: true });
    });

    $(function() {
        $('.dropify').dropify();

        var drEvent = $('#dropify-event').dropify();
        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-dÃ©posez un fichier ici ou cliquez',
                replace: 'Glissez-dÃ©posez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'DÃ©solÃ©, le fichier trop volumineux'
            }
        });
    });

</script>
<script>
    $('#myDataTable')
        .addClass( 'nowrap')
        .dataTable( {
            responsive: true,
            columnDefs: [
                { targets: [-1, -3], className: 'dt-body-right' }
            ]
        });
</script>
