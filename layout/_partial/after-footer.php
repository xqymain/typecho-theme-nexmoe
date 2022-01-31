<script src="<?php echo $this->options->jquery_js ?>"></script>
<script src="<?php echo $this->options->mdui_js ?>"></script>
<?php if (!empty($this->options->function) && in_array('SmoothScroll', $this->options->function)): ?>
<script src="<?php echo $this->options->SmoothScroll_js ?>"></script>
<?php endif; ?>
<script src="<?php $this->options->themeUrl('source/js/app.js'); ?>"></script>
<script src="<?php echo $this->options->lazysizes_js ?>"></script>
<script>
    var str = document.getElementsByTagName("article")[0];  //������ݲ�ͬ�������
        var isKaTex = str.innerHTML.indexOf('$');  //���Ƿ���� ��$�����ж�LaTeX��ʽ���������������
    if(isKaTex) {
        LoadJS("https://cdn.jsdelivr.net/npm/katex/dist/contrib/auto-render.js");
        LoadJS("https://cdn.jsdelivr.net/npm/katex/dist/katex.min.js");
    }
    //�ȴ�DOM������ɺ���Ⱦ������Ӱ��ҳ�����ʱ��
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
