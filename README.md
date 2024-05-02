**2023-05-2更新版本日志：**

1. 增加了模型选择功能，支持gpt-3.5-turbo模型和gpt-4-1106-preview

2.首页加密
// 设置密码 
require_once('MkEncrypt.php');
MkEncrypt('your code');     //page visit code

------

核心代码只有几个文件，没有用任何框架，修改调试很方便，只需要修改stream.php中的API_KEY和index.php里的访问密码(改成你自己的)即可使用。

部署好了可以放在公司内网，让同事们一起体验chatGPT的强大功能。也可以发到朋友圈分享，互联网技术大牛的形象直接拉满。
