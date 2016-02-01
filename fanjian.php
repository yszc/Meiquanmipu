<?php
$configFile = './config/t2s.json';
exec('find epub_source/OEBPS/Text',$files);
foreach($files as $file){
    $cmd = sprintf('opencc -i %s -o %s -c %s',$file, $file,$configFile);
    echo $cmd."\n";
    shell_exec($cmd);
}

$replaceList=array(
    '︻'=>'【',
    '︼'=>'】',
    '︵'=>'（',
    '︶'=>'）',
    '︽'=>'《',
    '︾'=>'》',
    '﹁ '=>'“',
    '﹂'=>'”',
);
foreach($replaceList as $s1=>$s2){
    $cmd = sprintf("find epub_source/OEBPS/Text | xargs perl -pi -e 's/%s/%s/g'",$s1,$s2);
    shell_exec($cmd);
}
