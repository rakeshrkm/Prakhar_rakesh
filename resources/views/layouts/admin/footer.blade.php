</div>
</div>
</div>
<script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}})}}"></script>
<script src="{{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/assets/js/sidebarmenu.js')}}"></script>
<script src="{{asset('admin/assets/js/app.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/simplebar/dist/simplebar.js')}}"></script>
<script src="{{asset('admin/assets/js/dashboard.js')}}"></script>

<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <!--datatable-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" />
    
    <!--//datatable -->

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>


<script type="text/javascript">
    $('#suggestion').summernote({
        height: 400
    });
</script>

@yield('script')


</body>

</html>