# Fend Core核心
![](https://echo.100tal.com/api/badge/php/fend-core?branch=master&type=RELIABILITY_RATING) 

Fend框架所有组件需要依赖的类，都会放在这里 
功能列表：
 * 常见调用函数：http、array、checkdata、string、timer
 * 链路跟踪类、统一日志落地管理-EagleEye、LogAgent
 * Swoole服务所需进程名称等管理函数-CliFunc
 * 统一配置管理封装类-Config
 * 统一Debug信息收集展示管理-Debug
 * 简单的依赖注入-Di
 * 老版本DI封装-Fend
 * 分级日志Log（老版）及Logger（新版）
 * 统一输入输出隔离类Request、Response
 * 系统统一异常：FendException（基础异常）、SystemException（系统异常，链接异常，数据库账号异常）、BizException（业务异常）、ExitException（中断后面代码执行，传递返回结果参数）
 
 ## html过滤
 需要引入组件 Purifier html 
 ```bash
 composer require ezyang/htmlpurifier 4.12
```

## 贡献指南

+ 咨询相关老师开通项目权限
+ Clone本项目到本地
+ 新建分支
    + 添加功能 feature/功能名称
    + 修复BUG bugfix/BUG名称
+ Coding
+ 将刚才编码的分支Push到远程仓库
+ 发起Merge Request
+ 等待合并Merge Request