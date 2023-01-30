<script>

<?php
if(session()->get('lang_code')=='en'){
    $lang = 'us';
    $lang_moment = 'en';
} elseif(session()->get('lang_code')=='ru'){
    $lang = 'ru';
    $lang_moment = 'ru';
} elseif(session()->get('lang_code')=='uk'){
    $lang = 'ua';
    $lang_moment = 'uk';
} elseif(session()->get('lang_code')=='pl'){
    $lang = 'pl';
    $lang_moment = 'pl';
}else{
    $lang = ''.$data["lang_code"].'';
}

?>

moment.locale('{{$lang_moment}}');

    $('.dropdown-toggle .flag-icon').removeClass('flag-icon-us');
    $('.dropdown-toggle .flag-icon').removeClass('flag-icon-ru');
    $('.dropdown-toggle .flag-icon').removeClass('flag-icon-ua');
    $('.dropdown-toggle .flag-icon').removeClass('flag-icon-pl');
    $('.dropdown-toggle .flag-icon').addClass('flag-icon-{{ $lang }}');


    function changeLanguage(lang){
        window.location='{{url("change-language")}}/'+lang;
    }

</script>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
            language: '{{$lang_moment}}'
        };


</script>


<!-- END PAGE LEVEL SCRIPTS -->








