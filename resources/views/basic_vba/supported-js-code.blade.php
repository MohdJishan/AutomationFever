<script>
    $(document).ready(function(){
        //Ajax token setup for the post requests. 
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        }); //$.ajaxSetup({



        //Load Text description
        var video_id=$('#video_id').val();
        var playlist_name=$('#myLista').attr('data-playlistname');
        var published_datetime=$('#myLista').attr('data-published-datetime');

        $.post("{{URL::route('get-video-text-description') }}",{video_id:video_id},function(data){
            $('#text-description').html(data.html);     
        });    


        //Load User Comment
          $.post("{{URL::route('user.video.comment') }}",{
                        video_id:video_id,
                  },function(data){
                      $('#comments_area').html(data.html);
            });

            
        //Load user comment count   
          $.post("{{URL::route('user.video.comment.count') }}",{
                        video_id:video_id,
                  },function(data){
                    $('#videos_total_count').html(data.html);       
            });


        //Load next videos suggestion
        $.post("{{URL::route('next-video-suggestion') }}",{
            video_id:video_id,
            playlist_name:playlist_name,
            published_datetime:published_datetime,
          },function(data){
            $('#next-video-suggestions-area').html(data.html);
        });     

       //Add comment throgh ajax request
        $("#add_comment").on('click',function(data){
          var user_name_comment=$('#user_name_comment').val();
          var user_email_comment=$('#user_email_comment').val();
          var user_comment=$('#user_comment').val();
          var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;

          if($.trim(user_name_comment)==""){
              alert("Username is not valid");
          } else if(!pattern.test(user_email_comment)){
            alert("Email is invalid");
          } else if($.trim(user_comment)==""){
            alert("Please add your comment");
          } else{
            
          
          $.post("{{URL::route('post.comment') }}",{
                      user_name_comment:user_name_comment,
                      user_email_comment:user_email_comment,
                      user_comment:user_comment,
                      video_id:video_id,
                 },function(data){
                   $('#user_comment').val('');
                   $('#comments_area').prepend(data.html);
           })
            .done(function(){ 
            //Refresh user comment count   
              $.post("{{URL::route('user.video.comment.count') }}",{
                            video_id:video_id,
                      },function(data){
                        $('#videos_total_count').html(data.html);       
                });
            });
          } //end of else

        }); //end of $("#add_comment").on('click',function(data){

        //Add comment reply through ajax request
        $('.btn-reply-comments').on('click',function(data){
            var user_name_reply=$('#user_name_reply').val();
            var user_email_reply=$('#user_email_reply').val();
            var user_comment_reply=$('#user_comment_reply').val();
            var video_id_reply=$('#video_id_reply').val();
            
            $.post("{{URL::route('post.comment') }}",{
                        user_name_reply:user_name_reply,
                        user_email_reply:user_email_reply,
                        user_comment_reply:user_comment_reply,
                        video_id_reply:video_id_reply,
                  },function(data){
                      alert(data.html);
            });
        });  

        

        //Show comment Reply
           $('.btn-view-comment').on('click',function(){
               var comment_id=$(this).attr('data-comment-id');
               var txt=$("div[data-view-comment-div='"+comment_id+"']").html();
               var view_count=$(this).attr('data-view-count');
        
                if(view_count==1){
                  $(this).html('View Reply'); 
                  $("div[data-view-comment-div='"+comment_id+"']").slideToggle(700);                     
                }else{
                  $(this).html('Hide Reply');
                  $(this).attr('data-view-count','1');
                $("div[data-view-comment-div='"+comment_id+"']").slideUp(300);
                $.post("{{URL::route('view-comment-replies') }}",{comment_id:comment_id},function(data){        
                        $("div[data-view-comment-div='"+comment_id+"']").html(data.html);
                        $("div[data-view-comment-div='"+comment_id+"']").slideDown(700);
                  });    
                } //else
           });


          $('.btn-reply-comment').on('click',function(){
                $("#video_id_reply").val($(this).attr('data-video-id'));
                $("#comment_id_reply").val($(this).attr('data-comment-id'));                 
            });     
    });
</script>