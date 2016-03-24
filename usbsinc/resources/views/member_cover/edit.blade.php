@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            

            <div class="panel panel-default">
                <div class="panel-heading">Edit member cover</div>



                <div class="panel-body">


                    <script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
                    <script>
                        

  
  

                        tinymce.init({
                          selector: "textarea",
                          height: 400,
                          plugins: [
                            "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                            "table contextmenu directionality emoticons template textcolor paste textcolor colorpicker textpattern"
                          ],

                          toolbar1: "bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
                          toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | insertdatetime preview | forecolor backcolor",
                          toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",

                          menubar: false,
                          toolbar_items_size: 'small',

                          style_formats: [{
                            title: 'Bold text',
                            inline: 'b'
                          }, {
                            title: 'Red text',
                            inline: 'span',
                            styles: {
                              color: '#ff0000'
                            }
                          }, {
                            title: 'Red header',
                            block: 'h1',
                            styles: {
                              color: '#ff0000'
                            }
                          }, {
                            title: 'Example 1',
                            inline: 'span',
                            classes: 'example1'
                          }, {
                            title: 'Example 2',
                            inline: 'span',
                            classes: 'example2'
                          }, {
                            title: 'Table styles'
                          }, {
                            title: 'Table row 1',
                            selector: 'tr',
                            classes: 'tablerow1'
                          }],

                          templates: [{
                            title: 'Test template 1',
                            content: 'Test 1'
                          }, {
                            title: 'Test template 2',
                            content: 'Test 2'
                          }],
                          content_css: [
                            '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
                            '//www.tinymce.com/css/codepen.min.css'
                          ]
                        });


                    </script>


                    <h2>News</h2>
                    {{ Form::open(array('url' => '/member_cover')) }}
                        <!-- {{ Form::textarea('tinyMCE', null, array('id' => 'tinyMCE')) }} -->
                        <textarea name="tinyMCE" id="tinyMCE"> howdy again</textarea><br>
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



                        <h1 style="text-align: center;">News/specials</h1>
                        <h1 style="text-align: center;">Promotions</h1>
                        <h1 style="text-align: center;">Webinars</h1>
                        <h1 style="text-align: center;">Financial</h1>
                        <h1 style="text-align: center;">Social media links</h1>
                   
        </div>
    </div>
</div>
@endsection

