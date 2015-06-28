{include file='/src/BackOffice/View/SubMenu.tpl'}
                 <!-- Main content -->
                <section class="content">
                    <!-- START ALERTS AND CALLOUTS -->
                    <div class="row">
                        {if $app.get.id}&nbsp;&nbsp;&nbsp;&nbsp;<a href="{url alias='page'}?id={$oParentPage->get_id_parent()}">&lt;&lt;&nbsp;Return</a>{/if}<br/><br/>
                    </div>
                    <div class="row">
                        {if $app.get.msg}
                            <div class="alert alert-success alert-dismissable">
                                <i class="fa fa-check"></i>
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <b>{$app.get.msg}!</b>
                            </div>
                        {/if}
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">{gettext word='AllPages'} <a href="{url alias='page_add'}{if $app.get.id}?parent_id={$oParentPage->get_id()}{/if}"><i class="fa fa-plus"></i></a></h3>
                                    <div class="box-tools">
                                        <div class="input-group">
                                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="{gettext word='Search'}"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>{gettext word='Id'}</th>
                                            <th>{gettext word='Name'}</th>
                                            <th>{gettext word='Type'}</th>
                                            <th>{gettext word='Options'}</th>
                                            <th>{gettext word='Children'}</th>
                                        </tr>
                                        {foreach from=$aPages key=$iKey item=$oPage}
                                        <tr>
                                            <td>{$oPage->get_id()}</td>
                                            <td><a href="{url alias="plugin_update" id=$oPage->get_id()}">{$oPage->get_name()}</a></td>
                                            <td>{$oPage->get_plugin()->get_name()}</td>
                                            <td>
                                                <a href="{url alias='page_update' id=$oPage->get_id()}{if $app.get.id}?parent_id={$oParentPage->get_id()}{/if}"><i class="fa fa-edit"></i></a>
                                                &nbsp;&nbsp;&nbsp;
                                                <a href="javascript:void(0);" onClick="if (confirm('{gettext word='WouldYouReallyDeleteIt'}')) { window.location.href='{url alias='page'}?delete={$oPage->get_id()}'; }"><i class="fa fa-ban"></i></a>
                                            </td>
                                            <td>{if count($oPage->get_page()) > 0}<a href="{url alias='page'}?id={$oPage->get_id()}"><i class="fa fa-eye"></i></a>{else}NO{/if}</td>
                                        </tr>
                                        {/foreach}
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                     
                    </div> <!-- /.row -->
               </section>