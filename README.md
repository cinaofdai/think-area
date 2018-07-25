# think-area
The ThinkPHP5 area
地区接口 composer模块
## 安装

### 一、执行命令安装
```
composer require dh2y/think-area
```

或者

### 二、require安装
```
"require": {
        "dh2y/think-area":"*"
},
```

或者
###  三、autoload psr-4标准安装
```
   a) 进入vendor/dh2y目录 (没有dh2y目录 mkdir dh2y)
   b) git clone 
   c) 修改 git clone下来的项目名称为think-area
   d) 添加下面配置
   "autoload": {
        "psr-4": {
            "dh2y\\sms\\": "vendor/dh2y/think-area/src"
        }
    },
    e) php composer.phar update
```


## 使用
    1、将src目录下面的area.sql数据导出到数据库中

## 请求方式
    post、get 

    2、获取省份    http://www.demo.me/area
    
    2、获取市    http://www.demo.me/area?pid=省份id
    
    3、获取区域    http://www.demo.me/area?pid=区域id