$(function(){
    tishi = $('#tishi');
    $('#loginBtn').on('click',function () {
        if(!$('#email').val() || !$('#email').val()){
            tishi.text(" 输入的帐号或密码不能为空！");
            return;
        }
        username = $('#email').val();
        password = $('#pwd').val();
        $.ajax({
            url : 'http://123.207.108.16/admin/login',
            async : true,
            cache : true,
            type : 'POST',
            data : {
                username : username ,
                password : password ,

            },
            success:function (result) {
                console.log(result);
            }
        })
    })

})