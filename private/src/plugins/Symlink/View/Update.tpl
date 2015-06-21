{include file='/src/BackOffice/View/SubMenu.tpl'}
<div class="line_statut">
    <form name="f3" method="post">
        <table>
            <tr>
                <td>{gettext word='Type'}:</td>
                <td>
                    <select name="type">
                        <option value="external"{if $oPluginSymlink && $oPluginSymlink->get_type() == 'external'} selected="selected"{/if}>{gettext word='External'}</option>
                        <option value="id_page"{if $oPluginSymlink && $oPluginSymlink->get_type() == 'id_page'} selected="selected"{/if}>Id_page</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>{gettext word='Symlink'}:</td>
                <td><input name="value" class="form-control" type="text" placeholder="{gettext word='EnterTheSymlink'}" required {if $oPluginSymlink}value="{$oPluginSymlink->get_value()}"{/if}/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="form-control" value="{gettext word='Validate'}"></td>
            </tr>
        </table>
    </form>
</div>