@extends('layouts.back')
@section('content')

<div id="Contact Us" class="tabcontentAdmin">
          
            <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
          
        </div>


			                  
@stop