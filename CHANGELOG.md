## 1.2.63
 * 修复错误的url去参数规则 -长龙

## 1.2.62
 * level log 递增rpcid、方便做树形分析 -长龙、刘俊海

## 1.2.61
 * trace日志网址不记录参数，方便异常监控 -长龙、尚佳

## 1.2.60
 * 修复 httprequest没有设置url问题 -张皓旻

## 1.2.59
 * 单独使用fend-core时减少日志访问默认配置问题 -郭绍民

## 1.2.58
 * 收到灰度header时，请求别的服务透传灰度标志 -长龙

## 1.2.57
 * cli eagleeye requeststart报错-长龙

## 1.2.56
 * 分级日志增加 服务器名称，方便啸天犬监控 -王坤

## 1.2.55
 * 灰度检测问题修复 -王坤

## 1.2.54
 * 灰度检测增加除traceid为pts开头外、特殊header检测 Xes-Request-Type performance-testing -王坤、长龙

## 1.2.53 
 * EagleEye::getGrayStatus 获取灰度标志 -长龙、刘俊海
 * getUrl getHttp add option -长龙、化雨、超群、志刚、邓磊

## 1.2.52
 * Debug模式下增加redis操作展示 -长龙、黄海林

## 1.2.51
 * 删除Fend::\_\_get返回为引用问题 -长龙、邵王镇

## 1.2.50
 * 日志路径中出现两个/问题修复  -姚超峰
 * Request-\>get\post 如指定filter时 100.00被过滤成100问题 -姚超峰

## 1.2.49
 * $Request-\>request default value to null -绍民、长龙
 * FendHttp::httpRequest|getUrl|getHttp 记录trace增加curl\_info -王坤、长龙

## 1.2.48
 * FendHttp::httpRequest 增加retry -王坤 长龙
 * FendHttp::httpRequest 增加connect\_timeout extra选项 自定义connect时间 -李长林 长龙
 * wxdebug 模式 json decode 设置为中文不编码模式，附带原文 -杨坤

## 1.2.47
 * 修复Funcs\FendHttp::getMulti post必须设置证书限制 -郭恩玮
 
## 1.2.46
 * response-\>csvHead csvAppendWrite 用于csv输出 -姚超峰,长龙

## 1.2.45
 * response-\>status设置后没有改变trace日志记录 -欧阳源
 * debug 界面显示 instance name -长龙

## 1.2.44
 * 修复：中间件依赖DI的对象被动注入功能，1.2版本没有提供，此次将此特性更新到1.2版本内 -赵禹、丹阳、长龙

## 1.2.43
 * 修复: debug 在接口没有返回时不输出console问题 -长龙

## 1.2.42
 * 修复：debug getTraceString 个别情况下没有class会显示warning -李宗源 丹阳 
 * 新功能：Request 增加getMethod 用于获取当前请求是POST、GET -李宗源 长龙
 * 优化：Debug explain 对SQL 解释失败warning问题 -长龙
 
## 1.2.39
 * 新特性：Request对象增加setController、getController用于在Controller Init触发时获取调用controller信息 -姚超峰 长龙

## 1.2.38
 * 改进：getIp时如果在命令行下不报错 -王坤 长龙
 * 改进：Request::Get Post Request 默认值设置为空字符串而非null -李宗源 长龙
 * 修复：Request::getParam default非默认值时get无法获取问题 -李宗源 长龙

## 1.2.37
 * Debug 界面postman下无法工作，去掉JS使用 -郭海龙，长龙

## 1.2.36
 * Request 设置post数据时，被转大写修正 -王坤，长龙

## 1.2.35
 * tal\_trace\_id及tal\_rpc\_id统一更换成traceid及rpcid header，与网关联通 -王坤、长龙、张报

## 1.2.34
 * Request对象：get post request cookie file 增加key大小写不敏感获取参数 -韩冬辉，长龙

## 1.2.33
 * 修复 Exception Handle Exception参数改为Throwable -王坤、长龙

## 1.2.32
 * 增加Exception Handle Interface 及异常处理可配置替换机制 -周聪 长龙

## 1.2.29
 * FendHttp HttpRequest 证书变量错误修复  -长龙

## 1.2.28
 * Config::get时支持传递默认参数，如果配置文件或对应选项不存在返回默认值 -长龙
 * FendHttp增加httpRequset方法，get请求会自动将data拼到网址，请求错误会抛异常，header支持kv及string[]方式传递，data支持字符串或kv数组，支持自定义curlopt，支持获取返回header及getinfo -张云飞 李宗源 长龙
 * FendHttp getUrl及getHttp函数优化data支持kv及string参数,header支持kv数组及string[]数组 -张云飞 长龙
 * Logger Log类对于输入数据key检测弱类型检测修复 -长龙

## 1.2.27
 * 修复swoole协程模式下swoole request返回post为null导致$Request\-\>request()返回null问题 -韩冬辉 长龙

## 1.2.26
 * 修复getIP函数准确性 -王坤、长龙、张报

## 1.2.24
 * fend日志经过与基础架构组日志中心协商，统一了日志清理及收集存储标准，请用户注意app\Config\Fend.php内logPrefix设置内容及结尾不要加\_ -王坤、长龙、王东、吕昌龙、韩文杰
 
## 1.2.23
 * Request 增加ios、android、微信内浏览器、微信小程序调用检测 - 夏磊
 * trace 长度未设置报错问题修复 -杜超群

## 1.2.22
 * 修复gethttp返回结果不记录问题 -长龙
 * trace增加选项，增加 返回结果超过过长会截断、不记录、一直记录选项 -王坤、郭绍民

## 1.2.21 
 * 修复funcs 内fendArray 冗余代码 - 韩冬辉
 * Request 增加isAjax检测 -长龙
 * Log记录日志路径只有框架目录开始的相对路径 -王坤

## 1.2.20
 * 修复错误引用 -长龙

## 1.2.19
 * request 增加参数过滤功能 -杜超群

## 1.2.18
 * request\-\>request 没有获取到提示warning修复 -秘静雅

## 1.2.17
 * swoole模式下小概率日志写错问题 -长龙

## 1.2.16
 * 日志落地增加文件名前缀，用于区分不同项目日志  -王坤

## 1.2.15
 * 补充Request $\_REQUEST 方法 -张云飞

## 1.2.14
 * Config 增加点分支持，现在可以通过类似`Redis.default.host`的格式去获取配置中的子项
 * 补全了Config的单元测试

## 1.2.13
 * 网址内参数加wxdebug=1可以查看debug模式，本地性能分析支持：
    * 0：关闭
    * 1：开启wxdebug模式 html界面
    * 2：开启wxdebug模式 var\_dump输出所有信息
    * 3：不开启debug界面 记录xhprof Profile
 
## 1.2.12
 * 遵循运维对日志的规范，Fend落日志不再使用子文件夹进行区分，统一放到一个目录进行管理 -孙海晓 韩文杰

## 1.2.11
 * FendHttp获取参数时，value为0时被过滤成null问题 -韩孝
 
## 1.2.8
 * Log输出日志文件名规则、日志格式可配置\App\Config\Fend.php -木荣、秘静雅、周聪，张云飞，超群\徐长龙
 * Trace 日志耗时字段过长问题修复 -黄凯文

