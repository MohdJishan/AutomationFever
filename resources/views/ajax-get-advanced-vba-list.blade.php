@foreach ($advanced_vba_list as $item)
    <dl> 
        <span class="float-right">
            <i class="fa fa-clock-o"></i>
            {{$item->duration}}</span><i class="fa fa-play-circle"></i> 
         <span style="padding: 0px 0px 0px 10px !important;">
            <a href="{{$item->video_title}}"
                style="color:#2D545E; text-decoration:none;">
                {{$item->video_title}}
            </a>
        </span>
    </dl>

    <hr style="margin-top: -5px; margin-bottom: 3px; border-style:dotted;">    
@endforeach
