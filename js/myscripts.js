$(document).ready(function(){

    $(".register").validate({
        
       rules:{ 
           namefirst:{
               required: true,
           },
            email:{
                email: true,
				required: true,
            },
            telefon:{
                required: true,
                maxlength: 10,
            },
            password:{
                required: true,
                minlength: 6,
                maxlength: 16,
            },
       },
       messages:{
            namefirst:{
                required: "Это поле обязательно для заполнения",
            },
            email:{
				email: "не коректний email",
                required: "Это поле обязательно для заполнения",
            },
            telefon:{
                required: "Это поле обязательно для заполнения",
                maxlength: "Телефоний номер не повинен бути більше 8 символів",
            },
            password:{
                required: "Это поле обязательно для заполнения",
                minlength: "Пароль должен быть минимум 6 символа",
                maxlength: 16,
            },
       }  
    });
}); //end of ready