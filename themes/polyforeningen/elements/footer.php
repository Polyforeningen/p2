<?php
defined('C5_EXECUTE') or die("Access Denied.");
use Concrete\Core\Validation\CSRF\Token;
?>

                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-footer-container">
                                    <?php  
                                    $a = new Area('Page Footer');
                                    $a->setAreaGridMaximumColumns(12);
                                    $a->display($c);
                                    ?>
                                </div>
                            </div>    
                        </div>
                    </div><!-- /.site-content -->
                </div><!-- /.limit -->

                <footer role="contentinfo">
                    <div class="site-footer">
                        <div class="limit">
                            <div class="row">   
                                <div class="col-sm-3 footer-1">
                                    <?php          
                                    $a = new GlobalArea('Footer');
                                    $a->display();
                                    ?>
                                </div>
                                <div class="col-sm-3 footer-2">
                                    <?php          
                                    $a = new GlobalArea('Footer Two');
                                    $a->display();
                                    ?>
                                </div>
                                <div class="col-sm-3 footer-3">
                                    <?php          
                                    $a = new GlobalArea('Footer Three');
                                    $a->display();
                                    ?>
                                </div>
                                <div class="col-sm-3 footer-4">
                                    <?php          
                                    $a = new GlobalArea('Footer Four');
                                    $a->display();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="site-colophon">
                        <div class="limit">
                            <div class="row">   
                                <div class="col-sm-12">
                                    <span class="copyright">
                                        &copy;
                                        <?php
                                        echo date('Y') . ' ' . h(Config::get('concrete.site'));
                                        ?>
                                        &middot;
                                        Theme by RL
                                    </span>
                                    <span class="loginout">
                                        <?php  
                                        // login link or logout form
                                        if (!id(new User)->isLoggedIn()) {
                                        ?>
                                            <a href="<?php   echo URL::to('/login')?>"><?php   echo t('Log in') ?></a>
                                        <?php
                                        } else {
                                            $token = new Token();
                                        ?>
                                            <form class="logout" action="<?php   echo URL::to('/login', 'logout') ?>">
                                                <?php id(new Token())->output('logout'); ?>
                                                <a href="#" onclick="$(this).closest('form').submit();return false"><?php   echo t('Log out') ?></a>
                                            </form>
                                        <?php  
                                        }
                                        ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer><!--/footer-->
            </div><!-- /.container -->
        </div><!--end c5wrapper-->

        <?php View::element('footer_required'); ?>

    </body>
</html>
