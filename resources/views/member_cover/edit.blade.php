@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            

            <div class="panel panel-default">
                <div class="panel-heading">Edit member cover</div>



                <div class="panel-body">


                    <script src='//cdn.tinymce.com/4/tinymce.min.js'></script> <!-- Yes, this is JS right in the middle of the view. Move it to a partial if you like.  -->
                    <script>

                        tinymce.init({
                          selector: "#tinyMCE",
                          height: 400,
                          plugins: [
                            "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                            "searchreplace wordcount visualblocks visualchars code fullscreen media nonbreaking",
                            "table contextmenu emoticons template textcolor paste textcolor colorpicker textpattern"
                          ],

                          toolbar1: "undo redo | preview code | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | formatselect | fontselect | fontsizeselect ",
                          toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | link unlink anchor image media ",
                          toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen  | spellchecker | visualchars visualblocks nonbreaking pagebreak | forecolor backcolor",

                          menubar: false,
                          toolbar_items_size: 'medium',

                          content_css: [
                            'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'
                            // '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
                            // '//www.tinymce.com/css/codepen.min.css'
                          ]
                        });

                    </script>
                    <script>

                        tinymce.init({
                          selector: "#tinyMCE2",
                          height: 400,
                          plugins: [
                            "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                            "searchreplace wordcount visualblocks visualchars code fullscreen media nonbreaking",
                            "table contextmenu emoticons template textcolor paste textcolor colorpicker textpattern"
                          ],

                          toolbar1: "undo redo | preview code | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | formatselect | fontselect | fontsizeselect ",
                          toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | link unlink anchor image media ",
                          toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen  | spellchecker | visualchars visualblocks nonbreaking pagebreak | forecolor backcolor",

                          menubar: false,
                          toolbar_items_size: 'medium',

                          content_css: [
                            'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'
                            // '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
                            // '//www.tinymce.com/css/codepen.min.css'
                          ]
                        });

                    </script>

                    <script>

                        tinymce.init({
                          selector: "#tinyMCE3",
                          height: 400,
                          plugins: [
                            "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                            "searchreplace wordcount visualblocks visualchars code fullscreen media nonbreaking",
                            "table contextmenu emoticons template textcolor paste textcolor colorpicker textpattern"
                          ],

                          toolbar1: "undo redo | preview code | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | formatselect | fontselect | fontsizeselect ",
                          toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | link unlink anchor image media ",
                          toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen  | spellchecker | visualchars visualblocks nonbreaking pagebreak | forecolor backcolor",

                          menubar: false,
                          toolbar_items_size: 'medium',

                          content_css: [
                            'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'
                            // '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
                            // '//www.tinymce.com/css/codepen.min.css'
                          ]
                        });

                    </script>

                    <script>

                        tinymce.init({
                          selector: "#tinyMCE4",
                          height: 400,
                          plugins: [
                            "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                            "searchreplace wordcount visualblocks visualchars code fullscreen media nonbreaking",
                            "table contextmenu emoticons template textcolor paste textcolor colorpicker textpattern"
                          ],

                          toolbar1: "undo redo | preview code | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | formatselect | fontselect | fontsizeselect ",
                          toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | link unlink anchor image media ",
                          toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen  | spellchecker | visualchars visualblocks nonbreaking pagebreak | forecolor backcolor",

                          menubar: false,
                          toolbar_items_size: 'medium',

                          content_css: [
                            'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'
                            // '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
                            // '//www.tinymce.com/css/codepen.min.css'
                          ]
                        });

                    </script>

                    <script>

                        tinymce.init({
                          selector: "#tinyMCE5",
                          height: 400,
                          plugins: [
                            "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                            "searchreplace wordcount visualblocks visualchars code fullscreen media nonbreaking",
                            "table contextmenu emoticons template textcolor paste textcolor colorpicker textpattern"
                          ],

                          toolbar1: "undo redo | preview code | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | formatselect | fontselect | fontsizeselect ",
                          toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | link unlink anchor image media ",
                          toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen  | spellchecker | visualchars visualblocks nonbreaking pagebreak | forecolor backcolor",

                          menubar: false,
                          toolbar_items_size: 'medium',

                          content_css: [
                            'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'
                            // '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
                            // '//www.tinymce.com/css/codepen.min.css'
                          ]
                        });

                    </script>


                    <h2>This area could be improved by allowing users to save/crop images as well as retain previous versions of their member cover.</h2>

                    {{ Form::open(array('url' => '/member_cover')) }}
                        <h2>News</h2>
                        <textarea name="news" id="tinyMCE">{{ $data->news }}</textarea><br>
    
                        <h2>Promotions</h2>
                        <textarea name="promotions" id="tinyMCE2">{{ $data->promotions }}</textarea><br>

                        <h2>Webinars</h2>
                        <textarea name="webinars" id="tinyMCE3">{{ $data->webinars }}</textarea><br>

                        <h2>Financial</h2>
                        <textarea name="financial" id="tinyMCE4">{{ $data->financial }}</textarea><br>

                        <h2>Social media links</h2>
                        <textarea name="social_media_links" id="tinyMCE5">{{ $data->social_media_links }}</textarea><br>
    
                        <div class="form-group">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-check-circle"></i>Update
                                </button>
                            </div>
                        </div>
                    {{ Form::close() }}

                </div>
            </div>



                   
        </div>
    </div>
</div>
@endsection

