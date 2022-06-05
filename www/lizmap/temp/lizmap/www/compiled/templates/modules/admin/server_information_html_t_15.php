<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&
filemtime('C:\webserver\www\lizmap\lizmap/modules/admin/templates/server_information.tpl') > 1648133822){ return false;
} else {
 require_once('C:\webserver\www\lizmap\lib\jelix/plugins/tpl/html/function.hook.php');
function template_meta_3eb77883587d6055bac439d262c682f5($t){

}
function template_3eb77883587d6055bac439d262c682f5($t){
?><?php  if(jAcl2::check('lizmap.admin.access')):?>
  <!--Services-->
  <div id="lizmap_server_information">
    <h2><?php echo jLocale::get('admin.menu.server.information.label'); ?></h2>

    <h3><?php echo jLocale::get('admin.server.information.lizmap.label'); ?></h3>
    <h4><?php echo jLocale::get('admin.server.information.lizmap.info'); ?></h4>
    <table class="table table-striped table-bordered table-server-info">
        <tr>
            <th><?php echo jLocale::get('admin.server.information.lizmap.info.version'); ?></th>
            <td><?php echo $t->_vars['data']['info']['version']; ?></td>
        </tr>
        <tr>
            <th><?php echo jLocale::get('admin.server.information.lizmap.info.date'); ?></th>
            <td><?php echo $t->_vars['data']['info']['date']; ?></td>
        </tr>
    </table>
    <?php jtpl_function_html_hook( $t,'LizmapServerVersion', $t->_vars['data']['info']);?>


    <h3><?php echo jLocale::get('admin.server.information.qgis.label'); ?></h3>

    <?php if(array_key_exists('qgis_server', $t->_vars['data']) && array_key_exists('test', $t->_vars['data']['qgis_server'])):?>

      <?php if($t->_vars['data']['qgis_server']['test'] == 'OK'):?>
          <p><?php echo jLocale::get('admin.server.information.qgis.test.ok'); ?></p>
      <?php else:?>

          <p><b><?php echo jLocale::get('admin.server.information.qgis.test.error'); ?></b></p>
      <?php endif;?>

    <?php endif;?>

<?php if(array_key_exists('error', $t->_vars['data']['qgis_server_info'])):?>

    <p>
        <b><?php echo jLocale::get('admin.server.information.qgis.error.fetching.information'); ?></b><br/>
        <?php if($t->_vars['data']['qgis_server_info']['error'] == 'NO_ACCESS'):?>

            <i><?php echo jLocale::get('admin.server.information.qgis.error.fetching.information.detail.NO_ACCESS'); ?></i><br>
        <?php else:?>

            <i><?php echo jLocale::get('admin.server.information.qgis.error.fetching.information.detail'); ?></i><br>
            <?php if($t->_vars['data']['qgis_server_info']['error_http_code'] == '200'):?>

                
                <?php $t->_vars['errorcode']='Unknown';?>
            <?php else:?>
                <?php $t->_vars['errorcode']=$t->_vars['data']['qgis_server_info']['error_http_code'];?>
            <?php endif;?>
            <i><?php echo jLocale::get('admin.server.information.qgis.error.fetching.information.detail.HTTP_ERROR'); ?> <?php echo $t->_vars['errorcode']; ?></i><br>
        <?php endif;?>

    </p>

<?php else:?>

    <h4><?php echo jLocale::get('admin.server.information.qgis.metadata'); ?></h4>
    <table class="table table-condensed table-striped table-bordered table-server-info">
        <tr>
            <th><?php echo jLocale::get('admin.server.information.qgis.version'); ?></th>
            <td><?php echo $t->_vars['data']['qgis_server_info']['metadata']['version']; ?></td>
        </tr>
        <tr>
            <th><?php echo jLocale::get('admin.server.information.qgis.name'); ?></th>
            <td><?php echo $t->_vars['data']['qgis_server_info']['metadata']['name']; ?></td>
        </tr>
        <?php if($t->_vars['data']['qgis_server_info']['metadata']['commit_id']):?>

        <tr>
            <th><?php echo jLocale::get('admin.server.information.qgis.commit_id'); ?></th>
            <td><a href="https://github.com/qgis/QGIS/commit/<?php echo $t->_vars['data']['qgis_server_info']['metadata']['commit_id']; ?>" target="_blank"><?php echo $t->_vars['data']['qgis_server_info']['metadata']['commit_id']; ?></a></td>
        </tr>
        <?php endif;?>

    </table>
    <?php jtpl_function_html_hook( $t,'QgisServerVersion', $t->_vars['data']['qgis_server_info']['metadata']);?>

    <h4><?php echo jLocale::get('admin.server.information.qgis.plugins'); ?></h4>
    <table class="table table-condensed table-striped table-bordered table-server-info">
        <?php foreach($t->_vars['data']['qgis_server_info']['plugins'] as $t->_vars['name']=>$t->_vars['version']):?>

        <tr>
            <th><?php echo $t->_vars['name']; ?></th>
            <td><?php echo $t->_vars['version']['version']; ?></td>
        </tr>
        <?php endforeach;?>

    </table>
    <?php jtpl_function_html_hook( $t,'QgisServerPlugins', $t->_vars['data']['qgis_server_info']['plugins']);?>

<?php endif;?>

  </div>
<?php  endif; ?>
<?php 
}
return true;}
