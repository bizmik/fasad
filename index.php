<!doctype html><?php
function baseurl() {   return 'http://' . $_SERVER['HTTP_HOST']; }
function themeUrl() {   return baseurl() . '/templates/fasad-specbud'; }
$config = new JConfig();
$siteName = $config->sitename;
?>
<html>
  <head>
    <jdoc:include type="head" />
    <title></title>
    <link rel="stylesheet" href="<?php echo baseurl(); ?>/templates/system/css/system.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo baseurl(); ?>/templates/system/css/general.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo themeUrl(); ?>/css/template.css" type="text/css" />

    <script language="javascript" type="text/javascript" src="<?php echo themeUrl() ?>/js/jquery-1.7.2.min.js"></script>
  </head>
  <body>
<div id="base">
  <div class="wrapper">
    <?php if ($this->countModules('user1')): ?>
      <div id="user1">
        <jdoc:include type="modules" name="user1" />
      </div>
    <?php endif; ?>
  <div id="header">
    <a id="logo" href="/"><?php echo $siteName?></a>
    <?php if ($this->countModules('banner')): ?>
      <div id="banner">
        <jdoc:include type="modules" name="banner" />
      </div>
      <div class="clr"></div>
    <?php endif; ?>

    <?php if ($this->countModules('user2')): ?>
      <div id="user2">
        <jdoc:include type="modules" name="user2" />
      </div>
    <?php endif; ?>

    <?php if ($this->countModules('topmenu')): ?>
    <div id="topmenu">
      <jdoc:include type="modules" name="topmenu" />
    </div>
    <?php endif; ?>
  </div>

    <?php if ($this->countModules('user3')): ?>
      <div id="user3">
        <jdoc:include type="modules" name="user3" />
      </div>
    <?php endif; ?>

  <div id="main">
    <table width=100% border=0>
      <tr>
        <?php if ($this->countModules('left')): ?>
          <td id="left-sidebar">
            <div>
            <jdoc:include type="modules" name="left" style="rounded" />
            </div>
          </td>
        <?php endif; ?>

        <td id="content">
          <div>
            <div class="breadcrumbs">
              <jdoc:include type="modules" name="breadcrumbs" />
            </div>

            <?php if ($this->countModules('user4')): ?>
              <div id="user4">
                <jdoc:include type="modules" name="user4" />
              </div>
            <?php endif; ?>

            <jdoc:include type="message" />
            <jdoc:include type="component" />

            <?php if ($this->countModules('user5')): ?>
              <div id="user5">
                <jdoc:include type="modules" name="user5" />
              </div>
            <?php endif; ?>

          </div>

        </td>

        <?php if ($this->countModules('right')): ?>
        <td id="right-sidebar">
          <div>
            <jdoc:include type="modules" name="right" style="rounded" />
          </div>
        </td>
        <?php endif; ?>
      </tr>
    </table>

  </div>

    <?php if ($this->countModules('user6')): ?>
      <div id="user6">
        <jdoc:include type="modules" name="user6" />
      </div>
    <?php endif; ?>

  <div id="footer">
    <jdoc:include type="modules" name="footer" />
  </div>

    <?php if ($this->countModules('user7')): ?>
      <div id="user7">
        <jdoc:include type="modules" name="user7" />
      </div>
    <?php endif; ?>

</div></div>
	</body>
</html>