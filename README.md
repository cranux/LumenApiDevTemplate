<h2 align="center">LumenApiDevTemplate<h5>

<p align="center">
    <b>lumen8.x + JwtAuth + repository 快速开发API项目</b>
</p>

## 环境要求

1. PHP >= 7.3
2. **[Composer](https://getcomposer.org/)**
3. PHP openssl 扩展
4. PHP fileinfo 扩展
5. PDO PHP 拓展
6. Mbstring PHP 拓展
7. reids PHP 拓展

## 介绍

lumen Api 快速开发,采用JWTAUTH根据不同的guard隔离前后端用户表token;

同时使用repository仓库模式，更好的解耦，代码更易维护

项目使用默认phpredis效率更高 可以配置缓存和队列使用（必须安装php 的 redis扩展）

## 安装

1.**执行命令**

```bash
composer install 
```

2.**复制 `.env`**

```bash
cp .env.example .env
```

3.**编辑 `.env`,配置数据库等信息**

4.**生成数据库和填充数据**

```bash
php artisan migrate && php artisan db:seed
```

5.**配置jwt-auth**

```bash
php artisan jwt:secret
```

## 其他

1.**jwt-auth使用相关说明**

文档地址  [tymon/jwt-auth](https://jwt-auth.readthedocs.io/en/develop/lumen-installation/)

2.**repository使用相关说明**

文档地址  [prettus/l5-repository](https://packagist.org/packages/prettus/l5-repository?)


#### 感谢项目中使用到的包
