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
  {},
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
3. 添加工作室的表单信息(尚未完成)
/admin/formParam/addStudio
```json```
{
    err:0
    msg: '',
    data:[
        {
            formLabel:'工作室名',
            formName :'studio_name',
            formType :'input'|'text'|'hidden'|'file',
            require : true|false
            value : "默认值"
        },+++++++++++++++
        {},
        {}
    ],
    submit:'admin/addStudio'        //数据提交的地址
}
```json```
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











#尚未完成的接口

## 资源管理
1. 上传图片
/admin/upload/2
post:name           //图片名称
     imageFile      //图片文件
     description    //图片描述
return 
```json
{
    "err":0,
    "msg":""
}
```
2. 上传视频
/admin/upload/1
post:name       //视频名称
     videoFile  //视频文件
     description   //视频描述
3. 添加文章
post：title
     author
     from
     content
```json
{
    "err":0,
    "msg":""
}
```
4. 其他
/admin/upload/3
post:name       
     File 
     description  
```json
{
    "err":0,
    "msg":""
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
/admin/addPage
post:data:json数据
```json
{
    "err":0,
    "msg":""
}
```

3.预览页面
/admin/pagePreview
post:data:json数据
```json
{
    "err":0,
    "msg":""
}
```