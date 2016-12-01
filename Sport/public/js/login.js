/**
 * Created by yuminchen on 16/11/1.
 */
$(document).ready(function(){
    $("#submitButton").click(function(){
        var username=$("#name").val();
        var password=$("#password").val();
        if(username==""){//TODO
            $("#message").html("<div class=\"alert alert-danger alert-dismissable\"></button>用户名不能为空</div>");
            return;
        }else if(password==""){
            $("#message").html("<div class=\"alert alert-danger alert-dismissable\"></button>密码不能为空</div>");
            return;
        }
        $.ajax({
            type:"POST",
            url:"../controller/checklogin.php",
            data:{'myusername':username,'mypassword':password},
            success:function(result){
                //alert(result);
                if(result=='NotExist'){
                    $("#message").html("<div class=\"alert alert-danger alert-dismissable\"></button>用户不存在</div>");
                }else if(result=='passWrong'){
                    $("#message").html("<div class=\"alert alert-danger alert-dismissable\"></button>密码错误</div>");
                }else if(result=='ERROR'){
                    $("#message").html("<div class=\"alert alert-danger alert-dismissable\"></button>连接出错</div>");
                }else{
                    //alert(result)
                    window.location="../view/"+result+".php";
                }
            }
        });
    });
});
