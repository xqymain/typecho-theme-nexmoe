<div class="nexmoe-drawer mdui-drawer" id="drawer">
    <div class="nexmoe-avatar mdui-ripple">
        <a href="<?php $this->options->siteUrl(); ?>">
            <img src="<?php $this->options->logoUrl();?>">
        </a>
    </div>
    <div class="nexmoe-count">
        <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
        <div><span>文章</span><?php $stat->publishedPostsNum() ?></div>
        <div><span>标签</span><?php echo tagsNum() ?></div>
        <div><span>分类</span><?php $stat->categoriesNum() ?></div>
    </div>
    <ul class="nexmoe-list mdui-list" mdui-collapse="{accordion: true}">
        <a class="<?php if($this->is('index')): ?>active <?php endif; ?>nexmoe-list-item mdui-list-item mdui-ripple" href="<?php $this->options->siteUrl(); ?>" title="回到首页">
            <i class="mdui-list-item-icon nexmoefont icon-home"></i>
            <div class="mdui-list-item-content">回到首页</div>
        </a>
        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
        <?php while($pages->next()): ?>
            <a class="<?php if($this->is('page', $pages->slug)): ?>active <?php endif; ?>nexmoe-list-item mdui-list-item mdui-ripple" href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>">
                <i class="mdui-list-item-icon nexmoefont icon-unorderedlist"></i>
                <div class="mdui-list-item-content"><?php $pages->title(); ?></div>
            </a>
        <?php endwhile; ?>
        <?php if($this->user->hasLogin()):?>
        <a class="nexmoe-list-item mdui-list-item mdui-ripple" href="<?php $this->options->siteUrl(); ?>admin" title="后台管理">
            <i class="mdui-list-item-icon nexmoefont icon-unorderedlist"></i>
            <div class="mdui-list-item-content">后台管理</div>
        </a>
        <?php endif;?>
    </ul>
    <?php $this->need('layout/_partial/sidebar.php'); ?>
    <div class="nexmoe-copyright">© <?php echo date("Y") ?> <?php $this->options->title(); ?> Powered by YxomNPO<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script><script src="https://srv.pub/assets/autoload.js"></script>
<br/><a href="http://www.beian.miit.gov.cn/" target="_blank" rel="external nofollow noopener noreferrer">鲁ICP备20032197-2</a>
<br/><a href="https://github.com/nexmoe/typecho-theme-nexmoe" target="_blank" rel="external nofollow noopener noreferrer">Nexmoe</a>&amp;<a href="https://typecho.org" target="_blank" rel="external nofollow noopener noreferrer">Typecho</a>
<br/><a href="https://www.upyun.com/?utm_source=lianmeng&utm_medium=referral" target="_blank" rel="external nofollow noopener noreferrer"><img src="/usr/themes/Nexmoe/source/img/upyun.png" alt="UPYun_Logo" width="90" height="45"></a>
</div>
</div><!-- .nexmoe-drawer -->
