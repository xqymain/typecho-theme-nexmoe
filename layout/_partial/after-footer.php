<script src="<?php echo $this->options->jquery_js ?>"></script>
<script src="<?php echo $this->options->mdui_js ?>"></script>
<?php if (!empty($this->options->function) && in_array('SmoothScroll', $this->options->function)): ?>
<script src="<?php echo $this->options->SmoothScroll_js ?>"></script>
<?php endif; ?>
<script src="<?php $this->options->themeUrl('source/js/app.js'); ?>"></script>
<script src="<?php echo $this->options->lazysizes_js ?>"></script>
<script>
    var str = document.getElementsByTagName("article")[0];  //这里根据不同主题调整
        var isKaTex = str.innerHTML.indexOf('$');  //以是否存在 “$”来判断LaTeX公式，可能有误判情况
    if(isKaTex) {
        LoadJS("https://cdn.jsdelivr.net/npm/katex/dist/contrib/auto-render.js");
        LoadJS("https://cdn.jsdelivr.net/npm/katex/dist/katex.min.js");
    }
    //等待DOM加载完成后渲染，避免影响页面加载时间
    window.onload = function() {
        if(isKaTex != -1) renderMathInElement(str,
                        {
                            delimiters: [
                                {left: "$$", right: "$$", display: true},
                                {left: "\\[", right: "\\]", display: true},
                                {left: "$", right: "$", display: false},
                                {left: "\\(", right: "\\)", display: false}
                            ]
                        }
                    );
    }
</script>
<?php $this -> footer(); ?>
