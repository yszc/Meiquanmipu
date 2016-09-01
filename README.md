#梅拳秘谱电子书

##简介
梅拳秘谱电子书，为了方便阅读和编辑

##版本
* 繁体竖排版：master分支
* 简体横排版：zhcn分支

##文件说明
* epub_source是epub的源文件，可打包生成epub电子书，工具参考后面
* config是opencc配置文件，用来转换繁简中文

##推荐工具
* [epub打包-mac]https://code.google.com/archive/p/epub-applescripts/downloads
* [epub打包-win]http://sourceforge.net/projects/epubpack/
* [繁简转换]https://github.com/BYVoid/OpenCC

##繁简转换命令
```
opencc -i ./epub_source/OEBPS/Text/contents.xhtml -o ./epub_source/OEBPS/Text/contents.xhtml -c ./t2s.json
```
