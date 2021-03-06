@foreach ($excel_tips_and_tricks_list as $item)
    <dl> 
        <i class="fa fa-play-circle"></i>
         <span style="padding: 0px 0px 0px 10px !important;">
            <a href="{{$item->video_title}}"
                style="color:#2D545E; text-decoration:none;">
                {{$item->video_title}}
            </a>
        </span>
    </dl>

    <hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">    
@endforeach
