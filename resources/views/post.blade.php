<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('save')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <textarea class="ckeditor form-control" id="editor1" name="wysiwyg-editor"></textarea>
        </div>

        <input type="submit" value="Save">
    </form>



<script src="{{ asset('CKEDITOR/ckeditor.js') }}"></script>
    {{-- <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script> --}}
    <script type="text/javascript">
     CKEDITOR.replace( 'editor1' ,{
        editorplaceholder:'Start To Here'
     });
        // $(document).ready(function () {
        //     $('.ckeditor').ckeditor();
        // });
    </script>
</body>
</html>
