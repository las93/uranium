{include file='/src/BackOffice/View/SubMenu.tpl'}
<div class="line_statut">
    <form name="f3" method="post">
        <table>
            <tr>
                <td>{gettext word='Name'}:</td>
                <td><input name="name" class="form-control" type="text" placeholder="{gettext word='EnterTheName'}" required{if $oPage} value="{$oPage->get_name()}"{/if}></td>
            </tr>
            <tr>
                <td>{gettext word='Type'}:</td>
                <td>
                    <select name='id_plugin' class="form-control">
                        {foreach from=$aPlugins item=$oPlugin}
                            <option value='{$oPlugin->get_id()}'{if isset($app.post.id_plugin) && $oPlugin->get_id() == $app.post.id_plugin} selected="selected"{/if}>{$oPlugin->get_name()}</option>
                        {/foreach}
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="form-control" value="{gettext word='Validate'}"></td>
            </tr>
        </table>
    </form>
</div>