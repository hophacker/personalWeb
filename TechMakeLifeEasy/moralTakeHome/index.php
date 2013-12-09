<?php
require_once("../../include/style.php");
require_once("../../include/config.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>How to setup your vim latex workflow to smoothly finish your takehome exam </title>
    <style type="text/css">
        <?=style::format()?>
        body{
            width: 800px;
            margin: 0px auto;
        }
        .section {
            width: 800px;
            display: block;
            font-size: 18px;
        }
        #implementation ul{
            width : 800px;
            display: inline-block;
        }
        #implementation > ul>li{
            width: 800px;
            margin-bottom: 20px;
        }
        #title{
            padding: 20px 60px 0 0;
        }
        #requirements{
            width: 800px;
        }
        h4{
            width : 800px;
        }
    </style>
    <?=style::link("css/main.css")?>
    <script src="../../script/jquery-1.10.2.js"></script>
<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?autoload=true&amp;skin=desert&amp;lang=css" defer="defer"></script>
<style>.operative { font-weight: bold; border:1px solid yellow }</style>
</head>

<body>
<div id="title" class="headerText">
    How to setup your <b>vim-latex</b> workflow to smoothly finish your takehome exam - for beginners
</div>
<div id="requirements" class="section">
    <div class="sectionText">
        The requirements of this work is shown on the image below, basicly, it says:
    </div>
    <ul>
        <li>A file with double-spacing, one-inch margins and 12-point font should be handled.</li>
        <li>Your name and some other information should be put somewhere</li>
        <li>You must indicate the words of the file</li>
    </ul>
</div>
<p>A lot of students don't even know what is double-spacing and how to set one-inch margins in <b>MS Word</b>. I'm one of them. It is really painful to dig out
    all that shit. Even you have done, <b>MS Word</b> will caus other problems in your future work.
    <b>MS Word</b> is always the worst choice if you want to format the file and may change the structure later on.
</p>
<h3>To make your life easier, listen to me, use <b>Latex</b>, no matter hard it appears at first several tries.</h3>
<div id="implementation" class="section">
    <div class="sectionText">
        How to start it?
    </div>
    <ul>
        <li>First, you need to choose a platform to work on. I have tried  such as ctex, texwork in windows, which all have good graphic interface.
            But they really caused many many problems, for example, installing modules. Sometimes, they may crashed for no reason.
            Besides, it's slow, you'd need to click here and there to make it work.
            As a result, I dropped windows and chose <b>Ubuntu</b>. <br/>
            There'are so many reasons you need <b>to choose Ubuntu as a beginner</b>, but this is not our focu-point here.
        </li>
        <li>
            Then you need to install <b>Tex/Latex</b>.
            There is one line code of installing <b>Tex/Latex</b> on ubuntu which you can find on my <a href="https://github.com/jokerfeng2010/Jie/blob/master/install.sh">Github</a>
        </li>
        <li>
            This simple Latex template below explains how to accomplish all the requirements in a nutshel.
            You can see that latex is pretty simple and efficient. There's no need for you to understand what does double-spacing mean,
            just put "\usepackage{setspace} \doublespace" there and it will work.
        <pre id="latex" class="prettyprint lang-tex" style="border:4px solid #88c;font-size:14px">
        \documentclass[12pt]{article}  % set the font size here
        \usepackage[margin=1in]{geometry} % set the margin here
        \usepackage{setspace}
        \doublespace
        \usepackage{lipsum}
        \usepackage{fancyhdr}
        \pagestyle{fancy}
        \lhead{Jie Feng} % change your name here
        \rhead{Page \thepage}
        \cfoot{Moral and Legal Foundation of Privacy} %print the course name as footnote
        \renewcommand{\headrulewidth}{0.4pt}
        \renewcommand{\footrulewidth}{0.4pt}
        \begin{document}
        \paragraph{Question 1.} U.S. and EU Privacy comparison
        \end{document}
        </pre>
        </li>
        <li>
            Then you probably need this piece of vimscript to boost your productivity:
    <pre class="prettyprint lang-tex" id="quine" style="border:4px solid #88c;font-size:14px">
    augroup filetype_tex
        autocmd!
        "autocmd FileType tex set spell
        autocmd FileType tex set textwidth=80
        autocmd FileType tex nnoremap <F5> :!latex % <cr>
        autocmd FileType tex nnoremap <F6> :execute "!evince " . expand('%:r').".dvi" <cr>
        autocmd FileType tex nnoremap <F7> :execute "!latex % && evince " . expand('%:r') . ".dvi" <cr>
        autocmd FileType tex nnoremap <F8> g<c-g>
    augroup END
    </pre>
            <ul>
                <li>Press &lt;F5&gt; to compile your latex file</li>
                <li>Press &lt;F6&gt; to view your latex file</li>
                <li>Press &lt;F7&gt; to compile and run your latex file</li>
                <li>Press &lt;F8&gt; to count words(Since latex has structure, you can first count the beginning file, then get the word count by substracting it.)</li>
            </ul>
        </li>
        <li>
            A picture of all the requirements.
            <img src="requirements.jpg" alt="requirements" id="requirements">
        </li>
    </ul>
</div>

<h1>Do remember to use technology to make your life easier!</h1>
<script>//<![CDATA[
(function () {
  function html(s) {
    return s.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
  }
})();
//]]>
</script></body>
</html>
