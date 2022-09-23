<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage() ?>">
    <head>
        <?php
        View::element('header_required', [
            'pageTitle' => isset($pageTitle) ? $pageTitle : '',
            'pageDescription' => isset($pageDescription) ? $pageDescription : '',
            'pageMetaKeywords' => isset($pageMetaKeywords) ? $pageMetaKeywords : ''
        ]);
        ?>
    </head>
    <body>

        <div class="<?php echo $c->getPageWrapperClass()?>">
            <div class="container">
                <header class="site-header">
                    <nav class="navbar navbar-default top-nav">

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="limit">
                            <div class="collapse navbar-collapse">
                                <div class="row">
                                    <div class="col-sm-9 top-nav-left">
                                        <?php 
                                        $a = new GlobalArea('Top Nav Left');
                                        $a->display($c);
                                        ?>
                                    </div>
                                    <div class="col-sm-3 top-nav-right">
                                        <?php 
                                        $a = new GlobalArea('Top Nav Right');
                                        $a->display($c);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>

                    <div class="limit">
                        <div class="site-banner">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="site-name">

                                        <?php 
                                        $a = new GlobalArea('Site Name');
                                        if (($a->getTotalBlocksInArea($c) > 0) || ($c->isEditMode())) {
                                            $a->display($c);
                                        } else { ?>
                                            <h1 class="site-title text-uppercase"><a href="<?php   echo DIR_REL?>/"><?php   echo h(Config::get('concrete.site')); ?></a></h1>
                                        <?php  }
                                        ?>
                                    </div><!-- /.site-name -->
                                </div><!-- /.col-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.limit -->
                    </div><!-- /.site-banner -->
                </header>

                <div class="limit">
                    <div id="content" class="site-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-header-container">
                                    <?php  
                                    $a = new Area('Page Header');
                                    $a->setAreaGridMaximumColumns(12);
                                    $a->display($c);
                                    ?>
                                </div>
                            </div>    
                        </div>

                        <div class="row">
