<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIG-Not found</title>
    <link rel="stylesheet" href="{{asset('/vendor/bootstrap/css/bootstrap.css')}}">
</head>
<body>
    <!DOCTYPE html>
    <!-- Created By CodingNepal -->
    <html lang="en" dir="ltr">
       <head>
          <meta charset="utf-8">
          <title>404 Error Page | CodingNepal</title>
          <link rel="stylesheet" href="style.css">
       </head>
       <body>
          <div id="error-page">
             <div class="content">
                <h2 class="header" data-text="404">
                   404
                </h2>
                <h4 data-text="Opps! Page not found">
                  OOPs!!, Página não encontrada
                </h4>
                <p>
                   Desculpe, alguns módulos ainda se encontram em manutenção
                </p>
                <div class="btns">
                   <a href="/">SIG</a>
                   
                </div>
             </div>
          </div>
       </body>
    </html>
</body>
<style>
   @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  height: 100vh;
  background: #a42d0e;
  background-size: 400%;
}
#error-page{
  position: absolute;
  top: 10%;
  left: 15%;
  right: 15%;
  bottom: 10%;
  display: flex;
  align-items: center;
  justify-content: center;
 
}
#error-page .content{
  max-width: 600px;
  text-align: center;
}
.content h2.header{
  font-size: 18vw;
  line-height: 1em;
  position: relative;
}

@keyframes animate {
  0%{
    background-position: 0 0;
  }
  25%{
    background-position: 100% 0;
  }
  50%{
    background-position: 100% 100%;
  }
  75%{
    background-position: 0% 100%;
  }
  100%{
    background-position: 0% 0%;
  }
}
.content h4{
  font-size: 1.5em;
  margin-bottom: 20px;
  text-transform: uppercase;
  color: #000;
  font-size: 2em;
  max-width: 600px;
  position: relative;
}
h2{
    color:#fff
}

.content p{
  font-size: 1.2em;
  color: #0d0d0d;
}
.content .btns{
  margin: 25px 0;
  display: inline-flex;
}
.content .btns a{
  display: inline-block;
  margin: 0 10px;
  text-decoration: none;
  border: 2px solid #ffffff;
  color: #fff;
  font-weight: 500;
  padding: 10px 25px;
  border-radius: 25px;
  text-transform: uppercase;
  transition: all 0.3s ease;
}
