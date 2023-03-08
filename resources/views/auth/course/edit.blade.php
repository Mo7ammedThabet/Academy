@extends('layouts.auth')

@section('title' , 'edit Post')


<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<link href=" https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css" rel="stylesheet" type="text/css">
@endsection
@section('content')





@section('scripte')
             <script  src=" https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" type="text/javascript" charset="utf8"></script>

                <script>
                    $(document).ready(function () {
                        $('#posts-table').DataTable();
                    });
                </script>
@endsection
