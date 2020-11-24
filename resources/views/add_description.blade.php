<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Video Desctioption</title>
  <link rel="icon" href="{{ asset('images/AutomationFever_icon.png')}}" type="image/gif" sizes="16x16">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body>
    <div class="container">
       <form name="add_video_description_form" id="add_video_description_form" method="POST" action="insert_video_description" enctype="multipart/form-data">
           @csrf 
            <div class="row">
                <div class="col-md-12">   
                        <H1>Add Video Description</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">   
                        <select id="videos_ids" name="selected_video_id">
                            @foreach ($videos_list as $item)
                                <option value="{{$item->video_id}}">{{$item->video_title}}</option>
                            @endforeach
                        </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">                  
                    <textarea id="summernote" name="editordata">
                        
                    </textarea>
                </div> 
            </div>    

            <div class="row">
                <div class="col-md-3">                  
                    <input type="submit" name="submit" class="btn btn-success" />    
                    <input type="reset" name="reset" class="btn btn-danger" />
                </div> 
            </div>
        </form>        
    </div>   
 
  <script>
        $(document).ready(function() {
                    $('#summernote').summernote({
                    height: 300,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: true                  // set focus to editable area after initializing summernote
                    });
        });
  </script>
</body>
</html>