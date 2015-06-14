{include file='/src/BackOffice/View/SubMenu.tpl'}
<div class="line_statut">
    <form name="f3" method="post">
        <table>
            <tr>
                <td>{gettext word='Content'}:</td>
                <td><textarea name="content" class="form-control" type="text" placeholder="{gettext word='EnterTheContent'}" required style="width:1000px;height:500px;">{if $oPluginFreeHtml}{$oPluginFreeHtml->get_content()}{/if}</textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="form-control" value="{gettext word='Validate'}"></td>
            </tr>
        </table>
    </form>
</div>