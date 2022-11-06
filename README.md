# 工作原理
工作原理和`MiraiEz`一样，同样是基于`mirai-api-http`的`webhook`，并且对POST的数据进行处理。
# 为什么开发
如果真要问为什么的话，我只能说，不会用`miraiez`)，我原本刚开始打算使用mirai-api-http中的一个SDK进行开发，然后一看有`PHP`的SDK就扑上去了，然而，之后我发现，完全不会用啊)，localhost都搭完了，http的port没写错，然后还是处理对了，但就是无法发消息)，所以只能叹息。之后便自己动手，丰衣足食了。  
毕竟PHP是脚本语言，还是比C#之类要简单的。然后就不知道怎么，心中豪情万丈)，就开始写框架了。  
所以总体而言，MiraiPR的诞生就和孙悟空在石头缝里蹦出来一样离谱)
# 支持
- http
- webhook
- curl
- string
- config(.yml&.json)
## 关于config(.yml&.json)
这个支持的灵感是我看到Mirai有config，即配置文件才想做的，毕竟看起来很酷有没有(×)，并且json格式的我还打算给MiraiPR加json解析，这样就可以看地非常舒服了(不是)
# 完成情况
综上所述，MiraiPR其实还只是一个饼，MiraiPR虽然目前可以勉强运行，但这是不完整的，各种函数都没有。  
其实在我的想法中，等MiraiPR写完了，我的PHP也学完了，反正我只求入门(×)，而MiraiPR是我学的PHP的体现。

