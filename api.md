# 微产品api文档(尚不完善,待完成)
---
## 登录部分
1. 登录
/admin/login

post:username:  (账户名)
     password:     （密码）
     //checkcode:   （验证码）
返回值：
```json
{
  "err":"0|其他",                          //0表示登录成功
  "msg":"success"|"fail"|"others"...,    //err的描述信息
  "token":1|2|3...,                      //用户登录凭证，通过它获取用户的进一步信息
  "info":"/admin/user",                //获取详细用户信息的接口
  "logout":"/admin/logout"            //登出的接口
}
```

2. 权限获取(尚未完成)
/admin/user
返回值
``` json
{
  "err": 0 | 其他 ,                   //0表示请求成功
  "msg": "success" | "fail" ...,     //err描述信息
  "username":"string",                //用户名
  "privilege":{                     //用户所有权限
    ...
  },
  "operation":{
    "operationName":'url',
    ...
  }
}
```

3. 登出
/admin/logout
返回值
```json
{
    "err":0,
    "msg":""
}
```

## 分类管理
1. 添加分类
/admin/cate/add
post：catename
      description
      catelogo
return
``` json
{
  "err":0                    //你懂的
  "msg"：""
  "cateid":1                //分类id
}
```
2.删除分类
/admin/cate/delete/[id]
```json
{
  "err":0,
  "msg":"",
  "cateid":1          //分类id
}
```
3. 更改分类
/admin/cate/modify/[id]
post：catename
      description
      catelogo
```json
{
    "err":0,
    "msg":""
}
```
4. 分类信息的查询
- 通过cateid查询
/admin/cate/info/[id]
return
```json
{
  "err":0,
  "msg":"",
  "data":{},
  "delete":"/admin/cate/delete/1",
  "modify":"/admin/cate/modify/1"
}
```
- 查询到所有的分类
/common/allCateInfo
```json
{
  "err":0,
  "msg":"",
  "data":[
  {
    "cateid":1,
    "catename":"",
    "description":"",
    "catelogo":""
  },
  {},
  {}
  ]
}
```
## 工作室
1. 通过id查询工作室
/admin/studio/info/[id]
return
```json
{
    "err": 0,
    "msg": "",
    "data":{
            "id":1,
            "studio_name" : 'sss',
            "logo" : '',
            "description" :'',     //简单描述
            "info_page" : '' ,      //详情的链接
            "create_at" : '',
            "update_at" : ''      
        }
    "modify":'...'       //修改产品的接口
    "delete":'...'       //删除产品的接口
    "next":"/admin/getStudioById/4"
}
```
2. 通过offset,num查询工作室
/admin/studio/all/[offset]/[num]
return 
```` json
{
    err:0
    msg:''
    data:[
        {
            data:{
                id:1,
                studio_name : 'sss',
                logo : '',
                description :'',     //简单描述
                info_page : '' ,      //详情的链接
                created_at : '',
                update_at : ''      
            }
            modify:'...'       //修改产品的接口
            delete:'...'       //删除产品的接口
        },
        {},
        {}
    ]
    next:'...'        //获取下一组数据的接口
}
````

2. 修改工作室
/admin/studio/modify/[id]
post: studio_name
      department
      logo
      description
      info_page
return 
```json
{
    "err":0,
    "msg":""
}
```

3. 添加工作室
/admin/studio/add
post:studio_name
      department
      logo
      description
      info_page
return 
```json
{
    "err":0,
    "msg":""
}
```

4. 删除工作室
/admin/studio/delete/[id]
return 
```json
{
    "err":0,
    "msg":""
}
```
## 微产品
1. 通过id查询
/common/product/info/[id]
```json```
{
    err: 0,
    msg: '',
    data:{
        ...
    },
    modify:
    delete:
    next:'...'
}
```json```
2. 通过cate, offset, num查询
/common/product/all/[cate]/[offset]/[num]
```json```
{
    err:0,
    msg:''
    data:[
    {},
    {}
    ]
    next:'...'
}
//3. 通过offset, num查询
///admin/product/getAll/[offset]/[num]
//return
//```json```
//{
//    err:0,
//    msg:''
//    data:[
//    {},
//    {}
//    ]
//    next:'...'
//}
//```json```

4. 添加产品
/admin//product/add
post数据：
    pname   产品名
    cate    分类id
    studio  工作室id
    img     图片链接
    description 产品描述
    info_page  详情介绍页链接
return
```json
    {
      err : 0 ,
      msg : '成功'
    }
```
5. 通过id更改产品
/admin//product/mmodify/[id]
post数据：
    pname   产品名
    cate    分类id
    studio  工作室id
    img     图片链接
    description 产品描述
    info_page  详情介绍页链接
return
```json
    {
      err : 0 ,
      msg : '成功'
    }
```


## 资源管理
1. 上传图片
/admin/upload/2
post:name           //图片名称
     imageFile      //图片文件
     description    //图片描述
return 
```json
{
    "err": 0,
    "msg": "成功",
    "link": "/static/uploads/20180317/3f1c53c32b1e5154f47921914d04af2f.jpeg"
}
```
2. 上传视频
/admin/upload/1
post:name       //视频名称
     videoFile  //视频文件
     description   //视频描述

4. 其他
/admin/upload/3
post:name       
     File 
     description  
```json
{
    "err":0,
    "msg":"",
    "link": ""
}
```

5.查询资源
/admin/resource/get/:offset/:num
```json
{
    "err": 0,
    "msg": "成功",
    "data": [
        {
            "id": 11,
            "rname": "bb",
            "image_link": null,
            "media_link": "/static/uploads/20180317/c4dc23c9f877985eb34d356864227d7b.jpeg",
            "description": "a bb",
            "type": "image",
            "create_at": "2018-03-17 12:47:38",
            "update_at": "2018-03-17 12:47:38"
        },
        {
            "id": 10,
            "rname": "a ",
            "image_link": null,
            "media_link": "/static/uploads/20180317/f96072370954e867f2afb8788b4f1e48.png",
            "description": "a ",
            "type": "image",
            "create_at": "2018-03-17 12:47:04",
            "update_at": "2018-03-17 12:47:04"
        },
        {
            "id": 9,
            "rname": "测试文件",
            "image_link": null,
            "media_link": "/static/uploads/20180317/4be2ac9a6513ddce0975a5b748060611.png",
            "description": "this is a test image file",
            "type": "image",
            "create_at": "2018-03-17 12:34:02",
            "update_at": "2018-03-17 12:34:02"
        },
        {
            "id": 8,
            "rname": "测试文件",
            "image_link": null,
            "media_link": "/static/uploads/20180317/ba7c22b11005d9aff47d0b75a24b8100.png",
            "description": "this is a test image file",
            "type": "image",
            "create_at": "2018-03-17 12:19:35",
            "update_at": "2018-03-17 12:19:35"
        }
    ]
}
```

6.资源的删除
/admin/resource/delete/:id
返回
```json
{
  "err" : 0,
  "msg" : "成功"
}
```
## 页面管理
1. 添加页面表单
/admin/formParam/Page
```json
{
    "err":0,
    "msg":"",
    "data":[
        {
            "formLabel":"工作室名",
            "formName" :"studio_name",
            "formType" :"'input'|'text'|'hidden'|'file'",
            "require" : "true|false",
            "value" : "默认值"
        },
        {},
        {}
    ],
    "submit" :"...",     //提交页面
    "preview":"..."     //预览页面
}
```
2. 添加页面
/admin/page/add
post: 
    必须：name   页面名
        template 页面模板
    可选：任意个键值对，用于上传模板参数
    
```json
{
    "err": 0,
    "msg": "成功",
    "link": "/pages/3/4"
}
```

3. 预览页面
/common/page/preview/:id
```json
{
    "err":0,
    "msg":""
}
```
4. 获取页面信息
/admin/page/get/:offset/:num
```json
{
    "err":0,
    "msg":""
}
```
5. 更新页面
/admin/page/update/:id
post:
    必须：name   页面名
        template 页面模板
    可选：任意个键值对，用于上传模板参数
```json
{
    "err":0,
    "msg":""
}
```
6. 删除页面
/admin/page/delete/:id
```json
{
    "err":0,
    "msg":""
}
```

## 横幅管理

1. 获取所有横幅
get /common/headbar/getall

2. 通过id获取横幅
get /common/headbar/get/:id

3. 添加横幅
post /admin/headbar/add

barname 横幅名
link 横幅的资源链接
privilege 优先级 显示顺序应按优先级排序 取值为0-10,不可重复


4. 更改横幅
post /admin/headbar/update/:id

参数同上

5. 删除横幅

get /admin/headbar/delete/:id
