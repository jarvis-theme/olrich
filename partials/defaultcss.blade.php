{{favicon()}}   
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600italic,600' rel='stylesheet' type='text/css'>

{{generate_theme_css('olrich/assets/css/flexslider.css')}}   
{{generate_theme_css('olrich/assets/css/animate.min.css')}}  
{{generate_theme_css('olrich/assets/css/bootstrap.min.css')}}    
@if($tema->isiCss=='')
{{generate_theme_css('olrich/assets/css/style.css')}}    
@else
{{generate_theme_css('olrich/assets/css/editstyle.css')}}    
@endif

<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">