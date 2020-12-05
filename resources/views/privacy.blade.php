@extends('master-layout.master')


@section('application-title')
  <title>Automation Fever | Home</title>    
@endsection

@section('fevicon')
    <link rel="icon" href="{{ asset('images/AutomationFever_icon.png')}}" type="image/gif" sizes="16x16">
@endsection

@section('meta_data')
        <meta name="keywords" content="Excel vba toturials, vba tutorials, Automation Fever, excel vba tutorial,excel vba tutorial for beginners,excel vba tutorial for beginners in hindi,excel vba tutorial in hindi,excel vba tutorial advanced,excel and vba tutorial,
        excel vba tutorial for beginners in urdu,
        excel vba macro complete tutorial,
        excel vba code tutorial hindi,
        excel vba code tutorial,
        excel vba expert tutorial,
        excel vba beginner tutorial in hindi,
        excel vba loops tutorial,
        excel vba language tutorial,
        excel vba beginner tutorial learnit,
        macro vba excel tutorial,
        tutorial on vba excel,
        excel vba quick tutorial,
        excel to vba programming,
        excel vba web scraping tutorial,
        excel with vba tutorial,
        excel 2010 vba tutorial,
        vba excel 2019 tutorial,
        excel 2013 vba tutorial,
        excel 365 vba tutorial,Automation fever,automationfever.com" />
<meta name="description" content="You can watch excel vba videos here. We are trying to make you understand every topic of vba." />
<meta name="robots" content="noodp"/>
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Excel Vba Tutorials -Automation Fever" />
<meta property="og:description" content="You can watch excel vba videos here. We are trying to make you understand every topic of vba." />
<meta property="og:url" content="http://www.automationfever.com/" />
<meta property="og:site_name" content="AutomationFever" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="You can watch excel vba videos here. We are trying to make you understand every topic of vba." />
<meta name="twitter:title" content="Excel Vba Tutorials -Automation Fever" />
<meta name="twitter:site" content="@AutomationFever" />
<meta name="twitter:creator" content="@AutomationFever" />
@endsection

@section('JsAndCss')
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- bootstrap -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->

<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

<!-- Custom Theme files -->
<link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' media="all" />
<!--start-smoth-scrolling-->

<!-- fonts -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!-- //fonts -->

 {{-- Google Tracker --}}
  <!-- Global site tag (gtag.js) - Google Analytics -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-170183563-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-170183563-1');
</script>
{{-- end of google tracker --}}
@endsection


@section('content')
<div class="recommended-info">
    <h3>Data Security and Privacy Policy	</h3>
    <p class="history-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus efficitur, eros 
        sed suscipit porttitor, diam felis tempus odio, eget sollicitudin purus sem sit amet dolor. Integer euismod 
        non mauris commodo rutrum. Nulla risus felis, rhoncus vel est sed, consequat efficitur ante. Phasellus mi 
        sapien, accumsan vitae lobortis vitae, laoreet dapibus metus. Pellentesque id ipsum vel nibh imperdiet 
        imperdiet ac ac mauris. Suspendisse ac leo augue. Nullam venenatis massa ut pulvinar scelerisque. Duis vel 
        vehicula urna. Quisque semper vitae lectus a feugiat. Sed dignissim egestas nunc, nec suscipit mauris 
        interdum lobortis.
    </p>
    <div class="terms-info">
        <div class="terms-info-grid">
            <h3>1. Personal information</h3>
            <p>Pellentesque consequat ligula dui, in aliquam libero pellentesque sit amet. Ut viverra, urna vitae 
                volutpat rhoncus, lectus sem tincidunt mauris, eu pretium neque urna nec lorem. Mauris cursus rhoncus 
                feugiat. Proin quis nisl augue. Nulla eleifend velit neque, id cursus erat interdum sit amet.
            </p>
            <ol>
                <li><p class="terms-info-text">Pellentesque consequat ligula dui, in aliquam libero pellentesque sit amet. Ut viverra, urna vitae 
                        volutpat rhoncus, lectus sem tincidunt mauris, eu pretium neque urna nec lorem. Mauris cursus rhoncus 
                        feugiat. Proin quis nisl augue. Nulla eleifend velit neque, id cursus erat interdum sit amet.
                    </p>
                </li>
                <li><p class="terms-info-text">Pellentesque consequat ligula dui, in aliquam libero pellentesque sit amet. Ut viverra, urna vitae 
                        volutpat rhoncus, lectus sem tincidunt mauris, eu pretium neque urna nec lorem. Mauris cursus rhoncus 
                        feugiat. Proin quis nisl augue. Nulla eleifend velit neque, id cursus erat interdum sit amet.
                    </p>
                </li>
                <li><p class="terms-info-text">Pellentesque consequat ligula dui, in aliquam libero pellentesque sit amet. Ut viverra, urna vitae 
                        volutpat rhoncus, lectus sem tincidunt mauris, eu pretium neque urna nec lorem. Mauris cursus rhoncus 
                        feugiat. Proin quis nisl augue. Nulla eleifend velit neque, id cursus erat interdum sit amet.
                    </p>
                </li>
            </ol>
        </div>
        <div class="terms-info-grid">
            <h3>2. Other information</h3>
            <p>Pellentesque consequat ligula dui, in aliquam libero pellentesque sit amet. Ut viverra, urna vitae 
                volutpat rhoncus, lectus sem tincidunt mauris, eu pretium neque urna nec lorem. Mauris cursus rhoncus 
                feugiat. Proin quis nisl augue. Nulla eleifend velit neque, id cursus erat interdum sit amet.Mauris 
                cursus rhoncus feugiat. Proin quis nisl augue. Nulla eleifend velit neque, id cursus erat interdum 
                sit amet. Curabitur vel neque vel sapien pulvinar placerat. Cras eget leo id risus vestibulum 
                dapibus. Class aptent taciti sociosqu 
            </p>
            <ol>
                <li><p class="terms-info-text">Pellentesque consequat ligula dui, in aliquam libero pellentesque sit amet. Ut viverra, urna vitae 
                        volutpat rhoncus, lectus sem tincidunt mauris, eu pretium neque urna nec lorem. Mauris cursus rhoncus 
                        feugiat. Proin quis nisl augue. Nulla eleifend velit neque, id cursus erat interdum sit amet.
                    </p>
                </li>
                <li><p class="terms-info-text">Pellentesque consequat ligula dui, in aliquam libero pellentesque sit amet. Ut viverra, urna vitae 
                        volutpat rhoncus, lectus sem tincidunt mauris, eu pretium neque urna nec lorem. Mauris cursus rhoncus 
                        feugiat. Proin quis nisl augue. Nulla eleifend velit neque, id cursus erat interdum sit amet.
                    </p>
                </li>
                <li><p class="terms-info-text">Pellentesque consequat ligula dui, in aliquam libero pellentesque sit amet. Ut viverra, urna vitae 
                        volutpat rhoncus, lectus sem tincidunt mauris, eu pretium neque urna nec lorem. Mauris cursus rhoncus 
                        feugiat. Proin quis nisl augue. Nulla eleifend velit neque, id cursus erat interdum sit amet.
                    </p>
                </li>
                <li><p class="terms-info-text">Pellentesque consequat ligula dui, in aliquam libero pellentesque sit amet. Ut viverra, urna vitae 
                        volutpat rhoncus, lectus sem tincidunt mauris, eu pretium neque urna nec lorem. Mauris cursus rhoncus 
                        feugiat. Proin quis nisl augue. Nulla eleifend velit neque, id cursus erat interdum sit amet.
                    </p>
                </li>
                <li><p class="terms-info-text">Pellentesque consequat ligula dui, in aliquam libero pellentesque sit amet. Ut viverra, urna vitae 
                        volutpat rhoncus, lectus sem tincidunt mauris, eu pretium neque urna nec lorem. Mauris cursus rhoncus 
                        feugiat. Proin quis nisl augue. Nulla eleifend velit neque, id cursus erat interdum sit amet.
                    </p>
                </li>
            </ol>
        </div>
        <div class="terms-info-grid">
            <h3>3. Use of information</h3>
            <p>Pellentesque consequat ligula dui, in aliquam libero pellentesque sit amet. Ut viverra, urna vitae 
                volutpat rhoncus, lectus sem tincidunt mauris, Mauris cursus rhoncus feugiat. Proin quis 
                nisl augue. Nulla eleifend velit neque, id cursus erat interdum sit amet. Curabitur vel neque vel 
                sapien pulvinar placerat. Cras eget leo id risus vestibulum dapibus. Class aptent taciti sociosqu eu 
                pretium neque urna nec lorem. Mauris cursus rhoncus Nulla eleifend velit neque, id cursus erat interdum sit amet.
            </p>
            <ol>
                <li><p class="terms-info-text">Pellentesque consequat ligula dui, in aliquam libero pellentesque sit amet. Ut viverra, urna vitae 
                        volutpat rhoncus, lectus sem tincidunt mauris, eu pretium neque urna nec lorem. Mauris cursus rhoncus 
                        feugiat. Proin quis nisl augue. Nulla eleifend velit neque, id cursus erat interdum sit amet.
                    </p>
                </li>
                <li><p class="terms-info-text">Pellentesque consequat ligula dui, in aliquam libero pellentesque sit amet. Ut viverra, urna vitae 
                        volutpat rhoncus, lectus sem tincidunt mauris, eu pretium neque urna nec lorem. Mauris cursus rhoncus 
                        feugiat. Proin quis nisl augue. Nulla eleifend velit neque, id cursus erat interdum sit amet.
                    </p>
                </li>
            </ol>
        </div>
        <div class="terms-info-grid">
            <h3>4. Cookies</h3>
            <p>Pellentesque consequat ligula dui, in aliquam libero pellentesque sit amet. Ut viverra, urna vitae 
                volutpat rhoncus, lectus sem tincidunt mauris, eu pretium neque urna nec lorem. Mauris cursus rhoncus 
                feugiat. Proin quis nisl augue. Nulla eleifend velit neque, id cursus erat interdum sit amet.lectus 
                sem tincidunt mauris, Mauris cursus rhoncus feugiat.
            </p>
            <ol>
                <li><p class="terms-info-text">Pellentesque consequat ligula dui, in aliquam libero pellentesque sit amet. Ut viverra, urna vitae 
                        volutpat rhoncus, lectus sem tincidunt mauris, eu pretium neque urna nec lorem. Mauris cursus rhoncus 
                        feugiat. Proin quis nisl augue. Nulla eleifend velit neque, id cursus erat interdum sit amet.
                    </p>
                </li>
                <li><p class="terms-info-text">Pellentesque consequat ligula dui, in aliquam libero pellentesque sit amet. Ut viverra, urna vitae 
                        volutpat rhoncus, lectus sem tincidunt mauris, eu pretium neque urna nec lorem. Mauris cursus rhoncus 
                        feugiat. Proin quis nisl augue. Nulla eleifend velit neque, id cursus erat interdum sit amet.
                    </p>
                </li>
                <li><p class="terms-info-text">Pellentesque consequat ligula dui, in aliquam libero pellentesque sit amet. Ut viverra, urna vitae 
                        volutpat rhoncus, lectus sem tincidunt mauris, eu pretium neque urna nec lorem. Mauris cursus rhoncus 
                        feugiat. Proin quis nisl augue. Nulla eleifend velit neque, id cursus erat interdum sit amet.
                    </p>
                </li>
                <li><p class="terms-info-text">Pellentesque consequat ligula dui, in aliquam libero pellentesque sit amet. Ut viverra, urna vitae 
                        volutpat rhoncus, lectus sem tincidunt mauris, eu pretium neque urna nec lorem. Mauris cursus rhoncus 
                        feugiat. Proin quis nisl augue. Nulla eleifend velit neque, id cursus erat interdum sit amet.
                    </p>
                </li>
                <li><p class="terms-info-text">Pellentesque consequat ligula dui, in aliquam libero pellentesque sit amet. Ut viverra, urna vitae 
                        volutpat rhoncus, lectus sem tincidunt mauris, eu pretium neque urna nec lorem. Mauris cursus rhoncus 
                        feugiat. Proin quis nisl augue. Nulla eleifend velit neque, id cursus erat interdum sit amet.
                    </p>
                </li>
            </ol>
        </div>
        <div class="terms-info-grid">
            <h3>5. Vivamus pharetra ante convallis</h3>
            <p>Pellentesque consequat ligula dui, in aliquam libero pellentesque sit amet. Ut viverra, urna vitae 
                volutpat rhoncus, lectus sem tincidunt mauris, eu pretium neque urna nec lorem. Mauris cursus rhoncus 
                feugiat. Proin quis nisl augue. Nulla eleifend velit neque, Vivamus pharetra, ante convallis aliquam sodales, 
                arcu dolor consectetur eros, a consequat nisl risus sit amet nuncVivamus pharetra, ante convallis aliquam sodales, 
                arcu dolor consectetur eros, a consequat nisl risus sit amet nuncVivamus pharetra, ante convallis aliquam sodales, 
                arcu dolor consectetur eros, a consequat nisl risus sit amet nuncid cursus erat interdum sit amet.
            </p>
        </div>
        <div class="terms-info-grid">
            <h3>6. Security</h3>
            <ol>
                <li><p class="terms-info-text">Pellentesque consequat ligula dui, in aliquam libero pellentesque sit amet. Ut viverra, urna vitae 
                        volutpat rhoncus, lectus sem tincidunt mauris, eu pretium neque urna nec lorem. Mauris cursus rhoncus 
                        feugiat. Proin quis nisl augue. Nulla eleifend velit neque, id cursus erat interdum sit amet.
                    </p>
                </li>
                <li><p class="terms-info-text">Pellentesque consequat ligula dui, in aliquam libero pellentesque sit amet. Ut viverra, urna vitae 
                        volutpat rhoncus, lectus sem tincidunt mauris, eu pretium neque urna nec lorem. Mauris cursus rhoncus 
                        feugiat. Proin quis nisl augue. Nulla eleifend velit neque, id cursus erat interdum sit amet.
                    </p>
                </li>
                <li><p class="terms-info-text">Pellentesque consequat ligula dui, in aliquam libero pellentesque sit amet. Ut viverra, urna vitae 
                        volutpat rhoncus, lectus sem tincidunt mauris, eu pretium neque urna nec lorem. Mauris cursus rhoncus 
                        feugiat. Proin quis nisl augue. Nulla eleifend velit neque, id cursus erat interdum sit amet.
                    </p>
                </li>
            </ol>
        </div>
        <div class="terms-info-grid">
            <h3>7. Access and alteration</h3>
            <p>Pellentesque consequat ligula dui, in aliquam libero pellentesque sit amet. Ut viverra, urna vitae 
                volutpat rhoncus, lectus sem tincidunt mauris, eu pretium neque urna nec lorem. Mauris cursus rhoncus 
                feugiat. Proin quis nisl augue. Vivamus pharetra, ante convallis aliquam sodales, arcu dolor consectetur 
                eros, a consequat nisl risus sit amet nuncNulla eleifend velit neque, id cursus erat interdum sit amet.
            </p>
        </div>
    </div>
</div>
@endsection