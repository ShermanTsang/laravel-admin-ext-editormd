# EditorMD扩展（laravel-admin）。

这是一个 "laravel-admin "扩展，它将[EditorMD](http://pandao.github.io/editor.md/)集成到 "laravel-admin "表单中。
为了适应laravel-admin，我在editorormd aseets中做了一些微小的改动。
如果您在使用这个扩展时遇到任何困难，请随时联系我。

## 截图

![截图](https://user-images.githubusercontent.com/4065724/52049451-d02e8380-2588-11e9-96b8-1cf66b18f934.jpg)

## ＃＃安装

```bash
composer require sharemant/laravel-admin-ext-editormd
php artisan vendor:publish --tag=laravel-admin-ext-editormd
```

## 配置

在 "config/admin.php "文件的 "extensions "部分，添加一些属于这个扩展的配置。

### 示例

```php
<?php

// 文件。{Your_project}/config/admin.php

return [

        'extensions' => [

            'editormd' => [
        
                // 如果你想禁用这个扩展，请设置为false。
                'enable' => true,
        
                // 如果你想利用editormd实例的屏幕长度，则设置为true。
                'widthMode' => false,
        
                // 当实例包含在larave-admin标签组件中时，设置为true。
                'dynamicMode' => false,
        
                //编辑器配置写入PHP数组语法
                'config'=> [
                    'path' => '/vendor/laravel-admin-ext/editormd/editormd-1.5.0/lib/',
                    'width' => '100%',
                    'height'=> 600,
                ],
        
                // 编辑配置用Javascript对象语法写
                'configJS' => '{onload: function() { alert("Hello!");}}',
            ]

    ]

];
```

###注意

`config`(PHP数组语法)和`configJS`(Javascript对象语法)选项将被合并到一个新的JavaScript对象中。

你可以用你喜欢的语法来设置配置。

如果你写的配置项对应的是一个静态值，最好的做法是使用PHP数组语法。

相反，当涉及到Editor的监听功能时，你只能选择使用JS的对象语法。


###默认配置列表

如果你想启用EditorMd的更多功能，你可以在配置中添加以下配置。

编辑器的配置可以在[EditorMD文档](http://pandao.github.io/editor.md/)中找到。

## 使用方法

在表格中使用。
```php
$form->editormd('content');
```

## 变更日志
2020-07-18(东八区时间)

fix：修复模型的关联属性不可用的BUG。

feat：支持JS配置编辑器模式。(支持编辑器事件监控)

feat: 重新设计组件的UI，使之与Laravel-admin保持一致。

docs: 改进基本文档

docs: 增加中文readme文档。

## 许可证
Licensed under [The MIT License (MIT)](LICENSE).
