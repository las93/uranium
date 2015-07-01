{include file='/src/BackOffice/View/SubMenu.tpl'}
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    theme: "modern",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    image_advtab: true,
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ]
});
</script>
<div class="line_statut">
    <form name="f3" method="post">
        <table>
            <tr>
                <td>{gettext word='Type'}:</td>
                <td>
                    <div class="form-group"> 
                        <input type="radio" name="type" value="template" class="minimal" {if $oPluginFreeHtml && $oPluginFreeHtml->get_type() == 'template'}checked{/if} onkeyup="if ($('input[name=type]:checked').val() == 'template') { $('textarea[name=content]').attr('class', ''); }"/> {gettext word='Template'} - 
                        <input type="radio" name="type" value="free" class="minimal" {if $oPluginFreeHtml && $oPluginFreeHtml->get_type() == 'free'}checked{/if} onkeyup="if ($('input[name=type]:checked').val() == 'free') { $('textarea[name=content]').attr('class', 'contentFreeHtml'); }"/> {gettext word='Free'}
                    </div>
                </td>
            </tr>
            <tr>
                <td>{gettext word='Content'}:</td>
                <td><textarea name="content" placeholder="{gettext word='EnterTheContent'}" style="width:1000px;height:500px;" novalidate {if $oPluginFreeHtml && $oPluginFreeHtml->get_type() == 'free'}class="contentFreeHtml"{/if}>{if $oPluginFreeHtml}{$oPluginFreeHtml->get_content()}{/if}</textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="form-control" value="{gettext word='Validate'}"></td>
            </tr>
        </table>
    </form>
</div>