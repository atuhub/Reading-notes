<?php
error_reporting(0);
$images = array(
"https://ws3.sinaimg.cn/large/e8f236c4jw1f7xvqupm45j21kw0pgtj5.jpg",
"https://ws2.sinaimg.cn/large/e8f236c4jw1f7xuvqnk6ej21kw0n17jd.jpg",
"https://ws2.sinaimg.cn/large/e8f236c4jw1f7xvql85w9j21kw0s14cb.jpg",
"https://ws2.sinaimg.cn/large/e8f236c4jw1f7xvqpszt6j21kw0pedyp.jpg",
"https://ws1.sinaimg.cn/large/e8f236c4jw1f7xvqyn1j6j21kw0u87o3.jpg",
"https://ws2.sinaimg.cn/large/e8f236c4jw1f7xvqq7mifj21kw0s015v.jpg",
"https://ws1.sinaimg.cn/large/e8f236c4jw1f7xvqwm68qj21kw0ohaic.jpg",
"https://ws2.sinaimg.cn/large/e8f236c4jw1f7xvqjh61ej21kw0q0n5b.jpg",
"https://ws2.sinaimg.cn/large/e8f236c4jw1f7xvqwbgxhj21kw0obtjx.jpg",
"https://ws3.sinaimg.cn/large/e8f236c4jw1f7xvjiq2z7j21kw1227cp.jpg"
);
header("location:".$images[mt_rand(0,count($images)-1)]);
exit();
?>