{include file='/src/BackOffice/View/SubMenu.tpl'}
<div class="line_statut">
    <form name="f3" method="post">
        <table>
            <tr>
                <td>{gettext word='Name'}:</td>
                <td><input name="name" class="form-control" type="text" placeholder="{gettext word='EnterTheName'}" required{if $oPage} value="{$oPage->get_name()}"{/if} maxlength="30"></td>
            </tr>
            <tr>
                <td>{gettext word='Parent'}:</td>
                <td>
                    <select name='id_parent' class="form-control">
                        <option value="">-- {gettext word='NoParent'} --</option>
                        {foreach from=$aPages item=$oParent}
                            <option value='{$oParent->get_id()}'{if isset($app.post.id_parent) && $oParent->get_id() == $app.post.id_parent} selected="selected"{elseif $app.get.parent_id == $oParent->get_id()} selected="selected"{/if}>{$oParent->get_name()}</option>
                        {/foreach}
                    </select>
                </td>
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
                <td>{gettext word='Url'}:</td>
                <td><input name="url" class="form-control" type="text" placeholder="{gettext word='EnterTheUrl'}" required{if $oPage} value="{$oPage->get_url()}"{/if} maxlength="200"></td>
            </tr>
            <tr>
                <td>{gettext word='Title'}:</td>
                <td><input name="title" class="form-control" type="text" placeholder="{gettext word='EnterTheTitle'}" required{if $oPage} value="{$oPage->get_title()}"{/if} maxlength="50"></td>
            </tr>
            <tr>
                <td>{gettext word='Description'}:</td>
                <td><input name="description" class="form-control" type="text" placeholder="{gettext word='EnterTheDescription'}" required{if $oPage} value="{$oPage->get_description()}"{/if} maxlength="250"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="form-control" value="{gettext word='Validate'}"></td>
            </tr>
        </table>
    </form>
</div>