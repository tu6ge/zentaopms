<?php
/**
 * The structure view file of extension module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Yangyang Shi <shiyangyang@cnezsoft.com>
 * @package     extension
 * @version     $Id$
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.lite.html.php';?>
<div id='mainContent' class='main-content'>
  <div class='center-block'>
    <div class='main-header'>
      <h2>
        <span class='prefix' title='EXTENSION'><?php echo html::icon($lang->icons['extension']);?></span>
        <strong><?php echo $extension->name . '[' . $extension->code . '] ' .$lang->extension->structure . ':';?></strong>
      </h2>
    </div>
    <div class='with-padding'>
      <pre><?php
      $appRoot = $this->app->getAppRoot();
      $files   = json_decode($extension->files);
      foreach($files as $file => $md5) echo $appRoot . $file . "\n";
      ?></pre>  
    </div>
  </div>
</div>
<?php include '../../common/view/footer.lite.html.php';?>
