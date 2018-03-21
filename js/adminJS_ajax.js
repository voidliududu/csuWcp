$(function(){
    tishi = $('#tishi');
    email = $('#email');
    $('#loginBtn').on('click',function () {
        if(!email.val() || !email.val()){
            tishi.text(" 输入的帐号或密码不能为空！");
            return;
        }
        username = email.val();
        password = $('#pwd').val();
        $.ajax({
            url : 'http://123.207.108.16/admin/login',
            async : true,
            cache : true,
            type : 'POST',
            data : {
                username : username ,
                password : password

            },
            error:function(result){
                if(result.err == 2){
                    tishi.text(result.msg + "！");
                }
            },
            success:function (result) {
                if(result.err != 0){
                    tishi.text("帐号或密码错误！");
                }
                tishi.text("登陆中，请稍候。。。");
                window.location.href = 'superAdmin.html'
            }
        })
    })

})